<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/bio', function(){
    return view('landing.tracard');
}); 

Route::get('/pilantropi', function(){
    return view('landing.pilantropi');
}); 

