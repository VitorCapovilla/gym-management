<?php
    require_once("../model/LoginDTO.php");
    require_once("../controller/AutenticacaoController.php");

    $auth = new AutenticacaoController(); 
    $auth->verificar_login();

    $error = false;
    $msg_error = "";

    if(isset($_GET["error"])) {
        $error = true;
        $msg_error = "Usuário ou senha inválida!";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
        <?php
            include ('../includes/links.html');
        ?>
        <link rel="stylesheet" type="text/css" href="../css/login.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body onload="removeQueryParams()">
        <div class="container-index-geral">
            <div class="container-index-lateral">
                <div class="index-lateral">
                    <p class="titulo-index-lateral">
                        Gym-Management
                    </p>

                    <p class="subtitulo-index-lateral">
                        Gestão de Saúde na Academia
                    </p>
                </div>

                <p class="login-copyright">
                    Powered by 
                    <a href="#" target="_blank">Vitor Capovilla</a>
                </p>
            </div>

            <div class="login-content">
                <div class="login-content-logo">
                    <picture>
                        <img alt="Logo - Vitor Capovilla" src="../img/logo-escrito-lado.png" class="login-content-logo-img">
                    </picture>
                </div>

                <p class="login-title">
                    Favor Autenticar-se
                </p>

                <form class="login-content-box" action="../controller/LoginController.php" method="POST">
                    <?php

                        if ($error){
                            echo '<div class="mb-3 alert-message alert-message-error">' . $msg_error . '</div>';
                        }

                    ?>
                    <!-- Usuario -->
                    <div class="input-group mb-3">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username ou E-mail" required="true" autofocus="true">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="material-icons">person</i>
                        </span>
                    </div>
                    </div>

                    <!-- Password -->
                    <div class="input-group mb-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Senha" required="true">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="material-icons green">lock</i>
                        </span>
                    </div>
                    </div>

                    <button type="submit" name="btn-login" id="btn-login" class="btn btn-primary espaco-top">ENTRAR</button>
                    
                </form>
            </div>
        </div>

        <script type="text/javascript" src="../js/utils.js"></script>

    </body>
</html>