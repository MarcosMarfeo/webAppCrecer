<?php
namespace App\Controller;

use App\Helper\View;

class Communication extends Controller
{
    function action_list() {

        $this->view = new View(VIEWS_PATH . '/CommunicationList.php');
    }

}