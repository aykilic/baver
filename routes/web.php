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
use App\Models\firmaObj;
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'HomeController@index');
//Route::get('/', function(){
//    $fid=1;
////   DB::enableQueryLog();
////  firmaObj::where('fid', 1)->first();
//   // $firmaup=firmaObj::where('fid',$fid)->first();
//    $firmaup=firmaObj::find('fid',$fid);
////    dd(DB::getQueryLog());
//    dd($firmaup);
//}
//);

Route::get('/deneme', 'Controller@deneme');
Route::get('/Cari', 'Controller@girisler');
/*route::post('/Girisler/Cari', array(
    'as'=>'index',
    'uses'=>'DAO@kaydet'));
*/
//Route::get('/Cariedit', 'Controller@Cariedit1');
//**********CARİ İŞLEMLER******************///////////////////////////////
Route::post('/Cari', 'Controller@kaydet');
//Route::get('/Cari/getCarilist', 'DatatablesController@getCarilist');
Route::get('/Cari/Edit/{fid}', 'Controller@getCariedit');
Route::post('/Cari/update/{fid}', 'Controller@update');
Route::get('/Cari/sil/{fid}', 'Controller@carisil');

//**********CARİ İŞLEMLER******************///////////////////////////////
//***************STOK*********************///////////////////////
Route::get('/Stok', 'Controller@stok');
Route::post('/Stok/kaydet', 'Controller@stokkaydet');
Route::put('/Stok/stokedit/{sid}', 'Controller@stokedit');
Route::delete('/stoksil/{sid}', 'Controller@stoksil');


//***************STOK*********************///////////////////////

//****************BANKA************************//////////////////////

Route::get('/Banka', 'Controller@banka');
Route::post('/banka', 'Controller@bankakaydet');
Route::get('/banka/edit/{baid}', 'Controller@getBankaedit');
Route::get('/banka/sil/{baid}', 'Controller@bankasil');
Route::post('/banka/update/{baid}', 'Controller@bankaupdate');
Route::put('/cbankedit/{cbid}','Controller@cbankedit');
Route::post('/cbankaydet','Controller@cbankaydet');
Route::delete('/cbanksil/{cbid}', 'Controller@cbanksil');
//****************BANKA************************//////////////////////
//****************birim************************//////////////////////

Route::get('/birim', 'Controller@birim');
Route::POST('/birimkaydet', 'Controller@birimkaydet');
Route::put('/birimedit/{bid}', 'Controller@birimedit');
Route::delete('/birimsil/{bid}', 'Controller@birimsil');
//****************birim************************//////////////////////
//****************doviz************************//////////////////////
Route::get('/doviz', 'Controller@doviz');
Route::POST('/dovizkaydet', 'Controller@dovizkaydet');
Route::put('/dovizedit/{edid}', 'Controller@dovizedit');
Route::delete('/dovizsil/{dovizid}', 'Controller@dovizsil');

//****************doviz************************//////////////////////

Route::post('/ibo', 'Controller@acpost');
Route::get ( '/ibo', 'Controller@ac' );

//****************depo************************//////////////////////
Route::get('/depo', 'Controller@depo');
Route::post('/depokaydet', 'Controller@depokaydet');
Route::put('/depoedit/{depoid}', 'Controller@depoedit');
Route::delete('/deposil/{depoid}', 'Controller@deposil');
//****************depo************************//////////////////////

//****************Stok Türü************************//////////////////////
Route::get('/stokturu', 'Controller@stoktur');
Route::post('/stokturukaydet', 'Controller@stokturkaydet');
Route::put('/stokturuedit/{depoid}', 'Controller@stokturedit');
Route::delete('/stokturusil/{depoid}', 'Controller@stokturusil');

//****************Stok Türü************************//////////////////////

//****************sipariş fisi************************//////////////////////

Route::get('/siparisfisi', 'fisController@siparisfisi');
Route::post('/siparisfisi/kaydet', 'Controller@sipfiskaydet');
Route::put('/siparisfisi/edit', 'Controller@sipfisedit');
Route::get('/numarala', 'fisController@numarala');
Route::get('/numarala', function () {
    return view('alsat.numarala');
});

//****************siparis fisi************************//////////////////////
//****************sablon************************//////////////////////

Route::get('/sablon', 'Controller@sablon');
Route::get('/design', 'Controller@design');
Route::get('/design/edit/{id}', 'Controller@designedit');
Route::put('/design/ajedit/{id}', 'Controller@designajedit');
Route::post('/designkaydet', 'Controller@designkaydet');

//****************sablon************************//////////////////////

Route::get('/deneme', 'Controller@deneme');


//************GENEL **************/////////////////7
//Route::get('autocompletefirma',array('as'=>'autocomplete','uses'=>'fisController@autocomplete'));
Route::get('/find/query={query}', 'fisController@find');
Route::get('/autocompletefirma', 'fisController@autocompletefirma');
Route::get('/autocompletestok', 'fisController@autocompletestok');


