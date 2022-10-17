<?php 

require_once('libs\smarty\libs\Smarty.class.php');

class vinilosView {

    function mostrar($vinilos) {
        
         $smarty = new Smarty;
         $smarty->assign('vinilos', $vinilos);
         $smarty->display('templates\table.tpl');
    }
    function showList($generos) {
        $smarty = new Smarty;
        $smarty->assign('generos', $generos);
        $smarty->display('templates\list.tpl');
    }
        function mostrarEdicion($vinilos){
            $smarty= new Smarty;
            $smarty->assign('vinilos', $vinilos);
            $smarty->display('templates\editar.tpl');
        }
        
    function mostrarEdicion2($generos){
        $smarty= new Smarty;
        $smarty->assign('generos', $generos);
        $smarty->display('templates\editarGenero.tpl');
    }
    function mostrareditargenero($generos){
        $smarty= new Smarty;
        $smarty->assign('generos', $generos);
        $smarty->display('templates\editar2.tpl');
    }
    function aniadir($generos){
        $smarty= new Smarty;
        $smarty->assign('generos', $generos);
        $smarty->display('templates\aniadir.tpl');
    }
}


