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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome')->name('welcome');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
// Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
// Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
// Route::patch('/projects/{project}/edit', [ProjectController::class, 'update'])->name('projects.update');
// Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

// Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
// Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

// Rutas de arriba con ROUTE RESOURCE
Route::resources([
    'projects' => \App\Http\Controllers\ProjectController::class
]);

Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
