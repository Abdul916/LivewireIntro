<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CounterComponent;
use App\Livewire\CreatePost;
use App\Livewire\Posts;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/counter', CounterComponent::class);
Route::get('/posts', Posts::class);
Route::get('/post', CreatePost::class);