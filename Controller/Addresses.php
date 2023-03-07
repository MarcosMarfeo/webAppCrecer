<?php
namespace App\Controller;

use App\Helper\View;

class Addresses extends Controller
{
    function action_list() {

        $this->view = new View(VIEWS_PATH . '/AddressesList.php');
    }

}