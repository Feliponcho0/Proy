<?php
    session_start();
    function require_login(){
        if(!isset($_SESSION['usuario'])){
            header('Location: index.php?error=2');
            exit;
        }
    }
    function require_rol($rol){
        require_login();
        if($_SESSION['rol'] !== $rol){
            header('Location: index.php?error=3');
            exit;
        }
    }
?>