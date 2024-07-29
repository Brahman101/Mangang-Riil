    <?php

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

    Route::get('/tambahperaturan', function () {
        return view('tambahperaturan');
    })->name('tambahperaturan');

    Route::get('/tambahmonografi', function () {
        return view('tambahmonografi');
    })->name('tambahmonografi');

    Route::get('/tambahartikel', function () {
        return view('tambahartikel');
    })->name('tambahartikel');

    Route::get('/tambahputusan', function () {
        return view('tambahputusan');
    })->name('tambahputusan');

    Route::get('/katalogprodukhukum', function () {
        return view('katalogprodukhukum');
    })->name('katalogprodukhukum');

    Route::get('/pengajuanprodukhukum', function () {
        return view('pengajuanprodukhukum');
    })->name('pengajuanprodukhukum');

    Route::get('/', function () {
        return view('beranda');
    })->name('beranda');

    Route::get('/produkPerundangan', function () {
        return view('produkPerundangan');
    })->name('produkPerundangan');

    Route::get('/produkMonografi', function () {
        return view('produkMonografi');
    })->name('produkMonografi');

    Route::get('/produkArtikel', function () {
        return view('produkArtikel');
    })->name('produkArtikel');

    Route::get('/produkPutusan', function () {
        return view('produkPutusan');
    })->name('produkPutusan');


    Route::get('/detail-produkPerundangan', function () {
        return view('detail-produkPerundangan');
    })->name('detail-produkPerundangan');
