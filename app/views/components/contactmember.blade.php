<div class="container form-service">
  <div class="row row-form-service justify-content-around align-items-center" data-aos="fade-up">
    <div class="col-md-4 col-12 text-center left-row-form-service">
      <div class="rounded border border-2 mb-4 ">
        <div class="iconsContact " >
          <i class='bx bxs-phone-call' style="display: contents;"></i>
        </div>
        <h4>Nhận tư vấn miễn phí</h4>
        <p>0902.208.216</p>
      </div>
      <div class="rounded border border-2 ">
        <div class="iconsContact">
          <i class='bx bxs-calendar' ></i>
        </div>
        <p> <a href="tel:090 220 82 16" > Liên hệ đặt lịch</a></p>
        <a href="tek:090 220 82 16" class="pb-2 px-4"> Đặt lịch hẹn hôm nay nhận ưu đão chỉ dành riêng cho bạn</a>
      </div>
    </div>
    <div class="col-md-6 col-12 right-row-form-service">
      <div class="rounded border border-2 ">
        <h3 class="text-center pt-4">ĐĂNG KÝ NGAY NHẬN QUÀ LIỀN TAY</h3>
        <p class="text-center mb-0">Để lại thông tin Mono Bovis Spa sẽ gửi ngay quà cho bạn</p>
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
              <th><input type="submit" name="btn-sm" class="btn btn-ourSerVice" value="Nhận quà ngay"></th>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
