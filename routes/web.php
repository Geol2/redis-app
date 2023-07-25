<?php

use WalnutBread\Routing\Route;

Route::add('get', '/', '\App\Controllers\IndexController::index');

Route::add('get', '/call', '\App\Controllers\CallController::index');

Route::run();