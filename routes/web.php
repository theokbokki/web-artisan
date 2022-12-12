<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoteController;
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

Route::get('/language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/forum', [ForumController::class, 'index']);

Route::get('/forum/{question:slug}', [ForumController::class, 'show']);

Route::post('/forum/{question:slug}/{answer:id}/comment', [CommentController::class, 'store']);

Route::post('/forum/{question:slug}/answer', [AnswerController::class, 'store']);

Route::post('/forum/{question:slug}/{answer:id}/vote', [VoteController::class, 'store']);
Route::patch('/forum/{question:slug}/{answer:id}/vote', [VoteController::class, 'update']);
Route::delete('/forum/{question:slug}/{answer:id}/vote', [VoteController::class, 'delete']);

Route::post('/forum/{question:slug}/vote', [VoteController::class, 'store']);
Route::patch('/forum/{question:slug}/vote', [VoteController::class, 'update']);
Route::delete('/forum/{question:slug}/vote', [VoteController::class, 'delete']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile/{user:slug}', [ProfileController::class, 'show'])->name('profile.show');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
