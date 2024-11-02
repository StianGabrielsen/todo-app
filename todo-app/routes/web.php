<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/greeting", function() {
    return "hello world";
});

Route::get('/user/{id}', function (string $id) {
    if ($id == 'sverre') return 'hei'.$id;
    return 'User '.$id;
});