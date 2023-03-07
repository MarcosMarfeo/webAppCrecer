<?php

namespace App\Model;

abstract class Model{

	public $errors;


	abstract public function validate();
	abstract public function insert();
	abstract public function delete();
	abstract public function update();

	static public function show(){trigger_error("Abstract method not defined", E_USER_ERROR);exit();}
    static public function obtain($id){trigger_error("Abstract method not defined", E_USER_ERROR);exit();}

    protected function __construct(){}

	public function __set($key,$value)
	{
		throw new \ErrorException('ERROR: Variable asignada "'.$key.'" no existe.');
	}

	public function __get($key)
	{
		throw new \ErrorException('ERROR: Variable consultada "'.$key.'" no existe.');
	}
}