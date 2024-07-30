    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ProfileController;

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

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::post('/profile', [ProfileController::class, 'updateProfile']);

    Route::get('/login1', function () {
        return view('login');
    })->name('login');

    Route::get('/register1', function () {
        return view('register');
    })->name('register');

    Route::post('login', [ProfileController::class, 'login']);
    Route::post('register', [ProfileController::class, 'register']);
    Route::post('logout', [ProfileController::class, 'logout'])->name('logout');

    Route::get('/', function () {
        return view('beranda');
    })->name('beranda');

    Route::get('/produkPerundangan', function () {
        return view('produkPerundangan');
    })->name('produkPerundangan');

    Route::get('/dashboardchart', function () {
        return view('dashboardchart');
    })->name('dashboardchart');
