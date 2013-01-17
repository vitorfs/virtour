<?php
/**
* @author Vitor Freitas
*/
class Usuario
{
    private $id;
    const LB_ID = "Id";

	private $email;
	const LB_EMAIL = "Email";

	private $senha;
	const LB_SENHA = "Senha";

	private $nome;
	const LB_NOME = "Nome";

	private $perfil;
	const LB_PERFIL = "Perfil";

	private $status;
	const LB_STATUS = "Status";

	private $dataCriacao;
	const LB_DATA_CRIACAO = "Data de Criação";

	private $usuarioCriacao;
	const LB_USUARIO_CRIACAO = "Usuário de Criação";

	private $dataAlteracao;
	const LB_DATA_ALTERACAO = "Data de Alteração";

	private $usuarioAlteracao;
	const LB_USUARIO_ALTERACAO = "Usuário de Alteração";

	private $dataUltimoAcesso;
	const LB_DATA_ULTIMO_ACESSO = "Data do Último Acesso";
	

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