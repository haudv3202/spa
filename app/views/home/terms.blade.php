@extends('layout.index')
@section('TitlePage')
  Điều khoản và Dịch Vụ
@endsection
@section('desribePage')

@endsection
@section('content')
  @include("components.header2")
  <main>
    <div class="container">
      <div class="grid-terms-service row">
        <div class="col-md-4">
          <div class="left-grid-terms">
            <h3>DANH MỤC TRANG</h3>
            <div class="list-menu-left-terms">
              <ul>
                <li><a href="#infor">Giới thiệu</a></li>
                <li><a href="#instruc">Hướng dẫn sử dụng web</a></li>
                <li><a href="#paypal">Thanh toán an toàn và tiện lợi</a></li>
                <li><a href="#">Điều khoản dịch vụ</a></li>
                <li><a href="">Chính sách bảo mật</a></li>
              </ul>
            </div>

          </div>
          <div class="img-left-grid-terms text-center">
            <img src="../src/Image/about-us1.jpg" width="100%" alt="">
          </div>
        </div>
        <div class="right-grid-terms col-md-8">
          <h2>ĐIỀU KHOẢN DỊCH VỤ</h2>
          <div class="infor text-content-terms" id="infor">
            <h5> 1. Giới thiệu</h5>
            <p> Chào mừng quý khách hàng đến với website chúng tôi.

              Khi quý khách hàng truy cập vào trang website của chúng tôi có nghĩa là quý khách đồng ý
              với các
              điều khoản này. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần
              nào trong
              Điều khoản mua bán hàng hóa này, vào bất cứ lúc nào. Các thay đổi có hiệu lực ngay khi
              được đăng
              trên trang web mà không cần thông báo trước. Và khi quý khách tiếp tục sử dụng trang
              web, sau
              khi các thay đổi về Điều khoản này được đăng tải, có nghĩa là quý khách chấp nhận với
              những thay
              đổi đó.

              Quý khách hàng vui lòng kiểm tra thường xuyên để cập nhật những thay đổi của chúng tôi.
            </p>
          </div>



          <div class="instruc text-content-terms" id="instruc">
            <h5> 2. Hướng dẫn sử dụng website</h5>
            <p>
              Khi vào web của chúng tôi, khách hàng phải đảm bảo đủ 18 tuổi, hoặc truy cập dưới sự
              giám sát
              của cha mẹ hay người giám hộ hợp pháp. Khách hàng đảm bảo có đầy đủ hành vi dân sự để
              thực hiện
              các giao dịch mua bán hàng hóa theo quy định hiện hành của pháp luật Việt Nam.

              Trong suốt quá trình đăng ký, quý khách đồng ý nhận email quảng cáo từ website. Nếu
              không muốn
              tiếp tục nhận mail, quý khách có thể từ chối bằng cách nhấp vào đường link ở dưới cùng
              trong mọi
              email quảng cáo.</p>

          </div>


          <div class="paypal text-content-terms" id="paypal">
            <h5>   3. Thanh toán an toàn và tiện lợi</h5>

            <p>  Người mua có thể tham khảo các phương thức thanh toán sau đây và lựa chọn áp dụng phương thức
              phù hợp:

              Cách 1: Thanh toán trực tiếp (người mua nhận hàng tại địa chỉ người bán)
              Cách 2: Thanh toán sau (COD – giao hàng và thu tiền tận nơi)
              Cách 3: Thanh toán online qua thẻ tín dụng, chuyển khoản</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container form-service">
      <div class="row row-form-service" data-aos="fade-up">
        <div class="col-md-4 text-center left-row-form-service">
          <h4>Nhận tư vấn miễn phí</h4>
          <p>090 220 82 16</p>
          <p> <a href="tel:090 220 82 16"> Liên hệ đặt lịch</a></p>
          <a href="tek:090 220 82 16"> Đặt lịch hẹn hôm nay nhận ưu đão chỉ dành riêng cho bạn</a>
        </div>
        <div class="col-md-8 right-row-form-service">
          <h3 class="text-center">ĐĂNG KÝ NGAY NHẬN QUÀ LIỀN TAY</h3>
          <p class="text-center">Để lại thông tin Mono Bovis Spa sẽ gửi ngay quà cho bạn</p>
          <form action="{{route('mockup-post')}}" method="post">
            <table>
              <tr>
                <th>Họ và tên:</th>
                <td><input type="text" name="fullname"></td>
              </tr>
              <tr>
                <th>Số điện thoại </th>
                <td><input type="text" name="phone"></td>
              </tr>
              <tr>
                <th><input type="submit" name="btn-sm" class="btn btn-ourSerVice" value="Đăng Ký Ngay"></th>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
    @include("components.socialcontact")
  </main>
@endsection
@push("mockup")
  <div class="modal-mockup">

    <div class="content-modal-mockup">
      <div class="oidoioi">
        <div class="item-modal-mockup">
          <div class="row row-mokup">
            <div class="col-sm-6 col-md-12">
              <img src="{{route('public/Image/photo_2023-03-10_10-33-00.png')}}" width="100px" alt="">
              <h5 class="h5-item-modal-mockup">"MONO BOVIS - Spa uy tín Đà Nẵng"</h5>

              <p></p>
              <p class="title-give"> * Đăng ký liền tay, nhận ngay quà cực chất*
              </p>
              <div class="form-modal text-center">

                <form action="{{route('mockup-post')}}" method="post">
                  <div class="value-form-modal mb-2">

                    <input type="text" name="fullname" placeholder="Nhập tên anh/chị" class="input-model" id="name-mokup">
                    <small class="error-message m-auto pt-3"></small>
                  </div>
                  <div class="value-form-modal">

                    <input type="text" name="phone" placeholder="Nhập SĐT anh/chị" class="input-model" id="phone-mokup">
                    <small class="error-message m-auto pt-3"></small>
                  </div>
                  <input type="submit" name="btn-sm" class="btn submit-form-modal" value="GỬI THÔNG TIN">
                  {{--                  <button class="btn submit-form-modal">GỬI THÔNG TIN</button>--}}
                </form>

              </div>
            </div>
            <div class="col-sm-6 col-md-12 img-modal">
              <!-- <img src="../src/Image/Screenshot 2023-03-12 160307.png" width="100%" alt=""> -->

            </div>
          </div>
          <button class="close-modal btn" onclick="myStopFunction()"><i class='bx bx-x'
                                                                        style='color:#0b0b0b'></i></button>
        </div>
      </div>
    </div>
  </div>

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
