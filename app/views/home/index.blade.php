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
            <ul class="d-flex gap-5">
              <li><a href="headerHomePage.html">HOME</a></li>
              <li><a href="About.html">ABOUT US</a></li>
              <li><a href="ourService.html">SERVICES</a></li>
              <li class="menu-sub-page">
                    <span class="d-flex align-items-center"
                    >PAGE <i class="bx bx-chevron-down"></i
                      ></span>
                <ul class="menu-mini menu-mini-home">
                  <li><a href="ourTeamPage.html">Our Team</a></li>
                  <li><a href="{{route('blog-questions/.')}}">FAQ</a></li>
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
              <img src="https://www.thisiscolossal.com/wp-content/uploads/2019/02/moon_crop.jpg" alt="">
            </button>
            <div class="box-fs-account box-fs-account-home position-absolute">
              <ul >
                <li><a href="">Xem thông tin</a></li>
                <li><a href="{{route('update-profile/'.$_SESSION['account'] ->id )}}">Sửa thông tin</a></li>
                <li><a href="">Đăng Xuất</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class=" banner-page position-absolute top-0"></div>
    </div>

    <div class="container">
      <div class="row img-banner-homePage ">
        <div data-aos="fade-right" data-aos-duration="1500" class="left-banner-Homepage col-md-6">
          <h2>Give Your Nails Sweet Treat</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
            ullamcorper mattis, pulvinar dapibus leo.</p>
          <div class="link-left-banner-homePage">
            <a href=""><button class="btn">Book Appointment</button></a>
            <a href=""><button class="btn">Our Service</button></a>
          </div>
        </div>


        <div data-aos="fade-up" data-aos-duration="1500" class="right-banner-Homepage col-md-6">
          <div class="image1-banner-homePage">
            <img width="90%" src="{{route('public/image/banner-Hompage.jpg')}}" alt="">
          </div>
          <div class="image2-banner-HomePage">
            <img width="50%" src="{{route('public/image/banner-homepage2.jpg')}}" alt="">
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
          <h4 class="text-under-h4-HomePage">About Us</h4>
          <h2 class="text-title-HomePage">We Have the Nail Knowledge</h2>
          <p class="p-title-Hompage">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque.
          </p>
          <div class="item-right-about-us">
            <div class="content-item-right">
              <img src="{{route('public/image/like-about-us.png')}}" width="50px" alt="">
              <div class="text-content-item-right-about-us">
                <p>24<i class='bx bx-plus-medical' style='color:#C6641B'></i></p>
                <p>Year Experience</p>
              </div>
            </div>
            <div class="content-item-right">
              <img src="{{route('public/image/scrum-about-us.png')}}" width="50px" alt="">
              <div class="text-content-item-right-about-us">
                <p>850<i class='bx bx-plus-medical' style='color:#C6641B'></i></p>
                <p>Happy Client</p>
              </div>
            </div>
          </div>
          <a href=""><button class="btn btn-about-us">About Us</button></a>
        </div>
      </div>
    </div>
    <!-- ==============Our Service========= -->
    <div class="container">
      <!-- =========text==== -->
      <div class="our-service row">
        <div class="left-our-service col-md-6" data-aos="fade-up">
          <h4 class="text-under-h4-HomePage">Our Service</h4>
          <h2 class="text-title-HomePage">Make Gorgeous Nails A Part of Your Life.</h2>
        </div>
        <div class="right-our-service col-md-6" data-aos="fade-down">
          <p class="p-title-Hompage">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris</p>
          <a href=""><button class="btn btn-about-us">All Service</button></a>
        </div>
      </div>
      <!-- ===========Image========== -->
      <div class="image-service row" data-aos="fade-up" >
        <div class="col-md-4 item-image-service">
          <img src="https://templatekit.jegtheme.com/naylish/wp-content/uploads/sites/221/2022/01/manicure.jpg"
               width="95%" alt="">

          <div class="text-item-image-service">
            <h4>Manicure</h4>
            <p>Lorem ipsum dolor sit amet, consectet adipiscing elit.</p>
            <a href=""><button class="btn btn-book-service">Book Now <i class='bx bx-right-arrow-alt'
                                                                        undefined></i></button></a>
          </div>

        </div>
        <div class="col-md-4 item-image-service">
          <img src="https://templatekit.jegtheme.com/naylish/wp-content/uploads/sites/221/2022/01/nail-polish.jpg"
               width="95%" alt="">
          <div class="text-item-image-service">
            <h4>Manicure</h4>
            <p>Lorem ipsum dolor sit amet, consectet adipiscing elit.</p>
            <a href=""><button class="btn btn-book-service">Book Now <i class='bx bx-right-arrow-alt'
                                                                        undefined></i></button></a>
          </div>
        </div>
        <div class="col-md-4 item-image-service">
          <img src="https://templatekit.jegtheme.com/naylish/wp-content/uploads/sites/221/2022/01/pedicure.jpg"
               width="95%" alt="">
          <div class="text-item-image-service">
            <h4>Manicure</h4>
            <p>Lorem ipsum dolor sit amet, consectet adipiscing elit.</p>
            <a href=""><button class="btn btn-book-service">Book Now <i class='bx bx-right-arrow-alt'
                                                                        undefined></i></button></a>
          </div>
        </div>
      </div>
    </div>


    <!-- =============treatment & price =========== -->
    <div class="treatment-price">
      <div class="background-treat-price">
        <div class="content-treatment-price container">
          <div class="grid-treatment-price row">
            <div class="left-treatment-price col-md-6" data-aos="zoom-in-down">
              <h4 class="text-under-h4-HomePage">Treatments & Prices</h4>
              <h2 class="text-title-HomePage">It’s Time to Get Trimmed.</h2>
              <div class="title-lefy-streatment">
                <div class="option-and-price">
                  <p style="font-weight: bolder;">Manicure</p>
                  <div class="style-option"></div>
                  <p>$12.00</p>

                </div>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
              </div>
              <div class="title-lefy-streatment">
                <div class="option-and-price">
                  <p style="font-weight: bolder;">Manicure</p>
                  <div class="style-option"></div>
                  <p>$12.00</p>

                </div>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
              </div>
              <div class="title-lefy-streatment">
                <div class="option-and-price">
                  <p style="font-weight: bolder;">Manicure</p>
                  <div class="style-option"></div>
                  <p>$12.00</p>

                </div>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
              </div>
              <div class="title-lefy-streatment">
                <div class="option-and-price">
                  <p style="font-weight: bolder;">Manicure</p>
                  <div class="style-option"></div>
                  <p>$12.00</p>

                </div>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
              </div>
              <div class="title-lefy-streatment">
                <div class="option-and-price">
                  <p style="font-weight: bolder;">Manicure</p>
                  <div class="style-option"></div>
                  <p>$12.00</p>

                </div>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
              </div>
            </div>
            <div class="right-treatment-price col-md-6" data-aos="zoom-in-down">
              <img src="{{route('public/image/right-nails.jpg')}}" width="100%" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================testimonial================= -->
    <div class="bg-testminal">
      <div class="container">
        <div class="text-infor-testminal text-center"data-aos="zoom-in-down">
          <h4 class="text-under-h4-HomePage update-h4-testmional">Testimonial</h4>
          <h2 class="text-title-HomePage">What Our Costumer Say</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua.</p>
        </div>
        <div class="testimonial-row row">
          <div class="left-testimonial col-md-6"  data-aos="zoom-in-right">
            <img src="{{route('public/image/treatment.jpg')}}" width="100%" alt="">
          </div>
          <div class="right-testimonial col-md-6" ata-aos="zoom-in-left">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris. </p>
            <div class="start-testimonal">
              <i class='bx bxs-star'>
              </i><i class='bx bxs-star'>
              </i><i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
            </div>
            <div class="user-vote-treatmen" >
              <img src="{{route('public/image/about-us1.jpg')}}" alt="">
              <div class="text-user-vote">
                <p>Manh Cuong</p>
                <p>Developer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
      <h2 class="text-title-HomePage text-center" data-aos="fade-up">Latest Blog</h2>
      <p class="text-center" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

      <div class="row row-lastest" data-aos="fade-down">

        <div class="item-lastest-blog col-md-4 column-gap-2">
          <img width="100%" src="{{route('public/image/nail-tips1.jpg')}}" alt="">
          <h3>Essential Manicure And Pedicure Tools At Home</h3>
          <div class="time-lastest-blog">
            <i class='bx bxs-time' ></i>
            <p>January 26, 2022</p>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
          <a href=""><button class="btn btn-read-more">Read More <i class='bx bx-right-arrow-alt' ></i></button></a>
        </div>

        <div class="item-lastest-blog col-md-4">
          <img width="100%" src="{{route('public/image/nail-tips1.jpg')}}" alt="">
          <h3>Essential Manicure And Pedicure Tools At Home</h3>
          <div class="time-lastest-blog">
            <i class='bx bxs-time' ></i>
            <p>January 26, 2022</p>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
          <a href=""><button class="btn  btn-read-more">Read More <i class='bx bx-right-arrow-alt' ></i></button></a>
        </div>

        <div class="item-lastest-blog col-md-4">
          <img width="100%" src="{{route('public/image/nail-tips1.jpg')}}" alt="">
          <h3>Essential Manicure And Pedicure Tools At Home</h3>
          <div class="time-lastest-blog">
            <i class='bx bxs-time' ></i>
            <p>January 26, 2022</p>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
          <a href=""><button class="btn  btn-read-more">Read More <i class='bx bx-right-arrow-alt' ></i></button></a>
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
