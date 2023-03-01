<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/board', function () {
    return view('pages.board');
});
Route::get('/itineraries', function () {
    return view('pages.itineraries');
});
Route::get('/career', function () {
    return view('pages.career');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/privacy', function () {
    return view('pages.privacy');
});
Route::get('/cookies', function () {
    return view('pages.cookies');
});
Route::get('/covid19', function () {
    return view('pages.covid19');
});
Route::get('/faq', function () {
    return view('pages.faq');
});
