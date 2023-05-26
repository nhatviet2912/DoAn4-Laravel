@extends('/FptShop/layout')

@section('/FptShop/content')
@include('/FptShop/nav')

<div class="content">
    <div class="grid wide" style="margin-top: 10px;">
        <!-- Begin Slider -->
        <div class="grid__slider row" style="max-height: 350px;">
            <div class="col l-8 m-12 img_slider">
                <div class="imgs" style="height: 100%;">
                    <div class="slider">
                        <img src="/shop/assets/img/slider1.png" alt="" class="slider-img">
                    </div>
                    <div class="slider">
                        <img src="/shop/assets/img/slider2.png" alt="" class="slider-img">
                    </div>
                    <div class="slider">
                        <img src="/shop/assets/img/slider3.png" alt="" class="slider-img">
                    </div>
                    <div class="slider">
                        <img src="/shop/assets/img/slider4.png" alt="" class="slider-img">
                    </div>
                    <div class="slider">
                        <img src="/shop/assets/img/slider5.png" alt="" class="slider-img">
                    </div>
                    <button class ="grid__slider-btn-left"><i class="fa-solid fa-angle-left"></i></button>
                    <button class ="grid__slider-btn-right"><i class="fa-solid fa-angle-right"></i></button>
                    <script src="/shop/assets/js/img.js"></script>
                </div>

            </div>
            <div class="col l-4">
                <div class="imgs">
                    <img src="/shop/assets/img/slider5.png" alt="" class="grid__slider-show2 js-slider"> 
                </div>
                <div class="imgs">
                    <img src="/shop/assets/img/slider6.png" alt="" class="grid__slider-show2 js-slider">
                </div>
            </div>
        </div>
        <!-- End Slider -->
    </div>

    <!-- Begin Home product -->
    <div class="grid wide">
            
    <div class="row">
            <div class="col l-12 m-12 c-0">
                <div class="category">
                    <div class="category-name">
                        <h3>Kết quả tìm kiếm</h3>
                    </div>
                
                </div>
            </div>
            @foreach($search as $sanpham)
                <div class="col l-2-5 m-4 c-6 list-product"> 
                    <div class="product-item">
                        <img src="upload/{{$sanpham -> Anh}}" alt="" class="home-product-img">
                        <h4  class="home-product-name"><a href="{{route ('FptShop/productDetails', $sanpham -> id)}}" class="home-product-name-link">{{$sanpham -> TenSanPham}}</h4>
                        <div class="home-product-sale">
                            <span class="home-product-sale-yellow">Giảm 14%</span>
                        </div>
                        <div class="home-prodcut-more-info">
                            <span>{{$sanpham -> ram}}</span>
                            <span>{{$sanpham -> hedieuhanh}}</span>
                            <span>{{$sanpham -> cameratruoc}}</span>
                        </div>
                        <div class="home-product-buy">
                            <a href="{{route ('FptShop/productDetails', $sanpham -> id)}}" class="home-product-buy-link js-buy-ticket">Mua ngay</a>
                        </div>
                       
                        <div class="home-product-price">
                            <span class="home-product-price-new">{{number_format($sanpham -> Gia)}}đ</span>
                            <span class="home-product-price-new">({{$sanpham -> LuotXem}})</span>
                        </div>
                    </div>
                </div>
            @endforeach
            
            
        </div>

    </div>

    <!-- End Home Product -->
    
</div>
@endsection