<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputeGradesController;


Route::get('begin', [ComputeGradesController::class, 'begin']);
Route::post('enter-grades', [ComputeGradesController::class, 'enterGrades']);
Route::post('compute-grades', [ComputeGradesController::class, 'computePower']);


