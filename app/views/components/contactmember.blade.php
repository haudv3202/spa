<div class="container form-service">
  <div class="row row-form-service justify-content-around align-items-center" data-aos="fade-up">
    <div class="col-lg-4 col-12  text-center left-row-form-service">
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
    <div class="col-lg-6 col-12 mt-4 mt-sm-4 right-row-form-service">
      <div class="rounded border border-2 ">
        <h3 class="text-center pt-4 px-2 px-lg-4">ĐĂNG KÝ LIỀN TAY NHẬN NGAY ƯU ĐÃI</h3>
        <p class="text-center mb-0 mx-2 mx-lg-0">Để lại thông tin, BOVIS SPA sẽ liên hệ ngay cho bạn</p>
        <form action="{{route('mockup-post')}}" method="post" class="p-sm-5 p-2">
          <div class="mb-3 d-flex">
            <label for="fullname" class="form-label" style="width:10em;">Họ và tên:</label>
            <input type="text" class="form-control" id="fullname" name="fullname">
          </div>
          <div class="mb-3 d-flex align-items-center">
            <label for="phone" class="form-label" style="width:10em;">Số điện thoại:</label>
            <input type="text" class="form-control" id="phone"  name="phone">
          </div>
          <div class="mb-3 d-flex align-items-center">
            <label for="phone" class="form-label" style="width:10em;">Vấn đề:</label>
{{--            <textarea name="problem"></textarea>--}}
            <input type="text" class="form-control" id="problem"  name="problem">
          </div>
           <input type="submit" name="btn-sm" class="btn btn-ourSerVice" value="Đăng ký ngay">
        </form>
      </div>
    </div>
  </div>
</div>
