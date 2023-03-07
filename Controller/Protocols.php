<?php
namespace App\Controller;

use App\Helper\View;

class Protocols extends Controller
{
    function action_list() {

        $this->view = new View(VIEWS_PATH . '/ProtocolsList.php');
    }

}