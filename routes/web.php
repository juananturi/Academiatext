<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\TeacherController;


Route::get('/', function () {
    return view('cursos.welcome');
});

Route::resource('/cursos', CursosController::class);

Route::get('/about_us', function () {
    return view('about_us');
});

Route::resource('/teachers', TeacherController::class);

Route::resource('/students', EstudiantesController::class);
