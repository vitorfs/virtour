<?php 
    require_once("dao.Dao.php");
    require_once("model.Usuario.php");
?>

<?php  
/**
* @author Vitor Freitas
*/
class UsuarioDao extends Dao
{
    
    public function insert($usua) {
        $this->open();
        $sql = "INSERT INTO usuarios VALUES ('', '$usua->email', '$usua->senha', '$usua->nome', '$usua->perfil', '$usua->status')";
        mysql_query($sql);
        $this->close();
    }

    public function update($usua) {

    }

    public function delete($id) {
        $this->open();
        $sql = "DELETE FROM usuarios WHERE id = $id";
        mysql_query($sql);
        $this->close();
    }

    public function obterPorId($id) {
        $this->open();
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $rs = mysql_query($sql);
        $usua = new Usuario();
        $usua->id     = mysql_result($rs, 0, Usuario::CL_ID);
        $usua->email  = mysql_result($rs, 0, Usuario::CL_EMAIL);
        $usua->senha  = mysql_result($rs, 0, Usuario::CL_SENHA);
        $usua->nome   = mysql_result($rs, 0, Usuario::CL_NOME);
        $usua->perfil = mysql_result($rs, 0, Usuario::CL_PERFIL);
        $usua->status = mysql_result($rs, 0, Usuario::CL_STATUS);
        $this->close();
        return $usua;
    }

    public function obterListaUsuarios() {
        $this->open();
        $sql = "SELECT * FROM usuarios";
        $rs = mysql_query($sql);
        $usuarios = array();
        for ($i=0; $i < mysql_numrows($rs); $i++) { 
            $usua = new Usuario();
            $usua->id     = mysql_result($rs, $i, Usuario::CL_ID);
            $usua->email  = mysql_result($rs, $i, Usuario::CL_EMAIL);
            $usua->senha  = mysql_result($rs, $i, Usuario::CL_SENHA);
            $usua->nome   = mysql_result($rs, $i, Usuario::CL_NOME);
            $usua->perfil = mysql_result($rs, $i, Usuario::CL_PERFIL);
            $usua->status = mysql_result($rs, $i, Usuario::CL_STATUS);
            array_push($usuarios, $usua);
        }
        $this->close();
        return $usuarios;
    }
}
?>