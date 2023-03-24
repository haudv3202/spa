@extends('layout.index')
@section('content')
  <header class="header-homePage container-fluid">
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
            <ul class="d-flex gap-4 fs-5">
              <li><a href="{{route('')}}">Trang chủ</a></li>
              <li><a href="{{route('about')}}">Giới thiệu</a></li>
              <li><a href="{{route('service')}}">Dịch vụ</a></li>
              <li><a href="{{route('ourTeam')}}">Đội ngũ</a></li>
              <li><a href="{{route('booking')}}">Đặt lịch</a></li>
              <li><a href="{{route('blog')}}">Bài viết</a></li>
              <li><a href="{{route('contact')}}">Liên hệ</a></li>
            </ul>
          </div>
          <div class="oppentime-icon d-flex align-items-center justify-content-between">
{{--            <i class="bx bxl-facebook"></i>--}}
{{--            <i class="bx bxl-instagram"></i>--}}
            <button type="button"onclick="iconOpenBoxClick()">
              <i class="bx bx-align-right open-Time"></i>
            </button>
            @if(!isset($_SESSION['account']))
            <button type="button" onclick="" class="user-login ms-2">
              <a href="{{ route("sign-in") }}" class="text-black"><i class='bx bx-user-circle'></i></a>
            </button>
            @else
              @if($_SESSION['account']->role_id == 1)
            <button type="button" onclick="" class="user-account ms-2 position-relative d-flex align-items-center justify-content-between" onclick="iconOpenBoxClick()">
              <img src="{{ route('public/upload/avatar/'.$_SESSION['account']->image ) }}" alt="">

              <p class="mb-0 ms-2 fs-5">{{ $_SESSION['account']->name }} </p>
            </button>
            <div class="box-fs-account box-fs-account-home position-absolute">
                            <ul >
                              <li><a href="{{route('update-profile/'.$_SESSION['account']->id)}}">Xem thông tin</a></li>
                              <li><a href="{{ route('sign-out') }}">Đăng Xuất</a></li>
                            </ul>
            </div>
              @else
                <button type="button" onclick="" class="user-account ms-2 position-relative d-flex align-items-center justify-content-between" onclick="iconOpenBoxClick()">
                  <img src="{{ route('public/upload/avatar/'.$_SESSION['account']->image ) }}" alt="">

                  <p class="mb-0 ms-2 fs-5">{{ $_SESSION['account']->name }} </p>
                </button>
                <div class="box-fs-account box-fs-account-home position-absolute">
                  <ul >
                    <li><a href="{{route('update-profile/'.$_SESSION['account']->id)}}">Xem thông tin</a></li>
                    <li><a href="{{route('user')}}">Vào trang quản trị</a></li>
                    <li><a href="{{ route('sign-out') }}">Đăng Xuất</a></li>
                  </ul>
                </div>
              @endif
            @endif
          </div>
        </div>
      </div>
      <div class=" banner-page position-absolute top-0"></div>
    </div>


    <div class="container">
      <div class="row img-banner-homePage ">
        <div data-aos="fade-right" data-aos-duration="1500" class="left-banner-Homepage col-md-6">
          <h2>{{$banner[0]->title}}</h2>
          <p>{{$banner[0]->description}}</p>
          <div class="link-left-banner-homePage">
            <a href=""><button class="btn">Book Appointment</button></a>
            <a href=""><button class="btn">Our Service</button></a>
          </div>
        </div>


        <div data-aos="fade-up" data-aos-duration="1500" class="right-banner-Homepage col-md-6">
          <div class="image1-banner-homePage">
            <img src="{{ route('public/upload/banner/'.$banner[0]->image_1) }}" alt="">
          </div>
          <div class="image2-banner-HomePage">
            <img src="{{route('public/upload/banner/'.$banner[0]->image_2)}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </header>
  <main>

    <!-- =======About Us=========== -->
    <div class="container">
      <div class="About-Us row">
        <div data-aos="fade-up" data-aos-duration="1500" class="left-about-us col-md-6">
          <div class="item-left-about-us">
            <img src="{{route('public/upload/setting/'.$content['image-abouts'][0]->titler)}}" width="100%" alt="">
          </div>
          <div class="item-left-about-us">
            <img src="{{route('public/upload/setting/'.$content['image-abouts'][1]->titler)}}" width="100%" alt="">
          </div>
          <div class="item-absol-about-us">
            <img src="{{route('public/upload/setting/'.$content['image-abouts'][2]->titler)}}" width="40%" alt="">
          </div>
        </div>
        <div data-aos="fade-down" data-aos-duration="1500" class="right-about-us col-md-6">
          <h4 class="text-under-h4-HomePage">Về chúng tôi</h4>
          <h2 class="text-title-HomePage">{{ $content['title-about'] }}</h2>
          <p class="p-title-Hompage">{{ $content['desribe-about'] }}
          </p>
{{--          <div class="item-right-about-us">--}}
{{--            <div class="content-item-right">--}}
{{--              <img src="{{route('public/image/like-about-us.png')}}" width="50px" alt="">--}}
{{--              <div class="text-content-item-right-about-us">--}}
{{--                <p>24<i class='bx bx-plus-medical' style='color:#C6641B'></i></p>--}}
{{--                <p>Year Experience</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="content-item-right">--}}
{{--              <img src="{{route('public/image/scrum-about-us.png')}}" width="50px" alt="">--}}
{{--              <div class="text-content-item-right-about-us">--}}
{{--                <p>850<i class='bx bx-plus-medical' style='color:#C6641B'></i></p>--}}
{{--                <p>Happy Client</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
          <a href="{{route('about')}}"><button class="btn btn-about-us">Về chúng tôi</button></a>
        </div>
      </div>
    </div>
    <!-- ==============Our Service========= -->
    <div class="container">
      <!-- =========text==== -->
      <div class="our-service row">
        <div class="left-our-service col-md-6" data-aos="fade-up">
          <h4 class="text-under-h4-HomePage">Dịch vụ của chúng tôi</h4>

        </div>
        <div class="right-our-service col-md-6" data-aos="fade-down">
          <p class="p-title-Hompage">{{ $content['desribe-service'] }}</p>
          <a href=""><button class="btn btn-about-us">Xem thêm</button></a>
        </div>
      </div>
      <!-- ===========Image========== -->
      <div class="image-service row" data-aos="fade-up" >
        @foreach($service3 as $key => $value)
          <div class="col-md-4 item-image-service">
            <img src="https://templatekit.jegtheme.com/naylish/wp-content/uploads/sites/221/2022/01/manicure.jpg"
                 width="95%" alt="">

            <div class="text-item-image-service">
              <h4>{{$value->name}}</h4>
              <p>{{$value->description}}</p>
              <a href="https://www.facebook.com/haudn02"><button class="btn btn-book-service">Book Now <i class='bx bx-right-arrow-alt'
                                                                                                          undefined></i></button></a>
            </div>

          </div>
        @endforeach
      </div>
    </div>


    <!-- =============treatment & price =========== -->
    <div class="treatment-price">
      <div class="background-treat-price">
        <div class="content-treatment-price container">
          <div class="grid-treatment-price row">
            <div class="left-treatment-price col-md-6" data-aos="zoom-in-down">
              <h4 class="text-under-h4-HomePage">Phương pháp điều trị & Giá cả</h4>
              <h2 class="text-title-HomePage">Bảng giá dịch vụ.</h2>
              @foreach($service as $key => $value)
                <div class="title-lefy-streatment">
                  <div class="option-and-price">
                    <p style="font-weight: bolder;">{{$value->name}}</p>
                    <div class="style-option"></div>
                    <p>{{number_format($value->price)}}đ</p>

                  </div>
                  <p>{{$value->description}}</p>
                </div>
              @endforeach
            </div>
            <div class="right-treatment-price col-md-6" data-aos="zoom-in-down">
              <img src="{{route('public/image/right-nails.jpg')}}" width="100%" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================testimonial================= -->
{{--    <div class="bg-testminal">--}}
{{--      <div class="container">--}}
{{--        <div class="text-infor-testminal text-center"data-aos="zoom-in-down">--}}
{{--          <h4 class="text-under-h4-HomePage update-h4-testmional">Testimonial</h4>--}}
{{--          <h2 class="text-title-HomePage">What Our Costumer Say</h2>--}}
{{--          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut--}}
{{--            labore et dolore magna aliqua.</p>--}}
{{--        </div>--}}
{{--        <div class="testimonial-row row">--}}
{{--          <div class="left-testimonial col-md-6"  data-aos="zoom-in-right">--}}
{{--            <img src="{{route('public/image/treatment.jpg')}}" width="100%" alt="">--}}
{{--          </div>--}}
{{--          <div class="right-testimonial col-md-6" ata-aos="zoom-in-left">--}}
{{--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut--}}
{{--              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco--}}
{{--              laboris. </p>--}}
{{--            <div class="start-testimonal">--}}
{{--              <i class='bx bxs-star'>--}}
{{--              </i><i class='bx bxs-star'>--}}
{{--              </i><i class='bx bxs-star'></i>--}}
{{--              <i class='bx bxs-star'></i>--}}
{{--              <i class='bx bxs-star'></i>--}}
{{--            </div>--}}
{{--            <div class="user-vote-treatmen" >--}}
{{--              <img src="{{route('public/image/about-us1.jpg')}}" alt="">--}}
{{--              <div class="text-user-vote">--}}
{{--                <p>Manh Cuong</p>--}}
{{--                <p>Developer</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}

    <!-- ==================working hour=================== -->
    <div class="working-hour" data-aos="fade-up">
      <div class="container">
        <div class="content-work row ">
          <div class="left-working col-md-6">

          </div>
          <div class="right-working col-md-6">
            <h4 class="text-under-h4-HomePage">About Us</h4>
            <h2 class="text-title-HomePage">We Have the Nail Knowledge</h2>
            <div class="hour-right-working">
              <p>Monday – Friday</p>
              <div class="style-hour-woking"></div>
              <p>09.00 AM – 19.00 PM</p>
            </div>
            <div class="hour-right-working">
              <p>Saturday</p>
              <div class="style-hour-woking"></div>
              <p>09.00 AM – 19.00 PM</p>
            </div>
            <div class="hour-right-working">
              <p>Sunday</p>
              <div class="style-hour-woking"></div>
              <p>09.00 AM – 19.00 PM</p>
            </div>
            <a href=""><button class="btn btn-book">Book Now</button></a>
          </div>
        </div>
      </div>
    </div>
    <!-- =============latest blog============== -->
    <div class="latest-blog container">
      <h2 class="text-title-HomePage text-center" data-aos="fade-up">Blog mới nhất</h2>
      <p class="text-center" data-aos="fade-up">{{ $content["desribe-blog"] }}</p>

      <div class="row row-lastest" data-aos="fade-down">
        @foreach($posts as $value)
          <div class="item-lastest-blog col-md-4 column-gap-2">
            <img width="100%" src="{{route('public/upload/blogSv/'.$value->image)}}" alt="">
            <h3>{{ $value->name_service }}</h3>
            <div class="time-lastest-blog">
              <i class='bx bxs-time' ></i>
              <p>{{ date('j F, Y', strtotime($value->create_date))  }}</p>
            </div>
            <p>{{ $value->description }}</p>
            <a href="{{ route("detail/".$value->id) }}"><button class="btn btn-read-more">Read More <i class='bx bx-right-arrow-alt' ></i></button></a>
          </div>
        @endforeach



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
          @foreach($instagram as $value)
            <div class="col-md-2 col-sm-4 col-6 mb-4" data-aos="fade-up"
            >
              <div class="box-insta-bottom">
                <div class="img">
                  <img src="{{route('public/upload/insta/'.$value->link)}}" alt="">
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
    @include("components.socialcontact")
  </main>
@endsection

@push("mockup")
  <div class="modal-mockup">

    <div class="content-modal-mockup">
      <div class="oidoioi">
        <div class="item-modal-mockup">
          <div class="row row-mokup">
            <div class="col-sm-6 col-md-12">
              <img src="{{route('public/Image/photo_2023-03-10_10-33-00.png')}}" width="100px" alt="">
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

                <form action="{{route('mockup-post')}}" method="post">
                  <div class="value-form-modal mb-2">
                    <label class="label-model">Họ và tên </label>
                    : <input type="text" name="fullname" placeholder="Nhập tên anh/chị" class="input-model" id="name-mokup">
                    <small class="error-message m-auto pt-3"></small>
                  </div>
                  <div class="value-form-modal">
                    <label class="label-model">Số điện thoại :</label>
                    <input type="text" name="phone" placeholder="Nhập SĐT anh/chị" class="input-model" id="phone-mokup">
                    <small class="error-message m-auto pt-3"></small>
                  </div>
                  <div class="value-form-modal">
                    <label class="label-model">Email</label>
                    : <input type="text" name="email" placeholder="Nhập email anh/chị" class="input-model" id="email-mokup">
                    <small class="error-message m-auto pt-3"></small>
                  </div>
                  <input type="submit" class="btn submit-form-modal" name="btn-sm" value="GỬI THÔNG TIN">
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
