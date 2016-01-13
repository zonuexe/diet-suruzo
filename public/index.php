<?php

namespace DietSuruzo;

require dirname(__DIR__) . '/vendor/autoload.php';

call_user_func(function () {
    $app = new Application;
    $dispatcher = new \Dietcube\Dispatcher($app);
    $dispatcher->boot();
    try {
        $dispatcher->handleRequest();
    } catch (\Dietcube\Exception\DCException $e) {
        $dispatcher->handleError($e);
    }
});
