<?php

require_once "controller/vinilosController.php";
require_once "controller\authController.php";



// define('BASE_URL', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]).'/');
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if (!empty($_GET['action'])) {
    $action = $_GET['action']; }
    else {
$action = 'home';
}

$partesURL = explode('/', $action);

$controller = new vinilosController();
$userController = new authController();

if($partesURL[0] ==='' || $partesURL[0] === 'home'){
    $userController->showFormLogin();}
elseif($partesURL[0] ==='validate'){
    $userController->validateUser(); }
elseif($partesURL[0] === 'tienda') {
    $controller->home();
    $controller->aniadir();
    $controller->genero();
    }
elseif($partesURL[0] === 'generos') {
    $controller->showGeneros($partesURL[1]);}
elseif($partesURL[0] === 'vinilo') {
    $controller->showvinilosId($partesURL[1]); }
elseif($partesURL[0] === 'agregar') {
        $controller->agregar();}
elseif($partesURL[0] === 'editar' ) {
    $controller->editar($partesURL[1]);
    $controller->editarG();
     }
elseif($partesURL[0] === 'logout') {
    $userController->logout(); }
elseif($partesURL[0] === 'eliminar') {
    $controller->eliminar($partesURL[1]);  }
elseif($partesURL[0] === 'showEdit') {
    $controller->showEdit($partesURL[1]);
    $controller->showeditarG($partesURL[1]);
}
elseif($partesURL[0] === 'eliminarGenero') {
    $controller->eliminarGenero($partesURL[1]);
}
elseif($partesURL[0] === 'editarGenero') {
    $controller->editarGenero($partesURL[1]);
}
elseif($partesURL[0] === 'showEditGenero') {
    $controller->showEditGenero($partesURL[1]);

}
elseif($partesURL[0] === 'agregarGenero') {
    $controller-> agregarGenero($partesURL[1]);
}


    


?>