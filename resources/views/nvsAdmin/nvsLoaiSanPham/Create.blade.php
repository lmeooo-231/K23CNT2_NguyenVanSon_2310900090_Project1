@extends('nvsLayout.Admin.nvsMaster')
@section('title', 'Thêm mới loại sản phẩm')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới loại sản phẩm</h1>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('nvsAdmin.nvsLoaiSanPham.nvsStore') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nvsMaLoai" class="form-label">Mã Loại SP</label>
                    <input type="text" class="form-control" id="nvsMaLoai" name="nvsMaLoai" placeholder="Nhập mã loại sản phẩm" required>
                </div>
                <div class="mb-3">
                    <label for="nvsTenLoai" class="form-label">Tên Loại SP</label>
                    <input type="text" class="form-control" id="nvsTenLoai" name="nvsTenLoai" placeholder="Nhập tên loại sản phẩm" required>
                </div>
                <div class="mb-3">
                    <label for="nvsTrangThai" class="form-label">Trạng Thái</label>
                    <select class="form-select" id="nvsTrangThai" name="nvsTrangThai" required>
                        <option value="1">Hoạt động</option>
                        <option value="0">Không hoạt động</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Thêm mới</button>
                <a href="{{ route('nvsAdmin.nvsLoaiSanPham.List') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
@endsection