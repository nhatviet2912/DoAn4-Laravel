@extends('admin.layout')


@section('admin.content')
<div class="col-lg-6">
    <!-- Form Basic -->
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
        </div>
        <div class="card-body">
        <form action="{{route ('admin.loaisanpham.update', $db) }}" method="post">
            @csrf
            <div class="form-group">
                <!-- <label for="tenloai">Mã loại</label> -->
                <input type="hidden" class="form-control" id="maloai" name="MaLoai" value="{{$db -> id}}"
                placeholder="Nhập tên loại">
            </div>
            <div class="form-group">
                <label for="tenloai">Tên loại</label>
                <input type="text" class="form-control" id="tenloai" name="TenLoai" value="{{$db -> TenLoai}}"
                placeholder="Nhập tên loại">
            </div>

            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
    </div>
</div>

@endsection

