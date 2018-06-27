<?php

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['namespace' => 'App\Http\Controllers'], function ($api) {
    $api->get('mahasiswa',  'MahasiswaController@show');

    $api->get('mahasiswa/{id}',  'MahasiswaController@showDetails');

    $api->post('mahasiswa',  'MahasiswaController@store');

    $api->delete('mahasiswa/{id}',  'MahasiswaController@delete');

    $api->put('mahasiswa/{id}',  'MahasiswaController@update');
});
