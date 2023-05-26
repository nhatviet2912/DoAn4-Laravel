<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/shop/assets/css/grid.css">
    <link rel="stylesheet" href="/shop/assets/css/main.css">
    <link rel="stylesheet" href="/shop/assets/css/header.css">
    <link rel="stylesheet" href="/shop/assets/css/footer.css">
    <link rel="stylesheet" href="/shop/assets/css/base.css">
    <!-- <link rel="stylesheet" href="/shop/assets/css/chitietsp.css"> -->
    @stack('chitietsp')
    @stack('giohang')
    @stack('tragop')
    @stack('login')
    @stack('checkout')
    <!-- @stack('resigter') -->
    <link rel="icon" type="image/x-icon" href="/shop/assets/img/logo-111.jpg">
    <link rel="stylesheet" href="/shop/assets/fontawesome-free-6.0.0-web/css/all.min.css">
    <title>FPT Mobile Phone</title>
</head>
<body  >
    <div class="main js-main" >
        <!-- Bengin Header -->
        @include('/FptShop/header')
        <!-- End Header -->

        <!-- Begin header__nav -->
        <!-- @include('/FptShop/nav') -->
        <!-- End header__nav -->

        <!-- Begin Content -->
        @yield('/FptShop/content')
        <!-- End Content -->

        <!-- Begin footer -->
        @include('/FptShop/footer')
        <!-- End footer -->
    </div>
    <section class="load">
        <div class="loading">
            <span></span>
        </div>
    </section>
    <section class="hidden">
        <div class="header__modal js-header-modal">
            <div class="close">
                <div class="close-img">
                    <img src="./assets/img/logorepon1.jpg" alt="">
                </div>
                <button class="header__modal-close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <ul class="header__modal-list">
                <li class="header__modal-item">
                    <a href="" class="header__modal-link">
                        <i class="fa-solid fa-mobile-screen-button icons-modal-header"></i>
                        Điện thoại<i class="fa-solid fa-angle-down icons-down"></i>
                    </a>
                    <div class="subnav-none">
                        <ul class="header__modal-subnav ">
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Iphone</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">SamSung</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Oppo</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Xiaomi</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Vivo</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Tecno</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Nokia</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Masstel</a></li>
                        </ul>
                    </div>
                </li>
                <li class="header__modal-item">
                    <a href="" class="header__modal-link">
                        <i class="fa-solid fa-laptop icons-modal-header icon-laptop"></i>
                        Laptop<i class="fa-solid fa-angle-down icons-down"></i>
                    </a>
                    <div class="subnav-none">
                        <ul class="header__modal-subnav">
                            <li  class="header__modal-item1 lenovo-repon"><a href="" class="header__modal-link">Lenovo</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Microsoft</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Apple</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Asus</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">HP</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Acer</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">MSI</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Dell</a></li>
                        </ul>
                    </div>
                </li>
                <li class="header__modal-item">
                    <a href="" class="header__modal-link">
                        <i class="fa-solid fa-floppy-disk icons-modal-header"></i>
                        Máy in<i class="fa-solid fa-angle-down icons-down"></i>
                    </a>
                    <div class="subnav-none">
                        <ul class="header__modal-subnav">
                            <li  class="header__modal-item1 lenovo-repon"><a href="" class="header__modal-link">Brother</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Cannon</a></li>
                        </ul>
                    </div>
                </li>
                <li class="header__modal-item">
                    <a href="" class="header__modal-link">
                        <i class="fa-brands fa-apple icons-modal-header"></i>
                        Appel<i class="fa-solid fa-angle-down icons-down"></i>
                    </a>
                    <div class="subnav-none">
                        <ul class="header__modal-subnav">
                            <li  class="header__modal-item1 lenovo-repon"><a href="" class="header__modal-link">Iphone</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Macbook</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Sạc & Cáp</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Aapple Wtach</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Ipad</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Mac Mini</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">AirTag</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">iMac</a></li>
                        </ul>
                    </div>
                </li>
                <li class="header__modal-item">
                    <a href="" class="header__modal-link">
                        <i class="fa-solid fa-headphones-simple icons-modal-header"></i>
                        Phụ kiện<i class="fa-solid fa-angle-down icons-down"></i>
                    </a>
                    <div class="subnav-none">
                        <ul class="header__modal-subnav">
                            <li  class="header__modal-item1 lenovo-repon"><a href="" class="header__modal-link">Router</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Tai nghe </a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Sạc cáp</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Thẻ nhớ</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Chuột</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">Loa</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">AirTag</a></li>
                            <li  class="header__modal-item1"><a href="" class="header__modal-link">iMac</a></li>
                        </ul>
                    </div>
                    </li>
                <li class="header__modal-item"><a href="" class="header__modal-link"><i class="fa-solid fa-hand-holding-dollar icons-modal-header"></i>Trả góp</a></li>
                <li class="header__modal-item"><a href="" class="header__modal-link"><i class="fa-solid fa-sim-card icons-modal-header"></i>Sim</a></li>
                <li class="header__modal-item"><a href="" class="header__modal-link"><i class="fa-brands fa-windows icons-modal-header"></i>Phần mềm</a></li>

            </ul>
        </div>
    </section>
    <section class="sidenav">
        <div class="social">
            <div class="social-btn">
                <div class="social-btn-icon" >
                    <span class="Youtube"><i class="fa-brands fa-youtube"></i></span>
                </div>
                <div class="social-btn-icon" >
                    <p class="textzalo">Kênh Youtube</p>
                </div>
            </div>
            <div class="social-btn">
                <div class="social-btn-icon" >
                    <span class="call"><i class="fa-solid fa-phone"></i></span>
                </div>
                <div class="social-btn-icon" >
                    <p class="textcall">Gọi điện hotline</p>
                </div>
            </div>
            <div class="social-btn">
                <div class="social-btn-icon" >
                    <span class="Facebook"><i class="fa-brands fa-facebook-f"></i></span>
                </div>
                <div class="social-btn-icon" >
                    <p class="textfb">Facebook</p>
                </div>
            </div>
        </div>
    </section>
    <div class="conversation js-chat">
        <div class="chat">
            <button class="js-btn"><i class="fa-solid fa-comment-dots"></i></button>
        </div>
        <div class="backtop">
            <button class="btn-backtop"><i class="fa-solid fa-angle-up"></i></button>
        </div>
    </div>
    <div class="modal js-modal">
        <div class="modal__conversation">
            <div class="conversation-header js-close">
                <button class="conversation-header-close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="conversation-content">
                <i>Xin chào mừng quý khách đến với hỗ trợ trực tuyến!</i>
                <div class="conversation-content-info">
                    <label for="">Quý khách muốn xưng hô là:</label>
                    <input type="text" placeholder="Cách xưng hô" class="conversation-content-input">
                </div>
                <div class="conversation-content-info">
                    <label for="">Tên của quý khách là:</label>
                    <input type="text" placeholder="Nhập tên của quý khách" class="conversation-content-input">
                </div>
                <div class="conversation-content-info">
                    <label for="">Số điện thoại của quý khách:</label>
                    <input type="text" placeholder="Nhập số điện thoại" class="conversation-content-input">
                </div>
                <div class="conversation-content-info">
                    <input type="checkbox" class="conversation-content-checkbox">
                    <label for="">Bằng việc chọn Bắt đầu chat, quý khách đã đồng ý với các <a href="" class="conversation-content-checkbox-link">Điều khoản của FPT Shop</a></label>
                </div>
                <button class="conversation-content-btn">Bắt đầu chat</button>
            </div>
        </div>
    </div>
    <script >
        const modalChat = document.querySelector('.js-btn')
        const modal = document.querySelector('.js-modal')
        const btnClose = document.querySelector('.js-close')
        const headerModal = document.querySelector('.hidden')
        const btnNav = document.querySelector('.js-nav')
        const headerClose = document.querySelector('.header__modal-close')
        const info1 = document.querySelectorAll('.js-info')
        const gototop = document.querySelector('.conversation')
        const backtops = document.querySelector('.btn-backtop')
        const loads = document.querySelector('.load')
        const mains = document.querySelector('.js-main')
        const sidenavs = document.querySelector('.sidenav')
        
        function showmodal(){
            modal.classList.add('open')
        }
        function closemodal(){
            modal.classList.remove('open')
        }
        
        function showmodalheader(){
            if(headerModal.style.display == 'block'){
                headerModal.style.display = 'none'
            }else{
                headerModal.style.display = 'block';
            }
            // headerModal.style.width = '100%';
        }
        headerClose.addEventListener('click', function(){
            headerModal.style.display = 'none'
        })
        modalChat.addEventListener('click',showmodal)
        btnClose.addEventListener('click', closemodal)
        btnNav.addEventListener('click', showmodalheader)
        backtops.addEventListener('click', delplay)
        function delplay(){
            var times = setInterval(function(){
                document.documentElement.scrollTop -- ;
                if(document.documentElement.scrollTop <= 0){
                    clearInterval(times)
                }
            },1)
        }
        window.onscroll = function(){
            scroll()
        };
        function scroll(){
            if(document.body.scrollTop > 500 || document.documentElement.scrollTop > 500){
                sidenavs.style.display = 'block';
                gototop.style.display = 'block';
            }else{
                sidenavs.style.display = 'none';
                gototop.style.display = 'none';

            }
        };
        // var myvar;
        // function myfucions(){
        //     myvar = setTimeout(function(){
        //         loads.style.display = "none";
        //         mains.style.display = "block";
        //     }, 1000)
        // };
        

    </script>
    <script src="/shop/assets/js/cart.js"></script>


</body>
</html>