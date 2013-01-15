<?php require_once("src/controller.Facade.php") ?>

<?php
    session_start();
    
    $facade = new Facade();
    $paginaRetorno = "";

    switch ($_GET["Acao"]) {
        case "IncluirUsuario":
            $paginaRetorno = $facade->incluirUsuario($_POST);
            break;

        case "AlterarUsuario":
            break;

        case "ExcluirUsuario":
            break;

        default:
            break;
    }

    header("Location: " . $paginaRetorno);
?>