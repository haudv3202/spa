@extends('layout.index')
@section('TitlePage')
  Đội của chúng tôi
@endsection
@section('desribePage')

@endsection
@section('content')
  @include("components.header2")
  <main>
    <div class="container">
      <div class="professional-team">
        <div class="title-professional-team text-center">
          <span>Gặp đội ngũ bác sĩ của chúng tôi</span>
          <p class="hr-after"></p>
          <h1>Đội ngũ chuyên nghiệp</h1>
          <p>Với tâm nguyện giúp đỡ và chăm sóc sức khỏe cho cộng đồng, bác sĩ là những người rất quan trọng và cần thiết trong xã hội.</p>
        </div>
        <div class="container" >
          <div class="row row-professional-team" >
            @foreach($dataAll as $value)
            <div class="col-md-4 col-sm-12" data-aos="fade-up">
              <div class="box-professional-team">
                <div class="img">

                  <img src="{{route('public/image/' .$value->image )}}" alt="">
                </div>
                <div class="hover-background"></div>
                <div class="name">
                  <p>{{ $value->name }}</p>
                </div>
                <div class="contact-icon">
                  <i class='bx bxl-instagram'></i><br>
                  <i class='bx bxl-pinterest-alt' ></i><br>
                  <a href="{{ $value->link_mxh }}" style="color: #fff;"><i class='bx bxl-facebook' ></i></a>
                </div>
                <div class="location">
                  <p>Owner</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="working-hour">
      <div class="working-hour-img">
      </div>
      <div class="text-working-hour " data-aos="fade-left">
        <h5>Giờ làm việc</h5>
        <p class="hr-befor"></p>
        <h1>Indulge Your Nails</h1>
        <p>Thứ 2 – Thứ 6_______________09.00 g – 19.00 g</p>
        <p>Thứ 7______________________09.00 g – 19.00 g</p>
        <p>Chủ nhật________________________09.00 g – 19.00 g</p>
        <button onclick="location.href='https://www.facebook.com/haudn02'" class="">Đặt bây giờ</button>
      </div>
    </div>
    <div class="container">
      <div class="latest-blog">
        <div class="title-latest-blog text-center mt-5 mb-5">
          <h1>Bản tin mới nhất</h1>
          <span>Nơi đem lại cho bạn những tips chăm sóc sức khỏe ,làn da,hiệu quả nhất</span>
        </div>
        <div class="box-latest-blog-grid row">
          @foreach($posts as $value)
          <div class="col-md-4 col-sm-12" data-aos="zoom-in">
            <div class="box-latest-blog">
              <div class="img">
                <a href=""> <img src="{{route('public/upload/blogSv/'.$value->image)}}" alt=""></a>
                <div class="box-tips-nail">
                  <span class="tips-nail">{{ $value->name_service }}</span>
                </div>
              </div>
              <div class="title mt-4 mb-3">
                <a href="" class="text-decoration-none text-black"> <h4>{{ $value->title }}</h4>
                </a>
              </div>
              <div class="time-update mb-3">
                <span><i class='bx bxs-time-five' ></i> {{ date('j F, Y', strtotime($value->create_date))  }}</span>
              </div>
              <div class="demo-content">
                <p> {{ $value->description }}</p>
              </div>
              <a href="{{ route("detail/".$value->id) }}" class="text-decoration-none"><button class="d-flex align-items-center gap-1">Đọc thêm <i class='bx bx-right-arrow-alt' ></i></button></a>

            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="follow-our-instagram">
      <div class="title-follow-our-instagram text-center mt-5 mb-5 container">
        <span>Theo dõi Instagram của chúng tôi</span>
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
