<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "HomeController@index")->name('home');
Route::get('tentang', "HomeController@tentang")->name('tentang');

Route::get('adminsignin', "AdminController@index")->name('adminsignin');
Route::post('adminpostsignin', "AdminController@postsignin")->name('adminpostsignin');
Route::get('adminlogout', "AdminController@logout")->name('adminlogout');

Route::get('pembudidayasignin', "PembudidayaController@signin")->name('pembudidayasignin');
Route::post('pembudidayapostsignin', "PembudidayaController@pembudidayapostsignin")->name('pembudidayapostsignin');
Route::get('pembudidayasignup', "PembudidayaController@signup")->name('pembudidayasignup');
Route::post('pembudidayapostsignup', "PembudidayaController@postsignup")->name('pembudidayapostsignup');
Route::get('pembudidayalogout', "PembudidayaController@logout")->name('pembudidayalogout');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){
    Route::get("datapembudidaya", "DataPembudidayaController@index")->name('datapembudidaya');
    Route::get("riwayat", "RiwayatController@index")->name('riwayat');
    Route::resource('gejala', "GejalaController");
});

Route::group(['middleware' => ['auth', 'checkRole:admin,pembudidaya']], function(){
    Route::get('diagnosa', "DiagnosaController@index")->name('diagnosa');
    Route::resource('penyakit', "PenyakitController");
});
