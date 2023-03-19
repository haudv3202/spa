@extends('layout.index');

@section('content')
  <header>
    <div class="header-menutop-banner">
      <div
        class="logo-menu-oppenTime d-flex justify-content-between align-items-center container position-relative"
      >
        <div class="logo">
          <img src="../src/Image/photo_2023-03-10_10-33-00.png" alt="" />
        </div>
        <div class="icon-menu-sub-responsive">
          <button type="button" onclick="iconOpenMenuSubClick()">
            <i class='bx bx-menu'></i>
        </div>
        <div class="menu-oppentime d-flex gap-5">
          <div class="menu">
            <ul class="d-flex gap-3">
              <li><a href="headerHomePage.html">HOME</a></li>
              <li><a href="About.html">ABOUT US</a></li>
              <li><a href="ourService.html">SERVICES</a></li>
              <li class="menu-sub-page">
                    <span class="d-flex align-items-center"
                    >PAGE <i class="bx bx-chevron-down"></i
                      ></span>
                <ul class="menu-mini">
                  <li><a href="ourTeamPage.html">Our Team</a></li>
                  <li><a href="FaqPage.html">FAQ</a></li>
                  <li><a href="Booking.html">Booking</a></li>
                  <li><a href="">404 Page</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="single-blog.html">Single Blog</a></li>
                </ul>
              </li>
              <li><a href="contact.html">CONTACT US</a></li>
            </ul>
          </div>
          <div class="oppentime-icon">
            <i class="bx bxl-facebook"></i>
            <i class="bx bxl-instagram"></i>
            <button type="button" onclick="iconOpenBoxClick()">
              <i class="bx bx-align-right open-Time"></i>
            </button>
            <button type="button" onclick="" class="user-login">
              <a href="login.html" class="text-black"><i class='bx bx-user-circle'></i></a>
            </button>
            <button type="button" onclick="" class="user-account position-relative" onclick="iconOpenBoxClick()">
              <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aHVtYW58ZW58MHx8MHx8&w=1000&q=80" alt="">

            </button>
            <div class="box-fs-account position-absolute">
              <ul >
                <li><a href="">Xem thông tin</a></li>
                <li><a href="">Sửa thông tin</a></li>
                <li><a href="">Đăng Xuất</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="banner-text-page">
        <div class="banner-page position-absolute top-0">
        </div>
        <div class="text-center-banner">
          <h1>Our Team</h1>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span>
        </div>
      </div>
    </div>
  </header>
  <div class="box-edit-user">

    <div class="container ">
      <!-- <div class="background-edit-user"></div> -->
      <div class="title-edit-user text-center fs-1">
        <p>Sửa Thông tin</p>
        <p class="hr-ediUser"></p>
      </div>
      <div class="row flex-lg-nowrap ">
        <div class="col ">
          <div class="row">
            <div class="col mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="e-profile">
                    <div class="row">
                      <div class="col-12 col-sm-auto mb-3">
                        <form action="{{route('update-profile/'.$oneAll->id)}}" method="POST" enctype="multipart/form-data">
                        <div class="mx-auto box-mxauto" >
                          <div class="d-flex justify-content-center align-items-center rounded" >
                            <img src="{{route('public/upload/users/'.$oneAll->image)}}" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                        <div class=" text-sm-left mb-2 mb-sm-0 box-form-fake">
                          <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap" >Lê Sỹ Hải</h4>
                          <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                            <div class="mt-4 ">
                              <div class="custom-file-upload">
                                <input id="file-upload" type="file" name="image" />
                                <label class="custom-file-upload-label"><i class='bx bxs-camera bx-flip-horizontal'></i> Choose File</label>
                                <small class="error-message"></small>
                              </div>
                            </div>
                        </div>
                        <div class="text-center text-sm-right">
                          <span class="badge badge-secondary">administrator</span>
                          <div class="text-muted"><small>Joined 03 Dec 2023</small></div>
                        </div>
                      </div>
                    </div>
                    <ul class="nav nav-tabs">
                      <li class="nav-item"><a href="" class="active nav-link">Thông Tin</a></li>
                    </ul>
                    <div class="tab-content pt-3">
                      <div class="tab-pane active">
                        <form class="formEditUser">
                          <div class="row">
                            <div class="col">
                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label>Tên Tài Khoản</label>
                                    <input class="form-control" type="text" name="username" placeholder="John Smith" id="name-edit-user" value="{{$oneAll->name}}" >
                                    <small class="error-message"></small>
                                  </div>
                                  <input type="hidden" name="image" id="imageData" />
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="text"  placeholder="user@example.com" id="email-edit-user" name="email" value="{{$oneAll->email}}">
                                    <small class="error-message"></small>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label>Địa Chỉ</label>
                                    <input class="form-control" type="text" placeholder="Enter your address.." id="address-edit-user" name="address" value="{{$oneAll->address}}">
                                    <small class="error-message"></small>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input class="form-control" type="text" placeholder="Enter your phone.." id="phone-edit-user" name="sdt" value="{{$oneAll->sdt}}">
                                    <small class="error-message"></small>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row mt-3 mb-4">
                            <div class="mb-2"><b>Đặt lại mật khẩu</b></div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Mật khẩu cũ</label>
                                  <input class="form-control w-100" type="text" placeholder="••••••" id="oldPass-edit-user" name="password" value="{{$oneAll->password}}">
                                  <small class="error-message"></small>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Mật khẩu mới</label>
                                  <input class="form-control w-100" type="password" placeholder="••••••" id="newPass-edit-user" name="newpassword">
                                  <small class="error-message"></small>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Nhập lại Mật Khẩu Mới</label>
                                  <input class="form-control w-100" type="password" placeholder="••••••" id="confirmPass-edit-user"  name="confrimpassword">
                                  <small class="error-message"></small>
                                </div>
                              </div>
                            </div>

                          </div>
                          <div class="row">
                            <div class="col d-flex justify-content-end">
                              <input class="btn btn-edit-image" id="btn-edit-image-submit" name="btn-profile"  type="submit" value="Lưu Thông Tin" ></input>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </form>
            <div class="col-12 col-md-3 mb-3">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="px-xl-3">
                    <button class="btn btn-block btn-secondary">
                      <i class='bx bx-log-out bx-flip-horizontal' ></i>
                      <span>Đăng Xuất</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title font-weight-bold">Support</h6>
                  <p class="card-text">Nhận trợ giúp nhanh chóng, miễn phí từ các trợ lý thân thiện của chúng tôi.</p>
                  <button type="button" class="btn btn-edit-image">Liên hệ chúng tôi</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  @if(isset($_SESSION['success']) && isset($_GET['msg']))
    <script>
      Swal.fire(
        'Cập nhật thành công !',
        '{{$_SESSION['success']}}',
        'success'
      )
      window.setTimeout(function(){
        window.location.href = '{{ route('update-profile/'.$_SESSION['account'] ->id ) }}';
      },1000)
    </script>
  @endif
@endpush

