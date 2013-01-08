<?php
class Usuario
{
    private $id;
	private $email;
	private $senha;
	private $nome;
	private $perfil;
	private $status;

	public function __construct($email, $senha) {
		$this->email = $email;
		$this->senha = $senha;
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