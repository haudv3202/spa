@extends('layout.index')
@section('TitlePage')
  {{ $detailPost->title}}
@endsection
@section('desribePage')

@endsection
@section('content')
  @include("components.header2")
  <main>
    <!-- blog -->
    <div class="container py-5 my-3 single-blog-page px-3">
      <div class="blog-page-box">
        <div class="row">
          <div class="col-md-8">
            <!-- Content -->
            <div class="content-single-blog-page">
              <img src="{{route('public/upload/blogSv/' . $detailPost->image)}}" alt="">
              <div class="content py-4">
                <p>
                 {{ $detailPost->description}}</p>
                <h2>{{ $detailPost->title}}</h2>
                <p>{!! $detailPost->content !!} </p>
                <div class="top-self d-flex justify-content-between">
                  <div class="tag d-flex " style="display: inline-flex;">
                    <p>Tag: <span class="fw-bold text-dark-emphasis">{{ $detailPost->name_service }}</span></p>
                  </div>
                  <div class="link-icon d-flex  ">
                    <p>Share This: <span>
                              <a href=""><i class='bx bxl-facebook'></i></a>
                              <a href=""><i class='bx bxl-twitter' ></i></a>
                              <a href=""><i class='bx bxs-phone' ></i>  </a>
                            </span></p>
                  </div>
                </div>
              </div>

            </div>
            <!-- comment -->
            <hr class="py-4 ">
          </div>
          <div class="col-md-4 box-right">
            <!-- popular -->
            <div class="popular-new-posts border p-5">
              <h3>Bài viết mới nhất</h3>
              <!-- popular item -->
              @foreach($newBlog as $value)
              <div class="box-popular-new py-3">
                <div class="box-popular-new-item d-flex align-items-center py-3">
                  <div class="image ">
                    <img src="{{route('public/upload/blogSv/'.$value->image)}}" alt="" >
                  </div>

                  <div class="box-popular-new-item-title flex-grow-1 ps-1">
                    <a href="{{ route('detail/'.$value->id) }}"><span>{{ $value->title }}</span></a>
                  </div>

                </div>

              </div>
              @endforeach
            </div>
            <!-- end popular -->
            <div class="py-5">
              <div class="categories border p-5">
                <h3>Danh mục</h3>
                <div class="box-popular-new pt-3">
                  <ul class="categories-list list-unstyled">
                    @foreach($category as $value)
                    <li><a href="{{ route("serviceDetail/" . $value->id) }}"><span><i class='bx bx-minus'></i></span>{{ $value->name }}</a></li>
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
