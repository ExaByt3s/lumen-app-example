<?php

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

$router->get('/', function () use ($router) {
    Log::info('Boot home page');
    if (env('APP_DEBUG')) {
        Debugbar::debug('Boot home page');
    }
    return view('index');
});

$router->get('/db', function () use ($router) {
    $domains = DB::select('SELECT * FROM domains');
    return implode("<br>", $domains);
});

$router->post('/domains', ['as' => 'domains.store', 'uses' => 'DomainController@store']);

$router->get('/domains/{id}', ['as' => 'domains.show', 'uses' => 'DomainController@show']);
