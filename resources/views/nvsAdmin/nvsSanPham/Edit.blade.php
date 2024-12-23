@extends('nvsLayout.Admin.nvsMaster')
@section('title', 'Sửa loại sản phẩm')

@section('content-body')
    <div class="container">
        <h1>Sửa loại sản phẩm</h1>
        <form action="{{ route('nvsAdmin.nvsLoaiSanPham.Update', $item->nvsMaLoai) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nvsTenLoai">Tên Loại SP</label>
                <input type="text" name="nvsTenLoai" class="form-control" value="{{ $item->nvsTenLoai }}" required>
            </div>
            <div class="form-group">
                <label for="nvsTrangThai">Trạng thái</label>
                <select name="nvsTrangThai" class="form-control">
                    <option value="1" {{ $item->nvsTrangThai == 1 ? 'selected' : '' }}>Hoạt động</option>
                    <option value="0" {{ $item->nvsTrangThai == 0 ? 'selected' : '' }}>Không hoạt động</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
@endsection