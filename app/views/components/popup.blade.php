<style>
  .item-modal-mockup {
    right: 0;
    left: 0;
    top: 50%;
    width: 60%;
    margin: 0 auto;
    height: 540px;
    position: absolute;
    text-align: center;
    background-image: url(https://designshalom.com/data/web2551/banner-spa.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 20px;
    padding: 10px 20px;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
</style>
<div class="modal-mockup">

  <div class="content-modal-mockup">
    <div class="oidoioi">
      <div class="item-modal-mockup">
{{--        <div class="logo_popup">--}}
{{--          <img src="{{route('public/Image/photo_2023-03-10_10-33-00.png')}}" width="100%" alt="">--}}
{{--        </div>--}}
        <div class="row row-mokup flex-column-reverse">
          <div class="col-sm-12 col-md-12">
            <div class="form-modal text-center">

              <form action="{{route('mockup-post')}}" method="post">
                <div class="value-form-modal mb-3 mx-2">
                  <input type="text" name="fullname" placeholder="Họ và Tên" class="input-model w-20" id="name-mokup">
                  <small class="error-message m-auto pt-3"></small>
                </div>
                <div class="value-form-modal mx-2">
                  <input type="text" name="phone" placeholder="Số điện thoại" class="input-model w-20" id="phone-mokup">
                  <small class="error-message m-auto pt-3"></small>
                </div>
                <input type="submit" name="btn-sm" class="btn submit-form-modal w-40" value="Đăng ký">
                {{--                  <button class="btn submit-form-modal">GỬI THÔNG TIN</button>--}}
              </form>

            </div>
          </div>
        </div>
        <button class="close-modal btn" onclick="myStopFunction()"><i class='bx bx-x'
                                                                      style='color:#0b0b0b'></i></button>
      </div>
    </div>
  </div>
</div>
