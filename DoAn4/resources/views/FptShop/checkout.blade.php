@extends('/FptShop/layout')

@push('checkout')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/shop/assets/css/style.css">

@endpush

@section('/FptShop/content')
@include('/FptShop/nav')
<section class="checkout spad">
    <div class="container">
        
        <div class="checkout__form">
            <h4>Thanh toán</h4>
            <form action="{{ route ('checkout.checkoutpost') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout__input">
                            <p>Họ tên<span>*</span></p>
                            <input type="text" name="tenkhachhang">
                        </div>
                        <div class="checkout__input">
                            <p>Địa chỉ<span>*</span></p>
                            <input name="diachi" type="text">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Số điện thoại<span>*</span></p>
                                    <input name="sodienthoai" type="tel">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input name="email"  type="email">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input__checkbox">
                            <label for="acc">
                                Create an account?
                                <input type="checkbox" id="acc">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout__order">
                            <h4>Giỏ hàng</h4>
                            <div class="checkout__order__products" style="display: flex; justify-content: space-between;">Sản phẩm 
                                <span style="margin-left: 100px" >Số lượng</span>
                                <span>Giá bán</span>
                            </div>
                            <ul>
                                @foreach($cartItems as $item)
                                    <li style="display: flex; justify-content: space-between;">{{ $item-> name}}
                                        <span >{{$item -> quantity}}</span>
                                        <span >{{number_format($item -> price)}}đ</span>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="checkout__order__total">Tổng tiền 
                                <span >{{number_format(Cart::getTotal())  }}đ</span>
                            </div>
                            
                            
                            <button type="submit" class="site-btn">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection


