@extends('layout.index');
@section('TitlePage')
  Thông tin và cập nhật
@endsection
@section('desribePage')

@endsection
@section('content')
  @include("components.header2")
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
                        <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mx-auto box-mxauto" >
                          <div class="d-flex justify-content-center align-items-center rounded" >
                            <img src="{{route('public/upload/avatar/'.$oneAll->image)}}" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                        <div class=" text-sm-left mb-2 mb-sm-0 box-form-fake">
                          <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap" >{{ $oneAll->name }}</h4>
                          <div class="text-muted"><small>Xếp hạng : </small><span style="color:#ff4300;">{{ $oneAll->rank }}</span></div>
                          <div class="text-muted"><small>Số tiền chi tiêu : </small><span>{{ number_format($oneAll->total_price) }}đ</span></div>
                            <div class="mt-4 ">
                              <div class="custom-file-upload">
                                <input id="file-upload" type="file" name="image" />
                                <label class="custom-file-upload-label" for="file-upload"><i class='bx bxs-camera bx-flip-horizontal'></i> Choose File</label>
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
                                  <input class="form-control w-100" type="text" placeholder="" id="oldPass-edit-user" name="password">
                                  <small class="error-message"></small>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Mật khẩu mới</label>
                                  <input class="form-control w-100" type="password" placeholder="" id="newPass-edit-user" name="newpassword">
                                  <small class="error-message"></small>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Nhập lại Mật Khẩu Mới</label>
                                  <input class="form-control w-100" type="password" placeholder="" id="confirmPass-edit-user"  name="confrimpassword">
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
            </form>
            <div class="col-12 col-md-3 mb-3">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="px-xl-3">
                    <button class="btn btn-block btn-secondary" onclick="location.href='{{ route('sign-out') }}'">
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
        window.location.href = '{{ route('update-profile/'.$_SESSION['account']->id ) }}';
      },1000)
    </script>
  @endif
@endpush

