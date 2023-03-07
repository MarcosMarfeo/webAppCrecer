<?php
namespace App\Controller;

use App\Helper\View;

class Security extends Controller
{
    function action_list() {

        $this->view = new View(VIEWS_PATH . '/SecurityList.php');
    }

}