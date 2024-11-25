<?php

use App\Http\Controllers\NovelController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/novels', [NovelController::class, 'index'])->name('novels.index');
Route::get('/novels/{category}', [NovelController::class, 'list'])->where('category', '\b(marple|poirot|egyeb)\b')->name('novels.list');
Route::get('/novels/{id}', [NovelController::class, 'show'])->whereNumber('id')->name('novels.show');
Route::get('/orders/{novelid}', [OrderController::class, 'show'])->whereNumber('novelid')->name('orders.show');
Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/oldestnovel', [SiteController::class, 'oldestnovel'])->name('site.oldestnovel');
Route::get('/murder', [SiteController::class, 'murder'])->name('site.murder');
Route::get('/thefifties', [SiteController::class, 'fifties'])->name('site.thefifties');
Route::get('/cheapest', [SiteController::class, 'cheapest'])->name('site.cheapest');
Route::get('/mostorders', [SiteController::class, 'mostorders'])->name('site.mostorders');
