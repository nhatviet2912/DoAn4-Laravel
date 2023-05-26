@extends('admin.layout')

@push('ckeditor')
    <script src="/ckeditor/ckeditor.js"></script>
@endpush

@section('admin.content')
<div class="col-lg-12">
    <!-- Form Basic -->
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Thêm sản phẩm</h6>
        </div>
        <div class="card-body">
            <form action="{{route ('admin.sanpham.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="tenloai">Tên loại</label>
                    <select class ="form-control" name ="id_MaLoai">
                        <option value="0">Loại sản phẩm</option>

                        @foreach($db as  $lsp)
                            <option value="{{$lsp -> id}}">{{$lsp -> TenLoai}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tenloai">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="TenSanPham" name="TenSanPham" 
                    placeholder="Nhập tên sản phẩm">
                </div>
                
                <div class="form-group">
                    <label for="tenloai">Giá</label>
                    <input type="text" class="form-control" id="Gia" name="Gia" 
                    placeholder="Nhập Giá">
                </div>
                <div class="form-group">
                    <label for="tenloai">Lượt xem</label>
                    <input type="int" class="form-control" id="LuotXem" name="LuotXem" 
                    placeholder="Nhập Lượt xem">
                </div>
                <div class="form-group">
                    <label for="Mota">Mô tả</label>
                    <textarea  class="form-control" id="mota" name="Mota"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Ảnh</label>
                    <input type="file" class="form-control" name="Anh">
                </div>
                <div class="form-group">
                    <label for="">Màn hình</label>
                    <input type="text" class="form-control" name="manhinh">
                </div>
                <div class="form-group">
                    <label for="">CameraSau</label>
                    <input type="text" class="form-control" name="camerasau">
                </div>
                <div class="form-group">
                    <label for="">CameraTruoc</label>
                    <input type="text" class="form-control" name="cameratruoc">
                </div>
                <div class="form-group">
                    <label for="">Chip</label>
                    <input type="text" class="form-control" name="chip">
                </div>
                <div class="form-group">
                    <label for="">Ram</label>
                    <input type="text" class="form-control" name="ram">
                </div>
                <div class="form-group">
                    <label for="">Hệ điều hành</label>
                    <input type="text" class="form-control" name="hedieuhanh">
                </div>
                <div class="form-group">
                    <label for="">Sim</label>
                    <input type="text" class="form-control" name="sim">
                </div>


                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>

@endsection

@push('ckeditor_footer')
    <script>
        CKEDITOR.replace('mota')
    </script>
@endpush

