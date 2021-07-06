<?php

namespace Application\core\controller;

interface IBaseController {

	public function criar(array $dados);

	public function listar(int $id);

	public function atualizar(array $dados);

	public function excluir(int $id);

}
