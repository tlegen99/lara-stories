<?php

use App\Http\Controllers\Admin\StoriesController;
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

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('main');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/stories', [StoriesController::class, 'index'])->name('admin.stories.index');
    Route::get('/stories/create', [StoriesController::class, 'create'])->name('admin.stories.create');
    Route::post('/stories/store', [StoriesController::class, 'store'])->name('admin.stories.store');
});