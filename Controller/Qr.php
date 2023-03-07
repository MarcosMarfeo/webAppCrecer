<?php
namespace App\Controller;

use App\Helper\View;

class Qr extends Controller
{
    function action_list() {

        $this->view = new View(VIEWS_PATH . '/Qr.php');
    }

}