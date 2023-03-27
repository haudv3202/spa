@extends('layout.index')
@section('TitlePage')
  Về chúng tôi
@endsection
@section('desribePage')

@endsection

@section('content')
  @include("components.header2")
  <main>
    <!-- ==========Câu chuyện thương hiệu============ -->
    <div class="container">
      <div class="story-about">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center my-5">VỀ CHÚNG TÔI</h2>
          </div>
        </div>
        <h4 class="text-under-h4-HomePage">CÂU CHUYỆN THƯƠNG HIỆU</h4>
        <h5 class="h5-story-about">Cảm ơn bạn đã ghé thăm nhà BOVIS SPA, nếu đã đến, bạn hãy ở lại lắng nghe câu
          chuyện hình thành nên thương hiệu BOVIS SPA. </h5>
        <div class="img-story-about" data-aos="fade-up">
          <img src="{{route('public/Image/banner-Hompage-new.png')}}" width="100%" alt="">
          <div class="text-in-img-story text-center">

            <h5 class="h5-story-about">
              BOVIS SPA - SPA UY TÍN ĐÀ NẴNG
            </h5>
            <p>Sứ mệnh của chúng tôi là đánh thức "Nét đẹp không cần son phấn" và "Cùng bạn xây dựng tương
              lai"</p>

          </div>
        </div>
        <div class="grid-img-ceo row" data-aos="fade-up">
          <div class="col-md-4">
            <img src="{{route('public/Image/follow2.jpg')}}" width="100%" alt="">
          </div>
          <div class="col-md-8">
            <p> "Sắc đẹp là một trong những vấn đề được quan tâm hàng đầu không chỉ riêng với bản thân Như mà
              còn......
              Với niềm tin ấy, Như đã quyết tâm đi trên con đường khai phá ""nét đẹp không cần son phấn"". Hơn hết Như
              xây dựng hình tượng là một người phụ nữ hiện đại, thành đạt, truyền cảm hứng đến tất cả những người phụ
              nữ
              có thể tự chủ về kinh tế và khẳng định giá trị của bản thân.</p> <br>

            <p> Nói đến khoảng thời gian Như bắt đầu hình thành ý tưởng thành lập nên thương hiệu BOVIS SPA, có thể là
              vào
              những năm tôi 20, là khoảng thời gian đang còn ngồi trên giảng đường đại học. Là một người con gái, Như
              không ngừng tìm cách để lưu giữ lại làn da căng mịn và tươi trẻ. Như đã sử dụng rất nhiều những giải
              pháp
              khác nhau, nhưng hiệu quả chúng mang lại chỉ trong một khoảng thời gian ngắn. Và đó cũng là lúc Như nhận
              ra rằng: ""Như cần phải làm điều gì đó, dù chỉ là những điều nhỏ nhất, để mang lại giải pháp làm đẹp lâu
              dài không chỉ đối với bản thân Như"".</p><br>

            <p>Trải qua hơn nhiều năm kinh nghiệm, Như đã đi rất nhiều nơi, gặp được rất nhiều những người phụ nữ có
              số
              phận cơ cực, bị áp bức. Như luôn quan niệm rằng: ""Phụ nữ ngày nay không chỉ đẹp mà còn sắc sảo và thông
              minh. Họ không chỉ giỏi trong quán xuyến việc gia đình mà còn biết cách tự chủ về tài chính, tăng thêm
              giá
              trị cho bản thân"". Ngành spa, chính là sự lựa chọn phù hợp nhất đối với cá nhân Như và tất cả các chị
              em
              phụ nữ. Bởi qua đó, Như có thể mang đến cho các chị em mình không chỉ là vẻ đẹp mà còn lan tỏa một nguồn
              năng lượng, đào tạo và hỗ trợ giúp chị em tự tin phát triển nghề nghiệp. Bắt nguồn từ nguyên nhân này,
              Như
              đã quyết định xây dựng thương hiệu BOVIS SPA.</p> <br>



            <p></p>
          </div>
        </div>
        <div class="vien-canh" data-aos="fade-up">
          <h4 class="text-under-h4-HomePage h4-story">VIỄN CẢNH</h4>
          <p>Trên con đường chinh phục một làn da hoàn mỹ, đích đến của BOVIS là trở thành Spa cung cấp dịch vụ chăm
            sóc sức khỏe lẫn sắc đẹp uy tín và chất lượng, là sự lựa chọn đáng tin cậy nhất cùng bạn khẳng định giá
            trị của bản thân. </p>
        </div>
        <div class="su-menh" data-aos="fade-up">
          <h4 class="text-under-h4-HomePage h4-story">SỨ MỆNH</h4>
          <p>"Khách hàng: BOVIS SPA mang đến trải nghiệm dịch vụ thẩm mỹ tiên tiến nhất, đánh thức nét đẹp tiềm ẩn,
            nhắn nhủ khách hàng hãy yêu thương chính mình bởi vì ""Your beauty is the one - Vẻ đẹp của bạn là duy
            nhất""
          </p>
          <p><br>
            Nhân viên: BOVIS SPA cam kết đạt được sự tăng trưởng bền vững trong kinh doanh thông qua đội ngũ nhân viên
            được giao quyền, hành động với tinh thần trách nhiệm và xây dựng lòng tin. Đầu tư vào phát triển kỹ năng
            chuyên môn và tinh thần nhân viên thông qua việc đào tạo, phát triển từng cá nhân trong công ty.
          </p>
          <p><br>
            Xã hội: BOVIS SPA ra đời và phát triển với sứ mệnh đóng góp cho xã hội bằng cách tạo công ăn việc làm cho
            những người lao động trong môi trường làm việc lành mạnh, cạnh tranh công bằng và phát triển. Thông qua đó
            góp phần khích lệ, thúc đẩy phong trào khởi nghiệp cho người trẻ. Hoạt động của tổ chức hướng tới việc
            cung cấp những sản phẩm, dịch vụ uy tín, chất lượng đến người tiêu dùng." </p>
        </div>
        <div class="giatri-cot-loi" data-aos="fade-up">
          <h4 class="text-under-h4-HomePage h4-story">GIÁ TRỊ CỐT LÕI</h4>
          <p>"Mono Bovis Spa trung thành với 4 giá trị cốt lõi chính: TÂM - TÍN - THIỆN - TRÍ</p>

          <p> Tâm: Mono Bovis Spa đặt chữ ""Tâm"" lên hàng đầu, là gốc rễ cho sự phát triển của công ty. Chúng tôi duy
            trì đạo đức nghề nghiệp và xã hội ở tiêu chuẩn cao nhất, đảm bảo mang đến những trải nghiệm dịch vụ hoàn
            hảo nhất. Lòng trung thành của khách hàng chính là kết quả cuối cùng mà Bovis Spa muốn hướng đến.
          </p>
          <p> Tín: Cung cấp dịch vụ thẩm mỹ tiên tiến nhất, nỗ lực hết mình trong việc thực hiện hiệu quả những cam
            kết
            về chất lượng sản phẩm và dịch vụ. Hơn hết, Bovis Spa hướng đến mục tiêu trở thành nơi khách hàng gửi gắm
            niềm tin trên con đường chinh phục sắc đẹp của chính mình.
          </p>
          <p> Thiện: Nỗ lực xây dựng các mối quan hệ với khách hàng, đối tác và đồng nghiệp bằng sự tận tâm, chu đáo
            và
            tinh thần nhân văn. Tích cực đẩy mạnh công tác hỗ trợ khách hàng, xây dựng môi trường làm việc công tâm,
            thái độ thiện chí trong hợp tác với đối tác.
          </p>
          <p> Trí: Tích cực đổi mới, sáng tạo, chủ động trong công việc là tinh thần làm việc mà Mono Bovis Spa đề cao
            hướng đến sự chuyên nghiệp và thành thạo tay nghề ở mọi vị trí công việc.
            " </p>
        </div>
      </div>
    </div>

    <!-- ================== ourr team===============-->
    <div class="container ourteam-ceo" >
      <h4 class="h4-ourteam text-center">ĐỘI NGŨ NHÂN SỰ</h4>
      <div class="ceo-our-team row" data-aos="fade-up">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <img src="{{route('public/Image/bs3.jpg')}}" width="100%" alt="">
          <h4 class="h4-ceo-ourteam">NGYỄN THỊ QUỲNH NHƯ</h4>
          <p class="p-ceo-ourteam">Giám Đốc</p>
          <p class="text-center">Hoạt động trong lĩnh vực làm đẹp, có nhiều kinh nghiệm và thường xuyên được tiếp xúc
            làm việc với các
            chuyên gia nổi tiếng trong và ngoài nước, chị Quỳnh Như đặt nhiều tâm huyết và sự sáng tạo với mong muốn
            góp phần vào việc chăm sóc sắc đẹp một cách hiệu quả và an toàn cho phụ nữ. </p>
        </div>
        <div class="col-md-4"></div>

      </div>
      <div class="right-our-service" data-aos="fade-up">
        <div class="row doctor-user-of-team">
          <div class="user-of-team col-md-4">
            <div class="img-user-of-team">
              <img width="100%" src="{{route('public/Image/bs1.jpg')}}" alt="">
            </div>
            <h4 class="text-center h4-doctor-our-team">BS. TRẦN NHẬT QUANG </h4>
            <p class="text-center">Chuyên khoa tạo hình thẩm mỹ </p>
            <p>Là chuyên gia hàng đầu về lĩnh vực trị liệu và tạo hình thẩm mỹ công nghệ cao. Trong suốt gần 10 năm
              kinh nghiệm, bác sĩ Nhật Quang luôn đặt hiệu quả và an toàn của khách hàng lên trên hết. </p>
          </div>
          <div class="user-of-team col-md-4">
            <div class="img-user-of-team">
              <img width="100%" src="{{route('public/Image/bs2.jpg')}}" alt="">
            </div>
            <h4 class="text-center h4-doctor-our-team">Ths & Bs. NGUYỄN DUY KHÁNH </h4>
            <p class="text-center">Chuyên khoa tạo hình thẩm mỹ </p>
            <p>Bằng kinh nghiệm và nhiều thành tựu đạt được trong hơn 10 năm hoạt động với lĩnh vực tạo hình thẩm mỹ,
              Thạc sĩ & Bác sĩ Nguyễn Duy Khánh đã lấy lại sự tự tin vốn có cho nhiều khách hàng </p>
          </div>
          <div class="user-of-team col-md-4">
            <div class="img-user-of-team">
              <img width="100%" src="{{route('public/Image/bs4.jpg')}}" alt="">
            </div>
            <h4 class="text-center h4-doctor-our-team">TRẦN NGỌC ĐOAN TRANG </h4>
            <p class="text-center">Dược sĩ tư vấn viên chuyên khoa da liễu </p>
            <p>"Chị Đoan Trang chuyên viên quản lý và tư vấn của Mono Bovis Spa trong lĩnh vực làm đẹp, đã trải qua
              nhiều khóa đào tạo sâu về chuyên môn. Liên tục được đào tạo và kiểm tra tay nghề để mang lại hiệu quả
              cao nhất trong quá trình trị liệu.
              " </p>
          </div>
        </div>
      </div>
      <div class="container doi-ngu-bac-si" data-aos="fade-up">
        <img src="{{route('public/Image/doi-nguuuuuuuuuuu.jpg')}}" width="100%" alt="">
        <p>"Con người chính là yếu tố cốt lõi tạo nên thành công cho thương hiệu Mono Bovis Spa ngày hôm nay. Chúng
          tôi tự tin cung cấp những dịch vụ chất lượng, uy tín nhất với đội ngũ bao gồm các chuyên gia, bác sĩ hàng
          đầu, kỹ thuật viên có tay nghề cao, được đào tạo bài bản về chuyên môn cũng như phong cách phục vụ chuyên
          nghiệp.
          "
        </p>
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
    <!-- ==============working out============= -->

    <!-- =======follow our ig============= -->
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

