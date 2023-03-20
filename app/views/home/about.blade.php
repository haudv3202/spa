@extends('layout.index')
@section('content')
<header>
  <div class="header-menutop-banner">
    <div
      class="logo-menu-oppenTime d-flex justify-content-between align-items-center container position-relative"
    >
      <div class="logo">
        <img src="{{route('public/image/photo_2023-03-10_10-33-00.png')}}" alt="" />
      </div>
      <div class="icon-menu-sub-responsive">
        <button type="button" onclick="iconOpenMenuSubClick()">
          <i class='bx bx-menu'></i>
      </div>
      <div class="menu-oppentime d-flex gap-5">
        <div class="menu">
          <ul class="d-flex gap-3">
            <li><a href="{{route('')}}">HOME</a></li>
            <li><a href="{{route('about-us')}}">ABOUT US</a></li>
            <li><a href="{{route('service')}}">SERVICES</a></li>
            <li class="menu-sub-page">
                    <span class="d-flex align-items-center"
                    >PAGE <i class="bx bx-chevron-down"></i
                      ></span>
              <ul class="menu-mini">
                <li><a href="{{route('our-team')}}">Our Team</a></li>
                <li><a href="{{route('faq')}}">FAQ</a></li>
                <li><a href="{{route('booking')}}">Booking</a></li>
                <li><a href="{{route('404-page')}}">404 Page</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="{{route('single-blog')}}">Single Blog</a></li>
              </ul>
            </li>
            <li><a href="{{route('contact-us')}}">CONTACT US</a></li>
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
              <li><a href="{{'sign-out'}}">Đăng Xuất</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="banner-text-page">
      <div class="banner-page position-absolute top-0">
      </div>
      <div class="text-center-banner">
        <h1>Về chúng tôi</h1>
        <span>Chúng tôi là một thương hiệu spa uy tín với hơn 10 năm kinh nghiệm trong ngành spa và là địa chỉ tin cậy của hàng ngàn khách hàng. Với đội ngũ chuyên viên lành nghề và tâm huyết, chúng tôi cam kết mang đến cho khách hàng những trải nghiệm thư giãn tuyệt vời và giúp họ cải thiện sức khỏe và tinh thần.</span>
      </div>
    </div>
  </div>
</header>
<main>
  <!-- ==========about us============= -->
  <div class="container ">
    <div class="About-Us row">
      <div data-aos="fade-up" data-aos-duration="1500" class="left-about-us col-md-6">
        <div class="item-left-about-us">
          <img src="{{route('public/image/about-us2.jpg')}}" width="100%" alt="">
        </div>
        <div class="item-left-about-us">
          <img src="{{route('public/image/about-us1.jpg')}}" width="100%" alt="">
        </div>
        <div class="item-absol-about-us">
          <img src="{{route('public/image/about-us3.jpg')}}" width="40%" alt="">
        </div>
      </div>
      <div data-aos="fade-down" data-aos-duration="1500" class="right-about-us col-md-6">
        <h4 class="text-under-h4-HomePage">Kiến thức</h4>
        <h2 class="text-title-HomePage">Chúng tôi có kiến thức về Spa</h2>
        <p class="p-title-Hompage">Chúng tôi là một đội ngũ chuyên viên chăm sóc sức khỏe và làm đẹp chuyên nghiệp với kiến thức sâu sắc và kinh nghiệm trong lĩnh vực spa. Chúng tôi luôn cập nhật kiến thức mới nhất và sử dụng các phương pháp chăm sóc da và làm đẹp tiên tiến nhất để đảm bảo khách hàng của chúng tôi luôn được tận hưởng những dịch vụ spa tốt nhất.
        </p>
        <div class="item-right-about-us">
          <div class="content-item-right">
            <img src="{{route('public/image/like-about-us.png')}}" width="50px" alt="">
            <div class="text-content-item-right-about-us">
              <p>24<i class='bx bx-plus-medical' style='color:#C6641B'></i></p>
              <p>10 năm kinh nghiệm</p>
            </div>
          </div>
          <div class="content-item-right">
            <img src="{{route('public/image/scrum-about-us.png')}}" width="50px" alt="">
            <div class="text-content-item-right-about-us">
              <p>850<i class='bx bx-plus-medical' style='color:#C6641B'></i></p>
              <p>Khách hàng tin tưởng</p>
            </div>
          </div>
        </div>
        <a href="https://www.facebook.com/haudn02"><button class="btn btn-about-us">Tìm hiểu thêm</button></a>
      </div>
    </div>
  </div>
  <!-- ===========why choose us=========== -->
  <div class="treatment-price">
    <div class="background-treat-price">
      <div class="content-treatment-price container">
        <div class="grid-treatment-price row">
          <div class="left-treatment-price col-md-6" data-aos="fade-up">
            <h4 class="text-under-h4-HomePage">
              Tại sao lại chọn chúng tôi</h4>
            <h2 class="text-title-HomePage">Nâng tầm trải nghiệm</h2>
            <p>Chúng tôi hiểu rõ về cấu trúc và chức năng của da, cũng như các vấn đề liên quan đến da, như mụn, tàn nhang, sẹo và lão hóa. Chúng tôi sử dụng các phương pháp chăm sóc da hiệu quả như liệu pháp oxy hóa, tẩy tế bào chết, massage và thải độc để giúp da khách hàng của chúng tôi trở nên khỏe mạnh và trẻ trung hơn.</p>
            <div class="item-right-about-us experience-about-us">
              <div class="content-item-right">
                <img src="{{route('public/image/like-about-us.png')}}" width="50px" alt="">
                <div class="text-content-item-right-about-us">
                  <p>24<i class='bx bx-plus-medical' style='color:#C6641B'></i></p>
                  <p>10 năm kinh nghiệm</p>
                </div>
              </div>
              <div class="content-item-right">
                <img src="{{route('public/image/scrum-about-us.png')}}" width="50px" alt="">
                <div class="text-content-item-right-about-us">
                  <p>850<i class='bx bx-plus-medical' style='color:#C6641B'></i></p>
                  <p>Khách hàng vui vẻ</p>
                </div>
              </div>
            </div>
            <a href=""><button class="btn btn-about-us">Dịch vụ khác</button></a>
          </div>
          <div class="right-treatment-price col-md-6" data-aos="fade-down">
            <img
              src="https://templatekit.jegtheme.com/naylish/wp-content/uploads/sites/221/2022/01/closeup-of-a-woman-s-hands-in-a-nail-salon-getting-a-manicure.jpg"
              width="100%" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ================== ourr team===============-->
  <div class="container">
    <div class="our-service row">
      <div class="left-our-service col-md-6" data-aos="fade-down">
        <h4 class="text-under-h4-HomePage">Đội ngũ của chúng tôi</h4>
        <h2 class="text-title-HomePage">Hãy đến để trải nghiệm</h2>
        <p class="p-title-Hompage p-title-about-us">Ngoài ra, chúng tôi cũng rất am hiểu về các dòng sản phẩm và công nghệ chăm sóc da mới nhất trên thị trường. Chúng tôi sử dụng các sản phẩm chăm sóc da chất lượng cao và an toàn để đảm bảo hiệu quả và độ an toàn của các liệu trình spa.</p>
        <a href=""><button class="btn btn-about-us">Tìm hiểu thêm</button></a>
      </div>
      <div class="right-our-service col-md-6" data-aos="fade-up">
        <div class="row">
          <div class="user-of-team col-md-6">
            <img width="100%" src="https://templatekit.jegtheme.com/naylish/wp-content/uploads/sites/221/2022/01/young-charming-smiling-woman-owner-of-the-beauty-s-2021-08-29-01-08-48-utc.jpg" alt="">
            <h3 class="text-center">Dang Van hau</h3>
            <p class="text-center">Leader</p>
          </div>
          <div class="user-of-team col-md-6">
            <img width="100%" src="https://templatekit.jegtheme.com/naylish/wp-content/uploads/sites/221/2022/01/confident-mature-woman-beauty-salon-owner-taking-c-2021-12-09-22-32-28-utc.jpg" alt="">
            <h3 class="text-center">Bui Manh Cuong</h3>
            <p class="text-center">Leader</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ==============working out============= -->
  <div class="working-hour" data-aos="fade-up">
    <div class="container">
      <div class="content-work row ">
        <div class="left-working col-md-6">

        </div>
        <div class="right-working col-md-6">
          <h4 class="text-under-h4-HomePage">Về chúng tôi</h4>
          <h2 class="text-title-HomePage">Thời gian hoạt động</h2>
          <div class="hour-right-working">
            <p>Thứ Hai – Thứ Sáu</p>
            <div class="style-hour-woking"></div>
            <p>09.00 AM – 19.00 PM</p>
          </div>
          <div class="hour-right-working">
            <p>Thứ Bảy</p>
            <div class="style-hour-woking"></div>
            <p>09.00 AM – 19.00 PM</p>
          </div>
          <div class="hour-right-working">
            <p>Chủ Nhật</p>
            <div class="style-hour-woking"></div>
            <p>09.00 AM – 19.00 PM</p>
          </div>
          <a href=""><button class="btn btn-book">Đặt lịch ngay</button></a>
        </div>
      </div>
    </div>
  </div>
  <!-- =======follow our ig============= -->
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
              <img src="{{route('public/image/close-up-view-of-female-hand-holding-bottle-of-nai-2021-08-29-12-15-36-utc-e1643346825119.jpg')}}" alt="">
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
              <img src="{{route('public/image/hands-of-a-woman-with-dark-red-manicure-and-nail-p-2021-08-26-18-28-16-utc-e1643346806313.jpg')}}" alt="">
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
              <img src="{{route('public/image/fashion-nails-2021-08-30-08-40-30-utc-e1643346587414.jpg')}}" alt="">
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
              <img src="{{route('public/image/beautiful-manicure-on-the-nails-of-a-woman-color-2021-12-09-06-01-35-utc-e1643346615824.jpg')}}" alt="">
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
              <img src="{{route('public/image/pastel-nails-2021-08-29-00-59-25-utc-e1643346635604.jpg')}}" alt="">
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
              <img src="{{route('public/image/beautiful-manicure-on-color-palette-background-e1643346460858.jpg')}}" alt="">
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
@endsection

