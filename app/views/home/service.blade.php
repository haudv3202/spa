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
    <div class="our-service row py-5">
      <div class="left-our-service col-md-6" data-aos="fade-down">
        <h4 class="text-under-h4-HomePage">Dịch vụ của chúng tôi</h4>
        <h2 class="text-title-HomePage">Thưởng thức những phút giây thư giãn đích thực!</h2>
      </div>
      <div class="right-our-service col-md-6 margin-our-service" data-aos="fade-up">
        <p class="p-title-Hompage">Dịch vụ của chúng tôi tại spa bao gồm các liệu trình chăm sóc sức khỏe và làm đẹp cao cấp như: massage thư giãn, xông hơi, tắm trắng, trị liệu da và nhiều hơn nữa. Chúng tôi cam kết mang lại cho khách hàng của mình trải nghiệm thư giãn tuyệt vời nhất, với một không gian sang trọng, ấm cúng và nhân viên tận tình, chuyên nghiệp. Với dịch vụ của chúng tôi, bạn sẽ tận hưởng những phút giây thư giãn, xóa tan mệt mỏi, giảm căng thẳng và tăng cường sức khỏe. Hãy đến với chúng tôi và trải nghiệm dịch vụ spa tuyệt vời này ngay hôm nay!</p>

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
          <a href="https://www.facebook.com/haudn02"><button class="btn btn-book-service">Book Now <i class='bx bx-right-arrow-alt'
                                                                      undefined></i></button></a>
        </div>

      </div>
      @endforeach
    </div>
  </div>

{{--  <!-- ==================testimonial================= -->--}}
{{--  <div class="bg-testminal">--}}
{{--    <div class="container">--}}
{{--      <div class="text-infor-testminal text-center"data-aos="zoom-in-down">--}}
{{--        <h4 class="text-under-h4-HomePage update-h4-testmional">Phản ánh từ khách hàng</h4>--}}
{{--        <h2 class="text-title-HomePage">--}}
{{--          Khách hàng của chúng tôi nói gì--}}
{{--        </h2>--}}
{{--        <p>Khách hàng của chúng tôi thường đánh giá cao dịch vụ của chúng tôi với những lời khen ngợi về không gian sang trọng, sạch sẽ và tinh tế cùng với sự tận tâm, chuyên nghiệp của nhân viên. Họ thường cảm thấy thư giãn và thoải mái khi được trải nghiệm các liệu trình chăm sóc sức khỏe và làm đẹp tại spa của chúng tôi, và cho rằng dịch vụ của chúng tôi đáng giá với mức giá hợp lý.</p>--}}
{{--      </div>--}}
{{--      <div class="testimonial-row row">--}}
{{--        <div class="left-testimonial col-md-6"  data-aos="zoom-in-right">--}}
{{--          <img src="{{route('public/image/treatment.jpg')}}" width="100%" alt="">--}}
{{--        </div>--}}
{{--        <div class="right-testimonial col-md-6" ata-aos="zoom-in-left">--}}
{{--          <p>Khách hàng của chúng tôi cũng rất đa dạng về độ tuổi và giới tính, từ những người trẻ tuổi muốn chăm sóc và làm đẹp cho bản thân đến những người lớn tuổi cần thư giãn và giảm đau nhức cơ thể. Với mục tiêu mang lại trải nghiệm spa tuyệt vời nhất cho mọi khách hàng, chúng tôi luôn cập nhật và đa dạng hóa các liệu trình chăm sóc sức khỏe và làm đẹp của mình để đáp ứng nhu cầu của tất cả các khách hàng của mình.</p>--}}
{{--          <div class="start-testimonal">--}}
{{--            <i class='bx bxs-star'>--}}
{{--            </i><i class='bx bxs-star'>--}}
{{--            </i><i class='bx bxs-star'></i>--}}
{{--            <i class='bx bxs-star'></i>--}}
{{--            <i class='bx bxs-star'></i>--}}
{{--          </div>--}}
{{--          <div class="user-vote-treatmen" >--}}
{{--            <img src="{{route('public/image/about-us1.jpg')}}" alt="">--}}
{{--            <div class="text-user-vote">--}}
{{--              <p>Manh Cuong</p>--}}
{{--              <p>Khách hàng</p>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}


  <!-- =============treatment & price =========== -->
  <div class="treatment-price">
    <div class="background-treat-price">
      <div class="content-treatment-price container">
        <div class="grid-treatment-price row">
          <div class="left-treatment-price col-md-6" data-aos="zoom-in-down">
            <h4 class="text-under-h4-HomePage">
              Phương pháp điều trị & Giá cả</h4>
            <h2 class="text-title-HomePage">Bảng giá dịch vụ</h2>
            @foreach($service as $key => $value)
            <div class="title-lefy-streatment">
              <div class="option-and-price">
                <p style="font-weight: bolder;">{{$value->name}}</p>
                <div class="style-option"></div>
                <p>{{
    $formatted_number = number_format($value->price)
    }}</p>

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


  <!-- ================== ourr team===============-->
  <div class="container">
    <div class="our-service row">
      <div class="left-our-service col-md-6" data-aos="fade-down">
        <h2 class="text-title-HomePage">
          Câu hỏi của khách hàng</h2>
        <p class="p-title-Hompage p-title-about-us">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturie
          nt montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque. </p>
        <a href="https://www.facebook.com/haudn02"><button class="btn btn-about-us">Learn More</button></a>
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
  @include("components.socialcontact")
</main>
@endsection
