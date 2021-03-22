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

Route::get('/welcome', function () {return view('welcome');});
$data = [
    'layouts'=> 'vertical',
    'sublayouts'=> '',
    'darktheme'=> 'false',
    'rtltheme'=> 'false',
    'bodyclass'=> '',
    'menuclass'=> 'menupos-fixed',
    'headerclass'=> ''
];
Route::get('/auth-signup', function () use ($data) { return view('html.auth-signup', $data); })->name('auth-signup');
Route::post('/auth-signup', [App\Http\Controllers\UserController::class, 'signup']);
Route::get('/auth-signin', function () use ($data) { return view('html.auth-signin', $data); })->name('auth-signin');
Route::post('/auth-signin', [App\Http\Controllers\UserController::class, 'signin']);
Route::get('/auth-signout', [App\Http\Controllers\UserController::class, 'logout'])->name('auth-signout');
Route::get('/auth-reset-password', function () use ($data) { return view('html.auth-reset-password', $data); })->name('auth-reset-password');

Route::middleware([App\Http\Middleware\Authenticate::class])->group(function () use ($data) {
    Route::get('/dashboard', function () use ($data) { return view('html.index', $data); });
    Route::get('/index', function () use ($data) { return view('html.index', $data); })->name('index');
    Route::get('/ac_notification', function () use ($data) { return view('html.ac_notification', $data); })->name('ac_notification');
    Route::get('/bc_typography', function () use ($data) { return view('html.bc_typography', $data); })->name('bc_typography');
    Route::get('/chart-google', function () use ($data) { return view('html.chart-google', $data); })->name('chart-google');
    Route::get('/icon-feather', function () use ($data) { return view('html.icon-feather', $data); })->name('icon-feather');
    Route::get('/index-6', function () use ($data) { return view('html.index-6', $data); })->name('index-6');
    Route::get('/map-google', function () use ($data) { return view('html.map-google', $data); })->name('map-google');
    Route::get('/tbl_bootstrap', function () use ($data) { return view('html.tbl_bootstrap', $data); })->name('tbl_bootstrap');
    Route::get('/sample-page', function () use ($data) { return view('html.sample-page', $data); })->name('sample-page');
});

Route::get('/', [App\Http\Controllers\UserController::class, 'dashboard'])->name('login');
