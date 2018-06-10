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

Route::get('/', function(){
    $val['title'] = 'Trang chủ';
    return view('index', $val);
});

Route::get('dichvu', function(){
    $val['title'] = 'Dịch vụ';
    return view('dichvu', $val);
});

Route::get('dashboard', function(){
    $val['title'] = 'Trình quản lý';
    return view('dashboard', $val);
});

Route::post('login', 'authControl@login')->name('login');
Route::get('logout', 'authControl@logout');