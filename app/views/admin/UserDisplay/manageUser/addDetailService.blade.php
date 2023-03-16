@extends('admin.index_master_admin');
@section('content')
  <div class="contents">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="d-flex align-items-center user-member__title mb-30 mt-30">
            <h4 class="text-capitalize">add user</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="user-info-tab w-100 bg-white global-shadow radius-xl mb-50">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade  show active" id="v-pills-home" role="tabpanel"
                   aria-labelledby="v-pills-home-tab">
                <div class="row justify-content-center">
                  <div class="col-xxl-4 col-10">
                    <div class="mt-sm-40 mb-sm-50 mt-20 mb-20">
                      <div class="edit-profile__body">
                        <form action="" method="post">
                          <div class="form-group mb-25">
                            <label for="name1">danh mục</label>
                            <select name="select-size-2" id="cate" class="form-control  form-control-lg">
                              <option selected value="0">Chưa chọn dịch vụ</option>
                              @foreach($allservice as $value)
                                <option data-price="{{ $value->price }}" value="{{ $value->id }}">{{ $value->name }}</option>
                              @endforeach
                            </select>
                            <div>
                          <div class="form-group mb-25">
                            <label for="name1">dịch vụ</label>
                            <select name="select-size-2" id="service" class="form-control  form-control-lg">
                              <option selected value="0">Chưa chọn dịch vụ</option>
                              @foreach($allservice as $value)
                              <option data-price="{{ $value->price }}" value="{{ $value->id }}">{{ $value->name }}</option>
                              @endforeach
                            </select>
                          <div>
                            <div class="form-group mb-25" id="price">
                              <label for="price1">đơn giá</label>
                              <input type="text" class="form-control" name='price'   id="price1"
                                  >
                              <div>
                            <button
                              class="btn btn-light btn-default btn-squared fw-400 text-capitalize radius-md btn-sm">
                              cancel
                            </button>
                            <button
                              class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2 btn-sm" name="btn-adduser">
                              Thêm
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
@push("scripts")
  <script>
    const elementPrice = document.querySelector('#price');
    const elementService = document.querySelector('#service');
      elementPrice.style.display = 'none';

    elementService.addEventListener("change",function (e){
      // e.target.value
      const selectedOption = this.options[this.selectedIndex];
      const price = selectedOption.getAttribute("data-price");
      if(e.target.value != 0){
        elementPrice.style.display = 'block';
        document.querySelector('#price1').setAttribute("value",price);
      }else {
        elementPrice.style.display = 'none';
        document.querySelector('#price1').removeAttribute("value");
      }
    })

  </script>

@endpush
