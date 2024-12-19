<?php

use App\Http\Controllers\nvs_Quan_TriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admins/nvs-login',[nvs_Quan_TriController::class,'nvsLogin'])->name('admins.nvsLogin');     
Route::post('/admins/nvs-login',[nvs_Quan_TriController::class,'nvsLoginSubmit'])->name('admin.nvsLoginSubmit');     