<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\ContactController;


use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');




// all dashbaord route buttom here



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


        
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');



    Route::get('/category', [CategoryController::class, 'category'])->name('post.category');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

    Route::delete('/categories-destroy/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');


    Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('categories/{id}', [CategoryController::class, 'update'])->name('categories.update');



    // post creta all route here

    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/post-create', [PostController::class, 'post_create'])->name('psot.create');
    Route::get('/post-list', [AdminController::class, 'post_list'])->name('psot.list');


    // Route to edit a post
    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');

    // Route to update a post
    Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
    // Route to delete a post
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

    Route::get('/posts/{id}/{title}', [HomeController::class, 'post_show'])->name('post.show');
    Route::get('/admin/about', [AdminController::class, 'about'])->name('admin.about');
    Route::get('/admin/contact', [AdminController::class, 'contact'])->name('admin.contact');


    Route::post('/team/store', [AboutUsController::class, 'storeTeam'])->name('team.store');



    Route::post('/contact-info/store', [ContactInfoController::class, 'Update'])->name('contact-info.store');

    Route::post('/contact', [ContactController::class, 'sendContactForm'])->name('contact.send');



 

});




require __DIR__.'/auth.php';
