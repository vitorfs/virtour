<?php require_once("properties.Database.php") ?>

<?php 
/**
* @author Vitor Freitas
*/
abstract class Dao
{

    public function getConnection() {
        return new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    }

    public abstract function insert($obj);

    public abstract function update($obj);

    public abstract function delete($id);
}
?>