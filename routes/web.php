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
// echo "web"; die;
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/loadgridview', function () {
	// error_log("ROOT ROUTE");
    // return view('stylist.postloginview.create_grid');
// });
Route::get('/loadgridview','App\Http\Controllers\CreateGridController@loadgridview');
