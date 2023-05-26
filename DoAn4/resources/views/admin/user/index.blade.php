@extends('admin.layout')



@section('admin.content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý User</h1>
    
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Địa chỉ</th>
                                <th>PassWord</th>
                                <th>Author</th>
                                <th>Admin</th>
                                <th>User</th>
                                <th></th>
                                

                            </tr>
                        </thead>
                    
                        <tbody>
                            @foreach($user as $item)
                                
                                <tr>
                                    <form action="{{route('admin.user.postQuyen') }}" method="post">
                                        @csrf
                                        <td>{{$item -> hoten }}</td>
                                        <td>{{$item -> email }}</td>
                                        <input type="hidden" name="email" value="{{ $item -> email }}">
                                        <td>{{$item -> sodienthoai}}</td>
                                        <td>{{$item -> diachi}}</td>
                                        <td>{{$item -> password }}</td>
                                        <td><input type="checkbox" name="author" {{$item->hasRole('author') ? 'checked' : ''}}></td>
                                        <td><input type="checkbox" name="admin"  {{$item->hasRole('admin') ? 'checked' : ''}}></td>
                                        <td><input type="checkbox" name="user"  {{$item->hasRole('user') ? 'checked' : ''}}></td>
                                        <td>
                                            
                                            <input type="submit" value="Cấp Quyền" class="btn btn-primary">
                                            
                                        </td>
                                    </form>
                                    
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

