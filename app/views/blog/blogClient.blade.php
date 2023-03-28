@extends('layout.index');
@section('content')
  @include("components.header2")
<main>
  <!-- blog -->
  <div class="container py-5 my-3 blog-page">
    <div class="blog-page-box">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center my-5">Cẩm nang bổ ích</h2>
        </div>
      </div>
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
                <a href="{{route('detail/'.$blog[$i]->id)}}"><h3>{{$blog[$i]->title}}</h3></a>
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
                  <a href="{{ route("detail/".$blog[$i]->id) }}"><span>{{$blog[$i]->title}}</span></a>
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
                  <li><a href="{{ route("serviceDetail/" . $category[$i]->id) }}"><span><i class='bx bx-minus'></i></span>{{$category[$i]->name}}</a></li>
                  @endfor
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
@push("mockup")
  @include('components.popup')

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
