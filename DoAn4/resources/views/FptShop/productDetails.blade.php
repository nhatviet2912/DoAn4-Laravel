@extends('/FptShop/layout')


@push('chitietsp')
    <link href="{{ ('/shop/assets/css/chitietsp.css') }}" rel="stylesheet">
@endpush

@section('/FptShop/content')
@include('/FptShop/nav')

<div class="link">
    <div class="grid">
        <div class="link-out">
            <a href="{{route ('FptShop/index')}}" class="link-out-link link-home">Trang Chủ
                <i class="link-out-icon fa-solid fa-caret-right"></i>
            </a>
            <a href="" class="link-out-link link-phone">
                Điện thoại<i class="link-out-icon fa-solid fa-caret-right"></i>
            </a>
            <span>Điện thoại {{$sanpham ->TenSanPham}}</span>
        </div>
    </div>
    
    <div class="content">
        <div class="grid">
            <div class="grid__row col-content">
                <div class="grid__col col-home">
                    <div class="img-product">
                        <div class="img-product-main">
                            <img src="/upload/{{$sanpham -> Anh}}" alt="" class="img-product-item-list" onclick="currentSlide(1)">
                        </div>
                        <!-- <div class="img-product-list">
                            <div class="img-product-item">
                                <img src="/shop/assets/img/iphone-se-item1.jpg" alt="" class="img-product-item-list" onclick="currentSlide(2)">
                            </div>
                            <div class="img-product-item">
                                <img src="/shop/assets/img/iphone-se-item2.jpg" alt="" class="img-product-item-list" onclick="currentSlide(3)">
                            </div>
                            <div class="img-product-item">
                                <img src="/shop/assets/img/iphone-se-item3.jpg" alt="" class="img-product-item-list" onclick="currentSlide(4)">
                            </div>
                            <div class="img-product-item">
                                <img src="/shop/assets/img/iphone-se-item4.jpg" alt="" class="img-product-item-list" onclick="currentSlide(5)">
                            </div>
                            <div class="img-product-item">
                                <img src="/shop/assets/img/iphone-se-item5.jpg" alt="" class="img-product-item-list" onclick="currentSlide(6)">
                            </div>
                        </div> -->
                    </div>
                    <!-- <div class="modal-img-product ">
                        <div class="modalslider">
                            <div class="modalslidericons">
                                <span class="fullscreen"><i class="fa-solid fa-expand"></i></span>
                                <span class="close-slider"><i class="fa-solid fa-xmark"></i></span>
                            </div>
                            <div class="modalslider-content">
                                <div class="myslider">
                                    <img src="/shop/assets/img/ipse.jpg" alt="" class="myslider-img">
                                </div>
                                <div class="myslider">
                                    <img src="/shop/assets/img/iphone-se-item1.jpg" alt="" class="myslider-img">
                                </div>
                                <div class="myslider">
                                    <img src="/shop/assets/img/iphone-se-item2.jpg" alt="" class="myslider-img">
                                </div>
                                <div class="myslider">
                                    <img src="/shop/assets/img/iphone-se-item3.jpg" alt="" class="myslider-img">
                                </div>
                                <div class="myslider">
                                    <img src="/shop/assets/img/iphone-se-item4.jpg" alt="" class="myslider-img">
                                </div>
                                <div class="myslider">
                                    <img src="/shop/assets/img/iphone-se-item5.jpg" alt="" class="myslider-img">
                                </div>
                                
                                <span class="prev" onclick="plusSlides(-1)"><i class="fa-solid fa-angle-left"></i></span>
                                <span class="next" onclick="plusSlides(1)"><i class="fa-solid fa-angle-right"></i></span>
                                
                            </div>
                            <div class="modalslider-content-list">
                                
                                <div class="modalslider-content-item">
                                    <img src="/shop/assets/img/iphone-se-item1.jpg" alt="" class="modalslider-content-img" onclick="currentSlide(2)">
                                </div>
                                <div class="modalslider-content-item">
                                    <img src="/shop/assets/img/iphone-se-item2.jpg" alt="" class="modalslider-content-img" onclick="currentSlide(3)">
                                </div>
                                <div class="modalslider-content-item">
                                    <img src="/shop/assets/img/iphone-se-item3.jpg" alt="" class="modalslider-content-img" onclick="currentSlide(4)">
                                </div>
                                <div class="modalslider-content-item">
                                    <img src="/shop/assets/img/iphone-se-item4.jpg" alt="" class="modalslider-content-img" onclick="currentSlide(5)" >
                                </div>
                                <div class="modalslider-content-item">
                                    <img src="/shop/assets/img/iphone-se-item5.jpg" alt="" class="modalslider-content-img" onclick="currentSlide(6)">
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <script src="/shop/assets/js/slider-product.js"></script> -->
                </div>

                <div class="grid__col col-home">
                    <div class="home-product-center">
                        <h2 class="home-product-center-name">Điện thoại {{$sanpham -> TenSanPham}}</h2>
                        <div class="home-product-center-star">
                            <i class="home-product-center-star-icons fa-solid fa-star"></i>
                            <i class="home-product-center-star-icons fa-solid fa-star"></i>
                            <i class="home-product-center-star-icons fa-solid fa-star"></i>
                            <i class="home-product-center-star-icons fa-solid fa-star"></i>
                            <i class="home-product-center-star-icons fa-solid fa-star"></i>
                            <a href="" class="home-product-center-name-link">( 1 đánh giá của khách hàng )</a>
                        </div>
                        <div class="home-product-center-price">
                            <span class="home-product-center-price-new">{{(number_format($sanpham -> Gia))}}đ</span>
                        </div>
                        
                        <form action="{{ route ('cart.addCart') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$sanpham -> id}}">
                            <input type="hidden" name="TenSanPham" value="{{$sanpham -> TenSanPham}}">
                            <input type="hidden" name="Gia" value="{{$sanpham -> Gia}}">
                            <input type="hidden" name="Anh" value="{{$sanpham -> Anh}}">
                            <input type="hidden" name="SoLuong" value="1">
                            <button class="home-product-btn" >
                                <i class="home-product-btn-icon fa-solid fa-cart-plus"></i>
                                MUA NGAY
                                <p class="home-product-btn-text">(Giao hàng tận nơi hoặc lấy tại cửa hàng)</p>
                            
                            </button>   
                        </form>
                        <div class="tragop">
                            <button class="tragop-btn">
                                TRẢ GÓP 0%
                                <p class="home-product-btn-text">(Xét duyệt qua điện thoại)</p>
                            </button>
                            <button class="tragop-btn">
                                TRẢ GÓP QUA THẺ
                                <p class="home-product-btn-text">(Visa, JCB)</p>
                            </button>
                        </div>
                    </div>
                    <div class="home-product-center-gift">
                        <button class="home-product-gift-btn">ƯU ĐÃI THÊM </button>
                        <div class="home-product-text">
                            <ol class="home-product-list">
                                <li class="home-product-item">Giảm giá 50% gói bảo hành mở rộng thêm 1 năm (chính hãng)
                                    <a href=""  class="home-product-item-link">Xem chi tiết</a>
                                </li>
                                <li class="home-product-item">Giảm đến 1,500,000đ khi tham gia thu cũ đổi mới (Không áp dụng kèm giảm giá qua VNPAY, Moca)
                                    <a href="" class="home-product-item-link">Xem chi tiết</a>
                                </li>
                                <li class="home-product-item">Giảm 50% giá gói cước 1 năm (Vina350/Vina500) cho Sim VinaPhone trả sau (Trị giá đến 3 triệu)
                                    <a href="" class="home-product-item-link">Xem chi tiết</a>
                                </li>   
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="grid__col col-home col-sale">
                    <div class="home-product-right-top">
                        <button class="home-product-right-btn">CAM KẾT BÁN HÀNG</button>
                        <div class="home-product-right-text">
                            <ul class="home-product-list">
                                <li class="home-product-item home-product-item-text">Sản phẩm 100% chính hãng</li>
                                <li class="home-product-item home-product-item-text">Sản phẩm mới 100%</li>
                                <li class="home-product-item home-product-item-text">Hoàn tiền 100% khi phát hiện hàng giả</li>
                                <li class="home-product-item home-product-item-text">Hỗ trợ nhanh khi khách cần</li>
                                <li class="home-product-item home-product-item-text">Mua hàng nhanh: 0901567443</li>
                            </ul>
                        </div>
                    </div>
                    <div class="home-product-right-bottom">
                        <button class="home-product-bottom-btn">GIAO HÀNG</button>
                        <div class="home-product-right-text">
                            <ul class="home-product-list">
                                <li class="home-product-item home-product-item-text">Nội thành HD 30 đến 120 phút</li>
                                <li class="home-product-item home-product-item-text">Tỉnh khác từ 1-3 ngày</li>
                                <li class="home-product-item home-product-item-text">Thanh toán khi nhận hàng</li>
                                <li class="home-product-item home-product-item-text">Xem hàng chưa khi thanh toán</li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="location">
                        <button class="location-btn">
                            <i class="fa-solid fa-location-dot"></i>
                            Tìm shop có vị trí gần nhất
                        </button>
                    </div>
                </div>
            </div>
            <div class="grid__row">
                <div class="grid__col-2 ">
                    <div class="mobiphone__review">
                        <img src="/shop/assets/img/iphone-se-review.jpg" alt="" class="mobiphone__review-img">
                    </div>
                    <div class="mobiphone__specifications">
                        <div class="mobiphone-name">
                            <h2 class="mobiphone-name-h2">Cấu hình {{$sanpham -> TenSanPham}}</h2>
                        </div>  
                        <div class="mobiphone-configuration">
                            <ul class="mobiphone-list">
                                <li class="mobiphone-item ">
                                    <span class="mobiphone-item-span-title">Màn hình:</span>
                                    <span class="mobiphone-item-span">{{$thongsokythuat -> manhinh}}</span>
                                </li>
                                <li class="mobiphone-item mobiphone-item-li">
                                    <span class="mobiphone-item-span-title">Hệ điều hành:</span>
                                    <span class="mobiphone-item-span">{{$thongsokythuat -> hedieuhanh}}</span>
                                </li>
                                <li class="mobiphone-item ">
                                    <span class="mobiphone-item-span-title">Camera sau:</span>
                                    <span class="mobiphone-item-span">{{$thongsokythuat -> camerasau}}</span>
                                </li>
                                <li class="mobiphone-item mobiphone-item-li">
                                    <span class="mobiphone-item-span-title">Camera trước:</span>
                                    <span class="mobiphone-item-span">{{$thongsokythuat -> cameratruoc}}</span>
                                </li>
                                <li class="mobiphone-item ">
                                    <span class="mobiphone-item-span-title">Chip:</span>
                                    <span class="mobiphone-item-span">{{$thongsokythuat -> chip}}</span>
                                </li>
                                <li class="mobiphone-item mobiphone-item-li">
                                    <span class="mobiphone-item-span-title">RAM:</span>
                                    <span class="mobiphone-item-span">{{$thongsokythuat -> ram}}</span>
                                </li>
                                
                                <li class="mobiphone-item ">
                                    <span class="mobiphone-item-span-title">Sim:</span>
                                    <span class="mobiphone-item-span">{{$thongsokythuat -> sim}}</span>
                                </li>
                            </ul>
                            <div class="mobiphone-configuration-btn">
                                <button class="mobiphone-btn js-mobiphone-btn">Xem cấu hình chi tiết <i class="fa-solid fa-caret-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid__row">
                <div class="detail">
                    <!-- <h2 title="Đánh giá chi tiết sản phẩm IPhone SE (2020)">Đánh giá chi tiết IPhone SE (2020)</h2>
                    <p class="detail-name">Mang tình yêu trở lại với thiết kế sang trọng</p>
                    <p class="detail-text">iPhone SE 2020 có một thiết kế quen thuộc, thiết kế đã dành được rất nhiều tình cảm của người dùng trong những năm qua. Kiểu dáng nhỏ gọn, bo tròn các cạnh, thân máy siêu mỏng tinh tế và hoàn thiện từ chất liệu nhôm kết hợp kính cao cấp, iPhone SE 2020 mang đến cảm hứng bất tận cho người dùng. Chiếc iPhone nhỏ gọn rất dễ dàng cầm nắm, thao tác hay cho vào túi mang đi bất cứ đâu nhưng vẫn toát lên vẻ sang trọng đậm chất Apple, iPhone SE 2020 cho bạn cảm giác thân thuộc, thoải mái hơn bao giờ hết.</p>
                    <p class="detail-img"><img src="/shop/assets/img/chitietsp2.webp" alt=""></p>
                    <p class="detail-name">Màn hình 4,7 inch Retina HD tuyệt đẹp</p>
                    <p class="detail-text">Không cần phải có một màn hình “quá khổ”, iPhone SE 2020 vẫn tỏa sáng với màn hình 4,7 inch Retina HD tuyệt đẹp. Với công nghệ IPS LCD, hình ảnh hiển thị trong trẻo, màu sắc chính xác và độ sáng cực cao, đáp ứng tốt mọi nhu cầu sử dụng. Màn hình iPhone SE 2020 còn hỗ trợ công nghệ True Tone, giúp màu sắc có khả năng thay đổi theo môi trường để bạn luôn được tận hưởng màn hình tự nhiên và dịu mắt nhất. Một màn hình đẹp, sẵn sàng cho những trải nghiệm nhưng lại không quá lớn để ảnh hưởng đến cảm giác cầm nắm, đó chính là iPhone SE 2020.</p>
                    <p class="detail-img"><img src="/shop/assets/img/chitietsp3.webp" alt=""></p>
                    <p class="detail-name">Quay video 4K siêu nét</p>
                    <p class="detail-text">iPhone SE 2020 có khả năng quay video chuẩn 4K, cho độ nét gấp 4 lần video Full HD 1080p. Dải nhạy sáng rộng, giàu chi tiết và màu sắc tuyệt vời sẽ giúp bạn ghi lại những khoảnh khắc đáng nhớ qua các đoạn video sinh động, chất lượng cao. Ngoài ra bạn còn có thể quay video nhanh trong lúc đang chụp ảnh bằng cách giữ phím chụp hình, rất nhanh chóng để không bỏ lỡ bất cứ khoảnh khắc thú vị nào.</p>
                    <p class="detail-img"><img src="/shop/assets/img/chitietsp4.webp" alt=""></p>
                    <p class="detail-name">Khả năng chống nước và chống bụi tuyệt hảo</p>
                    <p class="detail-text">iPhone SE 2020 mang trên mình chuẩn chống nước và chống bụi IP67, giúp điện thoại trở nên rất bền vững. Chuẩn IP67 cho phép bạn ngâm nước ở độ sâu 1m trong vòng 30 phút mà máy vẫn sống khỏe. Giờ đây việc sử dụng điện thoại dưới trời mưa hay lỡ đổ nước vào iPhone cũng sẽ không khiến bạn phải lo lắng.</p>
                    <p class="detail-img"><img src="/shop/assets/img/chitietsp5.webp" alt=""></p> -->
                    {!! $sanpham['Mota'] !!}
                </div>
               
                
                
            </div>
            <div class="coment__header">
                <h3 class="coment__header-h3">Sản phẩm liên quan {{$sanpham -> TenSanPham}}</h3>
            </div>
            <div class="grid__col-3 list-product" style="display: flex;">
                @foreach($getlsp as $getlsp)
                    <div class="product-item" style="width:30%">
                        <img src="/upload/{{$getlsp -> Anh}}" alt="" class="home-product-img">
                        <h3  class="home-product-name"><a href="{{route('FptShop/productDetails', $getlsp -> id)}}" class="home-product-name-link">{{$getlsp -> TenSanPham}}</a></h3>
                        <div class="home-product-sale">
                            <span class="home-product-sale-yellow">Giảm 14%</span>
                        </div>
                        <div class="home-prodcut-more-info">
                            <span>{{$getlsp -> thongsokythuat -> ram}}</span>
                            <span>{{$getlsp -> thongsokythuat -> hedieuhanh}}</span>
                        </div>
                        <div class="home-product-buy">
                            <a href="" class="home-product-buy-link js-buy-ticket">Mua ngay</a>
                        </div>
                        <div class="home-product-price">
                            <span class="home-product-price-new">{{number_format($getlsp -> Gia)}}đ</span>
                            <span class="home-product-price-old">({{$getlsp -> LuotXem}})</span>

                        </div>
                    </div>
                @endforeach
            </div>   
                
                    
                

            
            <div class="coment">
                <div class="coment__header">
                    <h3 class="coment__header-h3">Đánh giá & Nhận xét Iphone SE 2020</h3>
                </div>
                <div class="grid__row">
                    <div class="grid__col-coment">
                        <div class="evaluate">
                            <span class="evaluate-spn-text">Đánh giá trung bình</span>
                            <h4 class="evaluate-spn">4/5</h4>
                            <div class="evaluate-icons">
                                <i class="start-icons fa-solid fa-star"></i>
                                <i class="start-icons fa-solid fa-star"></i>
                                <i class="start-icons fa-solid fa-star"></i>
                                <i class="start-icons fa-solid fa-star"></i>
                                <i class="start-icon fa-solid fa-star"></i>
                            </div>
                            <p class="evaluate-p">15 đánh giá & 11 nhận xét</p>
                        </div>
                    </div>  
                    <div class="grid__col-coment">
                        <div class="evaluate evaluate-col">
                            <div class="evaluate-left">
                                <label for="">5<i class="fa-solid fa-star"></i></label>
                            </div>
                            <div class="evaluate-center">
                                <span class="evaluate-center-spn1"></span>
                            </div>
                            <span class="evaluate-right">9</span>
                        </div>
                        <div class="evaluate evaluate-col">
                            <div class="evaluate-left">
                                <label for="">4<i class="fa-solid fa-star"></i></label>
                            </div>
                            <div class="evaluate-center">
                                <span class="evaluate-center-spn2"></span>
                            </div>
                            <span class="evaluate-right">3</span>
                        </div>
                        <div class="evaluate evaluate-col">
                            <div class="evaluate-left">
                                <label for="">3<i class="fa-solid fa-star"></i></label>
                            </div>
                            <div class="evaluate-center">
                                <span class="evaluate-center-spn3"></span>
                            </div>
                            <span class="evaluate-right">1</span>
                        </div>
                        <div class="evaluate evaluate-col">
                            <div class="evaluate-left">
                                <label for="">2<i class="fa-solid fa-star"></i></label>
                            </div>
                            <div class="evaluate-center">
                                <span class="evaluate-center-spn4"></span>
                            </div>
                            <span class="evaluate-right">0</span>
                        </div>
                        <div class="evaluate evaluate-col">
                            <div class="evaluate-left">
                                <label for="">1<i class="fa-solid fa-star"></i></label>
                            </div>
                            <div class="evaluate-center">
                                <span class="evaluate-center-spn5"></span>
                            </div>
                            <span class="evaluate-right">2</span>
                        </div>
                    </div>
                    <div class="grid__col-coment">
                        <div class="evaluate">
                            <p class="evaluate-p"> Bạn đã dùng sản phẩm này chưa ?</p>
                            <button class="evaluate-btn">Gửi đánh giá của bạn</button>
                        </div>
                    </div>
                </div>
                <div class="grid__row info">
                    <div class="coment-info">
                        <ul class="coment-list">
                            <li class="coment-item">
                                <div class="coment-item-avt avt-nv">
                                    NV
                                </div>
                                <div class="coment-item-text">
                                    <div class="coment-item-text-name">
                                        <h4>Nhật Việt</h4>
                                    </div>
                                    <div class="coment-item-text-icons">
                                        <i class="icons fa-solid fa-star"></i>
                                        <i class="icons fa-solid fa-star"></i>
                                        <i class="icons fa-solid fa-star"></i>
                                        <i class="icons fa-solid fa-star"></i>
                                        <i class="icon fa-solid fa-star"></i>
                                        <span class="coment-item-text-spn">7 ngày trước</span>
                                    </div>
                                    <div class="coment-item-text-p">
                                        <p> Điện thoại đẹp mang đến trải nghiệm tốt cho người dùng, nhân viên phục vụ nhiệt tình</p>
                                    </div>
                                    <div class="coment-item-text-like">
                                        <i class="icons-like fa-solid fa-thumbs-up"></i><span class="icons-like">Thích(30)</span>
                                    </div>

                                </div>
                            </li>
                            <li class="coment-item">
                                <div class="coment-item-avt">
                                    BA
                                </div>
                                <div class="coment-item-text">
                                    <div class="coment-item-text-name">
                                        <h4>Bảo Anh</h4>
                                    </div>
                                    <div class="coment-item-text-icons">
                                        <i class="icons fa-solid fa-star"></i>
                                        <i class="icons fa-solid fa-star"></i>
                                        <i class="icons fa-solid fa-star"></i>
                                        <i class="icons fa-solid fa-star"></i>
                                        <i class="icon fa-solid fa-star"></i>
                                        <span class="coment-item-text-spn">14 ngày trước</span>
                                    </div>
                                    <div class="coment-item-text-p">
                                        <p> Máy dùng tốt, nhân viên giao hàng rất nhiệt tình</p>
                                    </div>
                                    <div class="coment-item-text-like">
                                        <i class="icons-like fa-solid fa-thumbs-up"></i><span class="icons-like">Thích(30)</span>
                                    </div>

                                </div>
                            </li>
                            <li class="coment-item">
                                <div class="coment-item-avt">
                                    TT
                                </div>
                                <div class="coment-item-text">
                                    <div class="coment-item-text-name">
                                        <h4>Trần Trung</h4>
                                    </div>
                                    <div class="coment-item-text-icons">
                                        <i class="icons fa-solid fa-star"></i>
                                        <i class="icons fa-solid fa-star"></i>
                                        <i class="icons fa-solid fa-star"></i>
                                        <i class="icons fa-solid fa-star"></i>
                                        <i class="icon fa-solid fa-star"></i>
                                        <span class="coment-item-text-spn">21 ngày trước</span>
                                    </div>
                                    <div class="coment-item-text-p">
                                        <p> E muốn trả góp iPhone 13promax tư vấn e với a</p>
                                    </div>
                                    <div class="coment-item-text-like">
                                        <i class="icons-like fa-solid fa-thumbs-up"></i><span class="icons-like">Thích(30)</span>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="coment-next">
                    <button class="coment-next-btn btn-1">1</button>
                    <button class="coment-next-btn">2</button>
                    <button class="coment-next-btn">3</button>
                    <button class="coment-next-btn"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
