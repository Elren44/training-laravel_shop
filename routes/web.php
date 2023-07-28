<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category as Category;
use App\Http\Controllers\Color as Color;
use App\Http\Controllers\Tag as Tag;
use App\Http\Controllers\User as User;
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

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['prefix'=>'categories'], function () {
    Route::get('/', Category\IndexController::class)->name('category.index');
    Route::get('/create', Category\CreateController::class)->name('category.create');
    Route::post('/', Category\StoreController::class)->name('category.store');
    Route::get('/{category}/edit', Category\EditController::class)->name('category.edit');
    Route::get('/{category}', Category\ShowController::class)->name('category.show');
    Route::patch('/{category}', Category\UpdateController::class)->name('category.update');
    Route::delete('/{category}', Category\DeleteController::class)->name('category.delete');
});

Route::group(['prefix'=>'colors'], function () {
    Route::get('/', Color\IndexController::class)->name('color.index');
    Route::get('/create', Color\CreateController::class)->name('color.create');
    Route::post('/', Color\StoreController::class)->name('color.store');
    Route::get('/{color}/edit', Color\EditController::class)->name('color.edit');
    Route::get('/{color}', Color\ShowController::class)->name('color.show');
    Route::patch('/{color}', Color\UpdateController::class)->name('color.update');
    Route::delete('/{color}', Color\DeleteController::class)->name('color.delete');
});

Route::group(['prefix'=>'tags'], function () {
    Route::get('/', Tag\IndexController::class)->name('tag.index');
    Route::get('/create', Tag\CreateController::class)->name('tag.create');
    Route::post('/', Tag\StoreController::class)->name('tag.store');
    Route::get('/{tag}/edit', Tag\EditController::class)->name('tag.edit');
    Route::get('/{tag}', Tag\ShowController::class)->name('tag.show');
    Route::patch('/{tag}', Tag\UpdateController::class)->name('tag.update');
    Route::delete('/{tag}', Tag\DeleteController::class)->name('tag.delete');
});

Route::group(['prefix'=>'users'], function () {
    Route::get('/', User\IndexController::class)->name('user.index');
    Route::get('/create', User\CreateController::class)->name('user.create');
    Route::post('/', User\StoreController::class)->name('user.store');
    Route::get('/{user}/edit', User\EditController::class)->name('user.edit');
    Route::get('/{user}', User\ShowController::class)->name('user.show');
    Route::patch('/{user}', User\UpdateController::class)->name('user.update');
    Route::delete('/{user}', User\DeleteController::class)->name('user.delete');
});

