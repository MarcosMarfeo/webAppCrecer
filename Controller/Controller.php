<?php
namespace App\Controller;

abstract class Controller
{
	protected $view;
	protected $class;
	protected $action;
	protected $request;
	protected $messages;

	public function __construct($action)
	{
		$this->class = preg_replace('/.*\\\\/', '', static::CLASS);
        $this->action = $action;
	}

    protected function before(){
        return true;
    }

    public function process()
    {
        $this->exist();
        if($this->before()){
            $this->{'action_' . $this->action}();
            $this->after();
        }
        $this->view();
    }

	protected function after(){}

	protected function exist()
	{
        $methods = get_class_methods($this);
        if(!in_array('action_' . $this->action, $methods))
        {
            throw new \Exception('ERROR: The action does not exist '. $this->action);
        }
	}

	public function view(){
		echo $this->view;
	}


	/**
	 * @param string $url
	 */
	public function redirect($url){
		header('Location: '.$url);
		exit;
	}
}