@extends('admin.index_master_admin');

@section('content')
  <div class="contents">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 mb-30">
          <div class="card mt-30">
            <div class="card-body">
              <div
                class=" global-shadow border-light-0 w-100 adv-table"
              >

                <div class="table-responsive">
                  <div class="adv-table-table__header mb-3">
                    <h4>Xếp hạng</h4>
                    <button class="btn btn-success btn-default btn-rounded bg-success text-white" onclick="location.href='{{ route('add-rank') }}'"><i class='bx bxs-file-plus'></i>Thêm
                    </button>
                  </div>
                  <table
                    class="table mb-0 table-borderless"
                    data-sorting="true"
                    data-filter-container="#filter-form-container"
                    data-paging-current="1"
                    data-paging-position="right"
                    data-paging-size="10"
                  >
                    <thead>
                    <tr class="userDatatable-header">
                      <th>
                        <span class="userDatatable-title">STT</span>
                      </th>
                      <th>
                        <span class="userDatatable-title">Tên xếp hạng</span>
                      </th>
                      <th>
                        <span class="userDatatable-title">Khung tiền xếp hạng</span>
                      </th>
                      <th>
                              <span class="userDatatable-title"
                              >Chức năng </span
                              >
                      </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dataAll as $key => $value)
                      <tr>
                        <td>
                          <div class="userDatatable-content">{{$key+1}}</div>
                        </td>
                        <td>
                          <div class="userDatatable-content">{{$value->name}}</div>
                        </td>
                        <td>
                          <div class="userDatatable-content">{{ number_format($value->total) }}đ</div>
                        </td>
                        <td class="d-flex">
                          <button class="btn btn-primary btn-default btn-rounded bg-primary text-white" onclick="location.href='{{route('edit-rank/'.$value->id)}}'"> <i class='bx bx-edit-alt'></i>sửa
                          </button>

                          <button class="btn btn-danger btn-default btn-rounded bg-danger text-white " style="margin-left: 20px;" onclick="deletItem({{$value->id}})"> <i class='bx bx-trash'></i>Xóa
                          </button>
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
          window.location.href = `{{route('delete-rank/')}}` + id;
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
        window.location.href = '{{ route('list-rank') }}';
      },1500)
    </script>
  @endif




@endpush
