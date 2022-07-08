<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\WebsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostersController;
use App\Http\Controllers\TypingsController;
use App\Http\Controllers\WebinarsController;
use App\Http\Controllers\FotografisController;
use App\Http\Controllers\OlimpiadesController;
use App\Http\Controllers\PesertaKtisController;
use App\Http\Controllers\VideografisController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebinarsController::class, 'index']);
Route::post('/', [WebinarsController::class, 'force']);
Route::get('/registration/webinar', [WebinarsController::class, 'webinar']);
Route::post('/registration/webinar', [WebinarsController::class, 'store']);

Route::get('/registration/karya_tulis_ilmiah', [PesertaKtisController::class, 'index']);
Route::post('/registration/karya_tulis_ilmiah', [PesertaKtisController::class, 'store']);

Route::get('/registration/poster', [PostersController::class, 'index']);
Route::post('/registration/poster', [PostersController::class, 'store']);

Route::get('/registration/typing', [TypingsController::class, 'index']);
Route::post('/registration/typing', [TypingsController::class, 'store']);

Route::get('/registration/olimpiade', [OlimpiadesController::class, 'index']);
Route::post('/registration/olimpiade', [OlimpiadesController::class, 'store']);

Route::get('/registration/photography', [FotografisController::class, 'index']);
Route::post('/registration/photography', [FotografisController::class, 'store']);

Route::get('/registration/videography', [VideografisController::class, 'index']);
Route::post('/registration/videography', [VideografisController::class, 'store']);

Route::get('/registration/webdesign', [WebsController::class, 'index']);
Route::post('/registration/webdesign', [WebsController::class, 'store']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/pengaturan', [AdminController::class, 'config'])->name('pengaturan');
Route::post('/admin/pengaturan/tutup', [AdminController::class, 'config_tutup']);
Route::get('/admin/{cabang}/{id}/reject', [AdminController::class, 'reject']);
Route::get('/admin/{cabang}/{id}/confirm', [AdminController::class, 'confirm']);
Route::get('/admin/terverifikasi/{cabang}', [AdminController::class, 'terverifikasi']);
Route::get('/admin/reject/{cabang}', [AdminController::class, 'direject']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
