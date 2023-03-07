<?php
namespace App\Controller;

use App\Helper\View;

class Video extends Controller
{
    function action_list() {

        $this->view = new View(VIEWS_PATH . '/Video.php');
    }

}