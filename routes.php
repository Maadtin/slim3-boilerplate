<?php


use NameSpaceTest\Controllers\ExampleController;

$app->get('/', ExampleController::class.':index');
