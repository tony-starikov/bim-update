<?php

use App\Http\Controllers\EstimationController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PluginController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Models\Family;
use App\Models\Plugin;
use App\Models\Post;
use App\Models\Service;
use App\Models\Work;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

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
Route::get('/book-a-meeting', [PageController::class, 'bookMeeting'])->name('bookMeeting');
//Route::get('/success', [PageController::class, 'success'])->name('success');
Route::get('/thank-you-page', [PageController::class, 'thank_you'])->name('thanks');
Route::get('/policy', [PageController::class, 'policy'])->name('policy');
Route::get('/checking-the-model-in-revit-scan-to-bim', [PageController::class, 'docs'])->name('docs');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{slug}', [PortfolioController::class, 'project'])->name('portfolio.project');

Route::get('/soft', [PageController::class, 'test'])->name('test');
Route::get('/content', [PageController::class, 'content'])->name('content');
Route::get('/architectural', [PageController::class, 'architectural'])->name('architectural');

Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post');

Route::get('/products/plugins', [PluginController::class, 'index'])->name('products');
Route::get('/download-plugin/{slug}', [PluginController::class, 'downloadPlugin'])->name('downloadPlugin');

Route::get('/products/families', [FamilyController::class, 'index'])->name('families');
Route::get('/download-family/{slug}', [FamilyController::class, 'downloadFamily'])->name('downloadFamily');

Route::get('/service/{slug}', [ServiceController::class, 'showService'])->name('showService');
Route::get('/download-service/{slug}', [ServiceController::class, 'downloadService'])->name('downloadService');

//Route::get('/estimates-scan-to-bim-project', [EstimationController::class, 'show'])->name('showScanShort');
Route::get('/scan-to-bim-estimates-project', [EstimationController::class, 'showScanShort'])->name('estimates');
Route::get('/thks-scantobim-estimates', [PageController::class, 'thank_you'])->name('thanksShortScanToBim');

Route::get('/estimates-project-scan-to-bim', [EstimationController::class, 'showServicesForm'])->name('estimatesServicesForm');
Route::get('/thks-estimates-scantobim', [PageController::class, 'thank_you'])->name('thanksScanToBim');

Route::post('/estimates-scan-to-bim-processing', [EstimationController::class, 'processing'])->name('estimatesProcessing');
Route::post('/estimates-scan-to-bim-short-processing', [EstimationController::class, 'processingScanShort'])->name('processingScanShort');

//Route::get('/estimates-mep-project', [EstimationController::class, 'showMep'])->name('showMepShort');
Route::get('/mep-estimates-project', [EstimationController::class, 'showMepShort'])->name('estimatesMep');
Route::get('/thks-mep-estimates', [PageController::class, 'thank_you'])->name('thanksShortMep');

Route::get('/estimates-project-mep', [EstimationController::class, 'showMepServicesForm'])->name('estimatesMepServicesForm');
Route::get('/thks-estimates-mep', [PageController::class, 'thank_you'])->name('thanksMepServicesForm');

Route::post('/estimates-mep-processing', [EstimationController::class, 'processingMep'])->name('estimatesProcessingMep');
Route::post('/estimates-mep-short-processing', [EstimationController::class, 'processingMepShort'])->name('processingMepShort');

Route::get('/sitemap', function() {
   $sitemap = Sitemap::create()
       ->add(Url::create('https://bim-prove.com/'));

    Service::where('show_page', 1)->each(function(Service $service) use ($sitemap) {
        $sitemap->add(Url::create('https://bim-prove.com/service/' . $service->slug));
    });

    $sitemap->add(Url::create("https://bim-prove.com/scan-to-bim-estimates-project"));
    $sitemap->add(Url::create("https://bim-prove.com/estimates-project-scan-to-bim"));
    $sitemap->add(Url::create("https://bim-prove.com/mep-estimates-project"));
    $sitemap->add(Url::create("https://bim-prove.com/estimates-project-mep"));

    $sitemap->add(Url::create('https://bim-prove.com/blog'));
    $sitemap->add(Url::create('https://bim-prove.com/portfolio'));

    Work::all()->each(function(Work $work) use ($sitemap) {
        $sitemap->add(Url::create('https://bim-prove.com/portfolio/' . $work->slug));
    });

    Post::all()->each(function(Post $post) use ($sitemap) {
        $sitemap->add(Url::create('https://bim-prove.com/post/' . $post->slug));
    });

    $sitemap->add(Url::create("https://bim-prove.com/products/plugins"));
    $sitemap->add(Url::create("https://bim-prove.com/products/families"));

    $sitemap
        ->add(Url::create('https://bim-prove.com/contact'))
        ->add(Url::create('https://bim-prove.com/policy'));

//   Plugin::all()->each(function(Plugin $plugin) use ($sitemap) {
//       $sitemap->add(Url::create("/download-plugin/{$plugin->slug}"));
//   });

//   Family::all()->each(function(Family $family) use ($sitemap) {
//       $sitemap->add(Url::create("/download-family/{$family->slug}"));
//   });

//   Service::where('show_page', 0)->each(function(Service $service) use ($sitemap) {
//       $sitemap->add(Url::create("/download-service/{$service->slug}"));
//   });

   $sitemap->writeToFile(public_path('sitemap.xml'));
});
