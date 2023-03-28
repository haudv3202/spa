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
      <div class="client-question">
        <div class="title-question text-center">
          <h1>Câu hỏi của khách hàng</h1>
        </div>
        <div class="question-click-box container mt-5">
          <div class="row">
            @foreach($question as $key => $value)
              <div class="col-12 col-md-6 col-lg-6 box-question-faq" >
                <div class="box-text-question">
                  <div class="text-question">
                    <span class="d-flex align-items-center gap-2 fs-5"><i class='bx bx-plus icon-Question' ></i>{{$value->question}}</span>
                  </div>
                  <div class="reply-question">
                    <p>{!! $value->reply !!}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>

        </div>
      </div>

      <div class="follow-our-instagram">
        <div class="title-follow-our-instagram text-center mt-5 mb-5 container">
          <h2>Trải Nghiệm thực tế</h2>
          <p class="hr-insta"></p>
        </div>
        <div class="container-fluid">
          <div class="row">
            @foreach($instagram as $value)
              <div class="col-md-4 col-sm-4 col-6 mb-4" data-aos="fade-up"
              >
                <div class="box-insta-bottom">
                  <div class="img">
                    <img src="{{route('public/upload/insta/'.$value->link)}}" alt="">
                    <div class="backgrond-hover-image-insta"></div>
                    <div class="icon-insta-follow">
                      <a class="text-white" href="{{ $value->	link_insta }}"><i class='bx bx-show fs-1' style="margin-left: 0.5em;"></i> </a>
                    </div>
                    <div class="item_title p-3">
                      <p>{{ $value->meta }}</p>
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
