<?php
namespace App\Controller;

use App\Helper\Functions;
use App\Helper\View;
use App\Model\User;

class Administration extends Controller
{
    function action_list() {

        // Ejemplo de como recibir y pasar parametros a la vista
        $usuarios = User::all();

        $this->view = new View(VIEWS_PATH . '/AdministrationList.php', [
            'usuarios' => $usuarios
        ]);
	}


    function action_list_all_guest() {

        // Ejemplo de como recibir y pasar parametros a la vista
        $guest = User::getAllGuest();

        var_dump($guest);

        $this->view = new View(VIEWS_PATH . '/AdministrationList.php', [
            'guest' => $guest
        ]);
	}

}