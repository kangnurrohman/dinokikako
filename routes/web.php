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
    Route::get("riwayat/{id}/delete", "RiwayatController@destroy");
    Route::resource('gejala', "GejalaController")->except(['create','show','destroy']);
    Route::get('gejala/{id}/delete', "GejalaController@destroy");
});

Route::group(['middleware' => ['auth', 'checkRole:admin,pembudidaya']], function(){
    Route::get('hasildiagnosa/{id}', "DiagnosaController@hasilDiagnosa")->name('hasildiagnosa');
    Route::get('diagnosa', "DiagnosaController@index")->name('diagnosa');
    Route::post('diagnosa', "DiagnosaController@diagnosa")->name('storeDiagnosa');
    Route::resource('penyakit', "PenyakitController")->except(['create','destroy']);
    Route::get('penyakit/{id}/delete', "PenyakitController@destroy");
});
