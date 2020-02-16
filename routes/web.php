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

Route::redirect('/', '/find-anagram');
Route::get('/find-anagram', function(){
    return view('app');
});

//Route::get('/wordlist', function($words){
//    return view('welcome', ['words'=> $words]);
//});
