<?php
require_once("../controller/AutenticacaoController.php");
require_once("links.html"); 

    error_reporting(E_ERROR | E_PARSE);
    date_default_timezone_set("America/Sao_Paulo");
    
    session_start();

    $auth = new AutenticacaoController();
    if($auth->obter_sessao()->get_nivel() != null){
        $nivel = $auth->obter_sessao()->get_nivel();

        if (isset($_POST['btn-logout'])) {
            $auth->ecerrar_sessao();
        }
    }else{
        $auth->nao_logado(0);
        $nivel = null;
    }

?>
<!--Cabeçalho-->
<nav name="menu cabeçalho principal" class="navbar navbar-expand-lg navbar-dark boder-bottom shadow-sm mb-4" style="background-color: #831D1C;">
    <div class="container">

        <!--Menu Lado Esquerdo-->
        <a href="../index.php" class="navbar-brand"><img src="../Images/Logo/LogoOFC.png" width="90px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarcollapseCMS"
            aria-controls="navbarcollapseCMS" aria-expanded="false" aria-label="Toggle navigation"> <span
                class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarcollapseCMS">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="../index.php" class="text-white nav-link">Produtos</a>
                </li>
                <li class="nav-item">
                    <a href="../view/videos.php" class="text-white nav-link">Vídeos</a>
                </li>
                <li class="nav-item">
                    <a href="../view/quemsomos.php" class="text-white nav-link">Quem Somos</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <?php 
                        if($nivel == null){
                            echo '<a href="../view/login.php" class="nav-link text-light"><img src="../images/Icons/user.png" width="25px">Login</a>';
                        }else{
                            echo '
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../images/Icons/user.png" width="25px">'.$auth->obter_sessao()->get_nome().'</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li>
                                            <a class="dropdown-item" href="#"><i class="fa-solid fa-user-gear"></i>&nbsp;Configurações da Conta</a>
                                        </li>';
                                        if($nivel >= 1){
                                            echo '                                        
                                            <li>
                                                <a class="dropdown-item" href="#"><i class="fa-solid fa-user-shield"></i>&nbsp;Administração</a>
                                            </li>';
                                        }
                                        echo ' <hr>
                                        <li>
                                            <form method="POST">
                                                <button class="btn dropdown-item text-danger col-12" name="btn-logout" id="btn-logout"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Sair</button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            ';
                        }
                    ?>
                </li>
                <li class="nav-item">
                    <a href="../view/pagamento.php" class="nav-link text-white"><img src="../images/Icons/churrasco.png" width="30"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>