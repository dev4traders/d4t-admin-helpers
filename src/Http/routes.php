<?php

use Illuminate\Support\Facades\Route;
use D4T\Admin\Helpers\Http\Controllers\IconController;
use D4T\Admin\Helpers\Http\Controllers\ScaffoldController;
use D4T\Admin\Helpers\ServiceProvider;

Route::get(ServiceProvider::URL_HELPERS_SCAFFOLD, ScaffoldController::class.'@index');
Route::post(ServiceProvider::URL_HELPERS_SCAFFOLD, ScaffoldController::class.'@store');
Route::post(ServiceProvider::URL_HELPERS_SCAFFOLD.'/table', ScaffoldController::class.'@table');
Route::get(ServiceProvider::URL_HELPERS_ICONS, IconController::class.'@index');
