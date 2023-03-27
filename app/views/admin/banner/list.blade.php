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
                    <h4>Banner</h4>
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
                        <span class="userDatatable-title">Tiêu đề</span>
                      </th>
                      <th>
                        <span class="userDatatable-title">Ảnh</span>
                      </th>
                      <th>
                        <span class="userDatatable-title">Mô tả</span>
                      </th>
                      <th>
                              <span class="userDatatable-title"
                              >Action</span
                              >
                      </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($banner as $value)
                      <tr>
                        <td>
                          <div class="userDatatable-content">{{$value->id}}</div>
                        </td>
                        <td>
                          <div class="userDatatable-content">
                            <div class="userDatatable-content">{{$value->title}}</div>
                          </div>
                        </td>
                        <td>
                          <div class="userDatatable-content">
                            <img src="{{route('public/upload/banner/'.$value->image)}}" alt="" class="rounded" width="50">
                          </div>
                        </td>
                        <td>
                          <div class="userDatatable-content">
                            <div class="userDatatable-content">{{$value->description}}</div>
                          </div>
                        </td>
                        <td>
                          <button class="btn btn-primary btn-default btn-rounded bg-primary text-white " onclick="location.href='{{route('edit-banner/'.$value->id)}}'"> <i class='bx bx-edit-alt'></i>Sửa
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

