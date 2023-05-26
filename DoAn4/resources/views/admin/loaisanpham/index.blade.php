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
                <h6 class="m-0 font-weight-bold text-primary">Danh sách loại sản phẩm</h6>
                <a href="{{route ( 'admin.loaisanpham.create' )}}" class="m-0 font-weight-bold text-primary">Thêm loại sản phẩm</a>

                </div>
                @if(Session:: has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                @if(Session:: has('error'))
                    <div class="alert alert-error">
                        {{Session::get('error')}}
                    </div>
                @endif
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>Mã Loại</th>
                                <th>Tên Loại</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            @foreach($db as $lsp)
                                <tr>
                                    <td>{{$lsp -> id }}</td>
                                    <td>{{$lsp -> TenLoai}}</td>
                                    
                                    <td>
                                        <a href="{{route ('admin.loaisanpham.edit', $lsp -> id)}}" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="{{route ('admin.loaisanpham.destroy', $lsp -> id)}}" onclick="return confirm('Bạn có muốn xóa không')" class="btn btn-sm btn-danger">Delete</a>
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


