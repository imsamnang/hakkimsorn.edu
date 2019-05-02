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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'Member\DashboardController@index')->name('home');
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

// Route::get('admin/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
// Route::post('admin', 'AuthAdmin\LoginController@login')->name('admin.login.submit');

// Route::group(['prefix' => 'admin','middleware' => 'assign.guard:admin,admin/login'],function(){	
// 	Route::get('/', 'Admin\DashboardController@index')->name('admin.home');
// });

Route::prefix('admin')->group(function() {
    Route::get('/', 'Admin\DashboardController@index')->name('admin.home');
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
    // Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    // Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    // Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    // Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
});
