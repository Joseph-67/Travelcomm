<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TblForumCategoryController;
use App\Http\Controllers\TblForumTopicController;
use App\Http\Controllers\TblForumPostController;
use App\Http\Controllers\RoleController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/forums',                 [TblForumCategoryController::class, 'index'])->name('forums');
    Route::get('/forum-category',         [TblForumCategoryController::class, 'create'])->name('forum-category');
    Route::post('/forum-category',        [TblForumCategoryController::class, 'store'])->name('forum-store');
    Route::post('/forum-category-paid',   [TblForumCategoryController::class, 'updatePaidStatus'])->name('forum-paid');
    // route for topics
    Route::get('/forums/{id}/topics',       [TblForumTopicController::class, 'index'])->name('forums-topic');
    Route::get('/forums/topics',            [TblForumTopicController::class, 'create'])->name('forums-topic-create');
    Route::post('/forum/topics',            [TblForumTopicController::class, 'store'])->name('forum-topic-store');
    Route::get('/forum/{id}/single-topic',  [TblForumTopicController::class, 'show'])->name('forum-post');
    // route for post
    Route::post('/forum/topic/post',            [TblForumPostController::class, 'store'])->name('forum-topic-post');
    //Atuma's roles
    Route::get('/roles',  [RoleController::class, 'create'])->name('roles-show');
    Route::post('/roles',  [RoleController::class, 'store'])->name('roles-store');
});
