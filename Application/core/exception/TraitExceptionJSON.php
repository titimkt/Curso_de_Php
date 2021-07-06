<?php

namespace Application\core\exception;

trait TraitExceptionJSON {

	public function jsonException(\Exception $error) {
		header('Content-Type: application/json; charset=utf-8');
		return json_encode([
			'message' => $error->getMessage(),
			'code' => $error->getCode(),
			'file' => $error->getFile(),
			'line' => $error->getLine(),
			'trace' => $error->getTrace()
		]);
	}

}
