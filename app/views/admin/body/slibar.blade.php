<?php
$_SESSION['active_menu'] = $_GET['url'];

?>
<div class="sidebar-wrapper">
  <div class="sidebar sidebar-collapse" id="sidebar">
    <div class="sidebar__menu-group">
      <ul class="sidebar_nav">
        @if($_SESSION['active_menu'] == 'user' || $_SESSION['active_menu'] == 'add_user' || $_SESSION['active_menu'] == 'list-rank')
        <li class="has-child open" >
          @else <li class="has-child " >
            @endif
          <a href="#" class="">
            <span class="nav-icon uil uil-table"></span>
            <span class="menu-text">Quản lí người dùng</span>
            <span class="toggle-icon"></span>
          </a>
          <ul class="sub-menu ">
            <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'user' ? 'active' : ''; ?>" >
              <a href="{{route('user')}} " >Người Dùng</a>
            </li>
            <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'add_user' ? 'active' : ''; ?>" >
              <a href="{{route('add_user')}} ">Tạo tài khoản quản trị</a>
            </li>
            <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'list-rank' ? 'active' : ''; ?>">
              <a href="{{route('list-rank')}}">Danh mục khách hàng</a>
            </li>
          </ul>
        </li>

          @if($_SESSION['active_menu'] == 'service-category' || $_SESSION['active_menu'] == 'service-list' || $_SESSION['active_menu'] == 'service-blog')
            <li class="has-child open" >
              @else<li class="has-child " >
              @endif
          <a href="#" class="">
            <span class="nav-icon uil uil-table"></span>
            <span class="menu-text">Quản lí dịch vụ</span>
            <span class="toggle-icon"></span>
          </a>
          <ul class="sub-menu">
            <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'service-category' ? 'active' : ''; ?>">
              <a href="{{route('service-category')}}">Danh mục dịch vụ</a>
            </li>
            <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'service-list' ? 'active' : ''; ?>">
              <a href="{{route('service-list')}}">Dịch vụ</a>
            </li>
            <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'service-blog' ? 'active' : ''; ?>">
              <a href="{{route('service-blog')}}">Bài viết theo danh mục</a>
            </li>
          </ul>
        </li>

            @if($_SESSION['active_menu'] == 'contact-us' || $_SESSION['active_menu'] == 'instagram' ||
$_SESSION['active_menu'] == 'staff-list' || $_SESSION['active_menu'] == 'newletters' || $_SESSION['active_menu'] == 'social' ||
$_SESSION['active_menu'] == 'setings'  || $_SESSION['active_menu'] == 'manage-banner'  || $_SESSION['active_menu'] == 'list_khuyenmai')
              <li class="has-child open" >
                @else<li class="has-child " >
                @endif
          <a href="#" class="">
            <span class="nav-icon uil uil-table"></span>
            <span class="menu-text">Quản lí giao diện</span>
            <span class="toggle-icon"></span>
          </a>
          <ul class="sub-menu">
            <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'contact-us' ? 'active' : ''; ?>">
              <a href="{{route('contact-us')}} ">Contact Us</a>
            </li>
            <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'instagram' ? 'active' : ''; ?>">
              <a href="{{route('instagram')}}">Hình ảnh thực tế</a>
            </li>
            <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'staff-list' ? 'active' : ''; ?>">
              <a href="{{route('staff-list')}}">Quản lý nhân viên</a>
            </li>
            <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'newletters' ? 'active' : ''; ?>">
              <a href="{{route('newletters')}}">Newletters</a>
            </li>
            <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'list_khuyenmai' ? 'active' : ''; ?>">
              <a href="{{route('list_khuyenmai')}}">Khuyến mại</a>
            </li>
            <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'social' ? 'active' : ''; ?>">
              <a href="{{route('social')}}">Mạng xã hội</a>
            </li>
            <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'setings' ? 'active' : ''; ?>">
              <a href="{{route('setings')}}">settings</a>
            <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'manage-banner' ? 'active' : ''; ?>">
              <a href="{{route('manage-banner')}}">Banner</a>
            </li>
          </ul>
        </li>

        <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'reply-list' ? 'active' : ''; ?>">
          <a href="{{route('reply-list')}}">
            <span class="nav-icon uil uil-clipboard-notes"></span>
            <span class="menu-text">Quản lý phản hồi</span>
          </a>
        </li>
        <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'contact-list' ? 'active' : ''; ?>" >
          <a href="{{route('contact-list')}}">
            <span class="nav-icon uil uil-clipboard-notes"></span>
            <span class="menu-text">Quản lý liên hệ</span>
          </a>
        </li>
        <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'endow-list' ? 'active' : ''; ?>">
          <a href="{{route('endow-list')}}">
            <span class="nav-icon uil uil-clipboard-notes"></span>
            <span class="menu-text">Quản lý phản hồi ưu đãi</span>
          </a>
        </li>
        <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'questions' ? 'active' : ''; ?>">
          <a href="{{route('questions')}}">
            <span class="nav-icon uil uil-clipboard-notes"></span>
            <span class="menu-text">Câu hỏi thường gặp</span>
          </a>
        </li>
        <li class="sub-menu-item <?php echo $_SESSION['active_menu'] == 'statistic-list' ? 'active' : ''; ?>">
          <a href="{{route('statistic-list')}}">
            <span class="nav-icon uil uil-clipboard-notes"></span>
            <span class="menu-text">Thống kê</span>
          </a>
        </li>
        </ul>
    </div>
  </div>
</div>




