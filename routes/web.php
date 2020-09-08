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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Site\SiteController@homepage')->name('homepage');
Route::get('/homes','Site\SiteController@Homes')->name('homes');
Route::get('/detail/{id}','Site\SiteController@Detail')->name('detail');


Route::group([ 'middleware' => ['web', '\crocodicstudio\crudbooster\middlewares\CBBackend'],], function () {
	Route::get('admin', 'DasborController@index');
});
