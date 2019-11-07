<?php

namespace EventDispatchers\Subscribers;

use EventDispatchers\Events\DemoEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class DemoSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            DemoEvent::NAME => 'onDemoEvent',
        );
    }

    public function onDemoEvent(DemoEvent $event)
    {
        // fetch event information here
        echo "DemoListener is called using Subscriber!\n";
        echo "The value of the foo is :" . $event->getFoo() . "\n";
    }
}