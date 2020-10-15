<?php

require_once __DIR__ . '/../vendor/autoload.php';

use EventDispatchers\Events\DemoEvent;
use EventDispatchers\Subscribers\DemoSubscriber;
use Symfony\Component\EventDispatcher\EventDispatcher;

// init event dispatcher
$dispatcher = new EventDispatcher();

// register subscriber
$subscriber = new DemoSubscriber();
$dispatcher->addSubscriber($subscriber);

// dispatch
$dispatcher->dispatch(new DemoEvent(), DemoEvent::NAME);
