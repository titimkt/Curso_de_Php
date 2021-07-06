<?php

use Application\core\controller\Controller;
use Application\core\controller\IBaseController;
use Application\core\exception\MyException;

class TarefaController extends Controller implements IBaseController {

	protected $tarefasModel = null;

	public function __construct() {
		$this->tarefasModel = $this->model('TarefaModel');
	}

	// index == listarTodos
	public function index() {
		$data["paginaMeio"] = "tarefas/tarefaView";
		$data["dados"] = $this->tarefasModel->listarTodos();
		$this->view("PrincipalView", $data);
	}

	// Métodos padrão conhecidos como CRUD (Create, Read, Update e Delete).

	public function listar($id = 0) {
		try {
			$idInvalido = (!is_numeric($id) || $id <= 0);

			if ($idInvalido) {
				throw new MyException("Listar tarefa: O id da tarefa é inválido.");
			}
		} catch (MyException $error) {
			echo $error->jsonException($error);
			die();
		}

		$dados = $this->tarefasModel->listar($id);
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($dados);
		exit();
	}

	public function criar($dados = []) {
		$dados = $_REQUEST; // obtém os dados do front.

		$this->validarTarefa($dados);

		return $this->tarefasModel->criar($dados);
	}

	public function atualizar($dados = []) {
		echo json_encode(["mensagem" => "ola mundo"]);
		exit;
	}

	public function excluir($id = 0) {
		echo json_encode(["mensagem" => "ola mundo"]);
		exit;
	}

	// Fim CRUD.

	private function validarTarefa($dados) {
		try {
			foreach ($dados as $chave => $valor) {

				// Variáveis escalares são as que contém integer, float, string ou boolean. os tipos array, object e resource não são escalares.
				$existeCampoInvalido = ($chave != "descricao" && (empty($valor) || !is_scalar($valor)));

				if ($existeCampoInvalido) {
					throw new MyException("Controller: O campo {$chave} da tarefa é inválido.");
				}
			}
		} catch (MyException $error) {
			echo $error->jsonException($error);
			die();
		}
	}

}
