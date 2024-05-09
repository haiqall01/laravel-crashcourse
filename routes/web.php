<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get('/', function () {
    $name = 'Haiqal Zulmi';
    return view('hello', compact('name'));
});