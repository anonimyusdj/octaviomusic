<?php
    class AdminController{

      public function login(){
          require_once "view/partes/header.php";
          require_once "view/home/menu.php";
          require_once "view/admin/login.php";
          require_once "view/partes/footer.php";
      }

    public function prueba(){
      require_once "view/partes/header.php";
      require_once "view/home/menu.php";
      require_once "view/admin/prueba.php";
      require_once "view/partes/footer.php";
    }

  }
?>
