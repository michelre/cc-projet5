<?php

namespace App\Dao;

use App\Model\Event;

class EventDao
{

    public function findEvents()
    {
        $event1 = new Event();
        $event1->setId(1)
            ->setTitle('Evenement 1')
            ->setDescription('Description de l\'evenement 1');
        $event2 = new Event();
        $event2->setId(2)
            ->setTitle('Evenement 2')
            ->setDescription('Description de l\'evenement 2');

        return [$event1, $event2];
    }

}
