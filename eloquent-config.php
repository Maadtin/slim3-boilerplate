<?php


use Illuminate\Database\Capsule\Manager;

$capsule = new Manager();
$capsule->addConnection($config['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();