<?php 
/**
* @author Vitor Freitas
*/
abstract class Dao
{
    protected $conn;

    function __construct()
    {
        $this->conn = mysql_connect("mysql08.redehost.com.br", "u_app", "Cocadaboa01");
    }
}
?>