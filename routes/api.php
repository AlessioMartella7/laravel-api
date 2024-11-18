<?php

use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TechnologController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ProjectController::class)->name('api.')->group(function(){
    Route::get('projects', 'index')->name('project.index');
    Route::get('projects/{project}', 'show')->name('project.show');
});

Route::controller(TechnologController::class)->name('api.')->group(function(){
    Route::get('technologies', 'index')->name('project.index');
});

