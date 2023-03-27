@extends('layout.index');
@section('TitlePage')
Câu hỏi thường gặp
@endsection
@section('desribePage')

@endsection
@section('content')
  <div class="box-main">
    @include("components.header2")
    <main>
      <div class="client-question">
        <div class="title-question text-center">
          <h1>Câu hỏi của khách hàng</h1>
        </div>
        <div class="question-click-box container mt-5">
          <div class="row">
            @foreach($question as $key => $value)
              <div class="col-12 col-md-6 col-lg-6 box-question-faq" >
                <div class="box-text-question">
                  <div class="text-question">
                    <span class="d-flex align-items-center gap-2 fs-5"><i class='bx bx-plus icon-Question' ></i>{{$value->question}}</span>
                  </div>
                  <div class="reply-question">
                    <p>{!! $value->reply !!}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>

        </div>
      </div>

      <div class="follow-our-instagram">
        <div class="title-follow-our-instagram text-center mt-5 mb-5 container">
          <h2>Trải Nghiệm thực tế</h2>
          <p class="hr-insta"></p>
        </div>
        <div class="container-fluid">
          <div class="row">
            @foreach($instagram as $value)
              <div class="col-md-4 col-sm-4 col-6 mb-4" data-aos="fade-up"
              >
                <div class="box-insta-bottom">
                  <div class="img">
                    <img src="{{route('public/upload/insta/'.$value->link)}}" alt="">
                    <div class="backgrond-hover-image-insta"></div>
                    <div class="icon-insta-follow">
                      <a class="text-white" href="{{ $value->	link_insta }}"><i class='bx bx-show fs-1' style="margin-left: 0.5em;"></i> </a>
                    </div>
                    <div class="item_title p-3">
                      <p>{{ $value->meta }}</p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>

      </div>'
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
  </div>
@endsection
@push("mockup")
  <div class="modal-mockup">

    <div class="content-modal-mockup">
      <div class="oidoioi">
        <div class="item-modal-mockup">
          <div class="row row-mokup">
            <div class="col-sm-6 col-md-12">
              <img src="{{route('public/Image/photo_2023-03-10_10-33-00.png')}}" width="100px" alt="">
              <h5 class="h5-item-modal-mockup">"MONO BOVIS - Spa uy tín Đà Nẵng"</h5>

              <p></p>
              <p class="title-give"> * Đăng ký liền tay, nhận ngay quà cực chất*
              </p>
              <div class="form-modal text-center">

                <form action="{{route('mockup-post')}}" method="post">
                  <div class="value-form-modal mb-2">

                    <input type="text" name="fullname" placeholder="Nhập tên anh/chị" class="input-model" id="name-mokup">
                    <small class="error-message m-auto pt-3"></small>
                  </div>
                  <div class="value-form-modal">

                    <input type="text" name="phone" placeholder="Nhập SĐT anh/chị" class="input-model" id="phone-mokup">
                    <small class="error-message m-auto pt-3"></small>
                  </div>
                  <input type="submit" name="btn-sm" class="btn submit-form-modal" value="GỬI THÔNG TIN">
                  {{--                  <button class="btn submit-form-modal">GỬI THÔNG TIN</button>--}}
                </form>

              </div>
            </div>
            <div class="col-sm-6 col-md-12 img-modal">
              <!-- <img src="../src/Image/Screenshot 2023-03-12 160307.png" width="100%" alt=""> -->

            </div>
          </div>
          <button class="close-modal btn" onclick="myStopFunction()"><i class='bx bx-x'
                                                                        style='color:#0b0b0b'></i></button>
        </div>
      </div>
    </div>
  </div>

  @if(isset($_SESSION['success']) && isset($_GET['msg']))
    <script>
      Swal.fire(
        'Thông báo!',
        '{{$_SESSION['success']}}',
        'success'
      )
      window.setTimeout(function(){
        window.location.href = '{{ route('') }}';
      },1500)
    </script>
  @endif
@endpush
