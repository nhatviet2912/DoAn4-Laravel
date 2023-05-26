<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Login</title>
  <link href="/dabshot/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/dabshot/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/dabshot/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Đăng Nhập</h1>
                  </div>
                    @if ($message = Session::get('error'))
                        <div id="message-error" style="background-color: #ED2B2A;padding: 12px; color: #fff;">
                            {{ $message }}
                        </div>
                    @endif
                    @if ($message = Session::get('sucess'))
                        <div id="message-sucess" style="background-color: #ED2B2A;padding: 12px; color: #fff;">
                            {{ $message }}
                        </div>
                    @endif
                  <form class="user" method="post" action="{{route ('admin.auth.postLogin')}}">
                    @csrf
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Nhập tài khoản">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit"  class="btn btn-primary btn-block">Login</button>
                    </div>
                    <hr>
                    
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="{{ route ('admin.auth.register')}}">Create an Account!</a>
                  </div>
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
  <!-- Login Content -->
  <script src="/dabshot/vendor/jquery/jquery.min.js"></script>
  <script src="/dabshot/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/dabshot/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="/dabshot/js/ruang-admin.min.js"></script>

  <script>
        setTimeout(function() {
            document.getElementById('message-sucess')?.remove();
            document.getElementById('message-error')?.remove();
        }, 5000);
    </script>
</body>

</html>