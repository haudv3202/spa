
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
                    người dùng
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
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
                      <span class="userDatatable-title">Tên</span>
                    </th>
                    <th>
                      <span class="userDatatable-title">Ảnh</span>
                    </th>
                    <th>
                      <span class="userDatatable-title">Email</span>
                    </th>
                    <th>
                      <span class="userDatatable-title">Số điện thoại</span>
                    </th>
                    <th>
                      <span class="userDatatable-title">Chi tiêu</span>
                    </th>
                    <th  colspan="3">
                      <span class="userDatatable-title">Actions</span>
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $key=> $value)
                  <tr>
                    <td>#{{ $key+1 }}</td>
                    <td>
                      <div class="d-flex">
                        <div class="userDatatable-inline-title">
                          <a href="#" class="text-dark fw-500">
                            <h6>{{ $value->name }}</h6>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td>
                      <img src="{{ $value->image }}" alt="avatr">
                    </td>
                    <td>
                      <div class="userDatatable-content--subject">
                        {{ $value->email }}
                      </div>
                    </td>
                    <td>
                      <div class="userDatatable-content--priority">
                        {{ $value->sdt }}
                      </div>
                    </td>
                    <td>
                      <div class="userDatatable-content--priority">
                        {{ $value->total_price }}
                      </div>
                    </td>
                    <td>
                      <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-default btn-squared btn-shadow-primary " onclick="location.href='{{ route('chi-tiet-nguoi-dung/'.$value->id)  }}'">chi tiết
                        </button>
                        <button class="btn btn-secondary btn-default btn-squared btn-shadow-secondary " onclick="location.href='{{ route('update-user/'.$value->id) }}'">sửa
                        </button>
                        <button onclick="deletItem({{ $value->id }})" class="btn btn-danger btn-default btn-squared btn-shadow-danger ">Xóa
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
    function deletItem(id){
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
          window.location.href = `{{route('delete-question/')}}` + id;
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

