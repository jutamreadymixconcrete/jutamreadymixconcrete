<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

// use Illuminate\Support\Facades\Route;

Route::get('/company-profile', function () {
    return response()->file(public_path('pdf/company-profile.pdf'));
});

// Route::get('/company-profile', function () {
//     return response()->download(public_path('pdf/company-profile.pdf'));
// });


// Route::get('/company-profile', function () {
//     return view('company-profile');
// });

// Route::get('/download-company-profile', function () {
//     return response()->download(public_path('pdf/company-profile.pdf'));
// });