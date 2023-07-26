<?php

use WalnutBread\Routing\Route;

Route::add('get', '/', '\App\Controllers\IndexController::index');

Route::add('get', '/call', '\App\Controllers\CallController::index');
Route::add('post', '/call/search', '\App\Controllers\CallController::search');
Route::add('get', '/call/list', '\App\Controllers\CallController::list');
Route::add('get', '/call/run', '\App\Controllers\CallController::run');

Route::run();