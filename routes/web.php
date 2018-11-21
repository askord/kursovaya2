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
    $config['center'] = 'Air Canada Centre, Toronto';
	$config['zoom'] = '14';
    $config['map_height'] = '500px';
	$config['scrollwheel'] = false;
	GMaps::initialize($config);
	
	$map = GMaps::create_map();
	
    return view('welcome')->with('map', $map);

});
Route::get('/form', function () {
    return view('form');
});
Route::post('send-mail', 'MailSetting@send_form');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');
Route::prefix('admin')->group(function(){
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
	
});


