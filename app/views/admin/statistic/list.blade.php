@extends('admin.index_master_admin');

@section('content')
  <div class="contents">
    <div class="demo2 mb-25 t-thead-bg">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb-main">
              <h4 class="text-capitalize breadcrumb-title">Thống kê</h4>
              <div
                class="breadcrumb-action justify-content-center flex-wrap"
              >
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="#"
                      ><i class="uil uil-estate"></i>Quản trị</a
                      >
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Thống kê
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-sm-6 col-ssm-12 mb-25">
            <div
              class="ap-po-details ap-po-details--luodcy overview-card-shape radius-xl d-flex justify-content-between"
            >
              <div
                class="ap-po-details-content d-flex flex-wrap justify-content-between w-100"
              >
                <div class="ap-po-details__titlebar">
                  <p>Tổng tiền trong 7 ngày</p>
                  <h1>{{number_format($sevenDayAgo[0]->sum)}}đ</h1>
                </div>
                <div class="ap-po-details__icon-area color-primary">
                  <i class="uil uil-arrow-growth"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-sm-6 col-ssm-12 mb-25">
            <div
              class="ap-po-details ap-po-details--luodcy overview-card-shape radius-xl d-flex justify-content-between"
            >
              <div
                class="ap-po-details-content d-flex flex-wrap justify-content-between w-100"
              >
                <div class="ap-po-details__titlebar">
                  <p>Tổng tiền trong 1 tháng</p>
                  <h1>{{number_format($oneMonth[0]->sum)}}đ</h1>
                </div>
                <div class="ap-po-details__icon-area color-secondary">
                  <i class="uil uil-users-alt"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-sm-6 col-ssm-12 mb-25">
            <div
              class="ap-po-details ap-po-details--luodcy overview-card-shape radius-xl d-flex justify-content-between"
            >
              <div
                class="ap-po-details-content d-flex flex-wrap justify-content-between w-100"
              >
                <div class="ap-po-details__titlebar">
                  <p>Tổng tiền trong 1 năm</p>
                  <h1>{{number_format($oneYear[0]->sum)}}đ</h1>
                </div>
                <div class="ap-po-details__icon-area color-success">
                  <i class="uil uil-usd-circle"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-sm-6 col-ssm-12 mb-25">
            <div
              class="ap-po-details ap-po-details--luodcy overview-card-shape radius-xl d-flex justify-content-between"
            >
              <div
                class="ap-po-details-content d-flex flex-wrap justify-content-between w-100"
              >
                <div class="ap-po-details__titlebar">
                  <p>Tổng tiền</p>
                  <h1>{{number_format($total[0]->sum)}}đ</h1>
                </div>
                <div class="ap-po-details__icon-area color-info">
                  <i class="uil uil-tachometer-fast"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
