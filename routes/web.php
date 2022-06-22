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

    // i dati da passare alla view devoo essere un array associativo
    $data = [
        'user' => 'Ugo de Ughi',
        'colors' => ['giallo','rosso','blu','verde','arancione']
    ];

    return view('home', $data);
});
