<?php
// root
Route::get('/', function () {
    return view('index');
});

// auth user
Auth::routes();
