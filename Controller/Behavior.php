<?php
namespace App\Controller;

use App\Helper\View;

class Behavior extends Controller
{
    function action_list() {

        $this->view = new View(VIEWS_PATH . '/BehaviorList.php');
    }

}