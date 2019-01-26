<?php


return [
	 'settings' => [
		  'determineRouteBeforeAppMiddleware' => false,
		  'displayErrorDetails' => true,
		  'db' => [
				'driver' => env('DB_DRIVER'),
				'host' => env('DB_HOST'),
				'database' => env('DB_NAME'),
				'username' => env('DB_USER'),
				'password' => env('DB_PASS'),
				'charset'   => env('DB_CHARSET'),
		  ]
	 ],
];