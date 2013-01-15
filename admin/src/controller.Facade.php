<?php 
    require_once("model.Usuario.php");
    require_once("dao.UsuarioDao.php");
?>

<?php 
/**
* @author Vitor Freitas
*/
class Facade
{
    public function incluirUsuario($form) {
        $usua = new Usuario();
        $dao = new UsuarioDao();

        $usua->nome   = $form["nome"];
        $usua->senha  = $form["senha"];
        $usua->email  = $form["email"];
        $usua->perfil = $form["perfil"];
        $usua->status = $form["status"] == "on" ? 1 : 0;

        $dao->insert($usua);

        $_SESSION["mensagem"] = "Usuário <strong>" . $usua->nome . "</strong> foi incluído com sucesso!";

        return "usuarios.php";
    }

    public function excluirUsuario($form) {
        $id = $form["id"];

        $dao = new UsuarioDao();
        $usua = $dao->obterPorId($id);

        $dao->delete($id);

        $_SESSION["mensagem"] = "Usuário <strong>" . $usua->nome . "</strong> foi excluído com sucesso!";

        return "usuarios.php";
    }
}
?>