<?php
require_once __DIR__ . "/../Models/Turkey.php";

class TurkeyController
{
    private $turkeyModel;

    public function __construct()
    {
        $this->turkeyModel = new Turkey();
    }

    public function index()
    {
        $turkeys = $this->turkeyModel->getAll();
        include __DIR__ . "/../Views/index.php";
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $weight = $_POST['weight'];
            $birthdate = $_POST['birthdate'];
            $properties = json_decode($_POST['properties'], true);

            $this->turkeyModel->create($name, $weight, $birthdate, $properties);
            header('Location: /');
        }

        require_once __DIR__ . '/../Views/create.php';
    }

    public function edit($id)
    {
        $turkey = $this->turkeyModel->getById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->turkeyModel->update($id, $_POST['name'], $_POST['weight'], $_POST['birthdate'], json_decode($_POST['properties'], true));
            header("Location: /");
            exit();
        }

        include __DIR__ . "/../Views/edit.php";
    }

    public function delete($id)
    {
        $this->turkeyModel->delete($id);
        header('Location: /');
    }
}
