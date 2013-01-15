<?php require_once("properties.Database.php") ?>

<?php 
/**
* @author Vitor Freitas
*/
abstract class Dao
{
    protected $conn;

    public function open() {
        $this->conn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        mysql_select_db(DB_NAME);
    }

    public function close() {
        mysql_close($this->conn);
    }

    public abstract function insert($obj);

    public abstract function update($obj);

    public abstract function delete($id);
}
?>