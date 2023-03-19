@extends('layout.index');

@section('content')
  <div class="box-main">
    <header>
      <div class="header-menutop-banner">
        <div
          class="logo-menu-oppenTime d-flex justify-content-between align-items-center container position-relative"
        >
          <div class="logo">
            <img src="../src/Image/photo_2023-03-10_10-33-00.png" alt="" />
          </div>
          <div class="icon-menu-sub-responsive">
            <button type="button" onclick="iconOpenMenuSubClick()">
              <i class='bx bx-menu'></i>
          </div>
          <div class="menu-oppentime d-flex gap-5">
            <div class="menu">
              <ul class="d-flex gap-3">
                <li><a href="headerHomePage.html">HOME</a></li>
                <li><a href="About.html">ABOUT US</a></li>
                <li><a href="ourService.html">SERVICES</a></li>
                <li class="menu-sub-page">
                    <span class="d-flex align-items-center"
                    >PAGE <i class="bx bx-chevron-down"></i
                      ></span>
                  <ul class="menu-mini">
                    <li><a href="ourTeamPage.html">Our Team</a></li>
                    <li><a href="FaqPage.html">FAQ</a></li>
                    <li><a href="Booking.html">Booking</a></li>
                    <li><a href="">404 Page</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="single-blog.html">Single Blog</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">CONTACT US</a></li>
              </ul>
            </div>
            <div class="oppentime-icon">
              <i class="bx bxl-facebook"></i>
              <i class="bx bxl-instagram"></i>
              <button type="button" onclick="iconOpenBoxClick()">
                <i class="bx bx-align-right open-Time"></i>
              </button>
              <button type="button" onclick="" class="user-login">
                <a href="login.html" class="text-black"><i class='bx bx-user-circle'></i></a>
              </button>
              <button type="button" onclick="" class="user-account position-relative" onclick="iconOpenBoxClick()">
                <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aHVtYW58ZW58MHx8MHx8&w=1000&q=80" alt="">

              </button>
              <div class="box-fs-account position-absolute">
                <ul >
                  <li><a href="">Xem thông tin</a></li>
                  <li><a href="">Sửa thông tin</a></li>
                  <li><a href="">Đăng Xuất</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="banner-text-page">
          <div class="banner-page position-absolute top-0">
          </div>
          <div class="text-center-banner">
            <h1>FAQ</h1>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="client-question">
        <div class="title-question text-center">
          <h1>Client Question</h1>
        </div>
        <div class="question-click-box container mt-5">
          <div class="row">
            @foreach($question as $key => $value)
              <div class="col-12 col-md-6 col-lg-6 box-question-faq" >
                <div class="box-text-question">
                  <div class="text-question">
                    <span class="d-flex align-items-center gap-2 fs-5"><i class='bx bx-plus icon-Question' ></i>{{$value->question}}</span>
                  </div>
                  <div class="reply-question">
                    <p>{!! $value->reply !!}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>

        </div>
      </div>

      <div class="follow-our-instagram">
        <div class="title-follow-our-instagram text-center mt-5 mb-5 container">
          <span>Follow Our Instagram</span>
          <p class="hr-insta"></p>
          <h2>@naylish.insta</h2>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2 col-sm-4 col-6 mb-4" data-aos="fade-up"
            >
              <div class="box-insta-bottom">
                <div class="img">
                  <img src="../src/Image/close-up-view-of-female-hand-holding-bottle-of-nai-2021-08-29-12-15-36-utc-e1643346825119.jpg" alt="">
                  <div class="backgrond-hover-image-insta"></div>
                  <div class="icon-insta-follow">
                    <a class="text-white" href=""> <i class='bx bxl-instagram fs-1'></i> </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6 mb-4" data-aos="fade-up"
            >
              <div class="box-insta-bottom">
                <div class="img">
                  <img src="../src/Image/hands-of-a-woman-with-dark-red-manicure-and-nail-p-2021-08-26-18-28-16-utc-e1643346806313.jpg" alt="">
                  <div class="backgrond-hover-image-insta"></div>
                  <div class="icon-insta-follow">
                    <a class="text-white" href=""> <i class='bx bxl-instagram fs-1'></i> </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6 mb-4" data-aos="fade-up"
            >
              <div class="box-insta-bottom">
                <div class="img">
                  <img src="../src/Image/fashion-nails-2021-08-30-08-40-30-utc-e1643346587414.jpg" alt="">
                  <div class="backgrond-hover-image-insta"></div>
                  <div class="icon-insta-follow">
                    <a class="text-white" href=""> <i class='bx bxl-instagram fs-1'></i> </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6 mb-4" data-aos="fade-up"
            >
              <div class="box-insta-bottom">
                <div class="img">
                  <img src="../src/Image/beautiful-manicure-on-the-nails-of-a-woman-color-2021-12-09-06-01-35-utc-e1643346615824.jpg" alt="">
                  <div class="backgrond-hover-image-insta"></div>
                  <div class="icon-insta-follow">
                    <a class="text-white" href=""> <i class='bx bxl-instagram fs-1'></i> </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6 mb-4" data-aos="fade-up"
            >
              <div class="box-insta-bottom">
                <div class="img">
                  <img src="../src/Image/pastel-nails-2021-08-29-00-59-25-utc-e1643346635604.jpg" alt="">
                  <div class="backgrond-hover-image-insta"></div>
                  <div class="icon-insta-follow">
                    <a class="text-white" href=""> <i class='bx bxl-instagram fs-1'></i> </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6 mb-4" data-aos="fade-up"
            >
              <div class="box-insta-bottom">
                <div class="img">
                  <img src="../src/Image/beautiful-manicure-on-color-palette-background-e1643346460858.jpg" alt="">
                  <div class="backgrond-hover-image-insta"></div>
                  <div class="icon-insta-follow">
                    <a class="text-white" href=""> <i class='bx bxl-instagram fs-1'></i> </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </main>
  </div>
@endsection
