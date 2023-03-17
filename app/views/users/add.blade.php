@extends('admin.index_master_admin');
@push('head-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
@section('content')
  <div class="contents">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="d-flex align-items-center user-member__title mb-30 mt-30">
            <h4 class="text-capitalize">Tạo tài khoản</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="user-info-tab w-100 bg-white global-shadow radius-xl mb-50">
            <div class="ap-tab-wrapper border-bottom ">
              <ul class="nav px-30 ap-tab-main text-capitalize" id="v-pills-tab" role="tablist"
                  aria-orientation="vertical">
                <li class="nav-item">
                  <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                     href="#v-pills-home" role="tab" aria-selected="true">
                    <img src="app/views/admin/public/assets/img/svg/user.svg" alt="user" class="svg">personal info</a>
                </li>

              </ul>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade  show active" id="v-pills-home" role="tabpanel"
                   aria-labelledby="v-pills-home-tab">
                <div class="row justify-content-center">
                  <div class="col-xxl-4 col-10">
                    <div class="mt-sm-40 mb-sm-50 mt-20 mb-20">
                      <div class="user-tab-info-title mb-sm-40 mb-20 text-capitalize">
                        <h5 class="fw-500">Thông tin người dùng</h5>
                      </div>
                      @if(isset($_SESSION['errors']) && isset($_GET['msg']))
                        <div class="alert">
                          @foreach($_SESSION['errors'] as $er)
                            <div
                              class="alert alert-warning alert-dismissible fade show"
                              role="alert"
                            >
                              <div class="alert-content">
                                <p>
                                  {{$er}}
                                </p>
                                <button
                                  type="button"
                                  class="btn-close text-capitalize"
                                  data-bs-dismiss="alert"
                                  aria-label="Close"
                                >
                                  <img
                                    src="{{route(''.'app/views/admin/public/assets/img/svg/x.svg')}}"
                                    alt="x"
                                    class="svg"
                                    aria-hidden="true"
                                  />
                                </button>
                              </div>
                            </div>
                          @endforeach
                        </div>
                      @endif
                      <div class="edit-profile__body">
                        <form action="" method="post" enctype="multipart/form-data">
                          <div class="account-profile d-flex align-items-center mb-4 ">
                            <div class="ap-img pro_img_wrapper">
                              <input id="file-upload" type="file" name="fileUpload"
                                     class="d-none">

                              <label for="file-upload">
                                <img class="ap-img__main rounded-circle wh-120 bg-lighter d-flex"
                                     src="./public/upload/avatar/avatar_default.jpg" id="showImg" alt="profile">
                                <span class="cross" id="remove_pro_pic">
                                                                <img src="app/views/admin/public/assets/img/svg/camera.svg" alt="camera" class="svg">
                                                            </span>
                              </label>
                            </div>
                            <div class="account-profile__title">
                              <h6 class="fs-15 ms-20 fw-500 text-capitalize">Ảnh đại diện
                              </h6>
                            </div>
                          </div>

                          <div class="form-group mb-25">
                            <label for="name1">Họ và tên</label>
                            <input type="text" class="form-control" name='username'   id="name1"
                                   placeholder="Name">
                          </div>
                          <div class="form-group mb-25">
                            <label for="name2">Mật khẩu</label>
                            <input type="password" class="form-control"  name='password'   id="name2"
                                   placeholder="password">
                          </div>
                          <div class="form-group mb-25">
                            <label for="phoneNumber5">Số điện thoại</label>
                            <input type="tel" class="form-control"  name='sdt' id="phoneNumber5"
                                   placeholder="+440 2546 5236">
                          </div>
                          <div class="form-group mb-25">
                            <label for="name2">Email</label>
                            <input type="email" class="form-control"  name='email'   id="name2"
                                   placeholder="sample@email.com">
                          </div>
                          <div class="form-group mb-25">
                            <label for="name2">Địa chỉ</label>
                            <input type="text" class="form-control"  name='address'   id="name2"
                                   placeholder="Địa chỉ">
                          </div>
                          <div class="form-group mb-25">
                            <label for="name2">Chức vụ</label>
                            <select name="role" id="select-size-3" class="form-control  form-control-lg">
                              @foreach($roles as $value)
                              <option value="{{ $value->id }}" {{ $value->id == 2 ? "selected" : "" }}>{{ $value->role_name }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div
                            class="button-group d-flex pt-sm-25 justify-content-md-end justify-content-start ">
                            <button
                              class="btn btn-light btn-default btn-squared fw-400 text-capitalize radius-md btn-sm">
                              cancel
                            </button>
                            <button
                              class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2 btn-sm" name="btn-adduser">
                              Thêm
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
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
  <script>
    // file-upload showImg
    $(document).ready(function(){
      $('#file-upload').change(function(e){
        var render = new FileReader();
        render.onload = function (e){
          $('#showImg').attr('src',e.target.result);
        }
        render.readAsDataURL(e.target.files['0']);
      })
    })
  </script>

  @if(isset($_SESSION['success']) && isset($_GET['msg']))
    <script>
      Swal.fire(
        'Thêm mới!',
        '{{$_SESSION['success']}}',
        'success'
      )
      window.setTimeout(function(){
        window.location.href = '{{ route('user') }}';
      },1500)
    </script>
  @endif
@endpush
