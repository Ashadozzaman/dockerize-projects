<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/migrate/data',function(){
    $data = DB::table('migrations')->get();
    echo "<pre>";print_r($data);echo "</pre>";
});