<?php

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
    return redirect()->route('login');
});

Auth::routes();


Route::group(['middleware' => ['auth']], function () {

	Route::get('/home', 'HomeController@index')->name('home');


	/* Only Managers role are allowed to go in */
	Route::group(['middleware' => ['check.role:'.Config::get('constants.roles.MANAGER')]], function () {

		Route::get('/mindex', 'ManagerController@index')->name('mindex');
	});

	/* Only Staffs role are allowed to go in */
	Route::group(['middleware' => ['check.role:'.Config::get('constants.roles.STAFF')]], function () {

		Route::get('/sindex', 'StaffController@index')->name('sindex');
	});

	/* Route that can be access by manager and staff */
	Route::group(['middleware' => ['check.permission']], function () {

		Route::resource('items', 'ItemController');
	});	



});

