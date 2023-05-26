<header class="header">
    <div class="grid wide">
        <div class="header_navbar">
            <ul class="header_navbar-list">
                <li class="header_navbar-item header_navbar-item-sepera"><a href="#" class="header_navbar-item-link">Tải ứng dụng</a></li>
                <li class="header_navbar-item header_navbar-item-sepera"><a href="#" class="header_navbar-item-link">
                    Chăm sóc khách hàng</a>
                </li>
                <li class="header_navbar-item header_navbar-item-sepera"><a href="#" class="header_navbar-item-link">Kiểm tra đơn hàng</a></li>

            </ul>
            <ul class="header_navbar-list">
                <li class="header_navbar-item hoverbell">
                    <a href="" class="header_navbar-item-link">
                        <i class="header_navbar-item-icons fa-solid fa-bell"></i>
                        Thông báo
                        <div class="bell">
                            <ul class="bell-list">
                                <li class="bell-item">
                                    <a href="" class="bell-link">Tin mới</a>
                                </li>
                                <li class="bell-item">
                                    <a href="" class="bell-link">Khuyến mĩa</a>
                                </li>
                                <li class="bell-item">
                                    <a href="" class="bell-link">Thủ thuật</a>
                                </li>
                                <li class="bell-item">
                                    <a href="" class="bell-link">For games</a>
                                </li>
                                <li class="bell-item">
                                    <a href="" class="bell-link">Video hot</a>
                                </li>
                                <li class="bell-item">
                                    <a href="" class="bell-link">Đánh giá & tư vấn</a>
                                </li>
                                <li class="bell-item">
                                    <a href="" class="bell-link">Sự kiện</a>
                                </li>

                            </ul>
                        </div>
                    </a>
                
                </li>
                <li class="header_navbar-item"><a href="" class="header_navbar-item-link"><i class="header_navbar-item-icons fa-solid fa-circle-question"></i>Hỗ trợ</a></li>
                <li class="header_navbar-item ">
                    <a href="./dangki.html" class="header_navbar-item-link js-btn-dk" style="font-weight: 500; font-size: 16px;">
                        <i class="header_navbar-item-icons fa-solid fa-user-plus"></i>Đăng kí
                    </a>
                </li>
                <li class="header_navbar-item">
                    <a href="./login.html" class="header_navbar-item-link js-btn-input" style="font-weight: 500; font-size: 16px;">
                        <i class="header_navbar-item-icons fa-solid fa-user"></i>Đăng nhập
                    </a>
                </li>
            </ul>
        </div>

        <div class="header_two">
            <div class="header_two-img">
                <a href="{{route ('FptShop/index')}}"><img src="/shop/assets/img/fpt-shop.png" alt="" class="header_two-img-logo"></a>
            </div>
            <div class="header_two-search">
                <form action="{{ route ('FptShop/search') }}" method="post" style="width: 100%">
                    @csrf
                    <div class="header__two-search-wrap">
                        
                        <input type="text" name="keywords_submit" id="" class="header_two-search-input" placeholder="Nhập tên điện thoại...">
                        <button class="header_two-search-btn"><i class="header_two-search-btn-i fa-solid fa-magnifying-glass"></i></button>

                    
                    
                    </div>
                </form>
                
            </div>
            <div class="header_two-cart">
                <a href="{{ route ('FptShop/cart') }}"><i class="header_two-cart-i fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
    </div>
</header>