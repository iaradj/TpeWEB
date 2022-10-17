<?php
require_once 'view\authView.php';
require_once 'model\authModel.php';
require_once 'helpers\userHelper.php';

class authController {
    private $view;
    private $model;
    
    public function __construct() {
        $this->model = new authModel();
        $this->view = new authView();
    }

    public function showFormLogin() {
        $this->view->showFormLogin();
    }

    public function validateUser() {

        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $user = $this->model->getUserByEmail($email);

        if ($user && password_verify($password, $user->password)) {

            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL . "tienda" );

        } else {

           $this->view->showFormLogin("El usuario o la contraseña no existe.");
        } 
    }
    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}

