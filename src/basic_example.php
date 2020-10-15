<?php
// basic_example.php

require_once __DIR__ . '/../vendor/autoload.php';

use EventDispatchers\Events\DemoEvent;
use EventDispatchers\Listeners\DemoListener;
use Symfony\Component\EventDispatcher\EventDispatcher;

// init event dispatcher
$dispatcher = new EventDispatcher();

// register listener for the 'demo.event' event
$listener = new DemoListener();
$dispatcher->addListener('demo.event', [$listener, 'onDemoEvent']);

// dispatch
$dispatcher->dispatch( new DemoEvent(), DemoEvent::NAME);