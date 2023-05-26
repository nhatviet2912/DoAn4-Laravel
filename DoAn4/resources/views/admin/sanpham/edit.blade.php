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
            <form action="{{route ('admin.sanpham.update', $db) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="tenloai">Tên loại</label>
                    <select class ="form-control" name ="id_MaLoai">
                        <option value="0">Loại sản phẩm</option>

                        @foreach($lsp as  $lsp)
                            <option value="{{$lsp -> id}}">{{$lsp -> TenLoai}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <!-- <label for="masanpham">Tên sản phẩm</label> -->
                    <input type="hidden" class="form-control" id="id" name="id" value="{{$db -> id}}"
                    placeholder="Nhập ên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="tenloai">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="TenSanPham" name="TenSanPham" value="{{$db -> TenSanPham}}"
                    placeholder="Nhập ên sản phẩm">
                </div>
                
                <div class="form-group">
                    <label for="tenloai">Giá</label>
                    <input type="text" class="form-control" id="Gia" name="Gia" value="{{$db -> Gia}}"
                    placeholder="Nhập Giá">
                </div>
                <div class="form-group">
                    <label for="tenloai">Lượt xem</label>
                    <input type="int" class="form-control" id="LuotXem" name="LuotXem"  value="{{$db -> LuotXem}}"
                    placeholder="Nhập Lượt xem">
                </div>
                <div class="form-group">
                    <label for="Mota">Mô tả</label>
                    <textarea  class="form-control" id="mota" name="Mota" value="{{$db -> Mota}}"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Ảnh</label>
                    <input type="file" class="form-control" name="Anh">
                </div>
                <div class="form-group">
                    <label for="manhinh">Màn hình</label>
                    <input type="text" class="form-control" name="manhinh" value="{{$tskt -> manhinh}}">
                </div>
                <div class="form-group">
                    <label for="camerasau">CameraSau</label>
                    <input type="text" class="form-control" name="camerasau" value="{{$tskt -> camerasau}}">
                </div>
                <div class="form-group">
                    <label for="cameratruoc">CameraTruoc</label>
                    <input type="text" class="form-control" name="cameratruoc" value="{{$tskt -> cameratruoc}}">
                </div>
                <div class="form-group">
                    <label for="chip">Chip</label>
                    <input type="text" class="form-control" name="chip" value="{{$tskt -> chip}}">
                </div>
                <div class="form-group">
                    <label for="ram">Ram</label>
                    <input type="text" class="form-control" name="ram" value="{{$tskt -> ram}}">
                </div>
                <div class="form-group">
                    <label for="hedieuhanh">Hệ điều hành</label>
                    <input type="text" class="form-control" name="hedieuhanh" value="{{$tskt -> hedieuhanh}}">
                </div>
                <div class="form-group">
                    <label for="sim">Sim</label>
                    <input type="text" class="form-control" name="sim" value="{{$tskt -> sim}}">
                </div>

                <button type="submit" class="btn btn-primary">Sửa mới</button>
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

