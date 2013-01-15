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
        $sql = "INSERT INTO " . Usuario::TABLE_NAME . " VALUES ('', '$usua->email', '$usua->senha', '$usua->nome', '$usua->perfil', '$usua->status')";
        mysql_query($sql);
        mysql_close($conn);
    }

    public function update($usua) {

    }

    public function delete($id) {

    }

    public function obterListaUsuarios() {
        $sql = "SELECT * FROM " . Usuario::TABLE_NAME;
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
        mysql_close($this->conn);
        return $usuarios;
    }
}
?>