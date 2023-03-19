@extends('layout.index')
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
              <li><a href="headerHomePage.html">HOME</a></li>
              <li><a href="About.html">ABOUT US</a></li>
              <li><a href="ourService.html">SERVICES</a></li>
              <li class="menu-sub-page">
                    <span class="d-flex align-items-center"
                    >PAGE <i class="bx bx-chevron-down"></i
                      ></span>
                <ul class="menu-mini">
                  <li><a href="ourTeamPage.html">Our Team</a></li>
                  <li><a href="FaqPage.html">FAQ</a></li>
                  <li><a href="Booking.html">Booking</a></li>
                  <li><a href="">404 Page</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="single-blog.html">Single Blog</a></li>
                </ul>
              </li>
              <li><a href="contact.html">CONTACT US</a></li>
            </ul>
          </div>
          <div class="oppentime-icon">
            <i class="bx bxl-facebook"></i>
            <i class="bx bxl-instagram"></i>
            <button type="button" onclick="iconOpenBoxClick()">
              <i class="bx bx-align-right open-Time"></i>
            </button>
            <button type="button" onclick="" class="user-login">
              <a href="login.html" class="text-black"><i class='bx bx-user-circle'></i></a>
            </button>
            <button type="button" onclick="" class="user-account position-relative" onclick="iconOpenBoxClick()">
              <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aHVtYW58ZW58MHx8MHx8&w=1000&q=80" alt="">

            </button>
            <div class="box-fs-account position-absolute">
              <ul >
                <li><a href="">Xem thông tin</a></li>
                <li><a href="">Sửa thông tin</a></li>
                <li><a href="">Đăng Xuất</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="banner-text-page">
        <div class="banner-page position-absolute top-0">
        </div>
        <div class="text-center-banner">
          <h1>Essential Manicure And Pedicure Tools At Home</h1>
          <span><i class='bx bx-user'></i> Jane Doe </span> <span><i class='bx bx-calendar'></i>
                January 26, 2022</span> <span><i class='bx bx-folder-open'></i>Nail Tips</span>
        </div>
      </div>
    </div>
  </header>
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
            <div class="conmment-single-blog-page">
              <h1>Leave a Reply</h1>
              <p class="text-muted">Your email address will not be published. Required fields are marked *
              </p>

              <form action="" class="form-comment py-2" id="form-comment">
                <div class="item py-2">
                  <label for="comment">Comment *</label> <br>
                  <textarea name="comment" id="comment" cols="110" rows="10" class="border"></textarea>
                  <span class="text-danger" id="comment-error"></span>
                </div>
                <div class="item py-2">
                  <label for="name-comment">Name *</label> <br>
                  <input type="text" id="name-comment" class="border">
                  <span class="text-danger" id="nameComment-error"></span>
                </div>
                <div class="item py-2">
                  <label for="email-comment">Email *</label> <br>
                  <input type="text" id="email-comment" class="border">
                  <span class="text-danger" id="emailComment-error"></span>
                </div>
                <div class="item py-2">
                  <label for="website-comment">Website </label> <br>
                  <input type="text" id="website-comment" class="border">
                  <span class="text-danger" id="website-error"></span>
                </div>
                <div class="item-checkbox py-2">
                  <input type="checkbox" name="save-info" id="save-info">
                  <label for="save-info">Save my name, email, and website in this browser for the next time I comment.</label>
                </div>
                <button type="submit">Post Comment</button>
              </form>

            </div>
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
                    <li><a href="#"><span><i class='bx bx-minus'></i></span>{{ $value->name }}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>


            <div class="have-any-question ">

              <div class="have-any-question-box border p-5">

                <h3>Có bất kỳ câu hỏi?</h3>
                <div class="box-question-new py-2">
                  <ul class="box-question-list list-unstyled">
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</a></li>
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
