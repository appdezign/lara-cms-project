<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

// ini_set('memory_limit', '256M');

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Maintenance Mode (Laravel)
|--------------------------------------------------------------------------
|
| Override the default Laravel maintenance
|
*/

if (file_exists($down = __DIR__.'/../laravel/storage/framework/down')) {
	$data = json_decode(file_get_contents($down), true);
	$defaultOutput = '<html><body><h1>maintenance</h1></div></body></html>';
	$output = (isset($data['template'])) ? $data['template'] : $defaultOutput;
	echo $output;
	exit();
}

/*
|--------------------------------------------------------------------------
| Maintenance Mode (manual)
|--------------------------------------------------------------------------
|
| Define your own IP addresses in the array
|
*/

/*
$ip_array = ['77.164.138.35'];
if(!in_array($_SERVER['REMOTE_ADDR'], $ip_array)) {
	$output = '<html><body><h1>maintenance</h1></div></body></html>';
	echo $output;
	exit();
}
*/

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

if(PHP_OS == 'Linux') {
	// plesk
	require __DIR__ . '/../laravel/vendor/autoload.php';
} else {
	// local
	require __DIR__ . '/../vendor/autoload.php';
}


/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/


if(PHP_OS == 'Linux') {
	// plesk
	$app = require_once __DIR__ . '/../laravel/bootstrap/app.php';
} else {
	// local
	$app = require_once __DIR__ . '/../bootstrap/app.php';
}

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
	$request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
