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

Route::get('/', function () {
    return view('accueil');
});
Route::get('accueil', function () {
    return view('accueil');
});
Route::get ('forum', function (){
    return view ('forum');
});
Route::get ('mesforum', function (){
    return view ('mesforum');
});
Route::get ('parametre', function (){
    return view ('parametre');
});
Route::get ('compte', function (){
    return view ('compte');
});
Route::get ('creersujet', function (){
    return view ('creersujet');
});
Route::get ('connexion', function (){
    return view ('connexion');
});
Route::get ('inscription', function (){
    return view ('inscription');
});
