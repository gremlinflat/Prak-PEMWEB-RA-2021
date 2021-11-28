<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'description' => 'This is the home page',
        'keywords' => 'home, page',
    ]);
});


Route::get('/add', function () {
    return view('add', [
        'title' => 'ADD ITEM',
        'description' => 'This is the about page',
        'keywords' => 'about, page',
    ]);
});

Route::get('/item/{id}', function ($id) {
    return view('item', ['id' => $id]);
});

Route::get('/item-edit/{id}', function ($id) {
    return view('item-edit', ['id' => $id]);
});

Route::get('/user/{id}', function ($user) {
    return view('user', ['user' => $user]);
});

Route::get('/login', function () {
    return view('login', [
        'title' => 'Login',
        'description' => 'This is the login page',
        'keywords' => 'login, page',
    ]);
});

Route::get('/register', function () {
    return view('register', [
        'title' => 'Register',
        'description' => 'This is the register page',
        'keywords' => 'register, page',
    ]);
});