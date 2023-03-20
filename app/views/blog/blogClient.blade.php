@extends('layout.index');

@section('content')
<header>
  <div class="header-menutop-banner">
    <div
      class="logo-menu-oppenTime d-flex justify-content-between align-items-center container position-relative"
    >
      <div class="logo">
        <img src="{{route('public/image/photo_2023-03-10_10-33-00.png')}}" alt="" />
      </div>
      <div class="icon-menu-sub-responsive">
        <button type="button" onclick="iconOpenMenuSubClick()">
          <i class='bx bx-menu'></i>
      </div>
      <div class="menu-oppentime d-flex gap-5">
        <div class="menu">
          <ul class="d-flex gap-3">
            <li><a href="{{route('')}}">HOME</a></li>
            <li><a href="{{route('about-us')}}">ABOUT US</a></li>
            <li><a href="{{route('service')}}">SERVICES</a></li>
            <li class="menu-sub-page">
                    <span class="d-flex align-items-center"
                    >PAGE <i class="bx bx-chevron-down"></i
                      ></span>
              <ul class="menu-mini">
                <li><a href="{{route('our-team')}}">Our Team</a></li>
                <li><a href="{{route('faq')}}">FAQ</a></li>
                <li><a href="{{route('booking')}}">Booking</a></li>
                <li><a href="{{route('404-page')}}">404 Page</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="{{route('single-blog')}}">Single Blog</a></li>
              </ul>
            </li>
            <li><a href="{{route('contact-us')}}">CONTACT US</a></li>
          </ul>
        </div>
        <div class="oppentime-icon">
          <i class="bx bxl-facebook"></i>
          <i class="bx bxl-instagram"></i>
          <button type="button" onclick="iconOpenBoxClick()">
            <i class="bx bx-align-right open-Time"></i>
          </button>
          <button type="button" onclick="" class="user-login">
            <a href="{{route('sign-in')}}" class="text-black"><i class='bx bx-user-circle'></i></a>
          </button>
          <button type="button" onclick="" class="user-account position-relative" onclick="iconOpenBoxClick()">
            <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aHVtYW58ZW58MHx8MHx8&w=1000&q=80" alt="">

          </button>
          <div class="box-fs-account position-absolute">
            <ul >
              <li><a href="">Xem thông tin</a></li>
              <li><a href="">Sửa thông tin</a></li>
              <li><a href="{{route('sign-out')}}">Đăng Xuất</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="banner-text-page">
      <div class="banner-page position-absolute top-0">
      </div>
      <div class="text-center-banner">
        <h1>Blog</h1>
        <span>Nếu bạn quan tâm đến các bí quyết chăm sóc da, tóc và cơ thể tại spa, đây là một số thông tin chi tiết hơn để giúp bạn có một cơ thể hoàn hảo hơn </span>
      </div>
    </div>
  </div>
</header>
<main>
  <!-- blog -->
  <div class="container py-5 my-3 blog-page">
    <div class="blog-page-box">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <!-- blog-item -->
            @for($i = 0; $i < $index; $i++)
            <div class="col-md-6">
              <div class="box-image ">
                <div class="box-image-category">
                  @foreach($service as $sv)
                    <span><?php echo $sv->id == $blog[$i]->id_service ? $sv->name : ''?></span>
                  @endforeach
                </div>
                <img src="{{route('public/upload/blogSv/'.$blog[$i]->image)}}" class="w-100" alt="">

              </div>
              <div class="box-text py-4">
                <a href="{{route('blog-detail/'.$blog[$i]->id)}}"><h3>{{$blog[$i]->title}}</h3></a>
                <p>{{$blog[$i]->description}}
                </p>
              </div>
            </div>
            @endfor
            <!-- end blog-item -->
          </div>
        </div>
        <div class="col-md-4 box-right">
          <!-- popular -->
          <div class="popular-new-posts border p-5">
            <h3>Bài viết tin tức phổ biến</h3>
            <!-- popular item -->
            @for($i = 0; $i < 2; $i++)
            <div class="box-popular-new py-3">
              <div class="box-popular-new-item d-flex align-items-center py-3">
                <div class="image ">
                  <img src="{{route('public/upload/blogSv/'.$blog[$i]->image)}}" alt="" >
                </div>

                <div class="box-popular-new-item-title flex-grow-1 ps-1">
                  <a href=""><span>{{$blog[$i]->title}}</span></a>
                </div>

              </div>

            </div>
            @endfor
            <!-- end -->
          </div>
          <!-- end popular -->
          <div class="py-5">
            <div class="categories border p-5">
              <h3>Danh Mục</h3>
              <div class="box-popular-new pt-3">
                <ul class="categories-list list-unstyled">
                  @for($i = 0; $i < 3; $i++ )
                  <li><a href="#"><span><i class='bx bx-minus'></i></span>{{$category[$i]->name}}</a></li>
                  @endfor
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
</main>
@endsection

