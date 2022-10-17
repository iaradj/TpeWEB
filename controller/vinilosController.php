<?php 
require_once "view/vinilosView.php";    
require_once "model/vinilosModel.php";
require_once "helpers\userHelper.php";

class vinilosController {
    private $model;
    private $view;
    private $helper;

function __construct() {
        $this->model = new vinilosModel();
        $this->view = new vinilosView();  
        $this->chequeo = new userHelper();
    }
    function home(){
            $this->chequeo->checkInicio();
        $vinilos = $this->model->getVinilos();
        $this->view->mostrar($vinilos);
        }
        function inicio(){
            $this->chequeo->checkInicio();
            $this->view->mostrar();
        }

        function showGeneros($generos){
            $vinilos = $this->model->getGenerobyId($generos);
            $this->view->mostrar($vinilos);
        }

        function showvinilosId($id) {
            $vinilos = $this->model->getVinilosbyId($id);
            $this->view->mostrar($vinilos);
        }

    // Todos los generos
    function genero() {
        $generos = $this->model->getGeneros();
        $this->view->showList($generos);
    }
    // añade el mostrar generos al agregar
    function aniadir() {
        $generos =  $this->model->getGeneros();
        $this->view->aniadir($generos);
    }
    function agregar(){
        $vinilo = $_POST['nombre_vinilo'];
        $artista = $_POST['artista'];
        $precio = $_POST['precio'];
        $lanzamiento = $_POST['lanzamiento'];
        $genero = $_POST['genero'];
       $id = $this->model->agregarVinilo($vinilo,$artista,$precio,$lanzamiento,$genero);
       header("Location: " . BASE_URL . "tienda" );

    }
    //borrar vinilo
    function eliminar($id){
        $this->chequeo->checkLoggedIn();
        $this->model->deleteVinilo($id);
        header("Location: " . BASE_URL . "tienda" );
    }
        // muestra el editar de los vinilos
        function showEdit($id) {
            $this->chequeo->checkLoggedIn();
            $vinilos = $this->model-> getVinilosbyId($id);
            $this->view->mostrarEdicion($vinilos);
        }
        // editar vinilo
        function editar($id){
            $vinilo = $_REQUEST['nombre_vinilo'];
            $artista = $_REQUEST['artista'];
            $lanzamiento = $_REQUEST['lanzamiento'];
            $precio = $_REQUEST['precio'];
            $genero = $_REQUEST['genero'];
            $this->model->modificartabla($vinilo,$artista,$lanzamiento,$precio,$genero,$id);
            header("Location: " . BASE_URL . "tienda" );
        }

        // muestra los generos en editar vinilo
        function showeditarG($id){ 
            $generos = $this->model->getGeneros($id);
            $this->view->mostrareditargenero($generos);
        }

                // EDIT CATEGORIA GENERO
            function editarGenero($id){
                $this->chequeo->checkLoggedIn();
                $generos = $_REQUEST['genero'];
                $this->model->modificarGenero($generos,$id);
                header("Location: " . BASE_URL . "tienda" );
            } 
            function showEditGenero($id) {
                $this->chequeo->checkLoggedIn();
                $generos = $this->model->getGeneroId($id);
                $this->view->mostrarEdicion2($generos);
            }

    function agregarGenero(){
        $generos = $_POST['nuevoGenero'];
        $id = $this->model->agregarGenero($generos);
        header("Location: " . BASE_URL . "tienda" );
} 
function eliminarGenero($id){

    $this->chequeo->checkLoggedIn();
    $this->model->deleteGenero($id);
    header("Location: " . BASE_URL . "tienda" );
}
}
