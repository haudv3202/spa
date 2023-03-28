@extends('layout.index');
@section('TitlePage')
  Câu hỏi thường gặp
@endsection
@section('desribePage')

@endsection
@section('content')
  <div class="box-main">
    @include("components.header2")
    <main>
      <div class="client-question mb-5">
        <div class="title-question text-center">
          <h1>Khuyến mãi</h1>
        </div>
      </div>

      <div class="follow-our-instagram">
        <div class="container-fluid">
          <div class="row px-5 mx-5">
            @foreach($promotion as $value)
              <div class="col-md-4 col-sm-4 col-6 mb-4" data-aos="fade-up"
              >
                <div class="box-insta-bottom">
                  <div class="img">
{{--                    'public/promotion/insta/'.--}}
                    <img src="{{ route("public/upload/promotion/" .$value->image) }}" alt="">
                    <div class="backgrond-hover-image-insta"></div>
                    <div class="icon-insta-follow">
                      <a class="text-white" href="{{ $value->link_book }}"><i class='bx bx-show fs-1' style="margin-left: 0.5em;"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>

      </div>'
      @include("components.contactmember")
      @include("components.socialcontact")
    </main>
  </div>
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
