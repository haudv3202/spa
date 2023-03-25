@extends('admin.index_master_admin');

@section('content')
  <div class="contents">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-main">
            <h4 class="text-capitalize breadcrumb-title">Sửa liên hệ</h4>
            <div class="breadcrumb-action justify-content-center flex-wrap">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Sửa liên hệ </li>
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
                <h6>Sửa liên hệ : {{$oneData->id}}</h6>
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
                <form action="{{route('update-contact/'.$oneData->id)}}" method="post" enctype="multipart/form-data">
                  <div class="row mx-n15">
                    <div class="col-md-4 mb-20 px-15">
                      <label for="validationDefault01" class="il-gray fs-14 fw-500 align-center mb-10">logo
                      </label>
                      <input type="file" name="logo" class="form-control ih-medium ip-light radius-xs b-light" value="{{$oneData->logo}}" >
                    </div>
                    <div class="col-md-4 mb-20 px-15">
                      <label for="validationDefault02" class="il-gray fs-14 fw-500 align-center mb-10">Nội dung
                      </label>
                      <input type="text" name="content" class="form-control ih-medium ip-light radius-xs b-light" value="{{$oneData->content}}"  required>
                    </div>
                    <div class="col-md-4 mb-20 px-15">
                      <label for="validationDefault02"  class="il-gray fs-14 fw-500 align-center mb-10">mô tả</label>
                      <input type="text" name="desribi" class="form-control  ih-medium ip-light radius-xs b-light" id="validationDefault02" value="{{$oneData->meta}}" required>
                    </div>
                  </div>
                  <input class="btn btn-primary px-30" name="sb-contact" type="submit" value="Submit">
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
        window.location.href = '{{ route('contact-us') }}';
      },1000)
  </script>
  @endif
@endpush
