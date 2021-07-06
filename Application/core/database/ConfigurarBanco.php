<?php

namespace Application\core\database;

class ConfigurarBanco {

	protected $nomeServidor;
	protected $nomeUsuario;
	protected $senhaUsuario;
	protected $nomeBanco;
	protected $porta;

	public function __construct() {
		$this->nomeServidor = SERVER_NAME;
		$this->nomeUsuario = USER_DB;
		$this->senhaUsuario = PASSWORD_DB;
		$this->nomeBanco = NAME_DB;
		$this->porta = PORT_DB;
	}

	public function obterNomeServidor() {
		return $this->nomeServidor;
	}

	public function obterNomeUsuario() {
		return $this->nomeUsuario;
	}

	public function obterSenhaUsuario() {
		return $this->senhaUsuario;
	}

	public function obterNomeBanco() {
		return $this->nomeBanco;
	}

	public function obterPorta() {
		return $this->porta;
	}

}
