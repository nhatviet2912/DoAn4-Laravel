@extends('/FptShop/layout')

@push('login')
<link href="{{ ('/shop/assets/css/login.css') }}" rel="stylesheet">

@endpush

@section('/FptShop/content')
<div class="content">
    <div class="grid">
        <div class="home__login">
            <div class="home__login-header">
                <div class="home__login-header-title">
                    Đăng nhập
                    
                </div>
                <hr class="hr">
            </div>
            <div class="home__login-content">
                <div class="home__login-content-info">
                    <form action="" id="login">
                        <div class="home__login-content-info-name">
                            <h3>Thông tin khách hàng đăng nhập hệ thống</h3>
                        </div>
                        <div class="home__login-content-info-kh">
                            <div class="home__login-content-info-kh-account">
                                <label for="" class="home__login-content-info-kh-account-label">Email hoặc số điện thoại</label>
                                <input type="text" placeholder="Tên đăng nhập" class="home__login-content-info-kh-account-input" id="user">
                            </div>
                            <div class="home__login-content-info-kh-account">
                                <label for="" class="home__login-content-info-kh-account-label">Mật khẩu</label>
                                <input type="password" placeholder="Nhập mật khẩu" class="home__login-content-info-kh-account-input" id="pass">
                            </div>
                            <div class="home__login-content-info-kh-input">
                                <button class="home__login-content-info-kh-input-btn">Đăng nhập</button>
                                <a href="" class="home__login-content-info-kh-input-misspass">Quên mật khẩu</a>
                            </div>
                            <div class="home__login-content-info-kh-fbgm">
                                <button  class="home__login-content-info-kh-fb"><i class="icons fa-brands fa-facebook-square"></i>Đăng nhập bằng Faccbook</button>
                                <button  class="home__login-content-info-kh-gm"><i class="icons fa-brands fa-google"></i>Đăng nhập bằng Gmail</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="home__login-content-text">
                    <div class="home__login-content-text-name">
                        <h3 class="home__login-content-text-name-h3">Bạn chưa là thành viên</h3>
                        <p>Đăng ký là thành viên để hưởng nhiều lợi ích và đặt mua hàng dễ hơn</p>
                        <a href="./dangki.html">Đăng ký tài khoản</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


