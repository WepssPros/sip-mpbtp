<?php

use App\Http\Controllers\ArsipController;
use App\Http\Controllers\CatatanPerkaraController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HakimController;
use App\Http\Controllers\JaksaController;
use App\Http\Controllers\KategoriPidanaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LaporanPerkaraLengkapController;
use App\Http\Controllers\PengacaraController;
use App\Http\Controllers\PenuntutController;
use App\Http\Controllers\PerkaraController;
use App\Http\Controllers\PihakTerlibatController;
use App\Http\Controllers\SidangController;
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

Route::get('/', [FrontendController::class, 'index'])->name('index');
// Route::get('/category/{categories_id}', [FrontendController::class, 'category'])->name('category');
// Route::get('/details/{slug}', [FrontendController::class, 'details'])->name('details');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    // Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
    // Route::post('/cart/{id}', [FrontendController::class, 'cartAdd'])->name('cart-add');
    // Route::delete('/cart/{id}', [FrontendController::class, 'cartDelete'])->name('cart-delete');
    // Route::post('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
    // Route::get('/checkout/success', [FrontendController::class, 'success'])->name('checkout-success');


    Route::name('dashboard.')->prefix('dashboard')->group(function () {



        Route::middleware(['admin'])->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('index');
            Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan-index');
            Route::get('/laporan/{perkara}', [LaporanController::class, 'details'])->name('laporan-details');

            Route::resource('arsip', ArsipController::class);

            Route::resource('penuntut', PenuntutController::class);
            Route::resource('perkara', PerkaraController::class);
            Route::resource('hakim', HakimController::class);
            Route::resource('jaksa', JaksaController::class);
            Route::resource('pengacara', PengacaraController::class);
            Route::resource('catatanperkara', CatatanPerkaraController::class);
            Route::resource('pihakterlibat', PihakTerlibatController::class);
            Route::resource('sidang', SidangController::class);
            Route::resource('kategoripidana', KategoriPidanaController::class);
            //     Route::resource('category', CategoryController::class);
            //     Route::resource('diskon', DiskonController::class);
            //     Route::resource('garansi', GaransiController::class);
            //     Route::resource('product.gallery', ProductGalleryController::class)->shallow()->only([
            //         'index', 'create', 'store', 'destroy'
            //     ]);
            //     Route::resource('category.gallery', CategoryGalleryController::class)->shallow()->only([
            //         'index', 'create', 'store', 'destroy'
            //     ]);
            //     Route::resource('laporan', LaporanController::class)->only([
            //         'index', 'show', 'edit', 'update'
            //     ]);
            //     Route::resource('transaction', TransactionController::class)->only([
            //         'index', 'show', 'edit', 'update'
            //     ]);
            //     Route::resource('user', UserController::class)->only([
            //         'index', 'edit', 'update', 'destroy'
            //     ]);
        });
    });
});
