<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\Admin\StoryController as AdminStoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('story/{story}', [StoryController::class, 'index'])->name('story');

Route::middleware('guest')->group(function () {
    Route::view('login', 'login')->name('login');
    Route::post('login', [SessionController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [SessionController::class, 'logout'])->name('logout');
});

Route::middleware('can:admin')->prefix('admin')->controller(AdminStoryController::class)->name('admin-')->group(function () {
    Route::get('story/new', 'new')->name('story-new');
    Route::post('story/save', 'save')->name('story-save');
    Route::match(['get', 'post'], 'story/approve/{story}', 'approve')->name('story-approve');
});
