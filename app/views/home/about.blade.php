@extends('layout.index')
@section('TitlePage')
  Về chúng tôi
@endsection
@section('desribePage')

@endsection

@section('content')
  @include("components.header2")
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
        <h4 class="text-under-h4-HomePage">SỨ MỆNH</h4>
        <h2 class="text-title-HomePage">Sứ mệnh của chúng tôi là đánh thức "nét đẹp không cần son phấn" và "cùng bạn xây dựng tương lai"</h2>
        <p class="p-title-Hompage">"Khách hàng: BOVIS SPA mang đến trải nghiệm dịch vụ thẩm mỹ tiên tiến nhất, đánh thức nét đẹp tiềm ẩn, nhắn nhủ khách hàng hãy yêu thương chính mình bởi vì ""Your beauty is the one - Vẻ đẹp của bạn là duy nhất""

          Nhân viên: BOVIS SPA cam kết đạt được sự tăng trưởng bền vững trong kinh doanh thông qua đội ngũ nhân viên được giao quyền, hành động với tinh thần trách nhiệm và xây dựng lòng tin. Đầu tư vào phát triển kỹ năng chuyên môn và tinh thần nhân viên thông qua việc đào tạo, phát triển từng cá nhân trong công ty.

          Xã hội: BOVIS SPA ra đời và phát triển với sứ mệnh đóng góp cho xã hội bằng cách tạo công ăn việc làm cho những người lao động trong môi trường làm việc lành mạnh, cạnh tranh công bằng và phát triển. Thông qua đó góp phần khích lệ, thúc đẩy phong trào khởi nghiệp cho người trẻ. Hoạt động của tổ chức hướng tới việc cung cấp những sản phẩm, dịch vụ uy tín, chất lượng đến người tiêu dùng."
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
        <a href="https://www.facebook.com/BovisspaandacademyDN"><button class="btn btn-about-us">Tìm hiểu thêm</button></a>
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
              GIÁ TRỊ CỐT LÕI</h4>
            <h2 class="text-title-HomePage">"Mono Bovis Spa trung thành với 4 giá trị cốt lõi chính: TÂM - TÍN - THIỆN - TRÍ</h2>

              Tâm: Mono Bovis Spa đặt chữ "Tâm" lên hàng đầu, là gốc rễ cho sự phát triển của công ty.  Chúng tôi duy trì đạo đức nghề nghiệp và xã hội ở tiêu chuẩn cao nhất, đảm bảo mang đến những trải nghiệm dịch vụ hoàn hảo nhất. Lòng trung thành của khách hàng chính là kết quả cuối cùng mà Bovis Spa muốn hướng đến.

              Tín: Cung cấp dịch vụ thẩm mỹ tiên tiến nhất, nỗ lực hết mình trong việc thực hiện hiệu quả những cam kết về chất lượng sản phẩm và dịch vụ. Hơn hết, Bovis Spa hướng đến mục tiêu trở thành nơi khách hàng gửi gắm niềm tin trên con đường chinh phục sắc đẹp của chính mình.

              Thiện: Nỗ lực xây dựng các mối quan hệ với khách hàng, đối tác và đồng nghiệp bằng sự tận tâm, chu đáo và tinh thần nhân văn.  Tích cực đẩy mạnh công tác hỗ trợ khách hàng, xây dựng môi trường làm việc công tâm, thái độ thiện chí trong hợp tác với đối tác.

              Trí: Tích cực đổi mới, sáng tạo, chủ động trong công việc là tinh thần làm việc mà Mono Bovis Spa đề cao hướng đến sự chuyên nghiệp và thành thạo tay nghề ở mọi vị trí công việc.</p>
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
        <h4 class="text-under-h4-HomePage">ĐỘI NGŨ NHÂN SỰ</h4>
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
  @include("components.socialcontact")
</main>
@endsection

