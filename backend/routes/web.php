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
    $target = -5;
    $num = 3;
    $target =- $num; 
    $target =+ $num; 
    $target = -5;
    $num = 3;
    $target =- $num; 
    $target =+ $num; 
    $target = -5;
    $num = 3;
    $target =- $num; 
    $target =+ $num; 
    $target = -5;
    $num = 3;
    $target =- $num; 
    $target =+ $num; 
    $target = -5;
    $num = 3;
    $target =- $num; 
    $target =+ $num; 
    $target = -5;
    $num = 3;
    $target =- $num; 
    $target =+ $num; 
    $target = -5;
    $num = 3;
    $target =- $num; 
    $target =+ $num; 
    $target = -5;
    $num = 3;
    $target =- $num; 
    $target =+ $num; 
    return view('welcome');
});