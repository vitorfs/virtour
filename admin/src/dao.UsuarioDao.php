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
        $mysqli = $this->getConnection();
        $sql = "INSERT INTO usuarios (email, senha, nome, perfil, status) VALUES ('$usua->email', '$usua->senha', '$usua->nome', '$usua->perfil', '$usua->status')";
        if (!$mysqli->query($sql)) {
            throw new Exception($mysqli->error);
        }
        $mysqli->close();
    }

    public function update($usua) {

    }

    public function delete($id) {
        $mysqli = $this->getConnection();
        $sql = "DELETE FROM usuarios WHERE id = $id";
        $mysqli->query($sql);
        $mysqli->close();
    }

    public function obterPorId($id) {
        $mysqli = $this->getConnection();
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        if ($rs = $mysqli->query($sql)) {
            $usua = $rs->fetch_object();
        }
        $mysqli->close();
        return $usua;
    }

    public function obterListaUsuarios() {
        $mysqli = $this->getConnection();
        $sql = "SELECT * FROM usuarios";
        if ($rs = $mysqli->query($sql)) {
            $usuarios = array();
            while ($row = $rs->fetch_object()) {
                array_push($usuarios, $row);
            }            
        }
        $mysqli->close();
        return $usuarios;
    }

    public function verificaEmailRepetido($email) {
        $repetido = false;
        $mysqli = $this->getConnection();
        $sql = "SELECT COUNT(1) is_unique FROM usuarios WHERE LOWER(email) = LOWER('$email')";
        if ($rs = $mysqli->query($sql)) {
            $row = $rs->fetch_row();
            $repetido = $row[0] > 0;
        }
        $mysqli->close();
        return $repetido;
    }
}
?>