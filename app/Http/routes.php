<?php
use App\Mark;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('marks/about','TestController@about');
Route::get('marks/send','TestController@send');
Route::resource('marks', 'TestController');
