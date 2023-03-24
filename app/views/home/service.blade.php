@extends('layout.index')
@section('TitlePage')
  Sản phẩm và dịch vụ
@endsection
@section('desribePage')

@endsection
@section('content')
  @include("components.header2")
  <main>
    <!-- ==============Our Service========= -->
    <div class="container">
      <!-- =========text==== -->
      <div class="our-service row">
        <div class="left-our-service col-md-6" data-aos="fade-down">
          <h4 class="text-under-h4-HomePage">Our Service</h4>
          <h2 class="text-title-HomePage">Make Gorgeous Nails A Part of Your Life.</h2>
        </div>
        <div class="right-our-service col-md-6 margin-our-service" data-aos="fade-up">
          <p class="p-title-Hompage">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris</p>

        </div>
      </div>
      <!-- ===========Image========== -->
      <div class="image-service row" data-aos="fade-down">
        @foreach($service as $key => $value)
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
    </div>

    <!-- ==================testimonial================= -->
    <!-- <div class="bg-testminal">
       <div class="container">
        <div class="text-infor-testminal text-center"data-aos="zoom-in-down">
            <h4 class="text-under-h4-HomePage update-h4-testmional">Testimonial</h4>
            <h2 class="text-title-HomePage">What Our Costumer Say</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.</p>
        </div>
        <div class="testimonial-row row">
            <div class="left-testimonial col-md-6"  data-aos="zoom-in-right">
                <img src="../src/Image/treatment.jpg" width="100%" alt="">
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
                    <img src="../src/Image/about-us1.jpg" alt="">
                    <div class="text-user-vote">
                        <p>Manh Cuong</p>
                        <p>Developer</p>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </div> -->


    <!-- =============treatment & price =========== -->



    <!-- ==================form đăng ký===============-->
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
          <table>
            <tr>
              <th>Họ và tên:</th>
              <td><input type="text"></td>
            </tr>
            <tr>
              <th>Số điện thoại </th>
              <td><input type="text"></td>
            </tr>
            <tr>
              <th>Email</th>
              <td><input type="text"></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </main>
@endsection
