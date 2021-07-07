<?php

namespace Application\core\model;

interface IBaseModel
{

	public function criar($dados);

	public function listar($id);

	public function atualizar($dados);

	public function excluir($id);
}
