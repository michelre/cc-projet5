<?php

namespace App\Controller;

use App\Dao\EventDao;

class FrontendController
{
    private $eventDao;
    private $twig;

    /**
     * FrontendController constructor.
     * @param \Twig_Environment $twig
     */
    public function __construct($twig)
    {
        $this->eventDao = new EventDao();
        $this->twig = $twig;
    }


    public function index()
    {
        $events = $this->eventDao->findEvents();
        return $this->twig->render('home.html.twig', ['events' => $events]);
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
