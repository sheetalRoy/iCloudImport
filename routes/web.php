<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportExcelController;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [ImportExcelController::class, 'index'])->name('report');
Route::get('/file-import-page', [ImportExcelController::class, 'loadFileImport'])->name('file-import-page');

Route::post('file-import', [ImportExcelController::class, 'fileImport'])->name('file-import');
