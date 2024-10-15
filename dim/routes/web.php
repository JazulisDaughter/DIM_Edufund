<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing',['title' => 'landing page']);
});

Route::get('/fundraise', function () {
    return view('fundraise',['title' => 'fundraise page']);
});

Route::get('/signin', function () {
    return view('signin',['title' => 'signin page']);
});

// Route::get('/signup', function () {
//     return view('signup',['title' => 'signup page']);
// });

// Route::get('/aboutus', function () {
//     return view('aboutus',['title' => 'aboutus page']);
// });

