<?php

namespace App\Router;

use App\Controller\FrontendController;
use Klein\Klein;

class Router
{
    private $klein;
    private $frontendController;

    public function __construct($twig)
    {
        $this->klein = new Klein();
        $this->frontendController = new FrontendController($twig);
    }

    public function run()
    {
        $this->klein->respond('GET', '/', function () {
            return $this->frontendController->index();
        });

        $this->klein->respond('GET', '/events', function(){
           return $this->frontendController->events();
        });

        $this->klein->respond('GET', '/events/[:id]', function($request){
            return $this->frontendController->detailEvent($request->id);
        });

        $this->klein->dispatch();
    }

}
