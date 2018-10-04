<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiresource('/products','ProductController');


Route::group(['prefix'=>'products'],function(){
  Route::apiresource('/{products}/reviews','ReviewController');
});
