<?php

use App\Http\Controllers\BlogController;
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

Route::prefix('Admin')->group(function () {
    Route::get('Dashboard', [BlogController::class, 'index'])->name('Dashboard');
    Route::get('List-Article', [BlogController::class, 'ListArticle'])->name('List-Article');
    Route::view('FormArticle', 'admin.form')->name('Form');
    Route::post('Add', [BlogController::class,'Add'])->name('AddArticle');
    Route::get('Edit/{slug}', [BlogController::class,'Edit'])->name('EditArticle');
    Route::put('Edit/{slug}', [BlogController::class, 'Update'])->name('Update');
    Route::get('Delete/{slug}', [BlogController::class, 'Delete']);
});
