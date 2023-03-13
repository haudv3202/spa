@extends('admin.index_master_admin');

@section('content')
<div class="contents">
  <div class="blog-page2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-main">
            <h4 class="text-capitalize breadcrumb-title">Blog Questions</h4>
            <div class="breadcrumb-action justify-content-center flex-wrap">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="#">Pages</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8 col-12">
          <div class="blog-details-thumbnail">
            <img src="{{route('public/upload/questions/1678640152đa-ngon-ngu.jpg)')}}" alt="">
          </div>
          <article class="blog-details">

            <div class="blog-details-content">
              <h1 class="main-title mb-30">SHOP LÀM NAIL BOX LICH ĐI CÁC CHỊ EM</h1>
{{--              <ul class="blog-details-meta">--}}
{{--                <li class="blog-author">--}}
{{--                  <a href="#">--}}
{{--                    <img src="img/tm4.png" alt="">--}}
{{--                  </a>--}}
{{--                  <a href="#">--}}
{{--                    <span>Rabbi Islam Rony</span>--}}
{{--                  </a>--}}
{{--                </li>--}}
{{--                <li class="author-name">--}}
{{--                  <a href="#" rel="bookmark">--}}
{{--                    <time class="entry-date published updated" datetime="2022-01-25T10:55:00+06:00">January 25, 2022</time>--}}
{{--                  </a>--}}
{{--                </li>--}}
{{--                <li class="blog-category">--}}
{{--                  <a href="#" rel="category tag">Development</a>--}}
{{--                </li>--}}
{{--                <li class="blog-read-time">8 mins read</li>--}}
{{--              </ul>--}}

              <div class="blog-body">
                <p class="mb-20">
                 Để trở nên xinh đẹp ta nên đến spa của MONO nha yêu yêu

                </p>
                <p class="mb-50">
                  Mại zô maih zô
                </p>
                @foreach($questions as $value)
                <h1 class="mb-20">
                 {{$value->question}}
                </h1>
                <p class="mb-30">
                  {!! $value->reply !!}
                </p>
                @endforeach
{{--                <div class="blog-block-image mb-30 pb-10">--}}
{{--                  <figure>--}}
{{--                    <img class="img-fluid" src="img/blog-details.png" alt="blog_details">--}}
{{--                  </figure>--}}
{{--                </div>--}}

              </div>

              <div class="blog-share">
                <span>Share this article:</span>
                <ul>
                  <li>
                    <a href="#" class="facebook">
                      <i class="uil uil-facebook-f"></i>
                      share
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <i class="uil uil-twitter"></i>
                      tweet
                    </a>
                  </li>
                  <li>
                    <a href="#" class="pinterest">
                      <i class="lab la-pinterest"></i>
                      share
                    </a>
                  </li>
                  <li>
                    <a href="#" class="linkedin">
                      <i class="uil uil-linkedin"></i>
                      share
                    </a>
                  </li>
                  <li>
                    <a href="#" class="link copy-to-clickboard">
                      <i class="uil uil-copy"></i>
                      copy
                    </a>
                  </li>
                </ul>
              </div>
              <div class="blog-author-box media">
                <div class="auth-img">
                  <img class="w-70" src="img/author-nav.jpg" alt="">
                </div>
                <div class="auth-details media-body">
                  <span>Written by</span>
                  <h2>Rabbi Islam Rony</h2>
                  <p>Rabbi Islam Rony is a British writer and social media manager specializing in dynamic
                    branding, campaign strategy and content engagement. </p>
                </div>
              </div>
            </div>
            <div class="blog-share-top">
              <div class="blog-share-fixed">
                <span>share</span>
                <ul>
                  <li>
                    <a href="#" class="facebook">
                      <i class="uil uil-facebook-f"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <i class="uil uil-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="pinterest">
                      <i class="lab la-pinterest"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="linkedin">
                      <i class="uil uil-linkedin"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="link copy-to-clickboard">
                      <i class="uil uil-copy"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </article>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
