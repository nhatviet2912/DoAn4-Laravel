@extends('admin.layout')


@section('admin.content')

<div class="col-lg-12">
    <!-- Form Basic -->
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Thêm loại sản phẩm</h6>
        </div>
        <div class="card-body">
            <form action="{{route ('admin.loaisanpham.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="tenloai">Tên loại</label>
                    <input type="text" class="form-control" id="tenloai" name="TenLoai" 
                    placeholder="Nhập tên loại">
                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>

@endsection

