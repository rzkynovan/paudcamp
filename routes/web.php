<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\SiswaController as AdminSiswa;
use App\Http\Controllers\Siswa\DashboardController as SiswaDashboard;
use App\Http\Controllers\Siswa\SiswaController as SiswaOnSiswa;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\RouteGroup;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('admin/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
Route::get('admin/siswatable', [AdminSiswa::class, 'index'])->name('tablesiswa');


Route::get('user/dashboard', function(){
    return view('welcome');
})->name('user.dashboard');

Route::post('store/siswa', [SiswaOnSiswa::class, 'store'])->name('siswa.store');
Route::post('store/wali', [SiswaOnSiswa::class, 'storewali'])->name('wali.store');

Route::get('siswa/dashboard', [SiswaDashboard::class, 'index'])->name('siswa.dashboard');
require __DIR__.'/auth.php';
