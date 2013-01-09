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
            <label class="control-label" for="nome">Nome</label>
            <div class="controls">
                <input type="text" id="nome" name="nome" placeholder="Nome" class="input-xlarge">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="senha">Senha</label>
            <div class="controls">
                <input type="password" id="senha" name="senha" placeholder="Senha" class="input-xlarge">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="confirma-senha">Confirmação Senha</label>
            <div class="controls">
                <input type="password" id="confirma-senha" name="confirma-senha" placeholder="Confirmação Senha" class="input-xlarge">
            </div>
        </div>        
        <div class="control-group">
            <label class="control-label" for="email">Email</label>
            <div class="controls">
                <input type="text" id="email" name="email" placeholder="Email" class="input-xlarge">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="perfil">Perfil</label>
            <div class="controls">
                <select id="perfil" name="perfil">
                    <option value="">Selecione...</option>
                    <option value="admin">Administrador</option>
                    <option value="cliente">Cliente</option>
                </select>
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
            <button type="button" class="btn" onclick="history.back();">Cancelar</button>
        </div>        
    </form>
<?php include("shared/bottom.php") ?>