@extends('layout.index')
@section('TitlePage')
  Đặt lịch
@endsection
@section('desribePage')

@endsection
@section('content')
  @include("components.header2")
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
    <div class="container form-service">
      <div class="row row-form-service" data-aos="fade-up">
        <div class="col-md-4 text-center left-row-form-service">
          <h4>Nhận tư vấn miễn phí</h4>
          <p>090 220 82 16</p>
          <p> <a href="tel:090 220 82 16"> Liên hệ đặt lịch</a></p>
          <a href="tek:090 220 82 16"> Đặt lịch hẹn hôm nay nhận ưu đão chỉ dành riêng cho bạn</a>
        </div>
        <div class="col-md-8 right-row-form-service">
          <h3 class="text-center">ĐĂNG KÝ NGAY NHẬN QUÀ LIỀN TAY</h3>
          <p class="text-center">Để lại thông tin Mono Bovis Spa sẽ gửi ngay quà cho bạn</p>
          <form action="{{route('mockup-post')}}" method="post">
            <table>
              <tr>
                <th>Họ và tên:</th>
                <td><input type="text" name="fullname"></td>
              </tr>
              <tr>
                <th>Số điện thoại </th>
                <td><input type="text" name="phone"></td>
              </tr>
              <tr>
                <th><input type="submit" name="btn-sm" class="btn btn-ourSerVice" value="Đăng Ký Ngay"></th>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
    @include("components.socialcontact")
  </main>
@endsection

