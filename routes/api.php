<?php

use App\Http\Controllers\SheetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return (['field' => 'ola']);
});

Route::apiResource("sheet", SheetController::class);