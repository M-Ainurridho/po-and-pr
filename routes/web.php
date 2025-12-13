<?php

use App\Http\Controllers\PurchaseOrder;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("po", PurchaseOrder::class);
