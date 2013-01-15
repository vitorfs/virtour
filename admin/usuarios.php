<?php
    require_once("src/model.Usuario.php");
    require_once("src/dao.UsuarioDao.php");
?>

<?php
    $activeMenu = "usuarios";
?>

<?php include("shared/top.php") ?>
    <ul class="breadcrumb">
        <li class="active">Usuários</li>
    </ul>
    <a href="incluir-usuario.php" class="btn pull-right" style="margin-bottom:20px"><i class="icon-plus"></i> Adicionar</a>
    <form class="form-inline">
        <div class="input-append">
          <input class="input-xlarge" id="busca" type="text">
          <button class="btn" type="button"><i class="icon-search"></i> Buscar</button>
        </div>
        <button type="button" class="btn"><i class="icon-question-sign"></i></button>
    </form>
    <table class="table table-striped table-bordered" id="tbl-usuarios">
        <thead>
            <tr>
                <th><?php echo Usuario::LB_NOME ?></th>
                <th><?php echo Usuario::LB_EMAIL ?></th>
                <th><?php echo Usuario::LB_STATUS ?></th>
                <th><?php echo Usuario::LB_PERFIL ?></th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php  
                $usuarioDao = new UsuarioDao();
                $usuarios = $usuarioDao->obterListaUsuarios();
                foreach ($usuarios as $usuario) {
                    echo "<tr>";
                    echo "<td>" . $usuario->nome . "</td>";
                    echo "<td>" . $usuario->email . "</td>";
                    echo "<td>" . $usuario->status . "</td>";
                    echo "<td>" . $usuario->perfil . "</td>";
                    echo "<td>";
                    echo "<a rel=\"tooltip\" href=\"alterar-usuario.php?id=" . $usuario->id . "\" title=\"Editar Usuário\"><i class=\"icon-pencil\"></i></a>&nbsp;";
                    echo "<a rel=\"tooltip\" href=\"javascript:excluirUsuario('" . $usuario->id . "', '" . $usuario->nome . "');\" title=\"Excluir Usuário\"><i class=\"icon-remove\"></i></a>";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <form action="facade.php?Acao=ExcluirUsuario" method="post">
        <input type="hidden" name="id" id="id-excluir">
        <div class="modal hide fade" id="modal-excluir">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Excluir Usuário</h3>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning fade in">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Atenção!</strong> Esta operação não poderá ser desfeita.
                </div>
                <p>Confirmar exclusão do usuário <strong><span id="nome-excluir"></span></strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="$('div#modal-excluir').modal('hide');" class="btn">Cancelar</button>
                <button type="submit" class="btn btn-danger">Excluir</button>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        function excluirUsuario(id, nome) {
            $("input#id-excluir").val(id);
            $("span#nome-excluir").text(nome);
            $("div#modal-excluir").modal();
        }

        $(function () {
            $("a[rel=tooltip]").tooltip();
            $("table#tbl-usuarios").possuiRegistros();
        });
    </script>
<?php include("shared/bottom.php") ?>