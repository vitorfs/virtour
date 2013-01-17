<?php require_once("src/model.Usuario.php") ?>

<?php 
    $activeMenu = "usuarios";
?>

<?php include("shared/top.php") ?>
    <ul class="breadcrumb">
        <li><a href="usuarios.php">Usuários</a> <span class="divider">/</span></li>
        <li class="active">Adicionar</li>
    </ul>
    <form action="facade.php?Acao=IncluirUsuario" method="post" class="form-horizontal">
        <div class="control-group">
            <label class="control-label" for="nome"><?php echo Usuario::LB_NOME ?></label>
            <div class="controls">
                <input type="text" id="nome" name="nome" placeholder="Nome" class="input-xlarge" maxlength="100">
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="senha"><?php echo Usuario::LB_SENHA ?></label>
            <div class="controls">
                <input type="text" id="senha" name="senha" placeholder="Senha" class="input-xlarge" maxlength="32">
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email"><?php echo Usuario::LB_EMAIL ?></label>
            <div class="controls">
                <input type="text" id="email" name="email" placeholder="Email" class="input-xlarge" maxlength="50">
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="perfil"><?php echo Usuario::LB_PERFIL ?></label>
            <div class="controls">
                <select id="perfil" name="perfil">
                    <option value="">Selecione...</option>
                    <option value="ADMIN">Administrador</option>
                    <option value="CLIENTE">Cliente</option>
                </select>
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="status">Ativo</label>
            <div class="controls">
                <label class="checkbox"><input type="checkbox" id="status" name="status" checked></label>
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="usuarios.php" class="btn">Cancelar</a>
        </div>        
    </form>
<?php include("shared/bottom.php") ?>