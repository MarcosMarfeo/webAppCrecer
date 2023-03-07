<?php
namespace App\Controller;

use App\Helper\View;

class Itineraries extends Controller
{
    function action_list() {

        $this->view = new View(VIEWS_PATH . '/ItinerariesList.php');
    }

}