<?php

use Illuminate\Support\Facades\Route;

// Register Twill routes here eg.
// Route::module('posts');

Route::group(['prefix' => 'pages'], function () {
	Route::singleton('pageHome');
	Route::singleton('pageContact');
});

Route::module('menus');
