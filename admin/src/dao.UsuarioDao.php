<?php 
    require_once("model.Usuario.php");
    require_once("dao.Dao.php");
?>

<?php  
/**
* @author Vitor Freitas
*/
class UsuarioDao
{
    
    public function insert($usua) {
        $conn = mysql_connect("mysql08.redehost.com.br", "u_app", "Cocadaboa01");
        mysql_select_db("virtour");
        $sql = "INSERT INTO usuarios VALUES ('', '$usua->email', '$usua->senha', '$usua->nome', '$usua->perfil', '$usua->status')";
        mysql_query($sql);
        mysql_close($conn);
    }

    public function update($usua) {

    }

    public function delete($id) {

    }

    public function obterListaUsuarios() {
        $conn = mysql_connect("mysql08.redehost.com.br", "u_app", "Cocadaboa01");
        mysql_select_db("virtour");
        $sql = "SELECT * FROM usuarios";
        $rs = mysql_query($sql);
        $usuarios = array();
        for ($i=0; $i < mysql_numrows($rs); $i++) { 
            $usua = new Usuario();
            $usua->id     = mysql_result($rs,$i,"id");
            $usua->email  = mysql_result($rs,$i,"email");
            $usua->senha  = mysql_result($rs,$i,"senha");
            $usua->nome   = mysql_result($rs,$i,"nome");
            $usua->perfil = mysql_result($rs,$i,"perfil");
            $usua->status = mysql_result($rs,$i,"status");
            array_push($usuarios, $usua);
        }
        mysql_close($conn);
        return $usuarios;
    }
}
?>