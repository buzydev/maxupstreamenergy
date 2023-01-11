<?php

use Illuminate\Support\Facades\Route;

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
    return view('upstream local.index');
});

Route::view('/about', 'upstream local.about');
Route::view('/services', 'upstream local.services');
Route::view('/assets-development', 'upstream local.assets-development');
Route::view('/maritime-logistics-and-support-services', 'upstream local.maritime-logistics-and-support-services');
Route::view('/our-operations', 'upstream local.our-operations');
Route::view('/contact', 'upstream local.contact');
Route::view('/well-operations', 'upstream local.well-operations');
Route::view('/error', 'upstream local.error');
Route::view('/produced-water-treatment', 'upstream local.produced-water-treatment');
Route::view('/alternative-crude-oil-evacuation', 'upstream local.alternative-crude-oil-evacuation');

