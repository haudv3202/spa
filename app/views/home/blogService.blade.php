@extends('layout.index');
@section('content')
  @include("components.header2")
  <main>
    <!-- blog -->
    <div class="container py-5 my-3 blog-page">
      <div class="blog-page-box">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center my-5">Tất cả bài viết về dịch vụ {{ $nameservice }}</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <!-- blog-item -->
              @foreach($blogs as $value)
                <div class="col-md-6">
                  <div class="box-image ">
                    <div class="box-image-category">
                        <span>{{ $value->name_service }}</span>
                    </div>
                    <img src="{{route('public/upload/blogSv/'.$value->image)}}" class="w-100" alt="">

                  </div>
                  <div class="box-text py-4">
                    <a href="{{route('detail/'.$value->id)}}"><h3>{{$value->title}}</h3></a>
                    <p>{{$value->description}}
                    </p>
                  </div>
                </div>
              @endforeach
              <!-- end blog-item -->
            </div>
          </div>
          <div class="col-md-4 box-right">
            <!-- end popular -->
            <div class="py-5">
              <div class="categories border p-5">
                <h3>Danh Mục</h3>
                <div class="box-popular-new pt-3">
                  <ul class="categories-list list-unstyled">
                    @foreach($category as $value)
                      <li><a href="{{ route("serviceDetail/".$value->id) }}"><span><i class='bx bx-minus'></i></span>{{$value->name}}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>


            <div class="have-any-question ">

              <div class="have-any-question-box border p-5 ">
                <h3>Câu hỏi cho chúng tôi ?</h3>
                <div class="box-question-new py-2">
                  <ul class="box-question-list list-unstyled">
                    <li><a href="#">Những thắc mắc hoặc câu hỏi chưa được giải đáp, hãy liên hệ theo: </a></li>
                    <li><a href="#"><span><i class='bx bxs-phone' ></i></span>(+62)81 234 567</a></li>
                    <li><a href="#"><span><i class='bx bxl-gmail' ></i></span>naylish@domain.com</a></li>

                  </ul>
                </div>
              </div>




            </div>
          </div>
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

