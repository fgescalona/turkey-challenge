# Turkey Challenge

This is a solution for the Turkey Challenge. It provides a simple, scalable database connection using PDO (PHP Data Objects) and follows the Singleton design pattern to manage a single instance of the database connection.

## Technologies Used

* Backend: PHP
* Frontend: HTML, CSS, Bootstrap, jQuery
* Database: MySQL

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Access to a MySQL server.

## Installation

Follow these steps to set up the project on your local machine:

### 1. Clone the Repository

```bash
git clone https://github.com/fgescalona/turkey-challenge
cd turkey-challenge
```

### 2. Create the database and the turkeys table
```bash
mysql -u root -p

CREATE DATABASE turkey_challenge;

USE DATABASE turkey_challenge;

CREATE TABLE turkeys (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    weight DECIMAL(5, 2),
    birthdate DATE,
    properties JSON
);
```


### 3. Setup the database parameters in config/database/database.php:

```sh
    private $host = "localhost";
    private $db_name = "turkey_challenge";
    private $username = "your_user";
    private $password = "your_password";

```

### 4. Start the server

```sh
php -S localhost:8000
```

### 5. Open the app in the browser

```sh
http://localhost:8000
```


