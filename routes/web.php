<?php

use App\Http\Controllers\PurchaseOrder;
use App\Http\Controllers\PurchaseRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("po", PurchaseOrder::class);
Route::resource("pr", PurchaseRequest::class);
