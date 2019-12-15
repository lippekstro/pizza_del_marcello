<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/pizzas', function(){
    return view('pizzas');
});

Route::get('/toppings', function(){
    return view('toppings');
});