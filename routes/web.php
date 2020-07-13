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

Route::group(['middleware' => ['auth']], function () {
// Route url
Route::get('/', 'DashboardController@dashboardAnalytics');

// Route Dashboards
Route::get('/dashboard', 'DashboardController@dashboardAnalytics');

// Route Components
Route::resource('library', 'LibraryController');

});


//Auth
Auth::routes();

Route::post('/login/validate', 'Auth\LoginController@validate_api');
