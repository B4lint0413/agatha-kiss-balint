<?php

use App\Http\Controllers\NovelController;
use Illuminate\Support\Facades\Route;

Route::get('/novels', [NovelController::class, 'index'])->name('novels.index');
Route::get('/novels/{category}', [NovelController::class, 'list'])->where('category', '\b(marple|poirot|egyeb)\b')->name('novels.list');
Route::get('/novels/{id}', [NovelController::class, 'show'])->whereNumber('id')->name('novels.show');