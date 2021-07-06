<?php

namespace Application\core\exception;

use Exception;

class MyException extends Exception {
	use TraitExceptionJSON;

	public function __construct($msg, $code = 0, Exception $previous = null) {
		parent::__construct($msg, $code, $previous);
	}

	public function __toString() {
		$this->jsonException($this);
	}

}
