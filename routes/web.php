<?php

use WalnutBread\Routing\Route;

Route::add('get', '/', '\App\Controllers\IndexController::index');

Route::add('get', '/call', '\App\Controllers\CallController::index');
Route::add('post', '/call/search', '\App\Controllers\CallController::search');
Route::add('get', '/call/list', '\App\Controllers\CallController::list');
Route::add('get', '/call/run/time', '\App\Controllers\CallController::runTime');
Route::add('get', '/call1/run/time', '\App\Controllers\CallOneController::runTime');
Route::add('get', '/call2/run/time', '\App\Controllers\CallTwoController::runTime');
Route::add('get', '/call3/run/time', '\App\Controllers\CallThreeController::runTime');


Route::run();