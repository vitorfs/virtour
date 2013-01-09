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
    <a href="adicionar-usuario.php" class="btn pull-right" style="margin-bottom:20px"><i class="icon-plus"></i> Adicionar</a>
    <form class="form-inline">
        <div class="input-append">
          <input class="input-xlarge" id="busca" type="text">
          <button class="btn" type="button"><i class="icon-search"></i> Buscar</button>
        </div>
        <button type="button" class="btn"><i class="icon-question-sign"></i></button>
    </form>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Status</th>
                <th>Perfil</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php  
                $usuarioDao = new UsuarioDao();
                $usuarios = $usuarioDao->obterListaUsuarios();
                for ($i=0; $i < count($usuarios); $i++) { 
                    echo "<tr>";
                    echo "<td>" . $usuarios[$i]->nome . "</td>";
                    echo "<td>" . $usuarios[$i]->email . "</td>";
                    echo "<td>" . $usuarios[$i]->status . "</td>";
                    echo "<td>" . $usuarios[$i]->perfil . "</td>";
                    echo "<td>";
                    echo "<a rel=\"tooltip\" href=\"#\" title=\"Editar Usuário\"><i class=\"icon-pencil\"></i></a>&nbsp;";
                    echo "<a rel=\"tooltip\" href=\"#\" title=\"Excluir Usuário\"><i class=\"icon-remove\"></i></a>";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <script type="text/javascript">
        $(function () {
            $("a[rel=tooltip]").tooltip();
        });
    </script>
<?php include("shared/bottom.php") ?>