<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportExportController;

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

Route::get('import-export', [ImportExportController::class, 'importExport']);
Route::post('import-file', [ImportExportController::class, 'importFile'])->name('import-file');
Route::get('export-file', [ImportExportController::class, 'exportFile'])->name('export-file');