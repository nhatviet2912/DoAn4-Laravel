@extends('admin.layout')



@section('admin.content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý đơn hàng</h1>
    
    </div>

    <div class="row">
        <div class="col-lg-12">
            
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <!-- <h6 class="m-0 font-weight-bold text-primary">Danh sách đơn hàng</h6> -->
                    <a href="{{route ( 'admin.donhang.donhangdaxacnhan' )}}" class="m-12 btn btn-primary">Danh sách đơn hàng đã thanh toán</a>
                </div>
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <a href="{{route ( 'admin.donhang.donhangchuaxacnhan' )}}" class="m-12 btn btn-primary">Danh sách đơn hàng chưa thanh toán</a>

                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                            
                                <th>Mã đơn hàng</th>
                                <th>Tên khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Thành tiền</th>
                                <th>Ngày đặt hàng</th>
                                <th>Chức năng </th>
                                <th>Trạng thái</th>

                            </tr>
                        </thead>
                    
                        <tbody>
                            @foreach($dh as $dh)
                                <tr>
                                    <td>{{$dh -> id }}</td>
                                    <td>{{$dh -> khachhang ->tenkhachhang}}</td>
                                    <td>{{$dh -> khachhang -> sodienthoai}}</td>
                                    <td>{{$dh -> khachhang -> diachi}}</td>
                                    <td>{{number_format ($dh -> thanhtien)}}</td>
                                    
                                    <td>{{$dh -> created_at}}</td>
                                    <td>
                                        <a href="{{ route ('admin.donhang.chitietdonhang', $dh -> id ) }}"  class="btn btn-warning" >
                                            <i class="fa fa-solid fa-eye"></i>

                                        </a>

                                    </td>
                                    <td>
                                        <button class="btn btn-success">
                                            {{$dh -> trangthai}}    
    
                                        </button>
                                    </td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    <!--Row-->

    

</div>
@endsection