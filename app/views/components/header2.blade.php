<header>
  <div class="header-menutop-banner">
    <div class="box-header-form shadow">
      <div class="box-navbar-top shadow">

        <div class="header-menutop-banner">
          <div
            class="logo-menu-oppenTime d-flex justify-content-between align-items-center container position-relative"
          >
            <div class="oppentime-icon">
              @if(!isset($_SESSION['account']))
                <button type="button" class="user-login p-2">
                  <a href="{{route('sign-in')}}" class="text-white text-decoration-none d-flex align-items-center gap-2"><i class='bx bx-user-circle'></i>Đăng Nhập</a>
                </button>
              @else
                <button type="button" onclick="" class="user-account position-relative " >
                  <img src="{{ route('./public/upload/avatar/'.$_SESSION['account']->image) }}" alt="">
                </button>
                @if($_SESSION['account']->role_id == 1)
                  <div class="box-fs-account box-fs-account-home position-absolute shadow-lg">
                    <ul class="mb-0">
                      <li><a href="{{route('update-profile/'.$_SESSION['account']->id)}}">Xem thông tin</a></li>
                      <li><a href="{{route('sign-out')}}">Đăng Xuất</a></li>
                    </ul>
                  </div>
                @else
                  <div class="box-fs-account box-fs-account-home position-absolute shadow-lg">
                    <ul class="mb-0">
                      <li><a href="{{route('user')}}">Vào trang Quản trị</a></li>
                      <li><a href="{{route('update-profile/'.$_SESSION['account']->id)}}">Xem thông tin</a></li>
                      <li><a href="{{route('sign-out')}}">Đăng Xuất</a></li>
                    </ul>
                  </div>
                @endif
              @endif
            </div>
            <div class="logo" style="transform: translateX(30%);">
              <a href="{{ route("home") }}"><img src="{{route('public/Image/photo_2023-03-10_10-33-00.png')}}" alt="" /></a>
            </div>
            <div class="email-sdt">
              <div class="email">
                <p><i class='bx bxs-envelope' ></i>Email: monobovis@gmail.com</p>
              </div>
              <div class="sdt">
                <p><i class='bx bxs-phone'></i>Host line: 090.220.8216</p>
              </div>
            </div>
            <div class="icon-menu-sub-responsive">
              <button type="button" onclick="iconOpenMenuSubClick()">
                <i class='bx bx-menu'></i>
            </div>
          </div>
        </div>
        <div class="menu-oppentime ">
          <div class="menu container pb-3">
            <ul class="d-flex gap-2 d-flex gap-3 align-items-center justify-content-around ">
              <li><a href="{{route('')}}">Trang Chủ</a></li>
              <li><a href="{{route('about')}}">Về Chúng Tôi</a></li>
              <li class="categosies-dv position-relative"><span>Dịch Vụ</span>
                <ul class="position-absolute ul-box-categories-service row">

                    @foreach($allService as $value)
                    <div class="box-ul col-6">
                      <li class="text-title-li" ><span class="d-flex align-items-center gap-2"><i class='bx bxs-checkbox'></i><a href="">{{ $value->name }}</a></span>
                        <ul>
                          @foreach($value->service as $valueService)
                            <li><a href="{{ route('serviceDetail/' . $value->id) }}">{{ $valueService->name }}</a></li>
                          @endforeach
                        </ul>
                      </li>
                  </div>
                    @endforeach


                </ul>
              </li>
              <li class="menu-sub-page"><a href="{{route('blog')}}">Cẩm nang bổ ích</a></li>
              <li><a href="{{route('blog-questions')}}">Trải Nghiệm khách hàng</a></li>
              <li><a href="{{route('policy')}}">Chính sách</a></li>
              <li><a href="{{route('contact')}}">Liên Hệ</a></li>
            </ul>
          </div>

        </div>


      </div>
    </div>
  </div>
</header>
