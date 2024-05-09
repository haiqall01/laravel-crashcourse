<?php
use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
 //   return view('welcome');
//});
//route pass ke controller
//Route::get('/', function () {
 //   $name = 'Haiqal Zulmi';
 //   return view('hello', compact('name'));
//});

Route::get('/', [CatController::class, 'index']);