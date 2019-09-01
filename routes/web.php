<?php


Route::get('/','HomeController@index')->name('home');
Route::get('/test','HomeController@test')->name('test');

Route::prefix('property')->group(function(){
	Route::get('/all-properties-in-{slug}','HomeController@property_by_province')->name('propery.by.province');
	Route::get('/list_by_category','HomeController@listProperties')->name('property.by_category');
	Route::get('/allproperties','HomeController@allProperties')->name('property.allProperties');
	Route::get('/allproperties-grid','HomeController@allPropertiesGrid')->name('property.allProperties.grid');
	// Route::get('{type}/list_by_type/{sub_type}','HomeController@property_by_type')->name('propery.by.type');
	Route::get('/{slug}','HomeController@property_by_type')->name('propery.by.type');

});

Auth::routes();

Route::get('get-district-list','Member\PostController@getDistrictList');
Route::get('get-commune-list','Member\PostController@getCommuneList');

// free post ads route
	Route::prefix('post')->group(function(){
		Route::get('/','Member\PostController@index')->name('post.index');
		Route::get('{id}/category={cat_id}','Member\PostController@indexEdit')->name('post.indexEdit');
		Route::get('category={cate_id}','Member\PostController@create')->name('post.create');
		Route::post('/','Member\PostController@saveProperties')->name('post.store');
		Route::get('property={id}category={cat_id}','Member\PostController@editProperties')->name('post.edit');
		Route::put('/{id}/update','Member\PostController@updateProperties')->name('post.update');
		Route::post('/destroy','Member\PostController@deleteProperties')->name('post.destroy');
		Route::get('/{slug}','Member\PostController@showProperties')->name('post.show');
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

// member route
	Route::prefix('member')->group(function() {
		Route::get('/edit-profile','Member\DashboardController@editProfile')->name('member.edit-profile');
		Route::get('/change-password','Member\DashboardController@changePassword')->name('member.change-password');
		Route::get('/store','Member\DashboardController@store')->name('member.store');
		Route::get('/store-banner','Member\DashboardController@storeBanner')->name('member.store-banner');
	});

// Ajax crud
	Route::get('ajax','AjaxController@index')->name('ajax.index');
	Route::get('ajax-read','AjaxController@readData')->name('ajax.create');
	Route::post('ajax-store','AjaxController@store')->name('ajax.store');
	Route::post('ajax-destroy','AjaxController@destroy')->name('ajax.destroy');
	Route::get('ajax-edit','AjaxController@edit')->name('ajax.edit');
	Route::post('ajax-update','AjaxController@update')->name('ajax.update');
	Route::get('ajax-pagination','AjaxController@pagination')->name('ajax.pagination');
	Route::get('ajax-studentPage','AjaxController@studentPage')->name('ajax.studentPage');



