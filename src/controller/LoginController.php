<?php
    require_once("../controller/AutenticacaoController.php");

    $user = $_POST["username"];
    $pwd = $_POST["password"];

    $login = new loginDTO();
    $login->set_username($user);
    $login->set_password($pwd);

    $controller = new AutenticacaoController();
    if($controller->autenticar($login)) {
    	header('location: ../view/index.php');
    } else {
    	header('location: ../view/login.php?error');
    }

?>