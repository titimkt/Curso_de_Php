<?php

namespace Application\core\database;

use Application\core\exception\TraitExceptionJSON;

class ConexaoBanco {
	use TraitExceptionJSON;

	protected $conexao = null;
	protected $nomeBanco = "";

	public function __construct() {
		$this->conectar();
	}

	private function conectar() {
		try {
			$configurarBanco = new ConfigurarBanco();
			$this->nomeBanco = $configurarBanco->obterNomeBanco();

			// Criar conexão
			$this->conexao = new \mysqli(
				$configurarBanco->obterNomeServidor(),
				$configurarBanco->obterNomeUsuario(),
				$configurarBanco->obterSenhaUsuario(),
				"",
				$configurarBanco->obterPorta()
			);

			if ($this->conexao->connect_error) {
				throw new \Exception("ConexaoBanco: Conexão falhou: " . $this->conexao->connect_error);
			}
		} catch (\Exception $error) {
			echo $this->jsonException($error);
			die();
		}
	}

	public function fecharConexao() {
		try {
			mysqli_close($this->conexao);
		} catch (\Exception $error) {
			echo $this->jsonException($error);
			die();
		}
	}

	public function obterConexao() {
		return $this->conexao;
	}

	public function obterNomeBanco() {
		return $this->nomeBanco;
	}

}
