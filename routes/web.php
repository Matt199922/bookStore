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
    return view('welcome');
});

Route::get('/cart', function () {
  return view('cart');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/books', 'ModuleController@list');

Route::get('/login', function () {
    return view('login');
});

Route::get('login', array(
    'uses' => 'ModuleController@showLogin'
  ));
  // route to process the form
  Route::post('login', array(
    'uses' => 'ModuleController@doLogin'
  ));
  Route::get('logout', array(
    'uses' => 'ModuleController@doLogout'
  ));
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// user routes
Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
  Route::get('/', 'HomeController@index')->name('user_dashboard');
});

// admin routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
  Route::get('/', 'HomeController@index')->name('admin_dashboard');
});

Route::get('image/{filename}', 'HomeController@displayImage')->name('image.displayImage');



/*Route::get('/home', 'CustomerController@index');

Route::get('/home', 'StaffController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 */