<?php


require 'vendor/autoload.php';

require 'dotenv-config.php';

$config = require 'slim-config.php';

require 'eloquent-config.php';

$app = new Slim\App($config);

require 'container-config.php';

require 'routes.php';


try {

	$app->run();

} catch (\Slim\Exception\MethodNotAllowedException $e) {
	echo $e->getMessage();
} catch (\Slim\Exception\NotFoundException $e) {
	echo $e->getMessage();
} catch (Exception $e) {
	echo $e->getMessage();
}