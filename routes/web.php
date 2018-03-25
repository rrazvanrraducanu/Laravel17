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
use App\Flower;
/*
Route::get('/', function(){
    $flowers=Flower::get(); //select * from flowers
    return $flowers;
});
*/
/*
Route::get('/', function() {
    $flowers = Flower::find(1);
    return $flowers;
});
*/
Route::get('flowers', 'FlowersController@index');
Route::get('flowers1', 'FlowersController@index1');
Route::get('flowers2', 'FlowersController@index2');
Route::get('flowers/{nume}', 'FlowersController@show');
Route::get('add', function(){
    $flower=new Flower;
    $flower->nume='albastrele';
    $flower->marime='mici';
    $flower->culoare='albastre';
    $flower->pret='100';
    $flower->save();

    return Flower::all();
});
Route::get('add2', function(){
    Flower::create([
        'nume'=>'ghiocei',
        'marime'=>'mici',
        'culoare'=>'albi',
        'pret'=>'30'
    ]);
    return Flower::all();
});
Route::get('edit1', function(){
    $flower=Flower::find(2);
    $flower->pret='50';
    $flower->save();
    return Flower::all();
});
Route::get('delete', function(){
      $flower=Flower::find(2);
      $flower->delete();
      return Flower::all();
});
Route::get('order', function(){
    return Flower::orderBy('nume', 'asc')->get();
});



