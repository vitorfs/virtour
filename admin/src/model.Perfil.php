<?php  
/**
* @author Vitor Freitas
*/
class Perfil
{
    private $codigo;
    const LB_CODIGO = "Código";

    private $descricao;
    const LB_DESCRICAO = "Descrição";    
    
    public function __construct() {

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