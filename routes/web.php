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
    Route::get('/stories/preview/{id}', [StoriesController::class, 'preview'])->name('admin.stories.preview');
    Route::get('/stories/edit/{id}', [StoriesController::class, 'edit'])->name('admin.stories.edit');
    Route::post('/stories/update/{id}', [StoriesController::class, 'update'])->name('admin.stories.update');
    Route::get('/stories/delete/{id}', [StoriesController::class, 'delete'])->name('admin.stories.delete');
});
