@extends('layout.index')
@section('TitlePage')
  Liên hệ với chúng tôi
@endsection
@section('desribePage')

@endsection
@section('content')
  @include("components.header2")
  <main>

    <div class="blog-page-box ">

      <!-- contact -->
      <div class="contact-information container pt-3">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center my-5">LIÊN HỆ VỚI CHÚNG TÔI</h2>
          </div>
        </div>
        <div class="row d-flex">
          @foreach($allcontact as $value)
          <div class="col-md-4 pt-3">
            <div class="contact-information-text p-5 text-center">
              <img src="./public/upload/contact_us/{{ $value->logo	 }}" width="50" alt="" class="my-2">
              <h3 class="py-2">{{ $value->content	 }}</h3>
              <p class="text-muted">{{ $value->meta	 }}
              </p>
            </div>
          </div>
          @endforeach
        </div>


      </div>
    </div>
    @include("components.socialcontact")
  </main>

  <div class="make-appointment-contact mt-5">
    <div class="background-make-appointment"></div>
    <div class="box-make-appointment container d-flex">
      <div class="row">
        <div class="text-left-make-appointment col-12 col-md-6 col-lg-6" data-aos="fade-right">
          <div class="title-text-make-appointment">
            <h3>Liên hệ</h3>

            <p class="hr-after-form"></p>
            <h1>Hệ thống làm đẹp hàng đầu Việt Nam</h1>
            <p class="mt-3 mb-4 fs-6 text" >Để có được kết quả điều trị, chăm sóc như mong đợi, khách hàng cần lựa chọn cho mình địa làm đẹp uy tín - an toàn với công nghệ hiện đại và quy trình chuyên nghiệp.</p>
            <div class="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.5279906195747!2d105.72918181176156!3d21.051564180522636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345551a699e24f%3A0xbd593c1821a34094!2zWMOzbSB0cuG7jSBDw7QgSOG7k25n!5e0!3m2!1svi!2s!4v1678635633117!5m2!1svi!2s"
                width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="text py-4">
              Follow tại: <a href="https://www.facebook.com/bovisspa"><i class='bx bxl-facebook'></i></a>

            </div>

          </div>
        </div>
        <div class="form-right-make-appointment col-12 col-md-6 col-lg-6 container" data-aos="fade-left">
          <form action="{{route('contact-post')}}" method="post">
            <div class="item pb-4 pt-4">
              <input type="text" name="fullname" id="name-form-contact" class=" ps-2" placeholder="Họ tên của bạn">
              <span class="text-danger" id="nameform-contact-error"></span>
            </div>
            <div class="item pb-4">
              <input type="text" name="email" id="email-form-contact" class=" ps-2" placeholder="Email của bạn">
              <span class="text-danger" id="emailform-contact-error"></span>
            </div>
            <div class="item pb-4">
              <input type="text" name="problem" id="subject-form-contact" class=" ps-2" placeholder="Vấn đề thắc mắc">
              <span class="text-danger" id="subject-contact-error"></span>
            </div>
            <div class="item pb-4">
                            <textarea name="message" id="form-contact" cols="110" rows="10" class=" ps-2"
                                      placeholder="Tin nhắn của bạn về chúng tôi"></textarea>
              <span class="text-danger" id="form-contact-error"></span>
            </div>
            <button type="submit" name="btn-sm" class="my-2">Gửi tin nhắn</button>
          </form>
        </div>
      </div>
    </div>
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

