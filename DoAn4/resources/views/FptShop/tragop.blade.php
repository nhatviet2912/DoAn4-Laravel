@extends('/FptShop/layout')

@push('tragop')
<link href="{{ ('/shop/assets/css/tragop.css') }}" rel="stylesheet">

@endpush

@section('/FptShop/content')
<section class="content">
    <div class="grid">
        <div class="header__content">
            <div class="link-out">
                <a href="./index.html" class="link-out-link">Trang chủ</a><i class="link-out-icon fa-solid fa-caret-right"></i>
                <span  class="link-out-spn">Trả góp 0%</span>
            </div>
        </div>
        <div class="grid__row">
            <div class="grid__col-2">
                <div class="home-left">
                    <div class="home-left-top">
                        <div class="home-left-top-name">
                            <h2>Chọn gói trả góp</h2>
                        </div>
                        <div class="home-left-top-info"> 
                            <ul class="home-left-top-info-list">
                                <li class="home-left-top-info-item">
                                    <img src="	https://fptshop.com.vn/landing-tra-gop-uu-dai/Content/images/tragop/tg-1.png" alt="">
                                    <a href="" class="home-left-top-info-link">
                                        Trả góp 0 %
                                    </a>
                                </li>
                                
                                <li class="home-left-top-info-item">
                                    <img src="	https://fptshop.com.vn/landing-tra-gop-uu-dai/Content/images/tragop/tg-3.png" alt="">
                                    <a href="" class="home-left-top-info-link">
                                        Lãi suất thấp
                                    </a>
                                </li>
                                <li class="home-left-top-info-item">
                                    <img src="	https://fptshop.com.vn/landing-tra-gop-uu-dai/Content/images/tragop/tg-5.png" alt="">
                                    <a href="" class="home-left-top-info-link">
                                        Trả góp thẻ tín dụng
                                    </a>
                                </li>
                                <li class="home-left-top-info-item">
                                    <img src="	https://fptshop.com.vn/landing-tra-gop-uu-dai/Content/images/tragop/tg-6.png" alt="">
                                    <a href="" class="home-left-top-info-link">
                                        FFriends
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="home-left-infomations">
                        <div class="home-left-infomations-name">
                            <h2 class="home-left-name-h2">Hướng dẫn mua trả góp</h2>
                        </div>
                        <div class="home-left-infomations-text">
                            <ul class="home-left-infomations-text-list">
                                <li class="home-left-infomations-text-item"><a href="" class="home-left-infomations-text-link">Trả góp qua công ty tài chính</a></li>
                                <li class="home-left-infomations-text-item"><a href="" class="home-left-infomations-text-link">Trả góp qua thẻ tín dụng</a></li>
                                <li class="home-left-infomations-text-item"><a href="" class="home-left-infomations-text-link">Trả góp qua F.Friends</a></li>
                                <li class="home-left-infomations-text-item"><a href="" class="home-left-infomations-text-link">Giải đáp thắc mắc về trả góp</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid__col-10">
                <div class="home__fiter">
                    <div class="home__fiter-header">
                        <div class="grid__row">
                            <div class="grid__col-10-3 home__fiter-header-mobile-p">
                                <div class="home__fiter-header-mobile mobile">
                                    <p class="home__fiter-header-spn">Điện thoại</p>
                                </div>
                            </div>
                            <div class="grid__col-10-3 home__fiter-header-mobile-p">
                                <div class="home__fiter-header-mobile">
                                    <p class="home__fiter-header-spn">Laptop</p>
                                </div>
                            </div>
                            <div class="grid__col-10-3 home__fiter-header-mobile-p">
                                <div class="home__fiter-header-mobile">
                                    <p class="home__fiter-header-spn">Phụ kiện</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home__fiter-select">
                        <div class="home__fiter-select-price">
                            <span>Sắp xếp theo: </span>
                            <select name="" id="" class="select">
                                <option value="">Giá cao đến thấp</option>
                                <option value="">Giá thấp đến cao</option>
                                <option value="">Bán chạy nhất</option>
                                <option value="">Xem nhiều nhất</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="home__product">
                    <div class="grid__row">
                        <div class="grid__col-10-4">
                            <div class="home__product-info ">
                                <div class="home__product-info-img">
                                    <img src="./assets/img/ip12.jpg" alt="" >
                                </div>
                                <div class="home__product-info-text">
                                    <h4>IPhone 12 64GB</h4>
                                    <div class="home__product-info-text-price">
                                        <span class="home__product-info-text-price-old">21.990.000đ</span>
                                        <span class="home__product-info-text-price-new">17.990.000đ</span>
                                    </div>
                                </div>
                                <div class="sale">
                                    <p class="tragop">Trả góp 0%</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid__col-10-4">
                            <div class="home__product-info ">
                                <div class="home__product-info-img">
                                    <img src="./assets/img/ip13pro.jpg" alt="" >
                                </div>
                                <div class="home__product-info-text">
                                    <h4>IPhone 13 Pro Max 1TB</h4>
                                    <div class="home__product-info-text-price">
                                        <span class="home__product-info-text-price-old">49.990.000đ</span>
                                        <span class="home__product-info-text-price-new">45.990.000đ</span>
                                    </div>
                                </div>
                                <div class="sale">
                                    <p class="tragop">Trả góp 0%</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid__col-10-4">
                            <div class="home__product-info ">
                                <div class="home__product-info-img">
                                    <img src="./assets/img/ip13mini.webp" alt="" >
                                </div>
                                <div class="home__product-info-text">
                                    <h4>IPhone 13 Mini 128GB</h4>
                                    <div class="home__product-info-text-price">
                                        <span class="home__product-info-text-price-old">21.990.000đ</span>
                                        <span class="home__product-info-text-price-new">18.990.000đ</span>
                                    </div>
                                </div>
                                <div class="sale">
                                    <p class="tragop">Trả góp 0%</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid__col-10-4">
                            <div class="home__product-info ">
                                <div class="home__product-info-img">
                                    <img src="./assets/img/ip11 series.webp" alt="" >
                                </div>
                                <div class="home__product-info-text">
                                    <h4>IPhone 11 64GB</h4>
                                    <div class="home__product-info-text-price">
                                        <span class="home__product-info-text-price-old">16.990.000đ</span>
                                        <span class="home__product-info-text-price-new">13.990.000đ</span>
                                    </div>
                                </div>
                                <div class="sale">
                                    <p class="tragop">Trả góp 0%</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid__row home__product-bottom">
                        <div class="grid__col-10-4">
                            <div class="home__product-info ">
                                <div class="home__product-info-img">
                                    <img src="./assets/img/samsung1.jpg" alt="" >
                                </div>
                                <div class="home__product-info-text">
                                    <h4>SamSung Galaxy S22 Ultra 5G 512GB</h4>
                                    <div class="home__product-info-text-price">
                                        <!-- <span class="home__product-info-text-price-old">21.990.000đ</span> -->
                                        <span class="home__product-info-text-price-new">36.990.000đ</span>
                                    </div>
                                </div>
                                <div class="sale">
                                    <p class="tragop">Trả góp 0%</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid__col-10-4">
                            <div class="home__product-info ">
                                <div class="home__product-info-img">
                                    <img src="./assets/img/samsung2.jpg" alt="" >
                                </div>
                                <div class="home__product-info-text">
                                    <h4>SamSung Galaxy S21 Ultra 128GB</h4>
                                    <div class="home__product-info-text-price">
                                        <span class="home__product-info-text-price-old">25.990.000đ</span>
                                        <span class="home__product-info-text-price-new">30.990.000đ</span>
                                    </div>
                                </div>
                                <div class="sale">
                                    <p class="tragop">Trả góp 0%</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid__col-10-4">
                            <div class="home__product-info ">
                                <div class="home__product-info-img">
                                    <img src="./assets/img/samsung6.jpg" alt="" >
                                </div>
                                <div class="home__product-info-text">
                                    <h4>SamSung Galaxy Z Flip3 5G 256GB</h4>
                                    <div class="home__product-info-text-price">
                                        <span class="home__product-info-text-price-old">21.990.000đ</span>
                                        <span class="home__product-info-text-price-new">18.990.000đ</span>
                                    </div>
                                </div>
                                <div class="sale">
                                    <p class="tragop">Trả góp 0%</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid__col-10-4">
                            <div class="home__product-info ">
                                <div class="home__product-info-img">
                                    <img src="./assets/img/samsung5.jpg" alt="" >
                                </div>
                                <div class="home__product-info-text">
                                    <h4>SamSung Galaxy S22 5G 256GB</h4>
                                    <div class="home__product-info-text-price">
                                        <span class="home__product-info-text-price-old">25.990.000đ</span>
                                        <span class="home__product-info-text-price-new">23.990.000đ</span>
                                    </div>
                                </div>
                                <div class="sale">
                                    <p class="tragop">Trả góp 0%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more">
            <button class="more-btn">Xem thêm</button>
        </div>
    </div>
</section>
@endsection


@push('js')

@endpush