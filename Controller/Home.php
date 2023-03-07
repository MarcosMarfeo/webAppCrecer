<?php
namespace App\Controller;

use App\Helper\Functions;
use App\Helper\View;

class Home extends Controller
{	
	function action_list() {

        // Ejemplo de como recibir y pasar parametros a la vista
        //$dir = Functions::parameters('dir');

        $this->view = new View(VIEWS_PATH . '/HomeList.php', [
            //'dir' => $dir
        ]);
	}

}