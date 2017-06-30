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
    return view('index');
});
Route::get('/lienhe', function () {
    return view('contact');
});


/*-------------------ADMIN----------------*/

Route::get('/admincp/TKNT-C', function () {
    return view('admincp.tknt-create');
});

Route::get('/admincp/TKNT-C',[
	'as' => 'admincp.C-TKNT',
	'uses' => 'AdminController@TKNTCreate'
]);

Route::get('/admincp/TKNT-E/{ID}',[
	'as' => 'admincp.E-TKNT',
	'uses' => 'AdminController@TKNTGet'
]);


/*---------------BACKEND-----------------*/
Route::post('/admincp/CTKNT',[
	'as' => 'admincp.CreateTKNT',
	'uses' => 'AdminController@TKNTStore'
	]);

Route::post('/admincp/ETKNT',[
	'as' => 'admincp.EditTKNT',
	'uses' => 'AdminController@TKNTEdit'
	]);

Route::get('/admincp/GTKNT',[
	'as' => 'admincp.GetTKNT',
	'uses' => 'AdminController@TKNTGet'
	]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
