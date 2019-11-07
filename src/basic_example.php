<?php
// basic_example.php

require_once '../vendor/autoload.php';

use EventDispatchers\Events\DemoEvent;
use EventDispatchers\Listeners\DemoListener;
use Symfony\Component\EventDispatcher\EventDispatcher;

// init event dispatcher
$dispatcher = new EventDispatcher();

// register listener for the 'demo.event' event
$listener = new DemoListener();
$dispatcher->addListener('demo.event', array($listener, 'onDemoEvent'));

// dispatch
$dispatcher->dispatch(DemoEvent::NAME, new DemoEvent());