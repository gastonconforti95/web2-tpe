<?php

require_once "./libs/Smarty.class.php";

class JugadoresView{

    function __construct(){
    }

    function ShowHome(){
        $smarty = new Smarty();
        $smarty->display('templates/index.tpl');
    }

    function ShowLogin(){
        $smarty = new Smarty();
        $smarty->display('templates/login.tpl');
    }

    function ShowJugadores($jugadores,$posiciones){
        $smarty = new Smarty();
        $smarty->assign('jugadores',$jugadores);
        $smarty->assign('posiciones',$posiciones);
        $smarty->display('templates/jugadores.tpl');
    }

    function ShowPosicionFiltrada($jugadores){
        $smarty = new Smarty();
        $smarty->assign('jugadores',$jugadores);
        $smarty->display('templates/filtrado.tpl');
    }

    function ShowJugador($jugador){
        $smarty = new Smarty();
        $smarty->assign('jugador',$jugador);
        $smarty->display('templates/jugador.tpl');
    }

    function Header(){
        $smarty = new Smarty();
        $smarty->display('templates/header.tpl');
    }
}
?>
