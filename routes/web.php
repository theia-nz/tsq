<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localize', 'localizationRedirect', 'localeSessionRedirect', 'localeCookieRedirect', 'localeViewPath']], function () {
});

Route::group(['prefix' => 'artisan'], function () {
    Route::get('migrate', function () {
        $command = 'migrate';
        $parameters = [];

        if (Request::has('seed')) {
            $parameters['--seed'] = true;
        }

        Artisan::call($command, $parameters);

        return '<pre>' . Artisan::output() . '</pre>';
    });
});

Route::group(['middleware' => ['twill_auth:twill_users']], function () {
    Route::group(['prefix' => 'admin/artisan'], function () {
        Route::get('storage-link', function () {
            $command = 'storage:link';

            Artisan::call($command);

            return '<pre>' . Artisan::output() . '</pre>';
        });

        Route::get('optimize-clear', function () {
            $command = 'optimize:clear';

            Artisan::call($command);

            return '<pre>' . Artisan::output() . '</pre>';
        });

        Route::get('migrate-refresh', function () {
            $command = 'migrate:refresh';
            $parameters = [];

            if (Request::has('seed')) {
                $parameters['--seed'] = true;
            }

            Artisan::call($command, $parameters);

            return '<pre>' . Artisan::output() . '</pre>';
        });

        Route::get('iseed', function () {
            $command = 'iseed';
            $parameters = [];

            if (Request::has('force')) {
                $parameters['--force'] = true;
            }

            $parameters['tables'] = implode(',', collect(array_map('current', DB::select('SHOW TABLES')))->filter(function ($value) {
                return $value !== 'migrations';
            })->toArray());

            Artisan::call($command, $parameters);

            return '<pre>' . Artisan::output() . '</pre>';
        });
    });
});
