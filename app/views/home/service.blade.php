@extends('layout.index')
@section('TitlePage')
  Sản phẩm và dịch vụ
@endsection
@section('desribePage')

@endsection
@section('content')
  @include("components.header2")
  <main>
    <!-- ==============Our Service========= -->
    <div class="container">
      <!-- =========text==== -->
      <div class="our-service row">
        <div class="left-our-service col-md-6" data-aos="fade-down">
          <h4 class="text-under-h4-HomePage">TẤT CẢ DANH MỤC </h4>
        </div>
      </div>
      <!-- ===========Image========== -->
      <div class="image-service row" data-aos="fade-down">
        @foreach($service as $key => $value)
        <div class="col-md-4 item-image-service">
          <a href="{{ route('serviceDetail/'. $value->id) }}"><img src="./public/Image/hut-chi-thai-doc-3.jpg"
               width="95%" alt=""></a>

          <div class="text-item-image-service shadow-lg">
            <a href="{{ route('serviceDetail/'. $value->id) }}"><h4>{{$value->name}}</h4></a>
            <a href="{{ route('serviceDetail/'. $value->id) }}"><button class="btn btn-book-service">Xem thêm <i class='bx bx-right-arrow-alt'
                                                                        ></i></button></a>
          </div>

        </div>
        @endforeach
      </div>
    </div>

    <!-- ==================testimonial================= -->
    <!-- <div class="bg-testminal">
       <div class="container">
        <div class="text-infor-testminal text-center"data-aos="zoom-in-down">
            <h4 class="text-under-h4-HomePage update-h4-testmional">Testimonial</h4>
            <h2 class="text-title-HomePage">What Our Costumer Say</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.</p>
        </div>
        <div class="testimonial-row row">
            <div class="left-testimonial col-md-6"  data-aos="zoom-in-right">
                <img src="../src/Image/treatment.jpg" width="100%" alt="">
            </div>
            <div class="right-testimonial col-md-6" ata-aos="zoom-in-left">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris. </p>
                <div class="start-testimonal">
                    <i class='bx bxs-star'>
                    </i><i class='bx bxs-star'>
                    </i><i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <div class="user-vote-treatmen" >
                    <img src="../src/Image/about-us1.jpg" alt="">
                    <div class="text-user-vote">
                        <p>Manh Cuong</p>
                        <p>Developer</p>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </div> -->


    <!-- =============treatment & price =========== -->



    <!-- ==================form đăng ký===============-->
    @include("components.contactmember")

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
