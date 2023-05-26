@extends('/FptShop/layout')

@push('login')
<link href="{{ ('/shop/assets/css/login.css') }}" rel="stylesheet">

@endpush

@section('/FptShop/content')
<div class="content">
    <div class="grid">
        <div class="home-dangki">
            <div class="home-dangki-header">
                <div class="home-dangki-header-title">
                    Đăng kí
                </div>
                <hr class="hr">
            </div>
            <div class="home-dangki-info">
                <form action="" id="formdangki">
                    <h2 style="margin-top: 20px;">Vui lòng điền vào thông tin để tạo tài khoản</h2>
                    <div class="home-dangki-info-list">
                        <label for="" class="home-dangki-info-list-left">Họ tên:</label>
                        <input type="text" placeholder="Nhập tên khách hàng" class="home-dangki-info-list-right" id="name" required>
                    </div>
                    <div class="home-dangki-info-list">
                        <label for="" class="home-dangki-info-list-left">Số điện thoại:</label>
                        <input type="text" placeholder="Nhập số điện thoại" class="home-dangki-info-list-right" id="phone" required>
                    </div>
                    <div class="home-dangki-info-list">
                        <label for="" class="home-dangki-info-list-left">Email:</label>
                        <input type="email" placeholder="Email" class="home-dangki-info-list-right" id="email" required>
                    </div>
                    <div class="home-dangki-info-list">
                        <label for="" class="home-dangki-info-list-left">Mật khẩu:</label>
                        <input type="password" placeholder="Nhập mật khẩu" class="home-dangki-info-list-right" id="password" required>
                    </div>
                    <div class="home-dangki-info-list">
                        <label for="" class="home-dangki-info-list-left">Nhập lại mật khẩu:</label>
                        <input type="password" placeholder="Nhập lại mật khẩu" class="home-dangki-info-list-right" id="nhaplaipass" required>
                    </div>
                </form>
            </div>
            <div class="home-dangki-btn">
                <button class="home-dangki-btn-btns" onclick="dangki()">Đăng ký</button>
            </div>
        </div>
    </div>
</div>
@endsection


