<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('landing', ['title' => 'Home Page']);
})->name('landing');

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/startfundraising', function () {
    return view('startfundraising', ['title' => 'Fundraising Page']);
});

Route::get('/aboutus', function () {
    return view('aboutus', ['title' => 'About Us Page']);
});

Route::get('/howitworks', function () {
    return view('howitworks', ['title' => 'How It Works Page']);
});

Route::get('/news', function () {
    return view('news', ['title' => 'News Page']);
});

Route::get('/signin', function () {
    return view('signin', ['title' => 'Sign In Page']);
});

Route::get('/signup', function () {
    return view('signup', ['title' => 'Sign Up Page']);
});

Route::get('/anonymousfunding', function () {
    return view('anonymousfunding', ['title' => 'Anonymous Funding Page']);
});

Route::get('/faq', function () {
    return view('faq', ['title' => 'FAQ Page']);
});

Route::get('/donate', function () {
    return view('donate', ['title' => 'Donation Page']);
});

Route::get('/privacypolicy', function () {
    return view('privacypolicy', ['title' => 'Privacy Policy Page']);
});

Route::get('/tnc', function () {
    return view('tnc', ['title' => 'Terms and Condition Page']);
});

Route::get('/campaigndetails', function () {
    return view('campaigndetails', ['title' => 'Detail Campaign']);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/account/delete', [RegisteredUserController::class, 'deleteAccount'])->name('account.delete');
});

Route::put('/update-password', [ProfileController::class, 'updatePassword'])->name('password.update');


Route::get('/profile', function () {
    return view('profile', ['title' => 'Profile']);
});


require __DIR__.'/auth.php';
