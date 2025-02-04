<?php
require_once __DIR__ . '/app/Controllers/TurkeyController.php';

$controller = new TurkeyController();

if ($_SERVER['REQUEST_URI'] === '/') {
    $controller->index();
} elseif ($_SERVER['REQUEST_URI'] === '/create') {
    $controller->create();
} elseif (strpos($_SERVER['REQUEST_URI'], '/edit') === 0) {
    $controller->edit($_GET['id']);
} elseif (strpos($_SERVER['REQUEST_URI'], '/delete') === 0) {
    $controller->delete($_GET['id']);
} else {
    echo "404 Not Found";
}
