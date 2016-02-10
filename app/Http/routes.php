<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    // Authentication routes...
    Route::get('auth/login',    ['as'=>'login', 'uses'=>'Auth\AuthController@getLogin']);
    Route::post('auth/login',   ['as'=>'login_post', 'uses'=>'Auth\AuthController@postLogin']);
    Route::get('auth/logout',   ['as'=>'logout', 'uses'=>'MainController@logout']);
    //ARTICLES
    Route::post('/admin/create_article',				                        ['as'=>'create_article', 'uses'=>'ArticleController@create_article', 'middleware'=>'auth']); // redirect
    Route::get('/admin/new_article',				                            ['as'=>'new_article', 'uses'=>'ArticleController@new_article', 'middleware'=>'auth']); // redirect
    Route::get('/admin/articles', 						                        ['as'=>'admin_articles', 'uses'=>'ArticleController@admin_articles', 'middleware'=>'auth']); // articles (with delete form + change link)
    Route::get('/articles/{category}/{category_name}/{lang?}',                  ['as'=>'articles', 		 'uses'=>'ArticleController@articles']); // articles
    Route::get('/article/{article_id}/{article}/{lang?}',                       ['as'=>'article', 		 'uses'=>'ArticleController@article']); // article
    Route::get('/admin/change_article/{article_id}/{article_lang}', 	        ['as'=>'change_article', 'uses'=>'ArticleController@change_article', 'middleware'=>'auth']); // article_change (links)
    Route::post('/admin/update_article/', 	                                    ['as'=>'update_article', 'uses'=>'ArticleController@update_article', 'middleware'=>'auth']); // redirect
    Route::post('/admin/delete_article/{article_id}/{article_lang}', 	        ['as'=>'delete_article', 'uses'=>'ArticleController@delete_article', 'middleware'=>'auth']); // redirect->with
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin',                                ['as'=>'admin',             'uses'=>'MainController@admin']); // admin
    Route::get('/admin/feedback', 		                ['as'=>'admin_feedback', 	'uses'=>'MainController@admin_feedback']); // admin
    Route::post('/admin/delete_feedback/{feedback_id}', ['as'=>'delete_feedback',   'uses'=>'MainController@delete_feedback']); // admin
    Route::get('/admin/collect', 	                    ['as'=>'admin_collect',     'uses'=>'MainController@admin_collect']); // admin
    Route::post('/admin/delete_collect/{collect_id}', 	['as'=>'delete_collect',    'uses'=>'MainController@delete_collect']); // admin
});

//SERVICES
Route::get('/services/{lang?}',           ['as'=>'services',      'uses'=>'MainController@services']);
Route::get('/services/{service}/{lang?}', ['as'=>'service',       'uses'=>'MainController@service']);

//STATIC PAGES
Route::group(['middleware' => ['web']], function () {
    //INTERACTIONS
    Route::post('/feedback',            ['as'=>'feedback',      'uses'=>'MainController@feedback']);
    Route::post('/collect',             ['as'=>'collect',       'uses'=>'MainController@collect']);
    Route::get('/contacts/{lang?}',     ['as'=>'contacts',      'uses'=>'MainController@contacts']);
    Route::get('/{lang?}',              ['as'=>'index',          'uses'=>'MainController@index']);

});
Route::get('/about/{lang?}',     ['as'=>'about',          'uses'=>'MainController@about']);
//Route::get('/error',             ['as'=>'error_c',          'uses'=>'MainController@error']);

