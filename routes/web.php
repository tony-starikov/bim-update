<?php

use App\Http\Controllers\FamilyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PluginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [PageController::class, 'main'])->name('main');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/success', [PageController::class, 'success'])->name('success');
Route::get('/policy', [PageController::class, 'policy'])->name('policy');

Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post');
Route::get('/post-test/{slug}', [PostController::class, 'postTest'])->name('post-test');

Route::get('/products', [PluginController::class, 'index'])->name('products');
Route::get('/get-plugin/{plugin}', [PluginController::class, 'downloadPlugin'])->name('downloadPlugin');

Route::get('/families', [FamilyController::class, 'index'])->name('families');
Route::get('/get-family/{family}', [FamilyController::class, 'downloadFamily'])->name('downloadFamily');

Route::get('/service/{slug}', [ServiceController::class, 'showService'])->name('showService');
Route::get('/get-service/{slug}', [ServiceController::class, 'downloadService'])->name('downloadService');

Route::get('/test', [PageController::class, 'test'])->name('test');
