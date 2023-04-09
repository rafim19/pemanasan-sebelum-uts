<?php

use App\Models\Faculty;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    return view('index');
});

Route::get('/test', function () {
    $test = Faculty::find(1);
    echo $test->name;
});


