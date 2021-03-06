<?php
use App\Http\Controllers\Admin\LecturerController;
use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('lecturer/create', [LecturerController::class, 'create']);
route::get('lecturer', [LecturerController::class, 'tabel'])->name('tabel-lecturer');
route::post('lecturer/store', [LecturerController::class, 'store'])->name("store-lecturer");
