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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Đăng Kí</title>
</head>

<body>


<div class="bg-login">
  <section class=" login ">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100 py-3 shadow-lg">
        <div class="col-md-9 col-lg-6 col-xl-5 d-block d-xl-none ">
          <img src="{{route('public/image/photo_2023-03-10_10-33-00.png')}}" width="20%" alt="" />
        </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="{{route('sign-up')}}" method="post" id="form-sign-up">
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 h3 mb-0">ĐĂNG KÍ THÀNH VIÊN</p>
            </div>
            <!-- Name input -->
            <div class="form-outline ">
              <label class="form-label m-0 mt-2" for="form3Example3">Tên Tài Khoản</label>
              <input type="text" name="username" class="form-control form-control-lg input-login email-login" id="name-signup"
                     placeholder="Nhập tên đăng nhập" />
              @if(isset($_SESSION['errors']['username']) && isset($_GET['msg']))
                <span class="error-message">{{$_SESSION['errors']['username']}}</span>
              @endif
            </div>
            <!-- Email input -->
            <div class="form-outline ">
              <label class="form-label m-0 mt-2" for="form3Example3">Email</label>
              <input type="email" name="email" class="form-control form-control-lg input-login email-login" id="email-signup"
                     placeholder="Nhập Email" />
              @if(isset($_SESSION['errors']['email']) && isset($_GET['msg']))
                <span class="error-message">{{$_SESSION['errors']['email']}}</span>
              @endif
            </div>
            <!-- SĐT input -->
            <div class="form-outline ">
              <label class="form-label m-0 mt-2" for="form3Example3">SĐT</label>
              <input type="text" name="sdt" class="form-control form-control-lg input-login email-login" id="phone-signup"
                     placeholder="Nhập Số điện thoại" />
              @if(isset($_SESSION['errors']['phone']) && isset($_GET['msg']))
                <span class="error-message">{{$_SESSION['errors']['phone']}}</span>
              @endif
            </div>
            <!-- Password input -->
            <div class="form-outline">
              <label class="form-label m-0 mt-2" for="form3Example4">Mật khẩu mới</label>
              <input type="password" name="password" class="form-control form-control-lg input-login pass-login" id="pass-signup"
                     placeholder="Nhập mật khẩu của bạn" />
              @if(isset($_SESSION['errors']['password']) && isset($_GET['msg']))
                <span class="error-message">{{$_SESSION['errors']['password']}}</span>
              @endif
            </div>
            <!-- REPassword input -->
            <div class="form-outline ">
              <label class="form-label m-0 mt-2" for="form3Example4">Nhập lại mật khẩu</label>
              <input type="password" name="repass" class="form-control form-control-lg input-login pass-login" id="repass-signup"
                     placeholder="Nhập lại mật khẩu của bạn" />
              @if(isset($_SESSION['errors']['password']) && isset($_GET['msg']))
                <span class="error-message">{{$_SESSION['errors']['password']}}</span>
              @endif
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <input type="submit" class="btn" name="btn-signup"
                      style="padding-left: 2.5rem; padding-right: 2.5rem;background-color: #043542; color:white ;" value="Sign Up">
              <p class="small fw-bold mt-2 pt-1 mb-2">Bạn đã có tài khoản ? <a href="{{route('sign-in')}}"
                                                                               class="link-danger">Đăng nhập tại đây</a></p>
            </div>

          </form>
        </div>
        <div class="col-md-9 col-lg-6 col-xl-5 d-xl-block d-none ">
          <img src="{{route('public/image/photo_2023-03-10_10-33-00.png')}}" width="80%" alt="" />
        </div>
      </div>
    </div>


  </section>
</div>

  @if(isset($_SESSION['success']) && isset($_GET['msg']))
    <script>
      Swal.fire(
        'Đăng kí thành công!',
        '{{$_SESSION['success']}}',
        'success'
      )
      window.setTimeout(function(){
        window.location.href = '{{ route('sign-in') }}';
      },2000)
    </script>
  @endif

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
