<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController as Member;

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
//Route::get('/', function () {
  //  return view('welcome');
//});
Route::domain('stylist.com')->group(function () {
Route::get('/','App\Http\Controllers\CreateGridController@index');
Route::get('/loadgridview','App\Http\Controllers\CreateGridController@loadgridview');
});
Route::get('/', [Member::class, 'index']);
Route::get('/member-submit-request', [Member::class, 'memberSubmitRequest']);
Route::post('/member-submit-request-post', [Member::class, 'memberSubmitRequestPost']);

// Route::get('/loadgridview', function () {
	// error_log("ROOT ROUTE");
    // return view('stylist.postloginview.create_grid');
// });

