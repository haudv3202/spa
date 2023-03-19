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
                      <div class="edit-profile__body">
                        <form action="" method="post">
                          <div class="form-group mb-25">
                            <label for="name1">danh mục</label>
                            <select name="select-size-2" id="cate" class="form-control form-control-lg" onchange="showUser(this.value)">
                              <option selected value="0">Chưa chọn dịch vụ</option>
                              @foreach($allCate as $value)
                                <option data-price="{{ $value->price }}" value="{{ $value->id }}">{{ $value->name }}</option>
                              @endforeach
                            </select>
                            </div>
                          <div class="form-group mb-25">
                            <label for="name1">dịch vụ</label>
                            <select name="service" id="service" class="form-control  form-control-lg"
                            >
                              <option selected value="0">Chưa chọn dịch vụ</option>
                            </select>
                          </div>
                            <div class="form-group mb-25" id="price">
                            <label for="price1">đơn giá</label>
                            <input type="text" class="form-control" name='price'   id="price1"
                            >
                          </div>
                            <div class="form-group mb-25 d-flex justify-content-between" >
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

    elementService.addEventListener("click",function (e){
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

  <script>
    function showUser(id) {
      $.get("add-detailUser/"+id,function(data, status){
        var dataOne = JSON.parse(data);
        console.log(dataOne);
        if (dataOne.length === 0) {
          $('select#service').html('<option value="0">Không có dịch vụ</option>');
        }else {
          var selectOptions = '';
          $.each(dataOne, function(index, element) {
            selectOptions += '<option value="' + element.id_cate + '" data-price="'+element.price+'">' + element.name + '</option>';
          });
          $('select#service').html(selectOptions);
        }

      });

    }
  </script>
@endpush
