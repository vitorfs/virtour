<?php 
/**
* @author Vitor Freitas
*/
class Dao
{
    protected $conn;

    function __construct()
    {
        $this->conn = mysql_connect("localhost", "root", "");
    }
}
?>