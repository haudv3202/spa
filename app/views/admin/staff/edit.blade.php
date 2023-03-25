@extends('admin.index_master_admin');

@section('content')
  <div class="contents">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-main">
            <h4 class="text-capitalize breadcrumb-title">Sửa thông tin nhân viên </h4>
            <div class="breadcrumb-action justify-content-center flex-wrap">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Sửa nhân viên</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="form-element">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-default card-md mb-4">
              <div class="card-header">
                <h6>Sửa thông tin {{$staff->id}}</h6>
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
              <div class="card-body pb-md-50">
                <form action="{{route('update-staff-post/'.$staff->id)}}" method="post" enctype="multipart/form-data">
                  <div class="row mx-n15">
                    <div class="form-group">
                      <label
                        for="a9"
                        class="il-gray fs-14 fw-500 align-center mb-10"
                      >Tên</label
                      >
                      <input
                        name="namesf"
                        type="text"
                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                        id="a9"
                        placeholder="Nhập họ và tên"
                        value="{{$staff->name}}"
                      />
                    </div>
                    <div class="form-group">
                      <label
                        for="a9"
                        class="il-gray fs-14 fw-500 align-center mb-10"
                      >Chức vụ</label
                      >
                      <input
                        name="positionsf"
                        type="text"
                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                        id="a9"
                        placeholder="Nhập chức vụ"
                        value="{{$staff->position}}"
                      />
                    </div>
                    <div class="form-group">
                      <label
                        for="a9"
                        class="il-gray fs-14 fw-500 align-center mb-10"
                      >Link MXH</label
                      >
                      <input
                        name="linksf"
                        type="text"
                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                        id="a9"
                        placeholder="Nhập link MXH"
                        value="{{$staff->link_mxh}}"
                      />
                    </div>
                    <div class="col-md-12 mb-20 px-15">
                      <label for="validationDefault02"  class="il-gray fs-14 fw-500 align-center mb-10">Ảnh </label>
                      <img src="{{route('/public/upload/blogSv/'.$staff->image)}}"  class="rounded w-50 my-4"   alt="">
                      <div class="dm-tag-wrap">
                        <div class="dm-upload">
                          <div class="dm-upload-avatar">
                            <img class="avatrSrc" src="{{ route('app/views/admin/public/assets/img/upload.png') }}" alt="Avatar Upload">
                          </div>
                          <div class="avatar-up">
                            <input type="file" name="upload" class="upload-avatar-input">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <input class="btn btn-primary px-30" name="sb-staff" type="submit" value="Save">
                </form>
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
        'Update!',
        '{{$_SESSION['success']}}',
        'success'
      )
      window.setTimeout(function(){
        window.location.href = '{{ route('staff-list') }}';
      },1000)
    </script>
  @endif
@endpush

