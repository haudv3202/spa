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
                    <a href="{{route('detail/'.$value->id)}}"> <img src="{{route('public/upload/blogSv/'.$value->image)}}" class="w-100" alt=""></a>

                  </div>
                  <div class="box-text py-4">
                    <a href="{{route('detail/'.$value->id)}}"><h3>{{$value->title}}</h3></a>
                    <a href="{{route('detail/'.$value->id)}}"><p>{{$value->description}}
                    </p></a>
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

