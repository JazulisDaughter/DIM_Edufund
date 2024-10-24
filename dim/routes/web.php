<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landing', ['title' => 'Home Page']);
});

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

