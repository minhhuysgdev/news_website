<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\TheLoai;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'theloai'], function() {
        Route::get('danhsach', 'TheLoaiController@getDanhSach');
        
        Route::get('sua/{id}', 'TheLoaiController@getSua');
        Route::post('sua/{id}', 'TheLoaiController@postSua');

        Route::get('xoa/{id}', 'TheLoaiController@getXoa');
    
        Route::get('them', 'TheLoaiController@getThem');
        Route::post('them', 'TheLoaiController@postThem');
    });

    Route::group(['prefix' => 'loaitin'], function() {
        Route::get('danhsach', 'TheLoaiController@getDanhSach');

        Route::get('sua', 'TheLoaiController@getSua');

        Route::get('them', 'TheLoaiController@getThem');
    });

    Route::group(['prefix' => 'tintuc'], function() {
        Route::get('danhsach', 'TheLoaiController@getDanhSach');

        Route::get('sua', 'TheLoaiController@getSua');

        Route::get('them', 'TheLoaiController@getThem');
    });
});