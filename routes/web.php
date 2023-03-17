<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;

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
/*
Route::get('/welcome', function () {
    return view('homepage');
})->name('homepage');
*/

Route::get('/guest', function () {
    return view('homepage');
});


Route::get('/welcome', function () {
    return Inertia::render('HomePage');
});

Route::get('/user', function () {
    return Inertia::render('User');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::post('/post', [PostController::class, 'store'])->name('posts.store');
Route::post('/post/{id}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
Route::post('/comment/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');

Route::post('/likes', [LikeController::class, 'store'])->name('likes.store');
Route::post('/likes/{id}', [LikeController::class, 'destroy'])->name('likes.destroy');

Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::post('/user/update-image', [UserController::class, 'updateImage'])->name('user.updateImage');
Route::post('/user/update-header-image', [UserController::class, 'updateHeaderImage'])->name('user.update.header.image');

// Follow related Routes
Route::get('/create-follow/{user:id}', [FollowController::class, 'createFollow']);
Route::post('/remove-follow/{user:id}', [FollowController::class, 'removeFollow']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
