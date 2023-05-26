<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Register</title>
  <link href="/dabshot/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/dabshot/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/dabshot/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Đăng  Kí</h1>
                  </div>
                  @if ($message = Session::get('error'))
                        <div id="message-error" style="background-color: #ED2B2A;padding: 12px; color: #fff;">
                            {{ $message }}
                        </div>
                    @endif
                  <form method="post" action="{{route ('admin.auth.postRegister') }}">
                    @csrf
                    <div class="form-group">
                      <label>Họ tên</label>
                      <input type="text" name="hoten" class="form-control" id="exampleInputFirstName" placeholder="Nhập họ tên ">
                    </div>
                    <div class="form-group">
                      <label>Số điện thoại</label>
                      <input type="text" name="sodienthoai" class="form-control" id="exampleInputLastName" placeholder="Nhập số điện thoại">
                    </div>
                    <div class="form-group">
                      <label>Địa chỉ</label>
                      <input type="text" name="diachi" class="form-control" id="exampleInputEmail" aria-describedby="Nhập địa chỉ"
                        placeholder="Enter Email Address">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputPassword" placeholder="Nhập email">
                    </div>
                    <div class="form-group">
                      <label>Mật khẩu</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPasswordRepeat"
                        placeholder="Nhập mật khẩu">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Đăng kí</button>
                    </div>
                    <hr>
                    
                  </form>
                  <hr>
                  
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Content -->
  <script src="/dabshot/vendor/jquery/jquery.min.js"></script>
  <script src="/dabshot/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/dabshot/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="/dabshot/js/ruang-admin.min.js"></script>
</body>

</html>