<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="{{route('public/image/'.'photo_2023-03-10_10-33-00.png')}}" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&family=Roboto+Slab&family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="{{route('public/css/style.css')}}" />
  <title>Our Team</title>
</head>

<body>
<div class="box-main">

@yield('content')

@include('layout.footer')
</div>
<div class="oppenTime-box">
  <div class="information-oppenTime">
    <div class="close-information-oppenTime fs-2">
      <button type="button" onclick="iconOpenBoxClick()">
        <i class="bx bx-x"></i>
      </button>
    </div>
    <div class="logo container text-center">
      <img src="{{route('public/image/'.'photo_2023-03-10_10-33-00.png')}}" alt="" />
    </div>
    <div class="text text-center">
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel
          risus imperdiet, gravida justo eu.</span>
    </div>
    <hr />
    <div class="map-phone-email container">
      <div class="icon d-flex align-items-center justify-content-center gap-1 mb-3">
        <i class="bx bxs-map"></i>
        <div class="span">Jl. Pantai Batu Mejan, Canggu, Bali</div>
      </div>
      <div class="icon d-flex align-items-center justify-content-center gap-1 mb-3">
        <i class="bx bxs-phone"></i>
        <div class="span">(+62)81 234 567</div>
      </div>
      <div class="icon d-flex align-items-center justify-content-center gap-1 mb-3">
        <i class="bx bxs-envelope"></i>
        <div class="span">naylish@domain.com</div>
      </div>
    </div>
    <hr />
    <div class="opening-hours d-flex align-items-center gap-3 container justify-content-center">
      <div class="day container">
        <p>Monday - Friday :</p>
        <p>Saturday :</p>
        <p>Sunday :</p>
      </div>
      <div class="time container text-center">
        <p>09:00 AM - 19:00 PM</p>
        <p>09:00 AM - 19:00 PM</p>
        <p>09:00 AM - 19:00 PM</p>
      </div>
    </div>
    <hr />
    <div class="social-network d-flex align-items-center gap-2 container justify-content-center">
      <i class="bx bxl-facebook"></i>
      <i class="bx bxl-twitter"></i>
      <i class="bx bxl-instagram"></i>
      <i class="bx bxl-pinterest-alt"></i>
    </div>
  </div>
</div>
<div class="menu-sub-responsive position-fixed top-0">
  <div class="close-menu-sub-reponsive">
    <button type="button" class="float-end me-2 mt-2 fs-3" onclick="iconOpenMenuSubClick()">
      <i class="bx bx-x"></i>
    </button>
  </div>
  <div class="logo ps-3">
    <img src="{{route('public/image/'.'photo_2023-03-10_10-33-00.png')}}" alt="">
  </div>
  <div class="menu menu-responsive">
    <ul>
      <li><a href="{{route('')}}">Trang chủ</a></li>
      <li><a href="{{route('about')}}">Giới thiệu</a></li>
      <li><a href="{{route('service')}}">Dịch vụ</a></li>
      <li><a href="{{route('blog')}}">Cẩm nang bổ ích</a></li>
      <li><a href="{{route('promotion')}}">Khuyến mại</a></li>
      <li><a href="{{route('policyMember')}}">Chính sách</a></li>
      <li><a href="{{route('contact')}}">Liên Hệ</a></li>
        </ul>
{{--    @if(!isset($_SESSION['account']))--}}
{{--      <li class="pe-3" style="list-style:none;">  <button type="button" onclick="" class="user-login-responsive w-100">--}}
{{--          <a href="{{ route("sign-in") }}" class="text-white border-0 d-flex align-items-center gap-3 p-2"><i class='bx bx-user-circle'></i> Đăng Nhập</a>--}}
{{--        </button></li>--}}
{{--    @else--}}
{{--      @if($_SESSION['account']->role_id == 1)--}}
{{--      <li class="user-account pe-3 " style="list-style: none;">--}}
{{--        <button class="box-account-responsive border-0 d-flex align-items-center gap-3 p-2 w-100">--}}
{{--          <img src="{{ route('public/upload/avatar/'.$_SESSION['account']->image ) }}" alt="">--}}
{{--          <span class="fs-5">{{ $_SESSION['account']->name }}</span>--}}
{{--        </button>--}}
{{--        <ul class="box-fs-account-responsive">--}}
{{--          <li><a href="{{route('update-profile/'.$_SESSION['account']->id)}}">{{ $_SESSION['account']->role_id }}</a></li>--}}
{{--          <li><a href="{{route('update-profile/'.$_SESSION['account']->id)}}">Xem thông tin</a></li>--}}
{{--          <li><a href="{{ route('sign-out') }}">Đăng Xuất</a></li>--}}
{{--        </ul></li>--}}
{{--      @else--}}
{{--        <li class="user-account pe-3 " style="list-style: none;">--}}
{{--          <button class="box-account-responsive border-0 d-flex align-items-center gap-3 p-2 w-100">--}}
{{--            <img src="{{ route('public/upload/avatar/'.$_SESSION['account']->image ) }}" alt="">--}}
{{--            <span class="fs-5">{{ $_SESSION['account']->name }}</span>--}}
{{--          </button>--}}
{{--          <ul class="box-fs-account-responsive">--}}
{{--            <li><a href="{{route('update-profile/'.$_SESSION['account']->id)}}">Xem thông tin</a></li>--}}
{{--            <li><a href="{{route('user')}}">Vào trang quản trị</a></li>--}}
{{--            <li><a href="{{ route('sign-out') }}">Đăng Xuất</a></li>--}}
{{--          </ul></li>--}}
{{--      @endif--}}
{{--    @endif--}}

  </div>
</div>
@stack("mockup")
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
