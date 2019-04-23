<?php

use Illuminate\Http\Request;
//use Symfony\Component\Routing\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/products','ProductController');

Route::group(['prefix'=>'products'], function(){
    Route::apiResource('/{product}/reviews', 'ReviewController');
});
