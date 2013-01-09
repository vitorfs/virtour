<?php require_once("src/controller.Facade.php") ?>

<?php
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