<?php
/**
* @author Vitor Freitas
*/
class Usuario
{
    private $id;
    const LB_ID = "Id";
    const CL_ID = "id";

	private $email;
	const LB_EMAIL = "Email";
	const CL_EMAIL = "email";

	private $senha;
	const LB_SENHA = "Senha";
	const CL_SENHA = "senha";

	private $nome;
	const LB_NOME = "Nome";
	const CL_NOME = "nome";

	private $perfil;
	const LB_PERFIL = "Perfil";
	const CL_PERFIL = "perfil";

	private $status;
	const LB_STATUS = "Status";
	const CL_STATUS = "status";

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