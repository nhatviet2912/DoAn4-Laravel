<section class="header__nav">
    <div class="header-sticky header_three">
        <div class="grid wide reponmobie">
            <div class="grid_navbar">
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="" class="navbar-link">
                            Danh mục sản phẩm<i class="fa-solid fa-angle-down"></i>
                        </a>
                        <ul class="subnav">
                            <li class="subnav-item">
                                <a href="" class="subnav-link">
                                    <i class="fa-solid fa-mobile-button icons-subnav"></i>
                                    Điện thoại<i class="fa-solid fa-chevron-right icons-subnav-right"></i>
                                </a>
                                <ul class="subnav-phone-list">
                                    <li class="subnav-phone-item">
                                        <div class="subnav-phone">
                                            <div class="subnav-phone-brand">
                                                <h3>Điện thoại theo thương hiệu</h3>
                                                <ul class="subnav-phone-brand-list">
                                                    @foreach($loaisp as $lsp)
                                                        <li class="subnav-phone-brand-item">
                                                            <a href="{{ route ('FptShop/categories', $lsp -> id ) }}" class="subnav-phone-brand-link">
                                                                {{ $lsp-> TenLoai}}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                    
                                                    
                                                </ul>
                                            </div>
                                            <div class="subnav-phone-brand">
                                                <h3>Điện thoại theo bảng giá</h3>
                                                <ul class="subnav-phone-brand-list">
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Dưới 1 triệu
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Từ 1 - 3 triệu
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Từ 3- 7 triệu
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Từ 7 - 10 triệu
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item" style="border: none;">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Trên 10 triệu
                                                        </a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="subnav-item">
                                <a href="" class="subnav-link">
                                    <i class="fa-solid fa-laptop icons-subnav" style="padding-left: 7px;"></i>
                                    Laptop<i class="fa-solid fa-chevron-right icons-subnav-right"></i>
                                </a>
                                <ul class="subnav-phone-list">
                                    <li class="subnav-phone-item">
                                        <div class="subnav-phone">
                                            <div class="subnav-phone-brand">
                                                <h3>Laptop theo thương hiệu</h3>
                                                <ul class="subnav-phone-brand-list">
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Macbook
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Dell
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Assus
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Acer
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Masstel
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Lenovo
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            HP
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="subnav-phone-brand">
                                                <h3>Điện thoại theo bảng giá</h3>
                                                <ul class="subnav-phone-brand-list">
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Dưới 10 triệu
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Từ 10 - 15 triệu
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Từ 15 - 20 triệu
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="subnav-phone-brand-item" style="border: none;">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Trên 20 triệu
                                                        </a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="subnav-item">
                                <a href="" class="subnav-link">
                                    <i class="fa-solid fa-tablet icons-subnav"></i>
                                    Tablet<i class="fa-solid fa-chevron-right icons-subnav-right"></i>
                                </a>
                                <ul class="subnav-phone-list">
                                    <li class="subnav-phone-item">
                                        <div class="subnav-phone">
                                            <div class="subnav-phone-brand">
                                                <h3>Máy tính bảng theo thương hiệu</h3>
                                                <ul class="subnav-phone-brand-list">
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            SamSung
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            iPad
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Xiaomi
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Nokia
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Masstel
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Lenovo
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Itel
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="subnav-phone-brand">
                                                <h3>Máy tính bảng theo bảng giá</h3>
                                                <ul class="subnav-phone-brand-list">
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Dưới 3 triệu
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Từ 3 - 8 triệu
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Từ 8 - 12 triệu
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="subnav-phone-brand-item" style="border: none;">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Trên 12 triệu
                                                        </a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="subnav-item">
                                <a href="" class="subnav-link">
                                    <i class="fa-solid fa-clock icons-subnav"></i>
                                    Smart Wtach<i class="fa-solid fa-chevron-right icons-subnav-right"></i>
                                </a>
                                <ul class="subnav-phone-list">
                                    <li class="subnav-phone-item">
                                        <div class="subnav-phone">
                                            <div class="subnav-phone-brand">
                                                <h3>Đồng hồ thông minh theo thương hiệu</h3>
                                                <ul class="subnav-phone-brand-list">
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            SamSung
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Apple Watch
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Oppo
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Xiaomi
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Viettel
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Masstel
                                                        </a>
                                                    </li>
                                
                                                </ul>
                                            </div>
                                            <div class="subnav-phone-brand">
                                                <h3>Đồng hồ thông minh theo bảng giá</h3>
                                                <ul class="subnav-phone-brand-list">
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Dưới 1 triệu
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Từ 1 - 3 triệu
                                                        </a>
                                                    </li>
                                                    <li class="subnav-phone-brand-item">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Từ 3 - 7 triệu
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="subnav-phone-brand-item" style="border: none;">
                                                        <a href="" class="subnav-phone-brand-link">
                                                            Trên 10 triệu
                                                        </a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="subnav-item">
                                <a href="" class="subnav-link">
                                    <i class="fa-solid fa-bullhorn icons-subnav"></i>
                                    Loa<i class="fa-solid fa-chevron-right icons-subnav-right"></i>
                                </a>
                            </li>
                            <li class="subnav-item">
                                <a href="" class="subnav-link">
                                    
                                    <i class="fa-solid fa-heart-pulse icons-subnav"></i>
                                    Thiết bị chăm sóc sức khỏe<i class="fa-solid fa-chevron-right icons-subnav-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="navbar-link">
                            Tìm theo hãng<i class="fa-solid fa-angle-down"></i>
                        </a>
                        <ul class="subnav" >
                            <li class="subnav-item" style="margin-left: 10px">
                                <a href="" class="subnav-link">
                                    Chuyên trang Apple
                                </a>
                            </li>
                            <li class="subnav-item" style="margin-left: 10px">
                                <a href="" class="subnav-link">
                                    Chuyên trang SamSung
                                </a>
                            </li>
                            <li class="subnav-item" style="margin-left: 10px">
                                <a href="" class="subnav-link">
                                    Chuyên trang Oppo
                                </a>
                            </li>
                            <li class="subnav-item" style="margin-left: 10px">
                                <a href="" class="subnav-link">
                                    Chuyên trang Vivo
                                </a>
                            </li>
                            <li class="subnav-item" style="margin-left: 10px">
                                <a href="" class="subnav-link">
                                    Chuyên trang Xiaomi
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="navbar-link">
                            Sim số - dịch vụ<i class="fa-solid fa-angle-down"></i>
                        </a>
                        <ul class="subnav" style="width: 160%; ">
                            <li class="subnav-item" style="margin-left: 10px">
                                <a href="" class="subnav-link">
                                    <i class="fa-solid fa-sim-card"></i>Sim số - thẻ cào 
                                </a>
                            </li>
                            <li class="subnav-item" style="margin-left: 10px">
                                <a href="" class="subnav-link">
                                    <i class="fa-solid fa-sim-card"></i>Internet - Truyền hình - Camera
                                </a>
                            </li>
                            <li class="subnav-item" style="margin-left: 10px">
                                <a href="" class="subnav-link">
                                    <i class="fa-solid fa-sim-card"></i>Viettel Money - Ngân hàng số
                                </a>
                            </li>
                            <li class="subnav-item" style="margin-left: 10px">
                                <a href="" class="subnav-link">
                                    <i class="fa-solid fa-sim-card"></i>Bảo hiểm nhân thọ 
                                </a>
                            </li>
                            <li class="subnav-item" style="margin-left: 10px">
                                <a href="" class="subnav-link">
                                    <i class="fa-solid fa-sim-card"></i>Vay tiền mặt - MCredit
                                </a>
                            </li>
                            <li class="subnav-item" style="margin-left: 10px">
                                <a href="" class="subnav-link">
                                    <i class="fa-solid fa-sim-card"></i>Vay tiền mặt - FE Credit
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-item">
                        <a href="./phukien.html" class="navbar-link">
                            <i class="fa-solid fa-headphones icons-frist"></i>Phụ kiện<i class="fa-solid fa-angle-down"></i>
                        </a>
                    </li>
                    <li class="navbar-item">
                        <a href="./tragop.html" class="navbar-link">
                            <i class="fa-solid fa-piggy-bank icons-frist"></i>Trả góp
                        </a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="navbar-link">
                            <i class="fa-solid fa-fire-flame-curved icons-frist"></i>Độc quyền online
                        </a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="navbar-link">
                            Tin tức
                        </a>
                        
                    </li>
                </ul>
            </div>
        </div>
        <div class="icon__nav">
            <button class="js-nav"> <i class="fa-solid fa-bars"></i></button>
        </div>
    </div>
</section>