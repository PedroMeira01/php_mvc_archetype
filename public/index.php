<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';

use Archetype\Users\Presentation\Controller\UserController;
use Archetype\StaticPages\Presentation\Controller\StaticPagesController;
use Archetype\Authentication\Presentation\Controller\AuthenticationController;

$routes = array(
    // Static Pages
    "/" => function () {
        $controller = new StaticPagesController();
        $controller->showHome();
    },

    "/login" => function () {
        $controller = new AuthenticationController();
        $controller->login();
    },

    // User 
    "/user/create" => function () {
        $controller = new UserController();
        $controller->create();
    },
    "/user/store" => function () {
        $controller = new UserController();
        $controller->store($_POST);
    },
    "/user/edit" => function () {
        $controller = new UserController();
        $controller->edit();
    },
    "/user/update" => function () {
        $controller = new UserController();
        $controller->update($_POST);
    },
    "/user/find" => function () {
        $controller = new UserController();
        $controller->find($_GET['id']);
    },
    "/user/findAll" => function () {
        $controller = new UserController();
        $controller->findAll();
    },
    "/user/delete" => function () {
        $controller = new UserController();
        $controller->delete($_POST['id']);
    },
);

$url = $_SERVER['REQUEST_URI'];

if (array_key_exists($url, $routes)) {
    $routes[$url]();
} else {
    echo '404 - Not Found';
}
