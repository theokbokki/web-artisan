<?php

use Illuminate\Support\Facades\App;
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
    return redirect(App::currentLocale());
});

Route::get('/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('home');
});

Route::get('/{locale}/blog', function ($locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('blog');
});

Route::get('/{locale}/forum', function ($locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('forum');
});

Route::get('/{locale}/alumnis', function ($locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('old_students');
});

Route::get('/{locale}/teachers', function ($locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('teachers');
});

Route::get('/{locale}/works', function ($locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('works');
});

Route::get('/{locale}/internships', function ($locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('internships');
});

Route::get('/{locale}/translations', function ($locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('translations');
});

Route::get('/{locale}/course-grid', function ($locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('course_grid');
});
