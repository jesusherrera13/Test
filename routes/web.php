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

    return view('dashboard', ['titulo' => 'Inicio']);
});

Route::get('dashboard', function () {

    return view('dashboard', ['titulo' => 'Inicio']);
});

Route::get('dashboard1', function () {

    return view('dashboard1');
});

// Alumnos
Route::resource('alumnos', 'Alumno');
// Route::get('alumno/{id_alumno}', 'Alumno@alumno');
// Route::get('alumno/', 'Alumno@alumno');
