@extends('/FptShop/layout')

@push('giohang')
    <link href="{{ ('/shop/assets/css/giohang.css') }}" rel="stylesheet">

@endpush

@section('/FptShop/content')
@include('/FptShop/nav')

<section class="content"> 
    <div class="grid">
        <div class="title">
            <h2>Giỏ hàng</h2>
        </div>
        <div class="grid__row">
            <div class="infocart">
                    @if ($message = Session::get('success'))
                          <div id="message-sucess" style="background-color: chartreuse;padding: 12px;}">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div id="message-error" style="background-color: #ED2B2A;padding: 12px; color: #fff;">
                            {{ $message }}
                        </div>
                    @endif
                <table class="table" style="width: 100%">
                    <thead>
                        <tr class="table-title">
                            <th style="width: 40%">Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody id="mycart">
                        @foreach($cartItems as $item)
                            <tr>
                                <td>
                                    <img src="/upload/{{$item->attributes->image}}" alt="" >
                                    <span class="spn-title">{{$item -> name}}</span>
                                </td>
                                <td><span class="spn-price" >{{number_format($item -> price)}} đ</span></td>
                                <td >
                                    <form action="{{ route ('cart.update') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$item -> id}}" name="id">
                                        <input type="number" value ="{{$item -> quantity}}" name="quantity" class="ip-quantity">
                                        <button type="submit" class="btn-update">update</button>
                                    </form>
                                </td>
                                <td >
                                    <span class =" spn-price" >{{number_format($item -> price * $item -> quantity)}} đ</span>
                                    
                                </td>
                                <td>
                                    <form action="{{ route ('cart.removeCart') }}" method= "post">
                                        @csrf
                                        <input type="hidden" value="{{$item -> id}}" name="id">
                                        <button style="margin: 40%" class="btn-delte">Xóa</button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        
                    
                    </tbody>
                </table>
                <div class="tongtien">
                    <span>Tổng tiền <span id="tongtien">{{number_format(Cart::getTotal())  }}</span> đ</span>
                </div>
            </div> 
        </div>
        
        <div class="listbutton">
            <form action="{{ route ('cart.clear')}}" method="post" style="width: 15%; margin-right: 20px;">
                @csrf
                <button class="btn-cart-remove hoverbeffo" >Xóa giỏ hàng</button>
            </form>
            <a href="{{route ('checkout')}}" class="btn-cart js-thanhtoan hoverbeffo">Thanh toán</a>
        </div>
    </div>

    <script>
        setTimeout(function() {
            document.getElementById('message-sucess')?.remove();
            document.getElementById('message-error')?.remove();
        }, 5000);
    </script>
</section>


@endsection

