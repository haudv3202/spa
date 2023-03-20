@extends('layout.index')
@section('content')
  <header>
    <div class="header-menutop-banner">
      <div class="logo-menu-oppenTime d-flex justify-content-between align-items-center container position-relative">
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
              <li><a href="headerHomePage.html">HOME</a></li>
              <li><a href="About.html">ABOUT US</a></li>
              <li><a href="ourService.html">SERVICES</a></li>
              <li class="menu-sub-page">
                <span class="d-flex align-items-center">PAGE <i class="bx bx-chevron-down"></i></span>
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
              <img
                src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aHVtYW58ZW58MHx8MHx8&w=1000&q=80"
                alt="">

            </button>
            <div class="box-fs-account position-absolute">
              <ul>
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
          <h1>Booking</h1>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua</span>
        </div>
      </div>
    </div>
  </header>
  <main>
    <div class="service-menu">
      <div class="title-service-menu text-center mb-5">
        <span>Service Menu</span>
        <p class="hr-after-menu"></p>
        <h1>Give Your Nails A Sweet Treat</h1>
      </div>
      <div class="box-service-menu container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-6 box-question" data-aos="fade-up">
            @foreach($servic3 as $value)
              <span class="d-flex align-items-center price-service">
                <h5>{{ $value->name }}</h5>
                <hr class="dotted"> {{ number_format($value->price) }}đ
              </span>
            <p>{{ $value->description }}</p>
            @endforeach

          </div>
          <div class="col-12 col-md-6 col-lg-6 box-question2" data-aos="fade-up">
            @foreach($service3s as $value)
              <span class="d-flex align-items-center price-service">
                <h5>{{ $value->name }}</h5>
                <hr class="dotted"> {{ number_format($value->price) }}đ
              </span>
              <p>{{ $value->description }}</p>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="make-appointment mt-5">
      <div class="background-make-appointment"></div>
      <div class="box-make-appointment container d-flex">
        <div class="row">
          <div class="text-left-make-appointment col-12 col-sm-6" data-aos="fade-right">
            <div class="title-text-make-appointment">
              <span>Make Appointment</span>
              <p class="hr-after-form"></p>
              <h1>Get Our Service</h1>
              <p class="mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris</p>

              <span class="opening-span">Opening Hours</span>
              <p class="mt-4">Monday – Friday____________09.00 AM – 19.00 PM</p>
              <p>Saturday___________________09.00 AM – 19.00 PM</p>
              <p>Sunday_____________________09.00 AM – 19.00 PM</p>
            </div>
          </div>
          <div class="form-right-make-appointment col-12 col-sm-6 container" data-aos="fade-up">
            <form action="" id="form">
              <input type="text" class="" placeholder="Your Name" id="name">
              <small class="error-message"></small>
              <div class="">
                <div class="">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="email" placeholder="Your Email" class="email-booking" id="email">
                      <small class="error-message"></small>
                    </div>
                    <div class="col-md-6">
                      <input type="tel" placeholder="Your Phone" class="phone-booking" id="tel">
                      <small class="error-message"></small>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="select-form">
                        <select id="select" class=" select-booking">
                          <option value="0">Manicure</option>
                          <option value="">Pedicure</option>
                          <option value="">Nail Polish</option>
                          <option value="">Nail Trim</option>
                          <option value="">Gel Coloring</option>
                          <option value="">Nail Art</option>
                        </select>
                        <small class="error-message"></small>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-date">
                        <input type="date" placeholder="Select Date" id="date" class="date-booking">
                        <small class="error-message date-err"></small>
                      </div>
                    </div>

                  </div>
                  <br>

                </div>
                <small class="error-message"></small>
                <div class="box-form">

                  <br>


                </div>
              </div>
              <div class="box-textarea">
                <textarea name="" id="textarea" cols="53" rows="5" placeholder="Your Message" class="mt-5"></textarea>
                <small class="error-message date-err"></small>
              </div>
              <button type="submit" class="mt-5">Book Appointment</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="question-click-box container mt-5 box-question-click-booking">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6 box-question-text-booking" data-aos="fade-down">
          <div class="text-question-click-left">
            <h1>Client Question</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
              massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam
              felis, ultricies nec, pellentesque.</p>
            <button>Learn More</button>
          </div>
          <div class="img">
            <img src="../src/Image/leaf@2x.png" alt="">
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 box-question-booking" data-aos="fade-up">
          @foreach($questions as $value)
          <div class="box-text-question ">
            <div class="text-question">
                <span class="d-flex align-items-center gap-2 fs-5"><i class='bx bx-plus icon-Question'></i>{{ $value->question	 }}</span>
            </div>
            <div class="reply-question">
              <p>{!! $value->reply !!}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>

    </div>

  </main>
@endsection

