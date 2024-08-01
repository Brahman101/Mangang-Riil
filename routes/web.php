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

    Route::get('/login', [ProfileController::class, 'index_login'])->name('login');
    Route::post('login-proses', [ProfileController::class, 'login_proses'])->name('login-proses');

    Route::get('/register', [ProfileController::class, 'index_regis'])->name('register');
    Route::post('register-proses', [ProfileController::class, 'register_proses'])->name('register-proses');

    Route::get('logout', [ProfileController::class, 'logout'])->name('logout');

    Route::get('/', function () {
        return view('beranda');
    })->name('beranda');

    Route::get('/produkPerundangan', function () {
        return view('produkPerundangan');
    })->name('produkPerundangan');



    Route::group(['prefix' => 'admin', 'middleware' => ['admin'], 'as' => 'admin.'], function () {

        Route::get('/dashboardchart', function () {
            return view('dashboardchart');
        })->name('dashboardchart');

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
    });
