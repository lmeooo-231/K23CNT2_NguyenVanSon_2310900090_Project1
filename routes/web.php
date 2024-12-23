<?php

use App\Http\Controllers\nvsLoaiSanPhamController;
use App\Http\Controllers\nvsQuanTriController;
use App\Http\Controllers\nvsSanPhamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/nvs-login',[nvs_QUAN_TRIController::class,'nvsLogin'])->name('admin.nvsLogin');
Route::post('/admin/nvs-login',[nvs_QUAN_TRIController::class,'nvsLoginSubmit'])->name('admin.nvsLoginSubmit');


Route::get('/nvsAdmin/nvsLoaiSanPham/List', [nvsLoaiSanPhamController::class, 'nvsList'])->name('nvsAdmin.nvsLoaiSanPham.List');

// Route thêm mới
Route::get('/nvsAdmin/nvsLoaiSanPham/create', [nvsLoaiSanPhamController::class, 'nvsCreate'])->name('nvsAdmin.nvsLoaiSanPham.Create');
Route::post('/nvsAdmin/nvsLoaiSanPham/store', [nvsLoaiSanPhamController::class, 'nvsStore'])->name('nvsAdmin.nvsLoaiSanPham.nvsStore');

// Route xem chi tiết
Route::get('/nvsAdmin/nvsLoaiSanPham/{id}/Show', [nvsLoaiSanPhamController::class, 'nvsShow'])->name('nvsAdmin.nvsLoaiSanPham.Show');

// Route sửa
Route::get('/nvsAdmin/nvkLoaiSanPham/{id}/Edit', [nvsLoaiSanPhamController::class, 'nvsEdit'])->name('nvsAdmin.nvsLoaiSanPham.Edit');
Route::post('/nvsAdmin/nvkLoaiSanPham/{id}', [nvsLoaiSanPhamController::class, 'nvsUpdate'])->name('nvsAdmin.nvsLoaiSanPham.Update');

// Route xóa
Route::delete('/nvsAdmin/nvsLoaiSanPham/{id}', [nvsLoaiSanPhamController::class, 'nvsDestroy'])->name('nvsAdmin.nvsLoaiSanPham.Destroy');



// bang san pham

Route::get('/nvsAdmin/nvsSanPham/List', [nvsSanPhamController::class, 'nvsList'])->name('nvsAdmin.nvsSanPham.List');

// Route thêm mới
Route::get('/nvsAdmin/nvsSanPham/create', [nvsSanPhamController::class, 'nvsCreate'])->name('nvsAdmin.nvsSanPham.Create');
Route::post('/nvsAdmin/nvsSanPham/store', [nvsSanPhamController::class, 'nvsStore'])->name('nvsAdmin.nvsSanPham.nvsStore');

// Route xem chi tiết
Route::get('/nvsAdmin/nvsSanPham/{id}/Show', [nvsSanPhamController::class, 'nvsShow'])->name('nvsAdmin.nvsSanPham.Show');

// Route sửa
Route::get('/nvsAdmin/nvsSanPham/{id}/Edit', [nvsSanPhamController::class, 'nvsEdit'])->name('nvsAdmin.nvsSanPham.Edit');
Route::post('/nvsAdmin/nvsSanPham/{id}', [nvsSanPhamController::class, 'nvsUpdate'])->name('nvsAdmin.nvsSanPham.Update');

// Route xóa
Route::delete('/nvsAdmin/nvsSanPham/{id}', [nvsSanPhamController::class, 'nvsDestroy'])->name('nvsAdmin.nvsSanPham.Destroy');
