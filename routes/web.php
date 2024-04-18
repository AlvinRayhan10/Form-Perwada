<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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
});

Route::get('/testdata', function () {
    return view('data.testdata');
});

//test
Route::get('/test', [App\Http\Controllers\TestdataController::class, 'index'])->name('testdata.index');


Auth::routes();
    //home
    Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    //role & user
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    //form
    Route::get('/form', function () {
        return view('form.form');
    });
    Route::get('/formperwada', [App\Http\Controllers\FormperwadaController::class, 'index'])->name('formperwada.index');
    Route::post('/formperwada', [App\Http\Controllers\FormperwadaController::class, 'store'])->name('formperwada.store');
    Route::get('/formpengurus', [App\Http\Controllers\FormpengurusController::class, 'index'])->name('formpengurus.index');
    Route::post('/formpengurus', [App\Http\Controllers\FormpengurusController::class, 'store'])->name('formpengurus.store');
    Route::get('/formpusat', [App\Http\Controllers\FormpusatController::class, 'index'])->name('formpusat.index');
    Route::post('/formpusat', [App\Http\Controllers\FormpusatController::class, 'store'])->name('formpusat.store');
    //Data
    Route::get('/dataperwada', [App\Http\Controllers\DataperwadaController::class, 'index'])->name('dataperwada.index');
    Route::post('/dataperwada', [App\Http\Controllers\DataperwadaController::class, 'store'])->name('dataperwada.store');
    Route::get('/dataperwada/export',[App\Http\Controllers\DataperwadaController::class,'export'])->name('dataperwada.export');
    Route::get('/dataperwada/import',[App\Http\Controllers\DataperwadaController::class,'import'])->name('dataperwada.import');
    Route::get('/pengurusperwada', [App\Http\Controllers\PengurusperwadaController::class, 'index'])->name('pengurusperwada.index');
    Route::post('/pengurusperwada', [App\Http\Controllers\PengurusperwadaController::class, 'store'])->name('pengurusperwada.store');
    Route::get('/pengurusperwada/export',[App\Http\Controllers\PengurusperwadaController::class,'export'])->name('pengurusperwada.export');
    Route::get('/pengurusperwada/import',[App\Http\Controllers\PengurusperwadaController::class,'import'])->name('pengurusperwada.import');
    Route::get('/layananpusat', [App\Http\Controllers\LayananpusatController::class, 'index'])->name('layananpusat.index');
    Route::post('/layananpusat', [App\Http\Controllers\LayananpusatController::class, 'store'])->name('layananpusat.store');
    Route::get('/layananpusat/export',[App\Http\Controllers\LayananpusatController::class,'export'])->name('layananpusat.export');
    Route::get('/layananpusat/import',[App\Http\Controllers\LayananpusatController::class,'import'])->name('layananpusat.import');

    Route::get('/formperwada', [App\Http\Controllers\FormperwadaController::class, 'index'])->name('formperwada.index');
    Route::post('/formperwada', [App\Http\Controllers\FormperwadaController::class, 'store'])->name('formperwada.store');
    Route::get('/formpengurus', [App\Http\Controllers\FormpengurusController::class, 'index'])->name('formpengurus.index');
    Route::post('/formpengurus', [App\Http\Controllers\FormpengurusController::class, 'store'])->name('formpengurus.store');
    Route::get('/formpusat', [App\Http\Controllers\FormpusatController::class, 'index'])->name('formpusat.index');
    Route::post('/formpusat', [App\Http\Controllers\FormpusatController::class, 'store'])->name('formpusat.store');

});