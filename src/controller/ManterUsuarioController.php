<?php
/**
* @author Vitor Freitas
*/
class ManterUsuarioController
{
    private $usuarioDao;

    function __construct() {
        //$usuarioDao = new UsuarioDao();
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }    
}
?>