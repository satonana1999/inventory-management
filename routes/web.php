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

// ログイン
Route::get('/', function () {
    return view('/login/index');
});

// view直接呼び出し設定
Route::view('/top', '/top/index') -> name('top');

//商品マスタ
Route::view('/product', '/product/index') -> name('product');

//商品マスタ登録／変更
Route::view('/product/entry', '/product/entry') -> name('product_entry');

//取引先_仕入先マスタ
Route::view('/supplier', '/supplier/index') -> name('supplier');

//企業マスタ登録／変更
Route::view('/supplier/entry', '/supplier/entry') -> name('supplier_entry');

//ユーザマスタ
Route::view('/user', '/user/index') -> name('user');

//ユーザ登録／変更
Route::view('/user/entry', '/user/entry') -> name('user_entry');

//受注管理
Route::view('/receive', '/receive/index') -> name('receive');

//受注登録／変更
Route::view('/receive/entry', '/receive/entry') -> name('receive_entry');

//発注管理
Route::view('/place', '/place/index') -> name('place');

//発注登録／変更
Route::view('/place/entry', '/place/entry') -> name('place_entry');

//入金管理
Route::view('/payment', '/payment/index') -> name('payment');

//入金管理 変更登録
Route::view('/payment/edit', '/payment/edit') -> name('payment_edit');

//入金管理 新規登録
Route::view('/payment/entry', '/payment/entry') -> name('payment_entry');

//発送管理
Route::view('/send', '/send/index') -> name('send');

//発送登録
Route::view('/send/entry', '/send/entry') -> name('send_entry');

//勤怠管理
Route::view('/attendance', '/attendance/index') -> name('attendance');
