<?php


namespace NameSpaceTest\Controllers;


use Slim\Container;

class Controller
{

	public $container;


	public function __construct(Container $container)
	{
		$this->container = $container;
	}


}