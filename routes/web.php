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
Route::get('/find', function () {
    $config['center'] = '54.310719, 48.382637';
	$config['zoom'] = '14';
    $config['map_height'] = '500px';
	$config['scrollwheel'] = false;
	GMaps::initialize($config);
	
	$map = GMaps::create_map();
	
    return view('welcome')->with('map', $map);

});
//магазин
Route::get('/','ArticlesController2@index');
Route::get('/article/{title}/{slug}.html', 'ArticlesController2@showArticle')->name('blog.show');
//
Route::get('/form', function () {
    return view('form');
});
Route::post('send-mail', 'MailSetting@send_form');
Auth::routes();
//магазин
//Route::get('/article', 'ArticlesController2@index');
//Route::get('/article/{id}/{slug}.html', 'ArticlesController2@showArticle')->where('id', '\d')->name('blog.show');
Route::resource('queries', 'SearchController');
Route::post('/', 'SearchController@search');
Route::get('/home', 'HomeController@index');
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');
Route::prefix('admin')->group(function(){
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
	Route::get('/panel', 'AdminController@index2')->name('admin.dashboard');
	//роуты категорий
	Route::get('/categories',"CategoriesController@index")->name('categories');
	Route::get('/categories/add','CategoriesController@addCategory')->name('categories.add');
	Route::post('/categories/add','CategoriesController@addRequestCategory');
	Route::get('/categories/edit/{id}','CategoriesController@editCategory')->where('id','\d+')->name('categories.edit');
	Route::post('/categories/edit/{id}','CategoriesController@editRequestCategory')->where('id','\d+')->name('categories.edit');
	Route::delete('/categories/delete','CategoriesController@deleteCategory')->name('categories.delete');
	//товары
        Route::get('/articles', 'Admin\ArticlesController@index')->name('articles');
        Route::get('/articles/add', 'Admin\ArticlesController@addArticle')->name('articles.add');
        Route::post('/articles/add', 'Admin\ArticlesController@addRequestArticle');
        Route::get('/articles/edit/{id}', 'Admin\ArticlesController@editArticle')->where('id', '\d+')->name('articles.edit');
        Route::post('/articles/edit/{id}', 'Admin\ArticlesController@editRequestArticle')->where('id', '\d+');
        Route::delete('/articles/delete', 'Admin\ArticlesController@deleteArticle')->name('articles.delete');
    //Юзеры   
    	Route::get('/users', 'UsersController@index')->name('users'); 

});


