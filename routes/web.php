<?php

Route::get('/test', function(){
	return App\User::find(1)->profile;
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('logout', [
	'as' => 'logout', 
	'uses' => 'Auth\LoginController@logout'
	]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	
	Route::get('/home',[
		'uses' => 'HomeController@index',
    	'as'  => 'home'
	]);

	Route::get('/post/create', [
    	'uses' => 'PostsController@create',
    	'as'  => 'post.create'
	]);

	Route::post('/post/store', [
	    'uses' => 'PostsController@store',
	    'as'  => 'post.store'
	]);

	Route::post('/post/update/{id}', [
	    'uses' => 'PostsController@update',
	    'as'  => 'post.update'
	]);

	Route::get('/post/delete/{id}', [
	    'uses' => 'PostsController@destroy',
	    'as'  => 'post.delete'
	]);

	Route::get('/post/trashed', [
	    'uses' => 'PostsController@trashed',
	    'as'  => 'post.trashed'
	]);

	Route::get('/post/kill/{id}', [
	    'uses' => 'PostsController@kill',
	    'as'  => 'post.kill'
	]);

	Route::get('/post/restore/{id}', [
	    'uses' => 'PostsController@restore',
	    'as'  => 'post.restore'
	]);
	
	Route::get('/post/edit/{id}', [
	    'uses' => 'PostsController@edit',
	    'as'  => 'post.edit'
	]);

	Route::get('/posts', [
    	'uses' => 'PostsController@index',
    	'as'  => 'posts'
	]);

	Route::get('/categories', [
    	'uses' => 'CategoriesController@index',
    	'as'  => 'categories'
	]);

	Route::get('/category/create', [
    	'uses' => 'CategoriesController@create',
    	'as'  => 'category.create'
	]);

	Route::get('/category/edit/{id}', [
    	'uses' => 'CategoriesController@edit',
    	'as'  => 'category.edit'
	]);

	Route::get('/category/delete/{id}', [
    	'uses' => 'CategoriesController@destroy',
    	'as'  => 'category.delete'
	]);

	Route::post('/category/store', [
	    'uses' => 'CategoriesController@store',
	    'as'  => 'category.store'
	]);

	Route::post('/category/update/{id}', [
	    'uses' => 'CategoriesController@update',
	    'as'  => 'category.update'
	]);

	Route::get('/tags', [
    	'uses' => 'TagsController@index',
    	'as'  => 'tags'
	]);

	Route::get('/tag/create', [
    	'uses' => 'TagsController@create',
    	'as'  => 'tag.create'
	]);

	Route::get('/tag/edit/{id}', [
    	'uses' => 'TagsController@edit',
    	'as'  => 'tag.edit'
	]);

	Route::get('/tag/delete/{id}', [
    	'uses' => 'TagsController@destroy',
    	'as'  => 'tag.delete'
	]);

	Route::post('/tag/store', [
	    'uses' => 'TagsController@store',
	    'as'  => 'tag.store'
	]);

	Route::post('/tag/update/{id}', [
	    'uses' => 'TagsController@update',
	    'as'  => 'tag.update'
	]);

	Route::get('/users', [
    	'uses' => 'UsersController@index',
    	'as'  => 'users'
	]);

	Route::get('/user/create', [
    	'uses' => 'UsersController@create',
    	'as'  => 'user.create'
	]);

	Route::get('/user/edit/{id}', [
    	'uses' => 'UsersController@edit',
    	'as'  => 'user.edit'
	]);

	Route::get('/user/delete/{id}', [
    	'uses' => 'UsersController@destroy',
    	'as'  => 'user.delete'
	]);

	Route::post('/user/store', [
	    'uses' => 'UsersController@store',
	    'as'  => 'user.store'
	]);

	Route::post('/user/update/{id}', [
	    'uses' => 'UsersController@update',
	    'as'  => 'user.update'
	]);
});

