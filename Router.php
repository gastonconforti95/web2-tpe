<?php
    require_once 'app/Controller/Controller.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define('BASE_URL', 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("JUGADORES", BASE_URL . 'jugadores');    
    
    $r = new Router();

    $r->setDefaultRoute("Controller", "Home");
    $r->addRoute("home", "GET", "Controller", "Home");
   
    $r->addRoute("jugador/:ID", "GET", "Controller", "Jugador");
    $r->addRoute("jugadores", "GET", "Controller", "Jugadores");
    $r->addRoute("login", "GET", "Controller", "Login");

    $r->addRoute("filtrar", "POST", "Controller", "PosicionFiltro");

    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>