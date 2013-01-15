<?php session_start() ?>
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
        <?php if (isset($_SESSION["mensagem"])): ?>
            <div class="alert alert-success fade in" id="mensagens">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php 
                    echo $_SESSION["mensagem"];
                    unset($_SESSION["mensagem"]);
                ?>
            </div>
            <script>
                $(function () {
                    setTimeout(function () {
                        $("div#mensagens").alert("close");
                    }, 5000);
                });
            </script>
        <?php endif ?>