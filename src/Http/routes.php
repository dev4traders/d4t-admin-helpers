<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware'    => config('admin.route.middleware')
], function (Router $router) {
    $router->get('helpers/scaffold', 'D4T\Admin\Helpers\Http\Controllers\ScaffoldController@index');
    $router->post('helpers/scaffold', 'D4T\Admin\Helpers\Http\Controllers\ScaffoldController@store');
    $router->post('helpers/scaffold/table', 'D4T\Admin\Helpers\Http\Controllers\ScaffoldController@table');
    $router->get('helpers/icons', 'D4T\Admin\Helpers\Http\Controllers\IconController@index');
});
