@extends('admin.index_master_admin');
@section('content')
  <div class="contents">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="d-flex align-items-center user-member__title mb-30 mt-30">
            <h4 class="text-capitalize">Edit user</h4>
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
                    <img src="img/svg/user.svg" alt="user" class="svg">personal info</a>
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
                        <h5 class="fw-500">Personal Information</h5>
                      </div>
                      <div class="account-profile d-flex align-items-center mb-4 ">
                        <div class="ap-img pro_img_wrapper">
                          <input id="file-upload" type="file" name="fileUpload"
                                 class="d-none">

                          <label for="file-upload">
                            <img class="ap-img__main rounded-circle wh-120 bg-lighter d-flex"
                                 src="img/author/profile.png" alt="profile">
                            <span class="cross" id="remove_pro_pic">
                                                                <img src="img/svg/camera.svg" alt="camera" class="svg">
                                                            </span>
                          </label>
                        </div>
                        <div class="account-profile__title">
                          <h6 class="fs-15 ms-20 fw-500 text-capitalize">profile photo
                          </h6>
                        </div>
                      </div>
                      <div class="edit-profile__body">
                        <form action="" method="post">
                          <div class="form-group mb-25">
                            <label for="name1">Name</label>
                            <input type="text" class="form-control" name='username' value="{{$showUpdate->name}}"  id="name1"
                                   placeholder="Name">
                          </div>
                          <div class="form-group mb-25">
                            <label for="name2">Password</label>
                            <input type="password" class="form-control"  name='password' value="{{$showUpdate->password}}"  id="name2"
                                   placeholder="password">
                          </div>
                          <div class="form-group mb-25">
                            <label for="phoneNumber5">phone number</label>
                            <input type="tel" class="form-control"  name='sdt' value="{{$showUpdate->sdt}}" id= "phoneNumber5"
                                   placeholder="+440 2546 5236">
                          </div>
                          <div class="form-group mb-25">
                            <label for="name2">Email</label>
                            <input type="email" class="form-control"  name='email' value="{{$showUpdate->email}} " id="name2"
                                   placeholder="sample@email.com">
                          </div>

                          <div class="form-group mb-25">
                            <label for="name2">Image</label>
                            <input type="file" class="form-control"  name='image' value="{{$showUpdate->image}} " id="name2"
                                   placeholder="Image">
                          </div>
                          <div class="form-group mb-25">
                            <label for="name2">Giá</label>
                            <input type="text" class="form-control"  name='total_price'  value="{{$showUpdate->total_price}}" id="name2"
                                   placeholder="giá">
                          </div>
                          <div class="form-group mb-25">
                            <label for="name2">Role_id</label>
                            <input type="text" class="form-control"  name='role_id' value="{{$showUpdate->role_id}} " id="name2"
                                   placeholder="sample@email.com">
                          </div>
                          <div
                            class="button-group d-flex pt-sm-25 justify-content-md-end justify-content-start ">
                            <button
                              class="btn btn-light btn-default btn-squared fw-400 text-capitalize radius-md btn-sm">
                              cancel
                            </button>
                            <button
                              class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2 btn-sm" name="btn-updateuser">
                             Sửa
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
