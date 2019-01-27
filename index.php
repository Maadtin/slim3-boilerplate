<?php


require 'vendor/autoload.php';

require 'config/dotenv-config.php';

$config = require 'config/slim-config.php';

require 'config/eloquent-config.php';

$app = new Slim\App($config);

require 'config/container-config.php';

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