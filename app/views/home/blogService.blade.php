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
    @include("components.socialcontact")
  </main>
@endsection

