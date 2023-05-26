@extends('admin.layout')



@section('admin.content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý loại sản phẩm</h1>
    
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
                <a href="{{route ( 'admin.sanpham.create' )}}" class="m-0 btn btn-primary">Thêm sản phẩm</a>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                            
                                <th>Mã Sản Phẩm</th>
                                <th>Mã Loại</th>
                                <th>Tên Loại</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá bán</th>
                                <th>Lượt xem</th>
                                <!-- <th>Mô tả</th> -->
                                <th>Ảnh</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            @foreach($db as $sp)
                                <tr>
                                    <td>{{$sp -> id }}</td>
                                    <td>{{$sp -> id_MaLoai}}</td>
                                    <td>{{$sp -> loaisanpham -> TenLoai}}</td>
                                    <td>{{$sp -> TenSanPham}}</td>
                                    <td>{{number_format ($sp -> Gia)}}</td>
                                    <td>{{$sp -> LuotXem}}</td>
                                    <!-- <td>{{$sp -> Mota}}</td> -->
                                    <td>
                                        <img src="/upload/{{$sp -> Anh}}" alt="" style="width: 100px; height: 100px">
                                        
                                    </td>
                                    <td>
                                    <a href="{{route ('admin.sanpham.edit', $sp -> id)}}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{route ('admin.sanpham.destroy', $sp -> id)}}" onclick="return confirm('Bạn có muốn xóa không')" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    <!--Row-->

    <!-- Modal Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Are you sure you want to logout?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
            <a href="login.html" class="btn btn-primary">Logout</a>
        </div>
        </div>
    </div>
    </div>

</div>
@endsection


