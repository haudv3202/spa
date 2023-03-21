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
          <span>Follow Our Instagram</span>
          <p class="hr-insta"></p>
          <h2>@naylish.insta</h2>
        </div>
        <div class="container-fluid">
          <div class="row">
            @foreach($instagram as $value)
              <div class="col-md-2 col-sm-4 col-6 mb-4" data-aos="fade-up"
              >
                <div class="box-insta-bottom">
                  <div class="img">
                    <img src="{{route('public/upload/insta/'.$value->link)}}" alt="">
                    <div class="backgrond-hover-image-insta"></div>
                    <div class="icon-insta-follow">
                      <a class="text-white" href="{{ $value->	link_insta }}"> <i class='bx bxl-instagram fs-1'></i> </a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>

      </div>'
      @include("components.socialcontact")
    </main>
  </div>
@endsection
