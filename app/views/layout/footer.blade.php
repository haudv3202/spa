<footer>
  <div class=" background-image-footer position-absolute w-100 " ></div>
  <div class="container text  ">
    <div class="row pt-4 row-footer" >

      <div class="col" >
        <img src="{{route('public/Image/photo_2023-03-10_10-33-00.png')}}" alt="" >
        <p> Mono Bovis luôn đồng hành <br>cùng vẻ đẹp của bạn</p>
        <div class="link-icon">
          <ul class="list-unstyled d-flex">
            <li><a href="https://www.facebook.com/bovisspa"><i class='bx bxl-facebook'></i></a></li>
            <li><a href="tel:0902208216"><i class='bx bxs-phone'></i></a></li>
            <li><a href="#"><i class='bx bxl-twitter' ></i></a></li>
            <li><a href="#"><i class='bx bxl-pinterest-alt'></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col"  >
        <h4  class="pb-3">Hỗ trợ</h4>
        <div class="list-support">
          <ul class="list-unstyled">
            <li><a href="{{route('blog-questions')}}">Hỏi đáp</a></li>
            <li><a href="{{route('policy')}}">Chính sách bảo mật</a></li>
            <li><a href="{{route('terms')}}">Điều khoản & Điều kiện</a></li>
            <li><a href="{{route('contact')}}">Liên hệ</a></li>
          </ul>
        </div>
      </div>
      <div class="col contact"  >
        <h4 class="pb-3">Liên hệ</h4>
        <p>Trịnh Văn Bô - Nam Từ Liêm - Hà nội</p>
        <p>Phone : (+62)81 234 567</p>

      </div>
      <div class="col" >
        <!-- form subcribe -->
        <form action="">
          <h4  class="pb-3">Theo dõi tin tức mới nhất</h4>
          <div class="box-input-email d-flex">
            <input type="text" placeholder="Your email"><button>Subscribe</button>
          </div>
        </form>


      </div>
    </div>
    <hr style="color: aliceblue;">

  </div>
  <div class="coppyright   container" >
    <div class="text-left">
      <p>Thư giãn tuyệt đỉnh cùng dịch vụ Spa chất lượng cao
      </p>
      <img src="{{ route('./public/Image/bo-cong-thuong.png') }}" alt="">
    </div>
    <div class="text-right">
      <p> &copy; Đội ngũ hỗ trợ <a href="https://www.facebook.com/haudn02" class="text-decoration-none text-black">CodeCrafters</a> </p>
    </div>
  </div>
</footer>
