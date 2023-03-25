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
    @include("components.socialcontact")
  </main>
@endsection
