<?php

namespace EventDispatchers\Listeners;

use Symfony\Component\EventDispatcher\Event;

class DemoListener
{
    public function onDemoEvent(Event $event)
    {
        // fetch event information here
        echo "DemoListener is called!\n";
        echo "The value of the foo is: " . $event->getFoo() . "\n";
    }
}
