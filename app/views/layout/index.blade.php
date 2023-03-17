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
  <link rel="stylesheet" href="{{route('public/css/style.css')}}" />
  <title>Our Team</title>
</head>

<body>
<div class="box-main">

@yield('content');

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
      <li><a href="headerHomePage.html">HOME</a></li>
      <li><a href="About.html">ABOUT US</a></li>
      <li><a href="ourService.html">SERVICES</a></li>
      <li class="menu-sub-page-respon">
                    <span class="d-flex align-items-center justify-content-between pe-1 mb-1"
                    >PAGE <i class="bx bx-chevron-down"></i
                      ></span>
        <ul class="menu-mini-respon">
          <li><a href="ourTeamPage.html">Our Team</a></li>
          <li><a href="FaqPage.html">FAQ</a></li>
          <li><a href="Booking.html">Booking</a></li>
          <li><a href="">404 Page</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="single-blog.html">Single Blog</a></li>
        </ul>
      </li>
      <li><a href="contact.html">CONTACT US</a></li>
      <li class="pe-3">  <button type="button" onclick="" class="user-login-responsive w-100">
          <a href="login.html" class="text-white border-0 d-flex align-items-center gap-3 p-2"><i class='bx bx-user-circle'></i> Đăng Nhập</a>
        </button></li>
      <li class="user-account pe-3">
        <button class="box-account-responsive border-0 d-flex align-items-center gap-3 p-2 w-100">
          <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aHVtYW58ZW58MHx8MHx8&w=1000&q=80" alt="">
          <span class="fs-5">Lê Sỹ Hải</span>
        </button>
        <ul class="box-fs-account-responsive">
          <li><a href="">Xem thông tin</a></li>
          <li><a href="">Sửa thông tin</a></li>
          <li><a href="">Đăng Xuất</a></li>
        </ul></li>
    </ul>
  </div>
</div>
<div class="modal-mockup">

  <div class="content-modal-mockup">
    <div class="oidoioi">
      <div class="item-modal-mockup">
        <div class="row">
          <div class="col-sm-6 col-md-12">
            <img src="{{route('public/image/photo_2023-03-10_10-33-00.png')}}" width="100px" alt="">
            <h5 class="h5-item-modal-mockup">"Mono Bovis Spa - Chạm đến làn da không tuổi"</h5>
            <p><i class='bx bxs-star' style='color:#e8880a'></i>
              <i class='bx bxs-star' style='color:#e8880a'></i>
              <i class='bx bxs-star' style='color:#e8880a'></i>
              <i class='bx bxs-star' style='color:#e8880a'></i>
              <i class='bx bxs-star' style='color:#e8880a'></i>
            </p>
            <h3 class="h3-item-modal-mockup">Ưu đãi khách hàng</h3>
            <p>Nâng tầm sắc đẹp Việt</p>
            <p class="title-give"> * Nhận món quà siêu khủng từ MonoSpa chỉ với 1 phút cập nhật đầy đủ *
            </p>
            <div class="form-modal text-center">

              <form action="mockup-post" method="post">
                <div class="value-form-modal">
                  <label>Họ và tên </label>
                  : <input type="text" name="fullname" placeholder="Nhập tên anh/chị">
                </div>
                <div class="value-form-modal">
                  <label>Số điện thoại :</label>
                  <input type="text" name="phone" placeholder="Nhập SĐT anh/chị">
                </div>
                <div class="value-form-modal">
                  <label>Email</label>
                  : <input type="email" name="email" placeholder="Nhập email anh/chị">
                </div>
                <input name="btn-sm" type="submit" class="btn submit-form-modal" value="GỬI THÔNG TIN">
              </form>

            </div>
          </div>
          <div class="col-sm-6 col-md-12 img-modal">
            <img src="{{route('public/image/Screenshot 2023-03-12 160307.png')}}" width="100%" alt="">

          </div>
        </div>
        <button class="close-modal btn" onclick="myStopFunction()"><i class='bx bx-x'
                                                                      style='color:#a47b60'></i></button>
      </div>
    </div>
  </div>
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
