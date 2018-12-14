<?php

namespace App\Controller;

use App\Dao\EventDao;

class FrontendController
{
    private $eventDao;

    public function __construct()
    {
        $this->eventDao = new EventDao();
    }


    public function index()
    {
        return 'HOME';
    }

    public function events()
    {
        $events = $this->eventDao->findEvents();
        return json_encode($events);
    }

    public function detailEvent($id)
    {
        return 'EVENT ' . $id;
    }
}
