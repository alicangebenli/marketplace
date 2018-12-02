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
| Developer Ali Can Gebenli
*/

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/urun/{name}/{id}','HomeController@product')->name('home.product');
Route::get('/kategori/{name}/','HomeController@category')->name('home.category');

Route::namespace('User')->prefix('user')->group(function (){
   Route::group(['as'=>'user.'],function (){
      Route::get('/setting','HomeController@setting')->name('setting');
      Route::post('/setting/update','HomeController@update_setting')->name('update_setting');
      Route::get('/purchase','HomeController@purchase')->name('purchase');
      Route::get('/addcredit','HomeController@addcredit')->name('addcredit');
   });

});

Route::namespace('Admin')->prefix('admin')->group(function () {

    Route::group(['as'=>'admin.'],function(){
        Route::resource('category','CategoryController');
        Route::resource('bank','BankController');
        Route::resource('page','PageController');
        Route::resource('order','OrderController');
        Route::get('/setting/edit','SettingController@edit')->name('setting.edit');
        Route::post('/setting/edit','SettingController@update')->name('setting.update');
        Route::post('/product/fimageuplaod/{id}','ProductController@firstimageupload')->name('product.fimageupload');
        Route::post('/product/oimageuplaod/{id}','ProductController@otherimageupload')->name('product.oimageupload');
        Route::get('/product/image_list/{id}','ProductController@productimagelist')->name('product.imagelist');
        Route::get('/product/o_image_delete/{pid}/{iid}','ProductController@otherimagedelete')->name('product.oimagedelete');
        Route::resource('product','ProductController');

    });
});
