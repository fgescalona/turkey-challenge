<?php

require_once __DIR__ . "/../../config/database.php";

class Turkey
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAll()
    {
        $stmt = $this->db->query("SELECT * FROM turkeys");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($name, $weight, $birthdate, $properties)
    {
        $sql = "INSERT INTO turkeys (name, weight, birthdate, properties) VALUES (:name, :weight, :birthdate, :properties)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':weight' => $weight,
            ':birthdate' => $birthdate,
            ':properties' => json_encode($properties)
        ]);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM turkeys WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $name, $weight, $birthdate, $properties)
    {
        $sql = "UPDATE turkeys SET name = :name, weight = :weight, birthdate = :birthdate, properties = :properties WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id,
            ':name' => $name,
            ':weight' => $weight,
            ':birthdate' => $birthdate,
            ':properties' => json_encode($properties)
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM turkeys WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
    }
}
