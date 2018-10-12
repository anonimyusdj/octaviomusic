<?php

class IndexController{
    
    public function index(){
        require_once "view/partes/header.php";
        require_once "view/home/menu.php";
        require_once "view/home/home.php";
        require_once "view/partes/footer.php";
    }
    public function musica(){
        require_once "view/partes/header.php";
        require_once "view/home/menu.php";
        require_once "view/home/reproductor.php";
        require_once "view/partes/footer.php";
    }
}