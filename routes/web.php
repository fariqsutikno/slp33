<?php

use App\Http\Controllers\Admin\dataSiswaController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::post('/search', [App\Http\Controllers\dataSiswaController::class, 'search'] )->name('search');
Route::post('/edit', [App\Http\Controllers\dataSiswaController::class, 'edit'] )->name('edit');
Route::post('/update', [App\Http\Controllers\dataSiswaController::class, 'update'] )->name('update');
Route::get('/menghash', [App\Http\Controllers\dataSiswaController::class, 'menghash'] );

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->middleware(['auth'])->group(function(){
    Route::prefix('siswa')->group(function(){
        Route::get('', [App\Http\Controllers\admin\dataSiswaController::class, 'index']);
        Route::get('/detail/{id}', [App\Http\Controllers\admin\dataSiswaController::class, 'show']);
    });
    Route::prefix('berkas')->group(function(){
        Route::get('/', [App\Http\Controllers\admin\berkasController::class, 'index']);
        Route::get('/detail/{id}', [App\Http\Controllers\admin\berkasController::class, 'show']);
        Route::put('/update/{id}', [App\Http\Controllers\admin\berkasController::class, 'update']);
    });
    // Route::prefix('daftarUIM')->group(function(){
    //     Route::get('/', [App\Http\Controllers\admin\pendaftaranUIMController::class, 'index']);
    //     Route::get('/create', [App\Http\Controllers\admin\pendaftaranUIMController::class, 'create']);
    //     Route::post('/store', [App\Http\Controllers\admin\pendaftaranUIMController::class, 'store']);
    //     // Route::get('/detail/{id}', [App\Http\Controllers\admin\berkasController::class, 'show']);
    // });
    Route::get('/command/migrate', function () {
	
        /* php artisan migrate */
        Artisan::call('migrate');
        dd("Done");
    });
    Route::get('/refresh', function () {
        
        /* php artisan migrate */
        Artisan::call('route:cache');
        Artisan::call('view:cache');
        Artisan::call('config:cache');
        Artisan::call('cache:clear');
        dd("Done");
    });
});

// Route::prefix('admin')->group(function () {
//     Route::get('/users', );
// });
require __DIR__.'/auth.php';
