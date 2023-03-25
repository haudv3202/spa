@extends('admin.index_master_admin')

@section('content')

  <div class="contents">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-main">
            <h4 class="text-capitalize breadcrumb-title"> Sửa dịch vụ "{{$service->name}}"</h4>
            <div class="breadcrumb-action justify-content-center flex-wrap">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Sửa dịch vụ</li>
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
                <h6>Sửa dịch vụ: {{$service->id}}</h6>
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
                <form action="{{route('update-service/'.$service->id)}}" method="post" enctype="multipart/form-data">
                  <div class="row mx-n15">
                    <div class="col-md-4 mb-20 px-15">
                      <label for="validationDefault01" class="il-gray fs-14 fw-500 align-center mb-10">ID
                      </label>
                      <input type="text" class="form-control ih-medium ip-light radius-xs b-light" id="validationDefault01" value="{{$service->id}}" disabled required>
                    </div>
                    <div class="col-md-4 mb-20 px-15">
                      <label for="validationDefault02"  class="il-gray fs-14 fw-500 align-center mb-10">Tên dịch vụ</label>
                      <input type="text" name="namesv" class="form-control  ih-medium ip-light radius-xs b-light" id="validationDefault02" value="{{$service->name}}" required>
                    </div>
                    <div class="col-md-4 mb-20 px-15">
                      <label for="validationDefault02"  class="il-gray fs-14 fw-500 align-center mb-10">Đơn giá</label>
                      <input type="text" name="don_gia" class="form-control  ih-medium ip-light radius-xs b-light" id="validationDefault02" value="{{$service->price}}" required>
                    </div>
                    <div class="support-form__input-id col-md-4 mb-20 px-15">
                      <label>Cate:</label>
                      <div class="dm-select ">
                        <select name="catesv" class="select-search form-control ">
                          @foreach($category as $ct)
                            <option value="{{$ct->id}}" <?php echo $ct->id == $service->id_cate ? 'selected' : ''?>>{{$ct->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 mb-20 px-15">
                      <label for="validationDefault02"  class="il-gray fs-14 fw-500 align-center mb-10">Ảnh cũ </label>
                      <img src="{{route('public/upload/service/'.$service->image)}}" style="width: 300px">
                    </div>
                    <div class="col-md-4 mb-20 px-15">
                      <label for="validationDefault02"  class="il-gray fs-14 fw-500 align-center mb-10">Ảnh dịch vụ</label>
                      <div class="dm-upload">
                        <div class="dm-upload__button">
                          <a href="javascript:void(0)" class="btn btn-lg btn-outline-lighten btn-upload" onclick="$('#upload-1').click()"> <img class="svg" src="{{route(''.'app/views/admin/public/assets/img/svg/upload.svg')}}" alt="upload"> Click to Upload</a>
                          <input name="upload" type="file"  class="upload-one" id="upload-1">
                        </div>
                        <div class="dm-upload__file">
                          <ul>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-20 px-15">
                      <label for="validationDefault02"  class="il-gray fs-14 fw-500 align-center mb-10">Mô tả</label>
                      <input type="text" name="desc" class="form-control  ih-medium ip-light radius-xs b-light" value="{{$service->description}}" placeholder="Mô tả dịch vụ">
                    </div>
                  </div>
                  <input class="btn btn-primary px-30" type="submit" value="Submit" name="btn-sm">
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
        'Thông báo!',
        '{{$_SESSION['success']}}',
        'success'
      )
      window.setTimeout(function(){
        window.location.href = '{{ route('service-list') }}';
      },1000)
    </script>
  @endif
@endpush


