<?php

Route::get('/', function () {
    return view('templates.index');
});

Route::get('/contato', function () {
    return view('templates.contato');
});

Route::get('/sobre', function () {
    return view('templates.sobre');
});

Route::get('/galerias', function () {
    return view('templates.galeria');
});