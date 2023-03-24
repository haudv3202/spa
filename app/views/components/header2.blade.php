<header>
  <div class="header-menutop-banner">
    <div
      class="logo-menu-oppenTime d-flex justify-content-between align-items-center container position-relative"
    >
      <div class="logo">
        <img src="{{route('public/image/photo_2023-03-10_10-33-00.png')}}" alt="" />
      </div>
      <div class="icon-menu-sub-responsive">
        <button type="button" onclick="iconOpenMenuSubClick()">
          <i class='bx bx-menu'></i>
      </div>
      <div class="menu-oppentime d-flex gap-5">
        <div class="menu">
          <ul class="d-flex gap-5">
            <li><a href="{{route('')}}">Trang chủ</a></li>
            <li><a href="{{route('about')}}">Giới thiệu</a></li>
            <li><a href="{{route('service')}}">Dịch vụ</a></li>
            <li><a href="{{route('ourTeam')}}">Đội ngũ</a></li>
            <li><a href="{{route('booking')}}">Đặt lịch</a></li>
            <li><a href="{{route('blog')}}">Bài viết</a></li>
            <li><a href="{{route('contact')}}">Liên hệ</a></li>
          </ul>
        </div>
        <div class="oppentime-icon">
          <i class="bx bxl-facebook"></i>
          <i class="bx bxl-instagram"></i>
          <button type="button" onclick="iconOpenBoxClick()">
            <i class="bx bx-align-right open-Time"></i>
          </button>
          @if(!isset($_SESSION['account']))
            <button type="button" onclick="" class="user-login">
              <a href="{{ route("sign-in") }}" class="text-black"><i class='bx bx-user-circle'></i></a>
            </button>
          @else

            @if($_SESSION['account']->role_id == 1)
              <button type="button" onclick="" class="user-account position-relative" onclick="iconOpenBoxClick()">
                <img src="https://www.thisiscolossal.com/wp-content/uploads/2019/02/moon_crop.jpg" alt="">
              </button>
              <div class="box-fs-account box-fs-account-home position-absolute">
                <ul >
                  <li><a href="{{route('update-profile/'.$_SESSION['account']->id)}}">Xem thông tin</a></li>
                  <li><a href="{{ route('sign-out') }}">Đăng Xuất</a></li>
                </ul>
              </div>
            @else
              <button type="button" onclick="" class="user-account position-relative" onclick="iconOpenBoxClick()">
                <img src="{{ route('public/upload/avatar/'.$_SESSION['account']->image ) }}" alt="">
              </button>
              <div class="box-fs-account box-fs-account-home position-absolute">
                <ul >
                  <li><a href="{{route('update-profile/'.$_SESSION['account']->id)}}">Xem thông tin</a></li>
                  <li><a href="{{route('user')}}">Vào trang quản trị</a></li>
                  <li><a href="{{ route('sign-out') }}">Đăng Xuất</a></li>
                </ul>
              </div>
            @endif
          @endif
        </div>
      </div>
    </div>
    <div class="banner-text-page">
      <div class="banner-page position-absolute top-0">
      </div>
      <div class="text-center-banner">
        <h1>@yield('TitlePage')</h1>
        <span>@yield('desribePage')</span>
      </div>
    </div>
  </div>
</header>
