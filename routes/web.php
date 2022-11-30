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

//ログイン
Route::get('/', function () {
    return view('/login/index');
});

// view直接呼び出し設定
Route::view('/top', '/top/index') -> name('top');

//商品マスタ
//Route::view('/product', '/product/index') -> name('product');
Route::prefix('/product') ->group(function(){
    //商品マスタ一覧　初期表示
    Route::get('/','ProductController@index') ->name('product.index');
    //検索ボタン押下
    Route::get('/search','ProductController@search') ->name('product.search');
    //商品コード押下
    Route::get('/entry','ProductController@entry') ->name('product.entry');
    //商品変更
    Route::post('/edit','ProductController@edit') ->name('product.edit');
    //商品新規登録
    Route::get('/entry/insert','ProductController@insert') ->name('product.insert');
    //削除
    Route::get('/delete/{product_code}','ProductController@delete') ->name('product.delete');
});


//商品マスタ登録／変更
//Route::view('/product/entry', '/product/entry') -> name('product.entry');

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

// Route::prefix('/') ->group(function(){//名前を一意にしてるのは問題あっても困らないため

//     //ログイン
//     Route::get('/','LoginControl@index') ->name('/login/index');
//     //商品マスタ
//     Route::get('/product','ProductController@search') ->name('/product/index');
//     //商品マスタ登録／変更
//     Route::get('/product/entry','ProductController@edit')->name('product_entry');
//     //取引先_仕入先マスタ
//     Route::post('/supplier','SweetController@update') ->name('supplier');
//     //企業マスタ登録／変更
//     Route::get('/delete/{id}','SweetController@delete') ->name('supplier_entry');
//     //ユーザマスタ
//     Route::post('/signUp','SweetController@signUp') ->name('user');
//     //ユーザ登録／変更
//     Route::post('/signUp','SweetController@signUp') ->name('user_entry');
//     //受注管理
//     Route::post('/signUp','SweetController@signUp') ->name('receive');
//     //受注登録／変更
//     Route::view('/receive/entry', '/receive/entry') -> name('receive_entry');
//     //発注管理
//     Route::post('/signUp','SweetController@signUp') ->name('place');
//     //発注登録／変更
//     Route::post('/signUp','SweetController@signUp') ->name('place_entry');
//     //入金管理
//     Route::post('/signUp','SweetController@signUp') ->name('payment');
//     //入金管理 変更登録
//     Route::post('/signUp','SweetController@signUp') ->name('payment_edit');
//     //入金管理 新規登録
//     Route::post('/signUp','SweetController@signUp') ->name('payment_entry');
//     //発送管理
//     Route::post('/signUp','SweetController@signUp') ->name('send');
//     //発送登録
//     Route::post('/signUp','SweetController@signUp') ->name('send_entry');
//     //勤怠管理
//     Route::post('/signUp','SweetController@signUp') ->name('attendance');


//     Route::prefix('/') ->group(function(){
//         //明細表示
//         Route::get('/{id}','SweetController@detail') ->where('id','[0-9]{3}') ->name('sweet_detail.index');
//         //明細編集
//         Route::get('/edit/{id}','SweetController@detailEdit') ->name('sweet_detail.edit');
//         //明細削除
//         Route::get('/delete/{id}','SweetController@detailDelete') ->name('sweet_detail.delete');
//         //明細更新
//         Route::post('/update','SweetController@detailUpdate') ->name('sweet_detail.update');
//         //新規登録
//         Route::post('/signUp','SweetController@detailSignUp') ->name('sweet_detail.signUp');
//     });
// });