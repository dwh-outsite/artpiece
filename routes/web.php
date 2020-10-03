<?php

use App\Http\Controllers\DownloadArtPieceIdeaAttachmentController;
use App\Http\Controllers\ListArtPieceIdeasController;
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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/ideas', ListArtPieceIdeasController::class)->name('ideas');
    Route::get('/ideas/{idea}/download', DownloadArtPieceIdeaAttachmentController::class)->name('ideas.download');
});

Route::get('/{lang?}', function ($lang = 'nl') {
    App::setLocale($lang);

    return view('welcome');
})->name('home');
