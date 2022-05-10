<?php

use App\Http\Controllers\LabourController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome',['msg'=>'Developing soon']);
});

Route::get('/labour',[LabourController::class,'index']);
