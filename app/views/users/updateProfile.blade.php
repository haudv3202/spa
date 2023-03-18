@extends('admin.index_master_admin');

@section('content')
  <div class="contents">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-main">
            <h4 class="text-capitalize breadcrumb-title">Cập nhật hồ sơ </h4>
            <div class="breadcrumb-action justify-content-center flex-wrap">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Cập nhật hồ sơ </li>
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
                <h6>Cập nhật hồ sơ : {{$oneData->id}}</h6>
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
                <form action="{{route('update-profile/'.$oneData->id)}}" method="post" enctype="multipart/form-data">
                  <div class="row mx-n15">

                    <div class="col-md-4 mb-20 px-15">
                      <label for="validationDefault02" class="il-gray fs-14 fw-500 align-center mb-10">Name
                      </label>
                      <input type="text" name="username" class="form-control ih-medium ip-light radius-xs b-light" value="{{$oneData->name}}" >
                    </div>
                    <div class="col-md-4 mb-20 px-15">
                      <label for="validationDefault02" class="il-gray fs-14 fw-500 align-center mb-10">Password
                      </label>
                      <input type="password" name="password" class="form-control ih-medium ip-light radius-xs b-light" value="{{$oneData->password}}"  required>
                    </div>
                    <div class="col-md-4 mb-20 px-15">
                      <label for="validationDefault02" class="il-gray fs-14 fw-500 align-center mb-10"> Số điện thoại
                      </label>
                      <input type="text" name="sdt" class="form-control ih-medium ip-light radius-xs b-light" value="{{$oneData->	sdt}}"  required>
                    </div>
                    <div class="col-md-4 mb-20 px-15">
                      <label for="validationDefault02" class="il-gray fs-14 fw-500 align-center mb-10">Email
                      </label>
                      <input type="email" name="email" class="form-control ih-medium ip-light radius-xs b-light" value="{{$oneData->email}}"  required>
                    </div>
                    <div class="col-md-4 mb-20 px-15">
                      <label for="validationDefault01" class="il-gray fs-14 fw-500 align-center mb-10">Image
                      </label>
                      <input type="file" name="image" class="form-control ih-medium ip-light radius-xs b-light"  >
                      <img src="{{route('public/upload/users/'.$oneData->image)}}" alt="" >
                    </div>

                    <div class="col-md-4 mb-20 px-15">
                      <label for="validationDefault02" class="il-gray fs-14 fw-500 align-center mb-10">Address
                      </label>
                      <input type="text" name="address" class="form-control ih-medium ip-light radius-xs b-light" value="{{$oneData->address}}"  required>
                    </div>
                  </div>
              </div>
              <div class="support-form__input-status">
                <input class="btn btn-primary px-30" name="btn-profile" type="submit" value="Submit">
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
        window.location.href = '{{ route('list-user') }}';
      },1000)
    </script>
  @endif
@endpush

