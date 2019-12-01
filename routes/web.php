<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('site.contact');
});

Route::post('/register', function () {
    return '';
});

// Aceita todo tipo de requisão http
Route::any('/any', function () {
    return 'Any';
});

// Aceita todo tipo de requisão http
Route::match(['get','post'],'/match', function () {
    return 'match';
});