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

Route::get('/', 'HomeController@getHome');
Route::get('/auth/login', function () {
    return view('auth/login');
});
Route::get('/auth/logout', function () {
    return "logout usuario";
});
Route::get('/catalog','CatalogController@getIndex');
Route::get('/catalog/show/{id}','CatalogController@getShow');
Route::get('/catalog/create','CatalogController@getCreate');
Route::get('/catalog/edit/{id}','CatalogController@getEdit');


/* actividad 4 (I)
Route::get('/', function () {
    return view('home');
});
Route::get('/auth/login', function () {
    return view('auth/login');
});
Route::get('/auth/logout', function () {
    return "logout usuario";
});
Route::get('/catalog', function () {
    return view('catalog/index');
});
Route::get('/catalog/show/{id}', function ($id) {
    return view('catalog/show', array('id'=>$id));
});
Route::get('/catalog/create', function () {
return view('catalog/create');
});
Route::get('/catalog/edit/{id}', function ($id) {
    return view('catalog/edit', array('id'=>$id));
});

*/



