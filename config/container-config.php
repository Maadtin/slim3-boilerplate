<?php


use Slim\Container;
use Slim\Http\Response;
use Slim\Http\StatusCode;

$container = $app->getContainer();


$container['foundHandler'] = function () {
	return new \Slim\Handlers\Strategies\RequestResponseArgs();
};


$container['view'] = function (Container $container) {

};


$container['notFoundHandler'] = function ($container) {
	return function ($request, $response) use ($container) {
		return (new Response(StatusCode::HTTP_NOT_FOUND))->write('eeee');
	};
};