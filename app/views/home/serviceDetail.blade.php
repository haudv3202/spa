@extends('layout.index')
@section('content')
  @include("components.header2")
  <main>
    <!-- ==============Our Service========= -->
    <div class="container">
      <!-- =========text==== -->
      <div class="our-service row">
        <div class="left-our-service col-md-6" data-aos="fade-down">
          <h4 class="text-under-h4-HomePage">TẤT CẢ DỊCH VỤ</h4>
        </div>
      </div>
      <!-- ===========Image========== -->
      <div class="image-service row" data-aos="fade-down">
        @foreach($Services as $key => $value)
          <div class="col-md-4 item-image-service">
            <a href="{{ route("blogService/".$value->id) }}" class="btn btn-book-service"><img src="{{ route("/public/upload/service/".$value->image) }}"
                 width="95%" alt=""></a>

            <div class="text-item-image-service shadow-lg">
              <a href="{{ route("blogService/".$value->id) }}" class="btn btn-book-service"><h4>{{$value->name}}</h4></a>
              <a href="{{ route("blogService/".$value->id) }}" class="btn btn-book-service">Xem thêm</a>
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
