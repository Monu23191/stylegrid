<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController as Member;
use App\Http\Controllers\MemberWebsiteController as Website;

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

Route::get('/member-registration', [Website::class, 'index']);
Route::post('/add-member', [Website::class, 'addMember']);
Route::post('/check-member-existance', [Website::class, 'checkMemberExistance']);
Route::get('/member-login', [Website::class, 'memberLogin']);
Route::post('/member-login-post', [Website::class, 'memberLoginPost']);

Route::domain('stylist.com')->group(function () {
Route::get('/','App\Http\Controllers\CreateGridController@index');
Route::get('/loadgridview','App\Http\Controllers\CreateGridController@loadgridview');
});
Route::get('/', [Member::class, 'index']);
Route::get('/sourcing', [Member::class, 'memberSourcing']);
Route::get('/offer-received/{title}', [Member::class, 'memberOfferReceived']);
Route::get('/member-offer-accepted', [Member::class, 'memberOfferAcceptedSuccessful']);
Route::post('/member-accept-offer', [Member::class, 'memberAcceptOffer']);
Route::post('/member-decline-offer', [Member::class, 'memberDeclineOffer']);
Route::get('/member-submit-request-complete', [Member::class, 'memberSubmitRequestComplete']);
Route::get('/member-grid', [Member::class, 'memberGrid']);
Route::get('/member-grid-details', [Member::class, 'memberGridDetails']);
Route::get('/member-orders', [Member::class, 'memberOrders']);
Route::get('/member-submit-request', [Member::class, 'memberSubmitRequest']);
Route::post('/get-brands', [Member::class, 'getBrandList']);
Route::post('/member-submit-request-post', [Member::class, 'memberSubmitRequestPost']);

// Route::get('/loadgridview', function () {
	// error_log("ROOT ROUTE");
    // return view('stylist.postloginview.create_grid');
// });

