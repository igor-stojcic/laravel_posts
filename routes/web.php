<?php

use Illuminate\Support\Facades\Route;


Route::get('/', "PostController@index")->name('home');
Route::get("/post/create","PostController@create");
Route::post("/post/create","PostController@store");
Route::get("/post/{id}","PostController@show")->name('post.single');

Route::get("/post/{post}/edit","PostController@edit");
Route::put("/post/{post}/edit","PostController@update");
Route::get("/post/{post}/delete","PostController@delete");
