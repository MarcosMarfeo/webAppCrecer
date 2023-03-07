<?php
namespace App\Helper;

use PDO;

class Connections {
	const SELECT = 0;
	const INSERT = 1;
	const DELETE = 2;
	const UPDATE = 3;

	public $errorCode;
	public $errorInfo;
	protected $database;
	protected $_c;
	protected $_stmts = [];

	public function __construct($database = '') {
		$this->database = $database;
	}

	public function select($type, $sql, $params = []) {
		$c = $this->conectDB();
		$stmt = $this->prepare($c, $sql);
		foreach ($params as $key => $value) {
			$stmt->bindValue($key, $value);
		}
		$stmt->execute();
		if ($stmt->errorCode() != '00000') {
			$this->errorInfo = $stmt->errorInfo();
			return false;
		}
		switch ($type) {
			case static::SELECT:
				$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

				return $resultado;
			case static::INSERT:
				return $c->lastInsertId();
			case static::DELETE:
				return $stmt->rowCount();
			case static::UPDATE:
				return $stmt->rowCount();
			default:
				throw new \InvalidArgumentException('Tipo no reconocido');
		}
	}

	public function conectDB() {
		if (is_null($this->_c)) {
			$database = 'sqlsrv:Server=' . DB_SERVER . ';Database=' . DB_NAME;
            $this->_c = new PDO($database, DB_USER, DB_PASSWORD);
        }

		return $this->_c;
	}

	protected function prepare($c, $sql) {
		if (!isset($this->_stmts[$sql])) {
			$this->_stmts[$sql] = $c->prepare($sql);
		}

		return $this->_stmts[$sql];
	}
}