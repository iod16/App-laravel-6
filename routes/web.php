<?php

//Route::get('products', 'ProductController@index')->name('products.index');
Route::get('/', function () {
    return view('welcome');
});


Route::resource('products','ProductController');











/*


Route::get('/contato', function () {
    return view('site.contact');
});

Route::get('/categorias/{flag}', function ($flag) {
    return "Produtos da categoria: {$flag}";
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
*/