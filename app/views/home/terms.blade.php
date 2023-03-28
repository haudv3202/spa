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
