@extends('layout.index')
@section('content')
{{--  <header class="header-homePage container-fluid">--}}
{{--    <div class="header-menutop-banner">--}}
{{--      <div--}}
{{--        class="logo-menu-oppenTime d-flex justify-content-between align-items-center container position-relative"--}}
{{--      >--}}
{{--        <div class="logo">--}}
{{--          <img src="{{route('public/image/photo_2023-03-10_10-33-00.png')}}" alt="" />--}}
{{--        </div>--}}
{{--        <div class="icon-menu-sub-responsive">--}}
{{--          <button type="button" onclick="iconOpenMenuSubClick()">--}}
{{--            <i class='bx bx-menu'></i>--}}
{{--        </div>--}}
{{--        <div class="menu-oppentime d-flex gap-5">--}}
{{--          <div class="menu">--}}
{{--            <ul class="d-flex gap-4 fs-5">--}}
{{--              <li><a href="{{route('')}}">Trang chủ</a></li>--}}
{{--              <li><a href="{{route('about')}}">Giới thiệu</a></li>--}}
{{--              <li><a href="{{route('service')}}">Dịch vụ</a></li>--}}
{{--              <li><a href="{{route('ourTeam')}}">Đội ngũ</a></li>--}}
{{--              <li><a href="{{route('booking')}}">Đặt lịch</a></li>--}}
{{--              <li><a href="{{route('blog')}}">Bài viết</a></li>--}}
{{--              <li><a href="{{route('contact')}}">Liên hệ</a></li>--}}
{{--            </ul>--}}
{{--          </div>--}}
{{--          <div class="oppentime-icon d-flex align-items-center justify-content-between">--}}
{{--            <i class="bx bxl-facebook"></i>--}}
{{--            <i class="bx bxl-instagram"></i>--}}
{{--            <button type="button"onclick="iconOpenBoxClick()">--}}
{{--              <i class="bx bx-align-right open-Time"></i>--}}
{{--            </button>--}}
{{--            @if(!isset($_SESSION['account']))--}}
{{--            <button type="button" onclick="" class="user-login ms-2">--}}
{{--              <a href="{{ route("sign-in") }}" class="text-black"><i class='bx bx-user-circle'></i></a>--}}
{{--            </button>--}}
{{--            @else--}}
{{--              @if($_SESSION['account']->role_id == 1)--}}
{{--            <button type="button" onclick="" class="user-account ms-2 position-relative d-flex align-items-center justify-content-between" onclick="iconOpenBoxClick()">--}}
{{--              <img src="{{ route('public/upload/avatar/'.$_SESSION['account']->image ) }}" alt="">--}}
{{--        <div class="header-menutop-banner">--}}
{{--          <div--}}
{{--            class="logo-menu-oppenTime d-flex justify-content-between align-items-center container position-relative"--}}
{{--          >--}}
{{--            <div class="oppentime-icon">--}}
{{--              <button type="button" class="user-login p-2">--}}
{{--                <a href="{{route('sign-in')}}" class="text-white text-decoration-none d-flex align-items-center gap-2"><i class='bx bx-user-circle'></i>Đăng Nhập</a>--}}
{{--              </button>--}}
{{--              <button type="button" onclick="" class="user-account position-relative d-none" >--}}
{{--                <img src="https://www.thisiscolossal.com/wp-content/uploads/2019/02/moon_crop.jpg" alt="">--}}
{{--              </button>--}}
{{--              <div class="box-fs-account box-fs-account-home position-absolute">--}}
{{--                <ul >--}}
{{--                  <li><a href="{{route('update-profile/'.$_SESSION['account']->id)}}">Xem thông tin</a></li>--}}
{{--                  <li><a href="{{route('sign-out')}}">Đăng Xuất</a></li>--}}
{{--                </ul>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="logo">--}}
{{--              <img src="{{route('public/Image/photo_2023-03-10_10-33-00.png')}}" alt="" />--}}
{{--            </div>--}}
{{--            <div class="email-sdt">--}}
{{--              <div class="email">--}}
{{--                <p><i class='bx bxs-envelope' ></i>Email: monobovis@gmail.com</p>--}}
{{--              </div>--}}
{{--              <div class="sdt">--}}
{{--                <p><i class='bx bxs-phone'></i>Host line: 090.220.8216</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="icon-menu-sub-responsive">--}}
{{--              <button type="button" onclick="iconOpenMenuSubClick()">--}}
{{--                <i class='bx bx-menu'></i>--}}
{{--            </div>--}}
{{--              @else--}}
{{--                <button type="button" onclick="" class="user-account ms-2 position-relative d-flex align-items-center justify-content-between" onclick="iconOpenBoxClick()">--}}
{{--                  <img src="{{ route('public/upload/avatar/'.$_SESSION['account']->image ) }}" alt="">--}}

{{--                  <p class="mb-0 ms-2 fs-5">{{ $_SESSION['account']->name }} </p>--}}
{{--                </button>--}}
{{--                <div class="box-fs-account box-fs-account-home position-absolute">--}}
{{--                  <ul >--}}
{{--                    <li><a href="{{route('update-profile/'.$_SESSION['account']->id)}}">Xem thông tin</a></li>--}}
{{--                    <li><a href="{{route('user')}}">Vào trang quản trị</a></li>--}}
{{--                    <li><a href="{{ route('sign-out') }}">Đăng Xuất</a></li>--}}
{{--                  </ul>--}}
{{--                </div>--}}
{{--              @endif--}}
{{--            @endif--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}

{{--    <div class="">--}}
{{--      <div class="img-banner-homePage">--}}
{{--        <img src="{{route('public/Image/banner-Hompage-new.png')}}" width="100%" alt="">--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </header>--}}
  <header class="header-homePage container-fluid">
    <div class="box-header-form">
      <div class="box-navbar-top">

        <div class="header-menutop-banner">
          <div
            class="logo-menu-oppenTime d-flex justify-content-between align-items-center container position-relative"
          >
            <div class="oppentime-icon">
              <button type="button" class="user-login p-2">
                <a href="login.html" class="text-white text-decoration-none d-flex align-items-center gap-2"><i class='bx bx-user-circle'></i>Đăng Nhập</a>
              </button>
              <button type="button" onclick="" class="user-account position-relative d-none" >
                <img src="https://www.thisiscolossal.com/wp-content/uploads/2019/02/moon_crop.jpg" alt="">
              </button>
              <div class="box-fs-account box-fs-account-home position-absolute">
                <ul >
                  <li><a href="">Xem thông tin</a></li>
                  <li><a href="editUser.html">Sửa thông tin</a></li>
                  <li><a href="">Đăng Xuất</a></li>
                </ul>
              </div>
            </div>
            <div class="logo">
              <img src="{{route('./public/image/photo_2023-03-10_10-33-00.png')}}" alt="" />
            </div>
            <div class="email-sdt">
              <div class="email">
                <p><i class='bx bxs-envelope' ></i>Email: monobovis@gmail.com</p>
              </div>
              <div class="sdt">
                <p><i class='bx bxs-phone'></i>Host line: 090.220.8216</p>
              </div>
            </div>
            <div class="icon-menu-sub-responsive">
              <button type="button" onclick="iconOpenMenuSubClick()">
                <i class='bx bx-menu'></i>
            </div>
          </div>
        </div>
        <div class="menu-oppentime ">
          <div class="menu container pb-3">
            <ul class="d-flex gap-2 d-flex gap-3 align-items-center justify-content-around ">
              <li><a href="headerHomePage.html">Trang Chủ</a></li>
              <li><a href="About.html">Về Chúng Tôi</a></li>
              <li class="categosies-dv position-relative"><span>Dịch Vụ</span>
                <ul class="position-absolute ul-box-categories-service row">
                  <div class="box-ul col">
                    <li class="text-title-li" ><span class="d-flex align-items-center gap-2"><i class='bx bxs-checkbox'></i><a href="">Điều Trị Mụn</a></span>
                      <ul>
                        <li><a href="">Trị Mụn E2X – Đông Trùng Hạ Thảo</a></li>
                        <li><a href="">Trị Mụn Chuyên Sâu</a></li>
                        <li><a href="">Trị Mụn Y Khoa</a></li>
                        <li><a href="">Điều Trị Mụn Lưng</a></li>
                        <li><a href="">Trị Mụn Doctor Laser Spectra ACNE – ĐTHT</a></li>
                        <li><a href="">Điều Trị Thâm Mụn</a></li>
                        <li><a href="">Phi kim vacxin mụn – ĐTHTT</a></li>
                      </ul>
                    </li>
                    <li class="text-title-li"><span class="d-flex align-items-center gap-2"><i class='bx bxs-checkbox'></i><a href="">Điều Trị Nám</a></span>
                      <ul>
                        <li><a href="">Điều Trị Nám Da E-light</a></li>
                        <li><a href="">Điều Trị Nám Da Mặt</a></li>
                      </ul>
                    </li>

                  </div>
                  <div class="box-ul col">
                    <li class="text-title-li" ><span class="d-flex align-items-center gap-2"><i class='bx bxs-checkbox'></i><a href="">Điều Trị Thâm</a></span>
                      <ul>
                        <li><a href="">Điều Trị Thâm Mụn</a></li>
                        <li><a href="">Trị Thâm Vi Kim Tảo Biển – ĐTHT</a></li>
                        <li><a href="">Trị Thâm Elight</a></li>
                        <li><a href="">Trị Thâm Vitamin C Kép</a></li>
                        <li><a href="">Laser Trị Thâm Nách</a></li>
                        <li><a href="">Laser Trị Thâm Chân</a></li>
                        <li><a href="">Laser Trị Thâm Gối</a></li>
                        <li><a href="">Laser Trị Thâm Bẹn</a></li>
                        <li><a href="">Laser Trị Thâm Mắt Cá Chân</a></li>
                        <li><a href="">Doctor Laser Trị Thâm Bikini</a></li>
                      </ul>
                    </li>
                    <li class="text-title-li"><span class="d-flex align-items-center gap-2"><i class='bx bxs-checkbox'></i><a href="">Điều Trị Sẹo Rỗ</a></span>
                      <ul>
                        <li><a href="">Trị Sẹo Rỗ</a></li>
                        <li><a href="">Trị Sẹo Rỗ 4.0</a></li>
                        <li><a href="">DR. Seoul Trị Sẹo Rỗ SEL 5.0</a></li>
                      </ul>
                    </li>

                  </div>

                </ul>
              </li>
              <li class="menu-sub-page">Cẩm nang bổ ích</li>
              <li><a href="contact.html">Trải Nghiệm khách hàng</a></li>
              <li><a href="contact.html">Chính sách</a></li>
              <li><a href="contact.html">Liên Hệ</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="">
      <div class="img-banner-homePage">
        <img src="../src/Image/banner-Hompage-new.png" width="100%" alt="">
      </div>
    </div>
  </header>
  <main>

    <!-- =======About Us=========== -->
    <div class="container">
      <div class="About-Us row">
        <div data-aos="fade-up" data-aos-duration="1500" class="left-about-us col-md-6">
          <div class="item-left-about-us">
            <img src="{{route('public/Image/about-us2.jpg')}}" width="100%" alt="">
          </div>
          <div class="item-left-about-us">
            <img src="{{route('public/Image/about-us1.jpg')}}" width="100%" alt="">
          </div>
          <div class="item-absol-about-us">
            <img src="{{route('public/Image/about-us3.jpg')}}" width="40%" alt="">
          </div>
        </div>
        <div data-aos="fade-down" data-aos-duration="1500" class="right-about-us col-md-6">
          <h4 class="text-under-h4-HomePage">VỀ CHÚNG TÔI</h4>
          <h2 class="text-title-HomePage">MonoBovis mang đẳng cấp quốc tế</h2>
          <p class="p-title-Hompage">Về MonoBovis chúng tôi khẳng định với khách hàng về những dịch vụ mà MonoBovis mang lại lợi ích cho khách hàng một tối ưu nhất
          </p>
          <div class="item-right-about-us">
            <div class="content-item-right">
              <img src="{{route('public/Image/like-about-us.png')}}" width="50px" alt="">
              <div class="text-content-item-right-about-us">
                <p>24<i class='bx bx-plus-medical' style='color:#C6641B'></i></p>
                <p>Năm kinh nghiệm</p>
              </div>
            </div>
            <div class="content-item-right">
              <img src="{{route('public/Image/scrum-about-us.png')}}" width="50px" alt="">
              <div class="text-content-item-right-about-us">
                <p>850<i class='bx bx-plus-medical' style='color:#C6641B'></i></p>
                <p>Khách hàng phản hồi</p>
              </div>
            </div>
          </div>
          <a href="{{route('')}}"><button class="btn btn-about-us">Về Chúng Tôi</button></a>
        </div>
      </div>
    </div>
    <!-- ==============Our Service========= -->
    <div class="container">
      <!-- =========text==== -->
      <div class="our-service row">
        <div class="left-our-service col-md-6" data-aos="fade-up">
          <h4 class="text-under-h4-HomePage">DỊCH VỤ NỔI BẬT</h4>
          <!-- <h2 class="text-title-HomePage">Thư giãn đầu óc, toàn thân </h2> -->
        </div>
        <!-- <div class="right-our-service col-md-6" data-aos="fade-down">
            <p class="p-title-Hompage">Thư giãn đầu óc và cơ thể là một phần quan trọng trong việc duy trì sức khỏe và tăng cường sự cân bằng trong cuộc sống. Hiện nay, có nhiều phương pháp trị liệu quốc tế được sử dụng để giúp giảm căng thẳng, lo lắng và đau đớn trong cơ thể.</p>
            <a href=""><button class="btn btn-about-us">Tất cả dịch vụ</button></a>
        </div> -->
      </div>
      <!-- ===========Image========== -->
      <div class="image-service row" data-aos="fade-up">
        @foreach($service3 as $key => $value)
        <div class="col-md-4 item-image-service">
          <img src="https://templatekit.jegtheme.com/naylish/wp-content/uploads/sites/221/2022/01/manicure.jpg"
               width="95%" alt="">

          <div class="text-item-image-service">
            <h4>{{$value->name}}</h4>
            <p>{{$value->description}}</p>
            <a href="https://www.facebook.com/haudn02"><button class="btn btn-book-service">Xem thêm <i class='bx bx-right-arrow-alt'
                                                                        undefined></i></button></a>
          </div>

        </div>
        @endforeach
      </div>
      <div class="container text-read-more">
        <a href="{{route('blog')}}">  <h5 class="text-center">Xem Thêm ></h5></a>
      </div>
    </div>


    <!-- =============lý do nên chọn bọn dở hơi này =========== -->
    <div class="reason" data-aos="fade-up">
      <div class="container-fluid">
        <div class="container" >
          <h4 class="text-under-h4-HomePage update-h4-testmional h4-reason">LÝ DO BẠN NÊN LỰA CHỌN CHÚNG TA</h4>
          <p class="text-p-Homepage p-reason">Đến với BOVIS SPA, khách hàng sẽ được trải ngiệm dịch vụ hoàn hảo và đội ngũ chăm sóc khách hàng tận tình. Cam kết giúp bạn thực hiện ước mơ tìm đến vẻ đẹp hoàn mỹ</P>
          <div class="option-reason row">
            <div class=" col-md-4">
              <div class="item-option-reason">
                <div class="img-item-reason">
                  <img src="{{route('public/Image/trimun1.png')}}" width="100%" alt="">
                </div>
                <div class="text-item-reason">
                  <h4 class="h4-item-reason">Cam kết chất lượng & uy tín</h4>
                  <p class="p-item-reason">Đến với MONO BOVIS SPA, khách hàng sẽ được trải nghiệm dịch vụ hoàn hảo và đội ngũ chăm sóc khách hàng nhiệt tình. Cam kết giuýp bạn thực hiện ước mơ tìm đến vẻ đẹp</p>

                </div>
              </div>
            </div>
            <div class=" col-md-4">
              <div class="item-option-reason">
                <div class="img-item-reason">
                  <img src="{{route('public/Image/trimun1.png')}}" width="100%" alt="">
                </div>
                <div class="text-item-reason">
                  <h4 class="h4-item-reason">Đội ngũ bác sĩ chuyên nghiệp</h4>
                  <p class="p-item-reason">"

                    Mono Bovis Spa đặc biệt chú trọng xây dựng đội ngũ bác sĩ, chuyên gia và kỹ thuật viên giỏi, tâm huyết với nghề. Thường xuyên cập nhật kiến thức chuyên môn thông qua các khóa tập huấn, hội thảo khoa học, chuyển giao công nghệ,… từ đó nâng cao trình độ chuyên môn cũng như tay nghề, kinh nghiệm trong làm đẹp. "			</p>

                </div>
              </div>
            </div>
            <div class=" col-md-4">
              <div class="item-option-reason">
                <div class="img-item-reason">
                  <img src="{{route('public/Image/trimun1.png')}}" width="100%" alt="">
                </div>
                <div class="text-item-reason">
                  <h4 class="h4-item-reason">Cam kết chất lượng & uy tín</h4>
                  <p class="p-item-reason">Đến với MONO BOVIS SPA, khách hàng sẽ được trải nghiệm dịch vụ hoàn hảo và đội ngũ chăm sóc khách hàng nhiệt tình. Cam kết giuýp bạn thực hiện ước mơ tìm đến vẻ đẹp</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ==================testimonial================= -->
    <div class="bg-testminal">
      <div class="container">
        <div class="text-infor-testminal text-center" data-aos="zoom-in-down">
          <h4 class="text-under-h4-HomePage update-h4-testmional">PHẢN HỒI</h4>
          <h2 class="text-title-HomePage">Khách hàng nói gì?</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua.</p>
        </div>
        <div class="testimonial-row row">
          <div class="left-testimonial col-md-6" data-aos="zoom-in-right">
            <img src="{{route('public/Image/treatment.jpg')}}" width="100%" alt="">
          </div>
          <div class="right-testimonial col-md-6" ata-aos="zoom-in-left">
            <p>Tôi đã thực sự thích trải nghiệm của mình tại spa này. Không gian rất thoải mái và thư giãn, nhân viên thân thiện và chuyên nghiệp, và dịch vụ massage tuyệt vời. Tuy nhiên, tôi nghĩ rằng có thể cải thiện thêm về chất lượng sản phẩm được sử dụng trong quá trình trị liệu. Một số sản phẩm được sử dụng không có mùi thơm hoặc không cải thiện được tình trạng da của tôi như tôi mong đợi </p>
            <div class="start-testimonal">
              <i class='bx bxs-star'>
              </i><i class='bx bxs-star'>
              </i><i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
            </div>
            <div class="user-vote-treatmen">
              <img src="{{route('public/Image/about-us1.jpg')}}" alt="">
              <div class="text-user-vote">
                <p>Chị Mạnh Cường</p>
                <p>40 tuổi</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================working hour=================== -->
    <!-- <div class="working-hour" data-aos="fade-up">
        <div class="container">
            <div class="content-work row ">
                <div class="left-working col-md-6">

                </div>
                <div class="right-working col-md-6">
                    <h4 class="text-under-h4-HomePage">VỀ CHÚNG TÔI</h4>
                    <h2 class="text-title-HomePage">Lịch làm việc</h2>
                    <div class="hour-right-working">
                        <p>Thứ 2 – Thứ 6</p>
                        <div class="style-hour-woking"></div>
                        <p>09.00 AM – 19.00 PM</p>
                    </div>
                    <div class="hour-right-working">
                        <p>Thứ 7</p>
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
    </div> -->
    <!-- =============latest blog============== -->
    <div class="latest-blog container">
      <h2 class="text-title-HomePage text-center" data-aos="fade-up">TIN TỨC MỚI NHẤT</h2>
      <p class="text-center" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
        do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

      <div class="row row-lastest" data-aos="fade-down">
        @foreach($posts as $value)
        <div class="item-lastest-blog col-md-4 column-gap-2">
          <img width="100%" src="{{route('public/upload/blogSv/'.$value->image)}}" alt="">
          <h3>{{ $value->name_service }}</h3>
          <div class="time-lastest-blog">
            <i class='bx bxs-time'></i>
            <p>{{ date('j F, Y', strtotime($value->create_date))  }}</p>
          </div>
          <p>{{ $value->description }}</p>
          <a href="{{ route("detail/".$value->id) }}"><button class="btn btn-read-more">Xem thêm <i
                class='bx bx-right-arrow-alt'></i></button></a>
        </div>
        @endforeach
      </div>
    </div>
    <!-- =======follow our ig============= -->
    <div class="follow-our-instagram">
      <div class="title-follow-our-instagram text-center mt-5 mb-5 container">
        <span>Theo dõi tại Instagram</span>
        <p class="hr-insta"></p>
        <h2>@naylish.insta</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          @foreach($instagram as $value)
          <div class="col-md-2 col-sm-4 col-6 mb-4" data-aos="fade-up">
            <div class="box-insta-bottom">
              <div class="img">
                <img src="{{route('public/upload/insta/'.$value->link)}}"
                     alt="">
                <div class="backgrond-hover-image-insta"></div>
                <div class="icon-insta-follow">
                  <a class="text-white" href="{{ $value->	link_insta }}"> <i class='bx bxl-instagram fs-1'></i> </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>

    </div>
    <div class="container-fluid">
      <div class="icon-contact">
        <div class="call-icon-contact">
          <a href="tel:0775.292.262"> <i class='bx bxs-phone-call' style='color:#056b27' ></i></a>
        </div>
        <div class="zalo-icon-contact">
          <a href="https://zalo.me/g/wvqqdq686"> <img src="https://img.icons8.com/color/256/zalo.png" alt=""></a>
        </div>
        <div class="instagram-icon-contact">
          <a href="https://www.facebook.com/messages/t/cuong.dev.8123/"> <img src="https://img.icons8.com/fluency/256/facebook-messenger--v2.png"  alt=""></a>
        </div>
      </div>

    </div>

  </main>
@endsection

@push("mockup")
  <div class="modal-mockup">

    <div class="content-modal-mockup">
      <div class="oidoioi">
        <div class="item-modal-mockup">
          <div class="row row-mokup">
            <div class="col-sm-6 col-md-12">
              <img src="{{route('public/Image/photo_2023-03-10_10-33-00.png')}}" width="60px" alt="">
              <h5 class="h5-item-modal-mockup">"MONO BOVIS - Spa uy tín Đà Nẵng"</h5>

              <p></p>
              <p class="title-give"> * Đăng ký liền tay, nhận ngay quà cực chất*
              </p>
              <div class="form-modal text-center">

                <form id="form-modal-t">
                  <div class="value-form-modal mb-2">
                    <label class="label-model">Họ và tên </label>
                    : <input type="text" name="name" placeholder="Nhập tên anh/chị" class="input-model" id="name-mokup">
                    <small class="error-message m-auto pt-3"></small>
                  </div>
                  <div class="value-form-modal">
                    <label class="label-model">Số điện thoại </label>
                    :<input type="text" name="phone" placeholder="Nhập SĐT anh/chị" class="input-model" id="phone-mokup">
                    <small class="error-message m-auto pt-3"></small>
                  </div>

                  <button class="btn submit-form-modal">GỬI THÔNG TIN</button>
                </form>

              </div>
            </div>
            <div class="col-sm-6 col-md-12 img-modal">
              <img src="{{route('public/Image/Screenshot 2023-03-12 160307.png')}}" width="100%" alt="">

            </div>
          </div>
          <button class="close-modal btn" onclick="myStopFunction()"><i class='bx bx-x'
                                                                        style='color:#a47b60'></i></button>
        </div>
      </div>
    </div>
  </div>
@endpush
