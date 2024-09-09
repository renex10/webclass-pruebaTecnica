<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TrainingController;

/* Route::get('/',function(){
    return view ('admin.capacitacion');

})->name('admin.capacitacion'); */


Route::get('/', function () {

    return view('admin.capacitacion');
})->name('capacitacion');

/* Route::get('/mis-capacitaciones', function () {
    return view('admin.mis-capacitaciones');
})->name('mis-capacitaciones');

Route::get('/informe-colegio', function () {
    return view('admin.informe-colegio');
})->name('informe-colegio');

Route::get('/informe-progreso', function () {
    return view('admin.informe-progreso');
})->name('informe-progreso');

Route::get('/calificaciones', function () {
    return view('admin.calificaciones');
})->name('calificaciones'); */



//creando las rutas para capacitaciones
//Route::resource('/capacitaciones',TrainingController::class);
/* Route::resource('capacitaciones', TrainingController::class)->names('admin.capacitaciones'); */
Route::resource('capacitaciones', TrainingController::class)->parameters([
    'capacitaciones' => 'training',
]);
