<?php

use App\Http\Controllers\AlumnisController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group(
[
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {

    //HOME
    Route::get('/', [HomeController::class, 'index']);

    //Forum
    Route::get('/forum', [ForumController::class, 'index']);

    Route::get('/forum/{question:slug}', [ForumController::class, 'show']);

    Route::get('/question/create', [QuestionController::class, 'create']);
    Route::post('/question/add-tags', [QuestionController::class, 'add_tags']);
    Route::post('/question/store', [QuestionController::class, 'store']);

    Route::post('/forum/{question:slug}/{answer:id}/comment', [CommentController::class, 'store']);

    Route::post('/forum/{question:slug}/answer', [AnswerController::class, 'store']);

    Route::post('/forum/{question:slug}/{answer:id}/vote', [VoteController::class, 'store']);
    Route::patch('/forum/{question:slug}/{answer:id}/vote', [VoteController::class, 'update']);
    Route::delete('/forum/{question:slug}/{answer:id}/vote', [VoteController::class, 'delete']);

    Route::post('/forum/{question:slug}/vote', [VoteController::class, 'store']);
    Route::patch('/forum/{question:slug}/vote', [VoteController::class, 'update']);
    Route::delete('/forum/{question:slug}/vote', [VoteController::class, 'delete']);

    //Blog
    Route::get('/blog', [BlogController::class, 'index']);
    Route::get('/blog/{post:slug}', [BlogController::class, 'show']);

    //Works
    Route::get('/works', [WorkController::class, 'index']);
    Route::get('/works/{work:slug}', [WorkController::class, 'show']);

    //Lessons
    Route::get('/lessons-grid', [LessonsController::class, 'index']);
    Route::get('/lessons-grid/{lesson:slug}', [LessonsController::class, 'show']);

    //Teachers
    Route::get('/teachers', [TeacherController::class, 'index']);

    //Alumnis
    Route::get('/alumnis', [AlumnisController::class, 'index']);

    //Internships
    Route::get('/internships', [InternshipController::class, 'index']);
    Route::get('/internships/{internship:slug}', [InternshipController::class, 'show']);

    //Contact
    Route::get('/contact', [ContactController::class, 'index']);
    Route::post('/contact', [ContactController::class, 'store']);

    //Search
    Route::get('/search', [SearchController::class, 'index']);

    //Authentification stuff
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
});
