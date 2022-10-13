<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Models;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->options('/', function () use ($router) {
    return response('', 200, [
        'Access-Control-Allow-Origin' => '*',
        'Access-Control-Allow-Methods' => '*',
        'Access-Control-Allow-Headers' => 'Content-Type',
    ]);
});

$router->post('/', function (Request $request) use ($router) {
    foreach ($request->input() as $feed) {
        (new Models\Feed($feed))->firstOrCreate(['href' => $feed['href']], $feed);
    }
});
