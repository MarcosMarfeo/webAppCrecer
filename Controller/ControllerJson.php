<?php
namespace App\Controller;

abstract class ControllerJson extends Controller {

	protected $response = [];

	public function view() {
		header('Content-Type: application/json');
		echo json_encode($this->response);
	}

}