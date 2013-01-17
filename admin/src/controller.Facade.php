<?php 
    require_once("properties.Messages.php");
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

        $usua->nome   = str_replace("'", "", $form["nome"]);
        $usua->senha  = str_replace("'", "", $form["senha"]);
        $usua->email  = str_replace("'", "", $form["email"]);
        $usua->perfil = str_replace("'", "", $form["perfil"]);
        $usua->status = str_replace("'", "", $form["status"]) == "on" ? 1 : 0;

        $validaForm = "";

        if (strlen($usua->senha) < 6) {
            $validaForm .= "<p>O campo " . Usuario::LB_SENHA . " deve possuir ao menos 6 caracteres.</p>";
        }
        else {
            $usua->senha = md5($usua->senha);   
        }

        if ($dao->verificaEmailRepetido($usua->email)) {
            $validaForm .= "<p>" . Usuario::LB_EMAIL . " já cadastrado no sistema.</p>";
        }

        if ($usua->perfil == "") {
            $validaForm .= "<p>O campo " . Usuario::LB_PERFIL . " é de preenchimento obrigatório.</p>";   
        }

        if (strlen($validaForm) > 0) {
            $_SESSION["mensagem"] = SEVERITY_WARNING . "|" . $validaForm;
            return "incluir-usuario.php";            
        }

        try {
            $dao->insert($usua);
            $_SESSION["mensagem"] = SEVERITY_SUCCESS . "|Usuário <strong>" . $usua->nome . "</strong> foi incluído com sucesso!";
            return "usuarios.php";
        } catch (Exception $ex) {
            $_SESSION["mensagem"] = SEVERITY_ERROR . "|" . $ex->getMessage();
            return "incluir-usuario.php";
        }

    }

    public function excluirUsuario($form) {
        $id = $form["id"];

        $dao = new UsuarioDao();
        $usua = $dao->obterPorId($id);

        try {
            $dao->delete($id);
            $_SESSION["mensagem"] = SEVERITY_SUCCESS . "|Usuário <strong>" . $usua->nome . "</strong> foi excluído com sucesso!";
        } catch (Exception $ex) {
            $_SESSION["mensagem"] = SEVERITY_ERROR . "|" . $ex->getMessage();
        }

        return "usuarios.php";
    }
}
?>