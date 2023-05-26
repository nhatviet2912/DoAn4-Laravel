@extends('/FptShop/layout')

@push('tragop')
<link href="{{ ('/shop/assets/css/tragop.css') }}" rel="stylesheet">

@endpush

@section('/FptShop/content')
@include('/FptShop/nav')
<!-- Begin content -->
<section class="content">
    <div class="grid">
        <div class="header__content">
            <div class="link-out">
                <a href="./index.html" class="link-out-link">Trang chủ</a><i class="link-out-icon fa-solid fa-caret-right"></i>
                <!-- <span  class="link-out-spn">Trả góp 0%</span> -->
            </div>
        </div>
        <div class="row">
            <div class="c-3">
                <div class="home-left">
                    <div class="home-left-top">
                        <div class="home-left-top-name">
                            <h2 style="font-size: 20px;">Chọn loại sản phẩm</h2>
                        </div>
                        <div class="home-left-top-info"> 
                            <ul class="home-left-top-info-list">
                                @foreach($lsp as $lsp)
                                    <li class="home-left-top-info-item" style="padding: 0; cursor: pointer;" ng-repeat="x in listlsp">
                                        <a href="{{route ('FptShop/categories', $lsp -> id)}}" class="home-left-top-info-link">
                                            {{$lsp -> TenLoai}}
                                        </a>
                                    </li>
                                @endforeach
                                
                                
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <form style="display: flex;">
                    <!-- các trường tìm kiếm khác -->
                    <label style="font-size: 20px;" for="price-range">Khoảng giá:</label>
                    <select id="price-range" ng-model="filterPrice">
                        <option value="">Tất cả</option>
                        <option value="0-1000000">Dưới 1 triệu</option>
                        <option value="1000000-5000000">1 - 5 triệu</option>
                        <option value="5000000-10000000">5 - 10 triệu</option>
                        <option value="10000000-">Trên 10 triệu</option>
                    </select>
                    <button ng-click="search()">Xem kết quả</button>
                    </form>
            </div>
            <div class="c-9">
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
                <div class="grid">
                    <div class="row">
                        @foreach($sp as $sp)
                            <div class="c-4" ng-repeat = "x in listproductcategory">
                                <div style="padding: 24px;">
                                    <div class="home__product-info ">
                                        <div class="home__product-info-img">
                                            <img src="/upload/{{$sp -> Anh}}" alt="" >
                                        </div>
                                        <div class="home__product-info-text">
                                            <h4>
                                                <a href="{{route ('FptShop/productDetails', $sp -> id)}}" style="color: black; text-decoration: none;">{{$sp ->TenSanPham}}</a>
                                            </h4>
                                            <div class="home__product-info-text-price">
                                                <!-- <span class="home__product-info-text-price-old">21.990.000đ</span> -->
                                                <span class="home__product-info-text-price-new">{{number_format($sp -> Gia)}}đ</span>
                                                <span class="home-product-price-new">({{$sp -> LuotXem}})</span>

                                            </div>
                                        </div>
                                        <div class="sale">
                                            <p class="tragop">Trả góp 0%</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        @endforeach
                        
                    </div>

                
                    
                </div>
            </div>
        </div>
        <div class="more">
            <button class="more-btn">Xem thêm</button>
        </div>
    </div>
</section>
<!-- End content -->
@endsection


