<?php


use NameSpaceTest\Controllers\ExampleController;
use NameSpaceTest\Middleware\RemoveTrailingSlash;


$app->add(new RemoveTrailingSlash());


$app->get('/[{id:[0-9]+}]', ExampleController::class.':index');
