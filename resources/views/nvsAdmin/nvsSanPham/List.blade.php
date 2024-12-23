@extends('nvsLayout.Admin.nvsMaster')
@section('title','Danh sách loại sản phẩm')

@section('content-body')
    <div class="container border">
        <div class="row">
           <div class="col-12">
            <h1>Danh sách loại sản phẩm</h1> 
            <a href="{{route('nvsAdmin.nvsSanPham.Create')}}" class="btn btn-success">Thêm mới</a>
           </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã  SP</th>
                        <th>Tên  SP</th>
                        <th>Hinh Anh</th>
                        <th>So luong</th>
                        <th>Don Gia</th>
                        <th>Ma loai</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nvsSanPham as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nvsMaSanPham}}</td>
                            <td>{{$item->nvsTenSanPham}}</td>
                            <td>{{$item->nvsHinhAnh}}</td>
                            <td>{{$item->nvsSoLuong}}</td>
                            <td>{{$item->nvsDoiGia}}</td>
                            <td>{{$item->nvsMaLoai}}</td>
                            <td>{{ $item->nvsTrangThai == 1 ? 'Hoạt động' : 'Không hoạt động' }}</td>
                            <td>
                                <a href="{{ route('nvsAdmin.nvsSanPham.Show', ['id' => $item->nvsMaSanPham]) }}" class="btn btn-primary">Xem</a>
                                <a href="{{ route('nvsAdmin.nvsSanPham.Edit', ['id' => $item->nvsMaSanPham]) }}" class="btn btn-warning">Sửa</a>
                                <form action="{{ route('nvsAdmin.nvsSanPham.Destroy', $item->nvsMaSanPham) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                                </form>
                            </td>
                            
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5">Không có dữ liệu</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection