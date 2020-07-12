
@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard')

@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
@endsection
@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/pages/dashboard-analytics.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/pages/card-analytics.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/tour/tour.css')) }}">
  @endsection

  @section('content')
    {{-- Dashboard Start --}}
    <section id="dashboard-analytics">
      <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="card bg-analytics text-white">
            <div class="card-content">
              <div class="card-body text-center">
                <img src="{{ asset('images/elements/decore-left.png') }}" class="img-left" alt="card-img-left">
                <img src="{{ asset('images/elements/decore-right.png')}}" class="img-right" alt="card-img-right">
                <div class="avatar avatar-xl bg-primary shadow mt-0">
                    <div class="avatar-content">
                        <i class="feather icon-award white font-large-1"></i>
                    </div>
                </div>
                <div class="text-center">
                  <h1 class="mb-2 text-white">Congratulations John,</h1>
                  <p class="m-auto w-75">You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <div class="card-header d-flex flex-column align-items-start pb-0">
                  <div class="avatar bg-rgba-primary p-50 m-0">
                      <div class="avatar-content">
                          <i class="feather icon-users text-primary font-medium-5"></i>
                      </div>
                  </div>
                  <h2 class="text-bold-700 mt-1 mb-25">92.6k</h2>
                  <p class="mb-0">Subscribers Gained</p>
              </div>
              <div class="card-content">
                  <div id="subscribe-gain-chart"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-warning p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-package text-warning font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1 mb-25">97.5K</h2>
                    <p class="mb-0">Total Downloads</p>
                </div>
                <div class="card-content">
                    <div id="orders-received-chart"></div>
                </div>
            </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6 col-12">
            <div class="card">
              <div class="card-content">
                  <div class="card-body">
                      <div class="row pb-50">
                          <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                              <div>
                                  <h2 class="text-bold-700 mb-25">2.7K</h2>
                                  <p class="text-bold-500 mb-75">Avg Downloads</p>
                                  <h5 class="font-medium-2">
                                      <span class="text-success">+5.2% </span>
                                      <span>vs last 7 days</span>
                                  </h5>
                              </div>
                              <a href="#" class="btn btn-primary shadow">View Details <i class="feather icon-chevrons-right"></i></a>
                          </div>
                          <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                              <div class="dropdown chart-dropdown">
                                  <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button" id="dropdownItem5"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Last 7 Days
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem5">
                                    <a class="dropdown-item" href="#">Last 28 Days</a>
                                    <a class="dropdown-item" href="#">Last Month</a>
                                    <a class="dropdown-item" href="#">Last Year</a>
                                  </div>
                              </div>
                              <div id="avg-session-chart"></div>
                          </div>
                      </div>
                      <hr/>
                      <div class="row avg-sessions pt-50">
                          <div class="col-6">
                              <p class="mb-0">Total Revenue: $100000</p>
                              <div class="progress progress-bar-primary mt-25">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100"
                                  style="width:50%"></div>
                              </div>
                          </div>
                          <div class="col-6">
                              <p class="mb-0">Total Songs: 100K</p>
                              <div class="progress progress-bar-warning mt-25">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100"
                                  style="width:60%"></div>
                              </div>
                          </div>
                          <div class="col-6">
                              <p class="mb-0">Retention: 90%</p>
                              <div class="progress progress-bar-danger mt-25">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="70" aria-valuemax="100"
                                  style="width:70%"></div>
                              </div>
                          </div>
                          <div class="col-6">
                              <p class="mb-0">Joined: 1yr</p>
                              <div class="progress progress-bar-success mt-25">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="90" aria-valuemax="100"
                                  style="width:90%"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between pb-0">
                  <h4 class="card-title">Support Tracker</h4>
                  <div class="dropdown chart-dropdown">
                      <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button" id="dropdownItem4"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Last 7 Days
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem4">
                        <a class="dropdown-item" href="#">Last 28 Days</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">Last Year</a>
                      </div>
                  </div>
              </div>
              <div class="card-content">
                  <div class="card-body pt-0">
                      <div class="row">
                          <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                              <h1 class="font-large-2 text-bold-700 mt-2 mb-0">163</h1>
                              <small>Tickets</small>
                          </div>
                          <div class="col-sm-10 col-12 d-flex justify-content-center">
                              <div id="support-tracker-chart"></div>
                          </div>
                      </div>
                      <div class="chart-info d-flex justify-content-between">
                          <div class="text-center">
                              <p class="mb-50">New Tickets</p>
                              <span class="font-large-1">29</span>
                          </div>
                          <div class="text-center">
                              <p class="mb-50">Open Tickets</p>
                              <span class="font-large-1">63</span>
                          </div>
                          <div class="text-center">
                              <p class="mb-50">Response Time</p>
                              <span class="font-large-1">1d</span>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
      </div>
      </div>
    </section>
  <!-- Dashboard Analytics end -->
  @endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/pages/dashboard-analytics.js')) }}"></script>
@endsection
