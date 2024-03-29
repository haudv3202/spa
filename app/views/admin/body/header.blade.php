<header class="header-top">
  <nav class="navbar navbar-light">
    <div class="navbar-left">
      <div class="logo-area">
        <a class="navbar-brand" href="index.html">
          <img class="dark" src="{{route('./public/Image/photo_2023-03-10_10-33-00.png')}}" style="width: 100px;height: 100px;object-fit: contain;" alt="logo">
          <img class="light" src="{{route('./public/Image/photo_2023-03-10_10-33-00.png')}}" alt="logo">
        </a>
        <a href="#" class="sidebar-toggle">
          <img class="svg" src="{{route(''.'app/views/admin/public/assets/img/svg/align-center-alt.svg')}}" alt="img"></a>
      </div>
    </div>

    <div class="navbar-right">
      <ul class="navbar-right__menu">

        <li class="nav-author">
          <div class="dropdown-custom">
            <a href="javascript:;" class="nav-item-toggle">
              <img src="{{route('public/upload/avatar/'.$_SESSION['account']->image)}}" alt="" class="rounded-circle">
              <span class="nav-item__title">{{$_SESSION['account']->name}}<i class="las la-angle-down nav-item__arrow"></i></span>
            </a>
            <div class="dropdown-parent-wrapper">
              <div class="dropdown-wrapper">
                <div class="nav-author__info">
                  <div class="author-img">
                    <img src="{{route('public/upload/avatar/'.$_SESSION['account']->image)}}" alt="" class="rounded-circle">
                  </div>
                  <div>
                    <h6>{{$_SESSION['account']->name}}</h6>
{{--                    <span>UI Designer</span>--}}
                  </div>
                </div>
                <div class="nav-author__options">
                  <ul>
                    <li>
                      <a href="{{route('edit-profile/'.$_SESSION['account']->id)}}">
                        <i class="uil uil-user"></i> Thông tin</a>
                    </li>
                    <li>
                      <a href="{{ route('home') }}">
                        <i class="uil uil-setting"></i>
                        Về trang chủ</a>
                    </li>
                  </ul>
                  <a href="{{route('sign-out')}}" class="nav-author__signout">
                    <i class="uil uil-sign-out-alt"></i>Đăng Xuất</a>
                </div>
              </div>

            </div>
          </div>
        </li>

      </ul>

      <div class="navbar-right__mobileAction d-md-none">
        <a href="#" class="btn-search">
          <img src="{{route(''.'app/views/admin/public/assets/img/svg/search.svg')}}" alt="search" class="svg feather-search">
          <img src="{{route(''.'app/views/admin/public/assets/img/svg/x.svg')}}" alt="x" class="svg feather-x"></a>
        <a href="#" class="btn-author-action">
          <img class="svg" src="{{route(''.'app/views/admin/public/assets/img/svg/more-vertical.svg')}}" alt="more-vertical"></a>
      </div>
    </div>

  </nav>
</header>
