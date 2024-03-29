<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="{{route('public/image/photo_2023-03-10_10-33-00.png')}}" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{route('public/css/style.css')}}" />
  <title>Quên mật khẩu</title>
</head>

<body>


<div class="bg-login">
  <section class="vh-100 login">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        @if(isset($_SESSION['errors']) && isset($_GET['msg']))
          <ul>
            @foreach($_SESSION['errors'] as $er)
              <li style="color: red">{{$er}}</li>
            @endforeach
          </ul>
        @endif
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="{{route('forgot')}}" method="post">
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">Đặt lại mật khẩu</p>
            </div>
            <!-- Name input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example3">Nhập email</label>
              <input type="text" name="email" class="form-control form-control-lg input-login email-login" id="pass-forgot"
                     placeholder="Nhập email" />
              <small class="error-message"></small>
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn" name="btn-forgot"
                      style="padding-left: 2.5rem; padding-right: 2.5rem;background-color: #043542; color:white ;">Gửi</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Bạn chưa có tài khoản ?  <a
                  href="{{route('sign-up')}}" class="link-danger">Đăng ký tại đây</a></p><br>
              <p class="small fw-bold mt-2 pt-1 mb-0">Quay trở lại <a
                  href="{{route('')}}" class="link-danger">Trang chủ</a></p>
            </div>
          </form>
        </div>
        <div class="col-md-9 col-lg-6 col-xl-5 ">
          <img src="{{route('public/image/photo_2023-03-10_10-33-00.png')}}" alt="" />
        </div>
      </div>
    </div>
  </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<script src="{{route('public/js/main.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>

</html>
