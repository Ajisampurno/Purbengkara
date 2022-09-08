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



Route::get('/', 'HomefrontController@index')->name('/');

Route::group(['middleware' => 'guest'], function () {

    Route::get('/admin', function () {
        return view('auth.login');
    })->name('admin');

    Route::get('login', 'loginController@authenticate')->name('login');
});


Route::group(['middleware' => 'auth'], function () {

Route::get('/home', 'HomeController@index')->name('index');
Route::get('logout', 'HomeController@logout')->name('logout');

Route::get('/setting', 'SettingController@index');
Route::post('/setting/save', 'SettingController@save');

//Sosial Media
Route::get('/sosmed', 'SosmedController@index');
Route::get('/sosmedtable', 'SosmedController@datatable');
Route::post('/simpansosmed', 'SosmedController@simpan');
Route::get('/editsosmed', 'SosmedController@edit');
Route::get('/hapussosmed', 'SosmedController@hapus');

//Manage User
Route::get('/user', 'UserController@index');
Route::get('/usertable', 'UserController@datatable');
Route::post('/simpanuser', 'UserController@simpan');
Route::get('/edituser', 'UserController@edit');
Route::get('/hapususer', 'UserController@hapus');

//Slide Image
Route::get('/slideimage', 'SlideimageController@index');
Route::get('/slideimagetable', 'SlideimageController@datatable');
Route::post('/simpanslideimage', 'SlideimageController@simpan');
Route::get('/editslideimage', 'SlideimageController@edit');
Route::get('/hapusslideimage', 'SlideimageController@hapus');

}); // End Route Groub middleware auth
