<?php

use App\Ride;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return response()->json(["message"=> "Welcome home"]);
});

Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
Route::post('register', 'Auth\RegisterController@register');

Route::group(['middleware' => 'auth:api'], function() {
    Route::resource('ride', 'RideController');
    Route::resource('booking', 'BookingController');
    Route::get('booking/ride/{ride}', 'BookingController@ride');
});
