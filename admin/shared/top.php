<?php 
    require_once("src/properties.Messages.php");
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Virtour Administrativo</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="css/admin.css" rel="stylesheet" media="screen">
    <script src="../js/jquery-1.8.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>  
    <script src="js/admin.js"></script>
</head>
<body>
    <?php include("nav.php") ?>
    <div class="container">
        <?php 
            if (isset($_SESSION["mensagem"])) {
                $mensagem = explode("|", $_SESSION["mensagem"]);
                echo "<div class='alert fade in $mensagem[0]' id='mensagens'>";
                echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                echo $mensagem[1];
                echo "</div>";
                if ($mensagem[0] == SEVERITY_SUCCESS)
                    echo "<script>$(function () { setTimeout(function () { $('div#mensagens').alert('close'); }, 10000); }); </script>";
                unset($_SESSION["mensagem"]);
            }
        ?>