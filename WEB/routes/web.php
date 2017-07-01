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

Route::get('/',[
	'as' => 'index',
	'uses' => 'HomeController@IndexPage'
]);
Route::get('/BLOG',[
	'as' => 'blog',
	'uses' => 'HomeController@BlogPage'
]);
Route::get('/CONTACT',[
	'as' => 'contact',
	'uses' => 'HomeController@ContactPage'
]);
Route::get('/NHAHANG',[
	'as' => 'rest',
	'uses' => 'HomeController@RestaurantPage'
]);

Route::get('/NOITHAT/{ID}',[
	'as' => 'TKNT-DT',
	'uses' => 'HomeController@TKNTDetail'
]);

Route::get('/NHAHANG/{ID}',[
	'as' => 'TCNH-DT',
	'uses' => 'HomeController@TCNHDetail'
]);

Route::get('/admincp',[
	'as' => 'admincp.L-TKNT',
	'uses' => 'AdminController@TKNTList'
]);

/*-------------------ADMIN----------------*/

Route::get('/admincp/TKNT-C', function () {
    return view('admincp.tknt-create');
});
/*---------------------------------------*/
Route::get('/admincp/C-TKNT',[
	'as' => 'admincp.C-TKNT',
	'uses' => 'AdminController@TKNTCreate'
]);
Route::get('/admincp/E-TKNT/{ID}',[
	'as' => 'admincp.E-TKNT',
	'uses' => 'AdminController@TKNTGet'
]);
Route::get('/admincp/L-TKNT',[
	'as' => 'admincp.L-TKNT',
	'uses' => 'AdminController@TKNTList'
]);
/*---------------------------------------*/
Route::get('/admincp/C-TCNH',[
	'as' => 'admincp.C-TCNH',
	'uses' => 'AdminController@TCNHCreate'
]);
Route::get('/admincp/E-TCNH/{ID}',[
	'as' => 'admincp.E-TCNH',
	'uses' => 'AdminController@TCNHGet'
]);
Route::get('/admincp/L-TCNH',[
	'as' => 'admincp.L-TCNH',
	'uses' => 'AdminController@TCNHList'
]);
/*---------------------------------------*/
Route::get('/admincp/C-BLOG',[
	'as' => 'admincp.C-BLOG',
	'uses' => 'AdminController@BLOGCreate'
]);
Route::get('/admincp/E-BLOG/{ID}',[
	'as' => 'admincp.E-BLOG',
	'uses' => 'AdminController@BLOGGet'
]);
Route::get('/admincp/L-BLOG',[
	'as' => 'admincp.L-BLOG',
	'uses' => 'AdminController@BLOGList'
]);
/*----------------BACKEND----------------*/
Route::post('/admincp/CTKNT',[
	'as' => 'admincp.CreateTKNT',
	'uses' => 'AdminController@TKNTStore'
	]);
Route::post('/admincp/ETKNT',[
	'as' => 'admincp.EditTKNT',
	'uses' => 'AdminController@TKNTEdit'
	]);
Route::post('/admincp/DTKNT',[
	'as' => 'admincp.DeleteTKNT',
	'uses' => 'AdminController@TKNTDelete'
	]);
Route::get('/admincp/GTKNT',[
	'as' => 'admincp.GetTKNT',
	'uses' => 'AdminController@TKNTGet'
	]);
/*---------------------------------------*/
Route::post('/admincp/CTCNH',[
	'as' => 'admincp.CreateTCNH',
	'uses' => 'AdminController@TCNHStore'
	]);
Route::post('/admincp/ETCNH',[
	'as' => 'admincp.EditTCNH',
	'uses' => 'AdminController@TCNHEdit'
	]);
Route::post('/admincp/DTCNH',[
	'as' => 'admincp.DeleteTCNH',
	'uses' => 'AdminController@TCNHDelete'
	]);
Route::get('/admincp/GTCNH',[
	'as' => 'admincp.GetTCNH',
	'uses' => 'AdminController@TCNHGet'
	]);
/*---------------------------------------*/
Route::post('/admincp/CBLOG',[
	'as' => 'admincp.CreateBLOG',
	'uses' => 'AdminController@BLOGStore'
	]);
Route::post('/admincp/EBLOG',[
	'as' => 'admincp.EditBLOG',
	'uses' => 'AdminController@BLOGEdit'
	]);
Route::post('/admincp/DBLOG',[
	'as' => 'admincp.DeleteBLOG',
	'uses' => 'AdminController@BLOGDelete'
	]);
Route::get('/admincp/GBLOG',[
	'as' => 'admincp.GetBLOG',
	'uses' => 'AdminController@BLOGGet'
	]);



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
