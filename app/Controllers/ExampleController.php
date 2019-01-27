<?php


namespace NameSpaceTest\Controllers;


use Slim\Http\Request;
use Slim\Http\Response;

class ExampleController extends Controller
{



	public function index (Request $request, Response $response, $id = null) {
		return '<h1>Welcome</h1>'. $id;
	}





}