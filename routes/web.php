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
/*---------------博客前台---------------*/
Route::get('/', 'IndexController@index');
Route::get('/sider', 'IndexController@sider');
Route::get('/shortcodes', 'IndexController@shortcodes');
Route::get('/post', 'IndexController@post');
Route::get('/gallery', 'IndexController@gallery');
Route::get('/elastic', 'IndexController@elastic');
Route::get('/contact', 'IndexController@contact');
/*---------------博客后台-start---------------*/
Route::get('admin/calendar','Admin\PatterController@calendar');
Route::get('admin/charts','Admin\PatterController@charts');
Route::get('admin/dashboard','Admin\PatterController@dashboard');
Route::get('admin/error','Admin\PatterController@error');
Route::get('admin/files','Admin\PatterController@files');
Route::get('admin/form_elements','Admin\PatterController@form_elements');
Route::get('admin/form_layouts','Admin\PatterController@form_layouts');
Route::get('admin/gallery','Admin\PatterController@gallery');
Route::get('admin/grids','Admin\PatterController@grids');
Route::get('admin/icons','Admin\PatterController@icons');
Route::get('admin/index','Admin\PatterController@index');
Route::get('admin/table','Admin\PatterController@table');
Route::get('admin/typography','Admin\PatterController@typography');
Route::get('admin/widgets','Admin\PatterController@widgets');

//添加文章
Route::get('admin/article/addarticle','Admin\ArticleController@addArticle');
Route::post('admin/article/newarticle','Admin\ArticleController@newArticle');
Route::get('admin/article/articleList','Admin\ArticleController@articleList');
/*---------------博客后台-end---------------*/