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

Route::get('/{locale}/contact', function ($locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('contact');
});

Route::get('/{locale}/register', function ($locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('register');
});

Route::get('/{locale}/login', function ($locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('login');
});

Route::get('/{locale}/works/{work}', function ($locale, $work) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('single.work');
});

Route::get('/{locale}/teachers/{teacher}', function ($locale, $teacher) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('single.teacher');
});

Route::get('/{locale}/alumnis/{alumni}', function ($locale, $alumni) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('single.alumni');
});

Route::get('/{locale}/blog/{article}', function ($locale, $article) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('single.article');
});

Route::get('/{locale}/profile', function ($locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('profile');
});

Route::get('/{locale}/reset-password', function ($locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('forgotten_password');
});
