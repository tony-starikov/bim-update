<?php

use App\Http\Controllers\EstimationController;
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
Route::get('/thank-you-page', [PageController::class, 'thanks'])->name('thanks');
Route::get('/policy', [PageController::class, 'policy'])->name('policy');

Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post');

Route::get('/products', [PluginController::class, 'index'])->name('products');
Route::get('/get-plugin/{plugin}', [PluginController::class, 'downloadPlugin'])->name('downloadPlugin');

Route::get('/families', [FamilyController::class, 'index'])->name('families');
Route::get('/get-family/{family}', [FamilyController::class, 'downloadFamily'])->name('downloadFamily');

Route::get('/service/{slug}', [ServiceController::class, 'showService'])->name('showService');
Route::get('/get-service/{slug}', [ServiceController::class, 'downloadService'])->name('downloadService');

//Route::get('/estimates-scan-to-bim-project', [EstimationController::class, 'show'])->name('showScanShort');
Route::get('/scan-to-bim-estimates-project', [EstimationController::class, 'showScanShort'])->name('estimates');
Route::get('/thks-scantobim-estimates', [PageController::class, 'thanks'])->name('thanksShortScanToBim');

Route::get('/estimates-project-scan-to-bim', [EstimationController::class, 'showServicesForm'])->name('estimatesServicesForm');
Route::get('/thks-estimates-scantobim ', [PageController::class, 'thanks'])->name('thanksScanToBim');

Route::post('/estimates-scan-to-bim-processing', [EstimationController::class, 'processing'])->name('estimatesProcessing');
Route::post('/estimates-scan-to-bim-short-processing', [EstimationController::class, 'processingScanShort'])->name('processingScanShort');

//Route::get('/estimates-mep-project', [EstimationController::class, 'showMep'])->name('showMepShort');
Route::get('/mep-estimates-project', [EstimationController::class, 'showMepShort'])->name('estimatesMep');
Route::get('/estimates-project-mep', [EstimationController::class, 'showMepServicesForm'])->name('estimatesMepServicesForm');
Route::post('/estimates-mep-processing', [EstimationController::class, 'processingMep'])->name('estimatesProcessingMep');
Route::post('/estimates-mep-short-processing', [EstimationController::class, 'processingMepShort'])->name('processingMepShort');
