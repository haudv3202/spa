@extends('admin.index_master_admin');

@section('content')
  <div class="contents">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-main">
            <div class="breadcrumb-action justify-content-center flex-wrap">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#"><i class="uil uil-estate"></i>Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Quản lí người dùng</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    chi tiết người dùng
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-5 mb-5">
          <div class="card">
            <div class="card-header color-dark fw-500">
              Thông tin
            </div>
            <div class="card-body p-0">
              <div class="table4 p-25 mb-30">
                <div class="table-responsive">
                  <table class="table mb-0">
                    <tbody>
                      <tr>
                        <td>
                          Họ tên
                        </td>
                        <td>
                       {{ $user->name }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                         Email
                        </td>
                        <td>
                          {{ $user->email }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Số điện thoại
                        </td>
                        <td>
                          {{ $user->sdt }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Địa chỉ
                        </td>
                        <td>
                          {{ $user->address == "" ? "chưa có địa chỉ" : $user->address }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Xếp hạng
                        </td>
                        <td>
                          {{ $user->rank }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Tổng chi tiêu
                        </td>
                        <td>
                          {{ number_format($user->total_price) }}đ
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 mb-30">
          <div class="support-ticket-system support-ticket-system--search">
            <div
              class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between"
            >
              <div
                class="d-flex flex-wrap justify-content-center breadcrumb-main__wrapper"
              >
                <div
                  class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20"
                >
                </div>
              </div>
              <button onclick="location.href='{{ route('add-serivce-user/'.$_GET['id']) }}'" class="btn btn-primary btn-default btn-squared btn-shadow-primary mb-2">
                Thêm mới
              </button>
            </div>
            <div
              class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1"
            >
              <div class="table-responsive">
                <table class="table mb-0 table-borderless">
                  <thead>
                  <tr class="userDatatable-header">
                    <th>
                      <span class="userDatatable-title">STT</span>
                    </th>
                    <th>
                      <span class="userDatatable-title">Ngày tạo</span>
                    </th>
                    <th>
                      <span class="userDatatable-title">dịch vụ sử dụng</span>
                    </th>
                    <th>
                      <span class="userDatatable-title">đơn giá</span>
                    </th>
                    <th  colspan="3">
                      <span class="userDatatable-title">Actions</span>
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($detailUser as $key => $value)
                    <tr>
                      <td>#{{ $key+1 }}</td>
                      <td>
                        {{ $value->create_date }}
                      </td>
                      <td>
                        <div class="userDatatable-content--priority">
                          {{ $value->service }}
                        </div>
                      </td>
                      <td>
                        <div class="userDatatable-content--priority">
                          {{ number_format($value->price) }}đ
                        </div>
                      </td>
                      <td>
                        <div class="d-flex justify-content-between">
                          <button onclick="deletItem({{ $value->id }},{{ $value->id_user }})" class="btn btn-danger btn-default btn-squared btn-shadow-danger ">Xóa
                          </button>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
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
    function deletItem(id,back){
      Swal.fire({
        title: 'Bạn chắc chắn?',
        text: "Bạn có chắc chắn muốn xóa không ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = `{{route('delete-detail-user/')}}` + id + "/" + back;
        }
      })
    }
  </script>
  @if(isset($_SESSION['success']) && isset($_GET['msg']))
    <script>
      Swal.fire(
        'Delete!',
        '{{$_SESSION['success']}}',
        'success'
      )
      @php
        unset( $_SESSION['success']);
      @endphp
      window.setTimeout(function(){
        window.location.href = '{{ route('questions') }}';
      },1000)
    </script>
  @endif




@endpush
