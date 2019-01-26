<?php


namespace NameSpaceTest\Controllers;


use Slim\Http\Request;
use Slim\Http\Response;

class ExampleController extends Controller
{



	public function index (Request $request, Response $response) {
		return 'Welcome';
	}





}