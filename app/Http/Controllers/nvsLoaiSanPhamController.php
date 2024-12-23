<?php

namespace App\Http\Controllers;

use App\Models\nvsLoaiSanPham;
use Illuminate\Http\Request;

class nvsLoaiSanPhamController extends Controller
{
    // Admin : CRUD

    // List
    public function nvsList()
    {
        $nvsLoaiSanPham = nvsLoaiSanPham::all();
        return view('nvsAdmin.nvsLoaiSanPham.List', ['nvsLoaiSanPham' => $nvsLoaiSanPham]);
    }

    // Create
    public function nvsCreate()
    {
        return view('nvsAdmin.nvsLoaiSanPham.Create');
    }

    public function nvsStore(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $validated = $request->validate([
            'nvsMaLoai' => 'required|unique:nvs_loai_san_pham,nvsMaLoai|max:255',
            'nvsTenLoai' => 'required|max:255',
            'nvsTrangThai' => 'required|in:0,1', // đảm bảo giá trị đúng cho trạng thái
        ]);
    
        // Lưu vào cơ sở dữ liệu
        nvsLoaiSanPham::create([
            'nvsMaLoai' => $validated['nvsMaLoai'],
            'nvsTenLoai' => $validated['nvsTenLoai'],
            'nvsTrangThai' => $validated['nvsTrangThai'],
        ]);
        return redirect()->route('nvsAdmin.nvsLoaiSanPham.List')->with('success', 'Thêm mới loại sản phẩm thành công');
    }
    // Xem chi tiết
public function nvsShow($id)
{
    $item = nvsLoaiSanPham::where('nvsMaLoai', $id)->first(); 
    return view('nvsAdmin.nvsLoaiSanPham.Show', ['item' => $item]); 
}

// Sửa
public function nvsEdit($id)
{
    $item = nvsLoaiSanPham::where('nvsMaLoai', $id)->first(); 
    return view('nvsAdmin.nvsLoaiSanPham.Edit', compact('item')); 
}

// Cập nhật
public function nvsUpdate(Request $request, $id)
{
    $request->validate([
        'nvsTenLoai' => 'required|max:255',
        'nvsTrangThai' => 'required|in:0,1',
    ]);

    $data = $request -> only('nvsTenLoai', 'nvsTrangThai');

    nvsLoaiSanPham::where('nvsMaLoai', $id)->update($data); 

    return redirect()->route('nvsAdmin.nvsLoaiSanPham.List')->with('success', 'Cập nhật thành công!');
}

// Xóa
public function nvsDestroy($id)
{
    $item = nvsLoaiSanPham::where('nvsMaLoai', $id)->delete();
    return redirect()->route('nvsAdmin.nvsLoaiSanPham.List')->with('success', 'Xóa thành công!');
}

}    