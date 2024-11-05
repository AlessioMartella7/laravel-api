<?php

use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('/admin')->name('admin.')->group(function(){
Route::get('/projects',[AdminProjectController::class, 'index'])->name('project.index');
Route::delete('/projects/{project}',[AdminProjectController::class, 'destroy'])->name('project.delete');
Route::put('/project/{project}',[AdminProjectController::class, 'update'])->name('project.update');
Route::get('/projects/{project}/edit',[AdminProjectController::class, 'edit'])->name('project.edit');
Route::get('/projects/create',[AdminProjectController::class, 'create'])->name('project.create');
Route::get('/projects/{project}',[AdminProjectController::class, 'show'])->withTrashed()->name('project.show');
Route::post('/projects',[AdminProjectController::class, 'store'])->name('project.store');
});
