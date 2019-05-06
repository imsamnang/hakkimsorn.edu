<?php


Route::view('/by_pro','front.property_by_province');

Route::get('/','HomeController@index')->name('home');

Route::prefix('property')->group(function(){	
	Route::get('/{id}/properties_by_province','HomeController@property_by_province')->name('propery.by.province');
});

Auth::routes();

	Route::get('get-district-list','Member\PostController@getDistrictList');
	Route::get('get-commune-list','Member\PostController@getCommuneList');

// free post ads route
Route::prefix('post')->group(function(){	
	Route::get('/','Member\PostController@index')->name('post.index');
	Route::get('/{post_id}/create','Member\PostController@create')->name('post.create');
	Route::post('/','Member\PostController@saveProperties')->name('post.store');
	Route::get('/{id}/edit','Member\PostController@editProperties')->name('post.edit');
	Route::put('/{id}/update','Member\PostController@updateProperties')->name('post.update');
	Route::delete('/{id}/destroy','Member\PostController@deleteProperties')->name('post.destroy');
	Route::get('/{id}/detail','Member\PostController@showProperties')->name('post.show');
	Route::get('/list_by_category','Member\PostController@listProperties')->name('post.by_category');
	Route::get('/allproperties','Member\PostController@allProperties')->name('post.allProperties');
});

Route::get('/manage_ads', 'Member\DashboardController@index')->name('member.home');
Route::get('/likes', 'Member\DashboardController@index')->name('likes');
Route::get('/notifications', 'Member\DashboardController@index')->name('notifications');
Route::get('/setting', 'Member\DashboardController@index')->name('setting');
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
    Route::get('/', 'Admin\DashboardController@index')->name('admin.home');
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
    Route::get('/register', 'AuthAdmin\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'AuthAdmin\RegisterController@createAdmin')->name('admin.register.submit');
    // Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    // Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    // Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    // Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
});


// Ajax crud
Route::get('ajax-index','AjaxController@index');