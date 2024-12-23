<?php

namespace App\Http\Controllers;

use App\Models\nvsSanPham;
use Illuminate\Http\Request;

class nvsSanPhamController extends Controller
{
    // Admin : CRUD

    // List
    public function nvsList()
    {
        $nvsSanPham = nvsSanPham::all();
        return view('nvsAdmin.nvsSanPham.List', ['nvsSanPham' => $nvsSanPham]);
    }

    // Create
    public function nvsCreate()
    {
        return view('nvsAdmin.nvsSanPham.Create');
    }

    public function nvsStore(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $validated = $request->validate([
            'nvsMaSanPham' => 'required|unique:nvs_san_pham,nvsMaSanPham|max:255',
            'nvsTenSanPham' => 'required|max:255',
            'nvsHinhAnh' => 'required|max:255',
            'nvsSoLuong' => 'required',
            'nvsDoiGia' => 'required',
            'nvsMaSanPham' => 'required',
            'nvsTrangThai' => 'required|in:0,1', // đảm bảo giá trị đúng cho trạng thái
        ]);
    
        // Lưu vào cơ sở dữ liệu
        nvsSanPham::create([
            'nvsMaSanPham' => $validated['nvsMaSanPham'],
            'nvsTenSanPham' => $validated['nvsTenSanPham'],
            'nvsHinhAnh' => $validated['nvsHinhAnh'],
            'nvsSoLuong' => $validated['nvsSoLuong'],
            'nvsDoiGia' => $validated['nvsDoiGia'],
            'nvsMaLoai' => $validated['nvsMaLoai'],
            'nvsTrangThai' => $validated['nvsTrangThai'],
        ]);
        return redirect()->route('nvsAdmin.nvsSanPham.List')->with('success', 'Thêm mới sản phẩm thành công');
    }
    // Xem chi tiết
public function nvsShow($id)
{
    $item = nvsSanPham::where('nvsMaSanPham', $id)->first(); 
    return view('nvsAdmin.nvsSanPham.Show', ['item' => $item]); 
}

// Sửa
public function nvsEdit($id)
{
    $item = nvsSanPham::where('nvsMaSanPham', $id)->first(); 
    return view('nvsAdmin.nvsSanPham.Edit', compact('item')); 
}

// Cập nhật
public function nvsUpdate(Request $request, $id)
{
    $request->validate([
        'nvsTenSanPham' => 'required|max:255',
        'nvsHinhAnh' => 'required|max:255',
        'nvsSoLuong' => 'required',
        'nvsDoiGia' => 'required',
        'nvsMaSanPham' => 'required',
        'nvsTrangThai' => 'required|in:0,1',
    ]);

    $data = $request -> only('nvsTenSanPham', 'nvsTrangThai');

    nvsSanPham::where('nvsMaSanPham', $id)->update($data); 

    return redirect()->route('nvsAdmin.nvsSanPham.List')->with('success', 'Cập nhật thành công!');
}

// Xóa
public function nvsDestroy($id)
{
    $item = nvsSanPham::where('nvsMaSanPham', $id)->delete();
    return redirect()->route('nvsAdmin.nvsSanPham.List')->with('success', 'Xóa thành công!');
}

}    
  

