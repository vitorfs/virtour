<?php require_once("src/model.Usuario.php") ?>

<?php 
    $activeMenu = "usuarios";
?>

<?php include("shared/top.php") ?>
    <ul class="breadcrumb">
        <li><a href="usuarios.php">Usuários</a> <span class="divider">/</span></li>
        <li class="active">Alterar</li>
    </ul>
    <form action="facade.php?Acao=AlterarUsuario" method="post" class="form-horizontal">
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="usuarios.php" class="btn">Cancelar</a>
        </div>        
    </form>
<?php include("shared/bottom.php") ?>