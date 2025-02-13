<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/skill-and-work', [PortfolioController::class, 'skillAndWork'])->name('SkillAndWork');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
