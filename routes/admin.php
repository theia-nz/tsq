<?php

use Illuminate\Support\Facades\Route;

// Register Twill routes here eg.
// Route::module('posts');

Route::group(['prefix' => 'pages'], function () {
	Route::singleton('pageHome');
	Route::singleton('pageAbout');
	Route::singleton('pageService');
	Route::singleton('pageProject');
	Route::singleton('pageContact');
});

Route::group(['prefix' => 'modules'], function () {
	Route::module('services');
	Route::module('projects');
});

Route::module('menus');
