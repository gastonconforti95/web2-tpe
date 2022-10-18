<?php

require_once 'app/View/JugadoresView.php';
require_once 'app/Model/JugadoresModel.php';

class Controller{

    private $view;
    private $model;

    function __construct(){
        $this->view = new JugadoresView();
        $this->model = new JugadoresModel();
    }

    function Home(){
        $this->view->ShowHome();        
    }

    function Login(){
        $this->view->ShowLogin();        
    }

    function Jugadores(){
        $jugadores = $this->model->GetJugadores();
        $posiciones = $this->model->GetPosiciones();
        $this->view->ShowJugadores($jugadores,$posiciones);
    }

    function Jugador($params){
        $id = $params[':ID'];
        $jugador = $this->model->GetJugador($id);
        $this->view->ShowJugador($jugador);
    }

    function PosicionFiltro(){
        if (isset($_POST['filtrar'])) {
            $posicionFiltrada = $_POST['filtrar'];
            $jugadores = $this->model->getPosicionFiltrada($posicionFiltrada);
            $this->view->ShowPosicionFiltrada($jugadores);
        }
        else {
            header('Location: '.BASE_URL);
        }
    }
}
?>
