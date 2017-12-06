<?php

use Illuminate\Http\Request;

use App\Listing;

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

Route::get('/listing/{listing}', 'ListingController@get_listing_api');

Route::get('/', 'ListingController@get_home_api');

Route::get('/saved', 'ListingController@get_home_api');

Route::post('/user/toggle_saved', 'UserController@toggle_saved')->middleware('auth:api');
