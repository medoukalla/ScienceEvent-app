@extends('voyager::master')

@section('content')
    <!-- Website Analytics -->
    <div class="col-lg-6">
        <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg" id="swiper-with-pagination-cards">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="row">
                <div class="col-12">
                  <h5 class="text-white mb-0">Website Analytics</h5>
                  <small>Total 28.5% Conversion Rate</small>
                </div>
                <div class="row">
                  <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1 pt-md-9">
                    <h6 class="text-white mt-0 mt-md-3 mb-4">Traffic</h6>
                    <div class="row">
                      <div class="col-6">
                        <ul class="list-unstyled mb-0">
                          <li class="d-flex mb-4 align-items-center">
                            <p class="mb-0 fw-medium me-2 website-analytics-text-bg">28%</p>
                            <p class="mb-0">Sessions</p>
                          </li>
                          <li class="d-flex align-items-center">
                            <p class="mb-0 fw-medium me-2 website-analytics-text-bg">1.2k</p>
                            <p class="mb-0">Leads</p>
                          </li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="list-unstyled mb-0">
                          <li class="d-flex mb-4 align-items-center">
                            <p class="mb-0 fw-medium me-2 website-analytics-text-bg">3.1k</p>
                            <p class="mb-0">Page Views</p>
                          </li>
                          <li class="d-flex align-items-center">
                            <p class="mb-0 fw-medium me-2 website-analytics-text-bg">12%</p>
                            <p class="mb-0">Conversions</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                    <img src="{{ asset('assets-dashboard/img/illustrations/card-website-analytics-1.png') }}" alt="Website Analytics" height="150" class="card-website-analytics-img">
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="row">
                <div class="col-12">
                  <h5 class="text-white mb-0">Website Analytics</h5>
                  <small>Total 28.5% Conversion Rate</small>
                </div>
                <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1 pt-md-9">
                  <h6 class="text-white mt-0 mt-md-3 mb-4">Spending</h6>
                  <div class="row">
                    <div class="col-6">
                      <ul class="list-unstyled mb-0">
                        <li class="d-flex mb-4 align-items-center">
                          <p class="mb-0 fw-medium me-2 website-analytics-text-bg">12h</p>
                          <p class="mb-0">Spend</p>
                        </li>
                        <li class="d-flex align-items-center">
                          <p class="mb-0 fw-medium me-2 website-analytics-text-bg">127</p>
                          <p class="mb-0">Order</p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="list-unstyled mb-0">
                        <li class="d-flex mb-4 align-items-center">
                          <p class="mb-0 fw-medium me-2 website-analytics-text-bg">18</p>
                          <p class="mb-0">Order Size</p>
                        </li>
                        <li class="d-flex align-items-center">
                          <p class="mb-0 fw-medium me-2 website-analytics-text-bg">2.3k</p>
                          <p class="mb-0">Items</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                  <img src="{{ asset('assets-dashboard/img/illustrations/card-website-analytics-2.png') }}" alt="Website Analytics" height="150" class="card-website-analytics-img">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="row">
                <div class="col-12">
                  <h5 class="text-white mb-0">Website Analytics</h5>
                  <small>Total 28.5% Conversion Rate</small>
                </div>
                <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1 pt-md-9">
                  <h6 class="text-white mt-0 mt-md-3 mb-4">Revenue Sources</h6>
                  <div class="row">
                    <div class="col-6">
                      <ul class="list-unstyled mb-0">
                        <li class="d-flex mb-4 align-items-center">
                          <p class="mb-0 fw-medium me-2 website-analytics-text-bg">268</p>
                          <p class="mb-0">Direct</p>
                        </li>
                        <li class="d-flex align-items-center">
                          <p class="mb-0 fw-medium me-2 website-analytics-text-bg">62</p>
                          <p class="mb-0">Referral</p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="list-unstyled mb-0">
                        <li class="d-flex mb-4 align-items-center">
                          <p class="mb-0 fw-medium me-2 website-analytics-text-bg">890</p>
                          <p class="mb-0">Organic</p>
                        </li>
                        <li class="d-flex align-items-center">
                          <p class="mb-0 fw-medium me-2 website-analytics-text-bg">1.2k</p>
                          <p class="mb-0">Campaign</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                  <img src="{{ asset('assets-dashboard/img/illustrations/card-website-analytics-3.png') }}" alt="Website Analytics" height="150" class="card-website-analytics-img">
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <!--/ Website Analytics -->

      <!-- Average Daily Sales -->
      <div class="col-xl-3 col-sm-6">
        <div class="card h-100">
          <div class="card-header pb-0">
            <h5 class="mb-3 card-title">Average Daily Sales</h5>
            <p class="mb-0 text-body">Total Sales This Month</p>
            <h4 class="mb-0">$28,450</h4>
          </div>
          <div class="card-body px-0">
            <div id="averageDailySales"></div>
          </div>
        </div>
      </div>
      <!--/ Average Daily Sales -->

      <!-- Sales Overview -->
      <div class="col-xl-3 col-sm-6">
        <div class="card h-100">
          <div class="card-header">
            <div class="d-flex justify-content-between">
              <p class="mb-0 text-body">Sales Overview</p>
              <p class="card-text fw-medium text-success">+18.2%</p>
            </div>
            <h4 class="card-title mb-1">$42.5k</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <div class="d-flex gap-2 align-items-center mb-2">
                  <span class="badge bg-label-info p-1 rounded"><i class="ti ti-shopping-cart ti-sm"></i></span>
                  <p class="mb-0">Order</p>
                </div>
                <h5 class="mb-0 pt-1">62.2%</h5>
                <small class="text-muted">6,440</small>
              </div>
              <div class="col-4">
                <div class="divider divider-vertical">
                  <div class="divider-text">
                    <span class="badge-divider-bg bg-label-secondary">VS</span>
                  </div>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                  <p class="mb-0">Visits</p>
                  <span class="badge bg-label-primary p-1 rounded"><i class="ti ti-link ti-sm"></i></span>
                </div>
                <h5 class="mb-0 pt-1">25.5%</h5>
                <small class="text-muted">12,749</small>
              </div>
            </div>
            <div class="d-flex align-items-center mt-6">
              <div class="progress w-100" style="height: 10px;">
                <div class="progress-bar bg-info" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Sales Overview -->

      <!-- Earning Reports -->
      <div class="col-lg-6">
        <div class="card h-100">
          <div class="card-header pb-0 d-flex justify-content-between">
            <div class="card-title mb-0">
              <h5 class="mb-1">Earning Reports</h5>
              <p class="card-subtitle">Weekly Earnings Overview</p>
            </div>
            <div class="dropdown">
              <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="earningReportsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ti ti-dots-vertical ti-md text-muted"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsId">
                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row align-items-center g-md-8">
              <div class="col-12 col-md-5 d-flex flex-column">
                <div class="d-flex gap-2 align-items-center mb-3 flex-wrap">
                  <h2 class="mb-0">$468</h2>
                  <div class="badge rounded bg-label-success">+4.2%</div>
                </div>
                <small class="text-body">You informed of this week compared to last week</small>
              </div>
              <div class="col-12 col-md-7 ps-xl-8">
                <div id="weeklyEarningReports"></div>
              </div>
            </div>
            <div class="border rounded p-5 mt-5">
              <div class="row gap-4 gap-sm-0">
                <div class="col-12 col-sm-4">
                  <div class="d-flex gap-2 align-items-center">
                    <div class="badge rounded bg-label-primary p-1"><i class="ti ti-currency-dollar ti-sm"></i></div>
                    <h6 class="mb-0 fw-normal">Earnings</h6>
                  </div>
                  <h4 class="my-2">$545.69</h4>
                  <div class="progress w-75" style="height:4px">
                    <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="d-flex gap-2 align-items-center">
                    <div class="badge rounded bg-label-info p-1"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                    <h6 class="mb-0 fw-normal">Profit</h6>
                  </div>
                  <h4 class="my-2">$256.34</h4>
                  <div class="progress w-75" style="height:4px">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="d-flex gap-2 align-items-center">
                    <div class="badge rounded bg-label-danger p-1"><i class="ti ti-brand-paypal ti-sm"></i></div>
                    <h6 class="mb-0 fw-normal">Expense</h6>
                  </div>
                  <h4 class="my-2">$74.19</h4>
                  <div class="progress w-75" style="height:4px">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Earning Reports -->

      <!-- Support Tracker -->
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-header d-flex justify-content-between">
            <div class="card-title mb-0">
              <h5 class="mb-1">Support Tracker</h5>
              <p class="card-subtitle">Last 7 Days</p>
            </div>
            <div class="dropdown">
              <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="supportTrackerMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ti ti-dots-vertical ti-md text-muted"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="supportTrackerMenu">
                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
              </div>
            </div>
          </div>
          <div class="card-body row">
            <div class="col-12 col-sm-4 col-md-12 col-lg-4">
              <div class="mt-lg-4 mt-lg-2 mb-lg-6 mb-2">
                <h2 class="mb-0">164</h2>
                <p class="mb-0">Total Tickets</p>
              </div>
              <ul class="p-0 m-0">
                <li class="d-flex gap-4 align-items-center mb-lg-3 pb-1">
                  <div class="badge rounded bg-label-primary p-1_5"><i class="ti ti-ticket ti-md"></i></div>
                  <div>
                    <h6 class="mb-0 text-nowrap">New Tickets</h6>
                    <small class="text-muted">142</small>
                  </div>
                </li>
                <li class="d-flex gap-4 align-items-center mb-lg-3 pb-1">
                  <div class="badge rounded bg-label-info p-1_5"><i class="ti ti-circle-check ti-md"></i></div>
                  <div>
                    <h6 class="mb-0 text-nowrap">Open Tickets</h6>
                    <small class="text-muted">28</small>
                  </div>
                </li>
                <li class="d-flex gap-4 align-items-center pb-1">
                  <div class="badge rounded bg-label-warning p-1_5"><i class="ti ti-clock ti-md"></i></div>
                  <div>
                    <h6 class="mb-0 text-nowrap">Response Time</h6>
                    <small class="text-muted">1 Day</small>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-12 col-sm-8 col-md-12 col-lg-8">
              <div id="supportTracker"></div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Support Tracker -->

      <!-- Sales By Country -->
      <div class="col-xxl-4 col-md-6">
        <div class="card h-100">
          <div class="card-header d-flex justify-content-between">
            <div class="card-title mb-0">
              <h5 class="mb-1">Sales by Countries</h5>
              <p class="card-subtitle">Monthly Sales Overview</p>
            </div>
            <div class="dropdown">
              <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="salesByCountry" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ti ti-dots-vertical ti-md text-muted"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountry">
                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <ul class="p-0 m-0">
              <li class="d-flex align-items-center mb-4">
                <div class="avatar flex-shrink-0 me-4">
                  <i class="fis fi fi-us rounded-circle fs-2"></i>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-1">$8,567k</h6>

                    </div>
                    <small class="text-body">United states</small>
                  </div>
                  <div class="user-progress">
                    <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                      <i class='ti ti-chevron-up'></i>
                      25.8%
                    </p>
                  </div>
                </div>
              </li>
              <li class="d-flex align-items-center mb-4">
                <div class="avatar flex-shrink-0 me-4">
                  <i class="fis fi fi-br rounded-circle fs-2"></i>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-1">$2,415k</h6>
                    </div>
                    <small class="text-body">Brazil</small>
                  </div>
                  <div class="user-progress">
                    <p class="text-danger fw-medium mb-0 d-flex align-items-center gap-1">
                      <i class='ti ti-chevron-down'></i>
                      6.2%
                    </p>
                  </div>
                </div>
              </li>
              <li class="d-flex align-items-center mb-4">
                <div class="avatar flex-shrink-0 me-4">
                  <i class="fis fi fi-in rounded-circle fs-2"></i>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-1">$865k</h6>
                    </div>
                    <small class="text-body">India</small>
                  </div>
                  <div class="user-progress">
                    <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                      <i class='ti ti-chevron-up'></i>
                      12.4%
                    </p>
                  </div>
                </div>
              </li>
              <li class="d-flex align-items-center mb-4">
                <div class="avatar flex-shrink-0 me-4">
                  <i class="fis fi fi-au rounded-circle fs-2"></i>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-1">$745k</h6>
                    </div>
                    <small class="text-body">Australia</small>
                  </div>
                  <div class="user-progress">
                    <p class="text-danger fw-medium mb-0 d-flex align-items-center gap-1">
                      <i class='ti ti-chevron-down'></i>
                      11.9%
                    </p>
                  </div>
                </div>
              </li>
              <li class="d-flex align-items-center mb-4">
                <div class="avatar flex-shrink-0 me-4">
                  <i class="fis fi fi-fr rounded-circle fs-2"></i>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-1">$45</h6>
                    </div>
                    <small class="text-body">France</small>
                  </div>
                  <div class="user-progress">
                    <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                      <i class='ti ti-chevron-up'></i>
                      16.2%
                    </p>
                  </div>
                </div>
              </li>
              <li class="d-flex align-items-center">
                <div class="avatar flex-shrink-0 me-4">
                  <i class="fis fi fi-cn rounded-circle fs-2"></i>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-1">$12k</h6>
                    </div>
                    <small class="text-body">China</small>
                  </div>
                  <div class="user-progress">
                    <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                      <i class='ti ti-chevron-up'></i>
                      14.8%
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Sales By Country -->

      <!-- Total Earning -->
      <div class="col-xxl-4 col-md-6">
        <div class="card h-100">
          <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="mb-0 card-title">Total Earning</h5>
              <div class="dropdown">
                <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="totalEarning" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="ti ti-dots-vertical ti-md text-muted"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarning">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <h2 class="mb-0 me-2">87%</h2>
              <i class="ti ti-chevron-up text-success me-1"></i>
              <h6 class="text-success mb-0">25.8%</h6>
            </div>
          </div>
          <div class="card-body">
            <div id="totalEarningChart"></div>
            <div class="d-flex align-items-start my-4">
              <div class="badge rounded bg-label-primary p-2 me-4 rounded"><i class="ti ti-brand-paypal ti-md"></i></div>
              <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
                <div class="me-2">
                  <h6 class="mb-0">Total Revenue</h6>
                  <small class="text-body">Client Payment</small>
                </div>
                <h6 class="mb-0 text-success">+$126</h6>
              </div>
            </div>
            <div class="d-flex align-items-start">
              <div class="badge rounded bg-label-secondary p-2 me-4 rounded"><i class="ti ti-currency-dollar ti-md"></i></div>
              <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
                <div class="me-2">
                  <h6 class="mb-0">Total Sales</h6>
                  <small class="text-body">Refund</small>
                </div>
                <h6 class="mb-0 text-success">+$98</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Total Earning -->

      <!-- Monthly Campaign State -->
      <div class="col-xxl-4 col-md-6">
        <div class="card h-100">
          <div class="card-header d-flex justify-content-between">
            <div class="card-title mb-0">
              <h5 class="mb-1">Monthly Campaign State</h5>
              <p class="card-subtitle">8.52k Social Visiters</p>
            </div>
            <div class="dropdown">
              <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="MonthlyCampaign" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ti ti-dots-vertical ti-md text-muted"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="MonthlyCampaign">
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                <a class="dropdown-item" href="javascript:void(0);">View All</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <ul class="p-0 m-0">
              <li class="mb-6 d-flex justify-content-between align-items-center">
                <div class="badge bg-label-success rounded p-1_5"><i class="ti ti-mail ti-md"></i></div>
                <div class="d-flex justify-content-between w-100 flex-wrap">
                  <h6 class="mb-0 ms-4">Emails</h6>
                  <div class="d-flex">
                    <p class="mb-0">12,346</p>
                    <p class="ms-4 text-success mb-0">0.3%</p>
                  </div>
                </div>
              </li>
              <li class="mb-6 d-flex justify-content-between align-items-center">
                <div class="badge bg-label-info rounded p-1_5"><i class="ti ti-link ti-md"></i></div>
                <div class="d-flex justify-content-between w-100 flex-wrap">
                  <h6 class="mb-0 ms-4">Opened</h6>
                  <div class="d-flex">
                    <p class="mb-0">8,734</p>
                    <p class="ms-4 text-success mb-0">2.1%</p>
                  </div>
                </div>
              </li>
              <li class="mb-6 d-flex justify-content-between align-items-center">
                <div class="badge bg-label-warning rounded p-1_5"><i class="ti ti-mouse ti-md"></i></div>
                <div class="d-flex justify-content-between w-100 flex-wrap">
                  <h6 class="mb-0 ms-4">Clicked</h6>
                  <div class="d-flex">
                    <p class="mb-0">967</p>
                    <p class="ms-4 text-danger mb-0">1.4%</p>
                  </div>
                </div>
              </li>
              <li class="mb-6 d-flex justify-content-between align-items-center">
                <div class="badge bg-label-primary rounded p-1_5"><i class="ti ti-users ti-md"></i></div>
                <div class="d-flex justify-content-between w-100 flex-wrap">
                  <h6 class="mb-0 ms-4">Subscribe</h6>
                  <div class="d-flex">
                    <p class="mb-0">345</p>
                    <p class="ms-4 text-success mb-0">8.5%</p>
                  </div>
                </div>
              </li>
              <li class="mb-6 d-flex justify-content-between align-items-center">
                <div class="badge bg-label-secondary rounded p-1_5"><i class="ti ti-alert-triangle ti-md"></i></div>
                <div class="d-flex justify-content-between w-100 flex-wrap">
                  <h6 class="mb-0 ms-4">Complaints</h6>
                  <div class="d-flex">
                    <p class="mb-0">10</p>
                    <p class="ms-4 text-danger mb-0">1.5%</p>
                  </div>
                </div>
              </li>
              <li class="d-flex justify-content-between align-items-center">
                <div class="badge bg-label-danger rounded p-1_5"><i class="ti ti-ban ti-md"></i></div>
                <div class="d-flex justify-content-between w-100 flex-wrap">
                  <h6 class="mb-0 ms-4">Unsubscribe</h6>
                  <div class="d-flex">
                    <p class="mb-0">86</p>
                    <p class="ms-4 text-success mb-0">0.8%</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Monthly Campaign State -->

      <!-- Source Visit -->
      <div class="col-xxl-4 col-xl-6 col-lg-12">
        <div class="card h-100">
          <div class="card-header d-flex justify-content-between">
            <div class="card-title mb-0">
              <h5 class="mb-1">Source Visits</h5>
              <p class="card-subtitle">38.4k Visitors</p>
            </div>
            <div class="dropdown">
              <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="sourceVisits" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ti ti-dots-vertical ti-md text-muted"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sourceVisits">
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                <a class="dropdown-item" href="javascript:void(0);">View All</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mb-0">
              <li class="mb-6">
                <div class="d-flex align-items-center">
                  <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-shadow ti-md"></i></div>
                  <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Direct Source</h6>
                      <small class="text-body">Direct link click</small>
                    </div>
                    <div class="d-flex align-items-center">
                      <p class="mb-0">1.2k</p>
                      <div class="ms-4 badge bg-label-success">+4.2%</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="mb-6">
                <div class="d-flex align-items-center">
                  <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-globe ti-md"></i></div>
                  <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Social Network</h6>
                      <small class="text-body">Social Channels</small>
                    </div>
                    <div class="d-flex align-items-center">
                      <p class="mb-0">31.5k</p>
                      <div class="ms-4 badge bg-label-success">+8.2%</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="mb-6">
                <div class="d-flex align-items-center">
                  <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-mail ti-md"></i></div>
                  <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Email Newsletter</h6>
                      <small class="text-body">Mail Campaigns</small>
                    </div>
                    <div class="d-flex align-items-center">
                      <p class="mb-0">893</p>
                      <div class="ms-4 badge bg-label-success">+2.4%</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="mb-6">
                <div class="d-flex align-items-center">
                  <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-external-link ti-md"></i></div>
                  <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Referrals</h6>
                      <small class="text-body">Impact Radius Visits</small>
                    </div>
                    <div class="d-flex align-items-center">
                      <p class="mb-0">342</p>
                      <div class="ms-4 badge bg-label-danger">-0.4%</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="mb-6">
                <div class="d-flex align-items-center">
                  <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-ad ti-md"></i></div>
                  <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">ADVT</h6>
                      <small class="text-body">Google ADVT</small>
                    </div>
                    <div class="d-flex align-items-center">
                      <p class="mb-0">2.15k</p>
                      <div class="ms-4 badge bg-label-success">+9.1%</div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center">
                  <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-star ti-md"></i></div>
                  <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Other</h6>
                      <small class="text-body">Many Sources</small>
                    </div>
                    <div class="d-flex align-items-center">
                      <p class="mb-0">12.5k</p>
                      <div class="ms-4 badge bg-label-success">+6.2%</div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Source Visit -->

      <!-- Projects table -->
      <div class="col-xxl-8">
        <div class="card">
          <div class="card-datatable table-responsive">
            <table class="datatables-projects table table-sm">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th>Project</th>
                  <th>Leader</th>
                  <th>Team</th>
                  <th class="w-px-200">Progress</th>
                  <th>Action</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
      <!--/ Projects table -->
@stop

@section('javascript')

    @if(isset($google_analytics_client_id) && !empty($google_analytics_client_id))
        <script>
            (function (w, d, s, g, js, fs) {
                g = w.gapi || (w.gapi = {});
                g.analytics = {
                    q: [], ready: function (f) {
                        this.q.push(f);
                    }
                };
                js = d.createElement(s);
                fs = d.getElementsByTagName(s)[0];
                js.src = 'https://apis.google.com/js/platform.js';
                fs.parentNode.insertBefore(js, fs);
                js.onload = function () {
                    g.load('analytics');
                };
            }(window, document, 'script'));
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.1.1/Chart.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
        <script>
            // View Selector 2 JS
            !function(e){function t(r){if(i[r])return i[r].exports;var o=i[r]={exports:{},id:r,loaded:!1};return e[r].call(o.exports,o,o.exports,t),o.loaded=!0,o.exports}var i={};return t.m=e,t.c=i,t.p="",t(0)}([function(e,t,i){"use strict";function r(e){return e&&e.__esModule?e:{"default":e}}var o=i(1),s=r(o);gapi.analytics.ready(function(){function e(e,t,i){e.innerHTML=t.map(function(e){var t=e.id==i?"selected ":" ";return"<option "+t+'value="'+e.id+'">'+e.name+"</option>"}).join("")}function t(e){return e.ids||e.viewId?{prop:"viewId",value:e.viewId||e.ids&&e.ids.replace(/^ga:/,"")}:e.propertyId?{prop:"propertyId",value:e.propertyId}:e.accountId?{prop:"accountId",value:e.accountId}:void 0}gapi.analytics.createComponent("ViewSelector2",{execute:function(){return this.setup_(function(){this.updateAccounts_(),this.changed_&&(this.render_(),this.onChange_())}.bind(this)),this},set:function(e){if(!!e.ids+!!e.viewId+!!e.propertyId+!!e.accountId>1)throw new Error('You cannot specify more than one of the following options: "ids", "viewId", "accountId", "propertyId"');if(e.container&&this.container)throw new Error("You cannot change containers once a view selector has been rendered on the page.");var t=this.get();return(t.ids!=e.ids||t.viewId!=e.viewId||t.propertyId!=e.propertyId||t.accountId!=e.accountId)&&(t.ids=null,t.viewId=null,t.propertyId=null,t.accountId=null),gapi.analytics.Component.prototype.set.call(this,e)},setup_:function(e){function t(){s["default"].get().then(function(t){i.summaries=t,i.accounts=i.summaries.all(),e()},function(e){i.emit("error",e)})}var i=this;gapi.analytics.auth.isAuthorized()?t():gapi.analytics.auth.on("signIn",t)},updateAccounts_:function(){var e=this.get(),i=t(e),r=void 0,o=void 0,s=void 0;if(!this.summaries.all().length)return this.emit("error",new Error('This user does not have any Google Analytics accounts. You can sign up at "www.google.com/analytics".'));if(i)switch(i.prop){case"viewId":r=this.summaries.getProfile(i.value),o=this.summaries.getAccountByProfileId(i.value),s=this.summaries.getWebPropertyByProfileId(i.value);break;case"propertyId":s=this.summaries.getWebProperty(i.value),o=this.summaries.getAccountByWebPropertyId(i.value),r=s&&s.views&&s.views[0];break;case"accountId":o=this.summaries.getAccount(i.value),s=o&&o.properties&&o.properties[0],r=s&&s.views&&s.views[0]}else o=this.accounts[0],s=o&&o.properties&&o.properties[0],r=s&&s.views&&s.views[0];o||s||r?(o!=this.account||s!=this.property||r!=this.view)&&(this.changed_={account:o&&o!=this.account,property:s&&s!=this.property,view:r&&r!=this.view},this.account=o,this.properties=o.properties,this.property=s,this.views=s&&s.views,this.view=r,this.ids=r&&"ga:"+r.id):this.emit("error",new Error("This user does not have access to "+i.prop.slice(0,-2)+" : "+i.value))},render_:function(){var t=this.get();this.container="string"==typeof t.container?document.getElementById(t.container):t.container,this.container.innerHTML=t.template||this.template;var i=this.container.querySelectorAll("select"),r=this.accounts,o=this.properties||[{name:"(Empty)",id:""}],s=this.views||[{name:"(Empty)",id:""}];e(i[0],r,this.account.id),e(i[1],o,this.property&&this.property.id),e(i[2],s,this.view&&this.view.id),i[0].onchange=this.onUserSelect_.bind(this,i[0],"accountId"),i[1].onchange=this.onUserSelect_.bind(this,i[1],"propertyId"),i[2].onchange=this.onUserSelect_.bind(this,i[2],"viewId")},onChange_:function(){var e={account:this.account,property:this.property,view:this.view,ids:this.view&&"ga:"+this.view.id};this.changed_&&(this.changed_.account&&this.emit("accountChange",e),this.changed_.property&&this.emit("propertyChange",e),this.changed_.view&&(this.emit("viewChange",e),this.emit("idsChange",e),this.emit("change",e.ids))),this.changed_=null},onUserSelect_:function(e,t){var i={};i[t]=e.value,this.set(i),this.execute()},template:'<div class="ViewSelector2">  <div class="ViewSelector2-item">    <label>Account</label>    <select class="FormField"></select>  </div>  <div class="ViewSelector2-item">    <label>Property</label>    <select class="FormField"></select>  </div>  <div class="ViewSelector2-item">    <label>View</label>    <select class="FormField"></select>  </div></div>'})})},function(e,t,i){function r(){var e=gapi.client.request({path:n}).then(function(e){return e});return new e.constructor(function(t,i){var r=[];e.then(function o(e){var c=e.result;c.items?r=r.concat(c.items):i(new Error("You do not have any Google Analytics accounts. Go to http://google.com/analytics to sign up.")),c.startIndex+c.itemsPerPage<=c.totalResults?gapi.client.request({path:n,params:{"start-index":c.startIndex+c.itemsPerPage}}).then(o):t(new s(r))}).then(null,i)})}var o,s=i(2),n="/analytics/v3/management/accountSummaries";e.exports={get:function(e){return e&&(o=null),o||(o=r())}}},function(e,t){function i(e){this.accounts_=e,this.webProperties_=[],this.profiles_=[],this.accountsById_={},this.webPropertiesById_=this.propertiesById_={},this.profilesById_=this.viewsById_={};for(var t,i=0;t=this.accounts_[i];i++)if(this.accountsById_[t.id]={self:t},t.webProperties){r(t,"webProperties","properties");for(var o,s=0;o=t.webProperties[s];s++)if(this.webProperties_.push(o),this.webPropertiesById_[o.id]={self:o,parent:t},o.profiles){r(o,"profiles","views");for(var n,c=0;n=o.profiles[c];c++)this.profiles_.push(n),this.profilesById_[n.id]={self:n,parent:o,grandParent:t}}}}function r(e,t,i){Object.defineProperty?Object.defineProperty(e,i,{get:function(){return e[t]}}):e[i]=e[t]}i.prototype.all=function(){return this.accounts_},r(i.prototype,"all","allAccounts"),i.prototype.allWebProperties=function(){return this.webProperties_},r(i.prototype,"allWebProperties","allProperties"),i.prototype.allProfiles=function(){return this.profiles_},r(i.prototype,"allProfiles","allViews"),i.prototype.get=function(e){if(!!e.accountId+!!e.webPropertyId+!!e.propertyId+!!e.profileId+!!e.viewId>1)throw new Error('get() only accepts an object with a single property: either "accountId", "webPropertyId", "propertyId", "profileId" or "viewId"');return this.getProfile(e.profileId||e.viewId)||this.getWebProperty(e.webPropertyId||e.propertyId)||this.getAccount(e.accountId)},i.prototype.getAccount=function(e){return this.accountsById_[e]&&this.accountsById_[e].self},i.prototype.getWebProperty=function(e){return this.webPropertiesById_[e]&&this.webPropertiesById_[e].self},r(i.prototype,"getWebProperty","getProperty"),i.prototype.getProfile=function(e){return this.profilesById_[e]&&this.profilesById_[e].self},r(i.prototype,"getProfile","getView"),i.prototype.getAccountByProfileId=function(e){return this.profilesById_[e]&&this.profilesById_[e].grandParent},r(i.prototype,"getAccountByProfileId","getAccountByViewId"),i.prototype.getWebPropertyByProfileId=function(e){return this.profilesById_[e]&&this.profilesById_[e].parent},r(i.prototype,"getWebPropertyByProfileId","getPropertyByViewId"),i.prototype.getAccountByWebPropertyId=function(e){return this.webPropertiesById_[e]&&this.webPropertiesById_[e].parent},r(i.prototype,"getAccountByWebPropertyId","getAccountByPropertyId"),e.exports=i}]);
            // DateRange Selector JS
            !function(t){function e(n){if(a[n])return a[n].exports;var i=a[n]={exports:{},id:n,loaded:!1};return t[n].call(i.exports,i,i.exports,e),i.loaded=!0,i.exports}var a={};return e.m=t,e.c=a,e.p="",e(0)}([function(t,e){"use strict";gapi.analytics.ready(function(){function t(t){if(n.test(t))return t;var i=a.exec(t);if(i)return e(+i[1]);if("today"==t)return e(0);if("yesterday"==t)return e(1);throw new Error("Cannot convert date "+t)}function e(t){var e=new Date;e.setDate(e.getDate()-t);var a=String(e.getMonth()+1);a=1==a.length?"0"+a:a;var n=String(e.getDate());return n=1==n.length?"0"+n:n,e.getFullYear()+"-"+a+"-"+n}var a=/(\d+)daysAgo/,n=/\d{4}\-\d{2}\-\d{2}/;gapi.analytics.createComponent("DateRangeSelector",{execute:function(){var e=this.get();e["start-date"]=e["start-date"]||"7daysAgo",e["end-date"]=e["end-date"]||"yesterday",this.container="string"==typeof e.container?document.getElementById(e.container):e.container,e.template&&(this.template=e.template),this.container.innerHTML=this.template;var a=this.container.querySelectorAll("input");return this.startDateInput=a[0],this.startDateInput.value=t(e["start-date"]),this.endDateInput=a[1],this.endDateInput.value=t(e["end-date"]),this.setValues(),this.setMinMax(),this.container.onchange=this.onChange.bind(this),this},onChange:function(){this.setValues(),this.setMinMax(),this.emit("change",{"start-date":this["start-date"],"end-date":this["end-date"]})},setValues:function(){this["start-date"]=this.startDateInput.value,this["end-date"]=this.endDateInput.value},setMinMax:function(){this.startDateInput.max=this.endDateInput.value,this.endDateInput.min=this.startDateInput.value},template:'<div class="DateRangeSelector">  <div class="DateRangeSelector-item">    <label>Start Date</label>     <input type="date">  </div>  <div class="DateRangeSelector-item">    <label>End Date</label>     <input type="date">  </div></div>'})})}]);
            // Active Users JS
            !function(t){function i(s){if(e[s])return e[s].exports;var n=e[s]={exports:{},id:s,loaded:!1};return t[s].call(n.exports,n,n.exports,i),n.loaded=!0,n.exports}var e={};return i.m=t,i.c=e,i.p="",i(0)}([function(t,i){"use strict";gapi.analytics.ready(function(){gapi.analytics.createComponent("ActiveUsers",{initialize:function(){this.activeUsers=0,gapi.analytics.auth.once("signOut",this.handleSignOut_.bind(this))},execute:function(){this.polling_&&this.stop(),this.render_(),gapi.analytics.auth.isAuthorized()?this.pollActiveUsers_():gapi.analytics.auth.once("signIn",this.pollActiveUsers_.bind(this))},stop:function(){clearTimeout(this.timeout_),this.polling_=!1,this.emit("stop",{activeUsers:this.activeUsers})},render_:function(){var t=this.get();this.container="string"==typeof t.container?document.getElementById(t.container):t.container,this.container.innerHTML=t.template||this.template,this.container.querySelector("b").innerHTML=this.activeUsers},pollActiveUsers_:function(){var t=this.get(),i=1e3*(t.pollingInterval||5);if(isNaN(i)||5e3>i)throw new Error("Frequency must be 5 seconds or more.");this.polling_=!0,gapi.client.analytics.data.realtime.get({ids:t.ids,metrics:"rt:activeUsers"}).then(function(t){var e=t.result,s=e.totalResults?+e.rows[0][0]:0,n=this.activeUsers;this.emit("success",{activeUsers:this.activeUsers}),s!=n&&(this.activeUsers=s,this.onChange_(s-n)),1==this.polling_&&(this.timeout_=setTimeout(this.pollActiveUsers_.bind(this),i))}.bind(this))},onChange_:function(t){var i=this.container.querySelector("b");i&&(i.innerHTML=this.activeUsers),this.emit("change",{activeUsers:this.activeUsers,delta:t}),t>0?this.emit("increase",{activeUsers:this.activeUsers,delta:t}):this.emit("decrease",{activeUsers:this.activeUsers,delta:t})},handleSignOut_:function(){this.stop(),gapi.analytics.auth.once("signIn",this.handleSignIn_.bind(this))},handleSignIn_:function(){this.pollActiveUsers_(),gapi.analytics.auth.once("signOut",this.handleSignOut_.bind(this))},template:'<div class="ActiveUsers">Active Users: <b class="ActiveUsers-value"></b></div>'})})}]);
        </script>

        <script>
            // == NOTE ==
            // This code uses ES6 promises. If you want to use this code in a browser
            // that doesn't supporting promises natively, you'll have to include a polyfill.

            gapi.analytics.ready(function () {

                /**
                 * Authorize the user immediately if the user has already granted access.
                 * If no access has been created, render an authorize button inside the
                 * element with the ID "embed-api-auth-container".
                 */
                gapi.analytics.auth.authorize({
                    container: 'embed-api-auth-container',
                    clientid: '{{ $google_analytics_client_id }}'
                });


                /**
                 * Create a new ActiveUsers instance to be rendered inside of an
                 * element with the id "active-users-container" and poll for changes every
                 * five seconds.
                 */
                var activeUsers = new gapi.analytics.ext.ActiveUsers({
                    container: 'active-users-container',
                    pollingInterval: 5
                });


                /**
                 * Add CSS animation to visually show the when users come and go.
                 */
                activeUsers.once('success', function () {
                    var element = this.container.firstChild;
                    var timeout;

                    document.getElementById('embed-api-auth-container').style.display = 'none';
                    document.getElementById('analytics-dashboard').style.display = 'block';

                    this.on('change', function (data) {
                        var element = this.container.firstChild;
                        var animationClass = data.delta > 0 ? 'is-increasing' : 'is-decreasing';
                        element.className += (' ' + animationClass);

                        clearTimeout(timeout);
                        timeout = setTimeout(function () {
                            element.className =
                                    element.className.replace(/ is-(increasing|decreasing)/g, '');
                        }, 3000);
                    });
                });


                /**
                 * Create a new ViewSelector2 instance to be rendered inside of an
                 * element with the id "view-selector-container".
                 */
                var viewSelector = new gapi.analytics.ext.ViewSelector2({
                    container: 'view-selector-container',
                    propertyId: '{{ Voyager::setting("site.google_analytics_tracking_id")  }}'
                })
                        .execute();


                /**
                 * Update the activeUsers component, the Chartjs charts, and the dashboard
                 * title whenever the user changes the view.
                 */
                viewSelector.on('viewChange', function (data) {
                    var title = document.getElementById('view-name');
                    if (title) {
                        title.innerHTML = data.property.name + ' (' + data.view.name + ')';
                    }

                    // Start tracking active users for this view.
                    activeUsers.set(data).execute();

                    // Render all the of charts for this view.
                    renderWeekOverWeekChart(data.ids);
                    renderYearOverYearChart(data.ids);
                    renderTopBrowsersChart(data.ids);
                    renderTopCountriesChart(data.ids);
                });


                /**
                 * Draw the a chart.js line chart with data from the specified view that
                 * overlays session data for the current week over session data for the
                 * previous week.
                 */
                function renderWeekOverWeekChart(ids) {

                    // Adjust `now` to experiment with different days, for testing only...
                    var now = moment(); // .subtract(3, 'day');

                    var thisWeek = query({
                        'ids': ids,
                        'dimensions': 'ga:date,ga:nthDay',
                        'metrics': 'ga:users',
                        'start-date': moment(now).subtract(1, 'day').day(0).format('YYYY-MM-DD'),
                        'end-date': moment(now).format('YYYY-MM-DD')
                    });

                    var lastWeek = query({
                        'ids': ids,
                        'dimensions': 'ga:date,ga:nthDay',
                        'metrics': 'ga:users',
                        'start-date': moment(now).subtract(1, 'day').day(0).subtract(1, 'week')
                                .format('YYYY-MM-DD'),
                        'end-date': moment(now).subtract(1, 'day').day(6).subtract(1, 'week')
                                .format('YYYY-MM-DD')
                    });

                    Promise.all([thisWeek, lastWeek]).then(function (results) {

                        var data1 = results[0].rows.map(function (row) {
                            return +row[2];
                        });
                        var data2 = results[1].rows.map(function (row) {
                            return +row[2];
                        });
                        var labels = results[1].rows.map(function (row) {
                            return +row[0];
                        });

                        labels = labels.map(function (label) {
                            return moment(label, 'YYYYMMDD').format('ddd');
                        });

                        var data = {
                            labels: labels,
                            datasets: [
                                {
                                    label: '{{ __('date.last_week') }}',
                                    fillColor: 'rgba(220,220,220,0.5)',
                                    strokeColor: 'rgba(220,220,220,1)',
                                    pointColor: 'rgba(220,220,220,1)',
                                    pointStrokeColor: '#fff',
                                    data: data2
                                },
                                {
                                    label: '{{ __('date.this_week') }}',
                                    fillColor: 'rgba(151,187,205,0.5)',
                                    strokeColor: 'rgba(151,187,205,1)',
                                    pointColor: 'rgba(151,187,205,1)',
                                    pointStrokeColor: '#fff',
                                    data: data1
                                }
                            ]
                        };

                        new Chart(makeCanvas('chart-1-container')).Line(data);
                        generateLegend('legend-1-container', data.datasets);
                    });
                }


                /**
                 * Draw the a chart.js bar chart with data from the specified view that
                 * overlays session data for the current year over session data for the
                 * previous year, grouped by month.
                 */
                function renderYearOverYearChart(ids) {

                    // Adjust `now` to experiment with different days, for testing only...
                    var now = moment(); // .subtract(3, 'day');

                    var thisYear = query({
                        'ids': ids,
                        'dimensions': 'ga:month,ga:nthMonth',
                        'metrics': 'ga:users',
                        'start-date': moment(now).date(1).month(0).format('YYYY-MM-DD'),
                        'end-date': moment(now).format('YYYY-MM-DD')
                    });

                    var lastYear = query({
                        'ids': ids,
                        'dimensions': 'ga:month,ga:nthMonth',
                        'metrics': 'ga:users',
                        'start-date': moment(now).subtract(1, 'year').date(1).month(0)
                                .format('YYYY-MM-DD'),
                        'end-date': moment(now).date(1).month(0).subtract(1, 'day')
                                .format('YYYY-MM-DD')
                    });

                    Promise.all([thisYear, lastYear]).then(function (results) {
                        var data1 = results[0].rows.map(function (row) {
                            return +row[2];
                        });
                        var data2 = results[1].rows.map(function (row) {
                            return +row[2];
                        });
                        var labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

                        // Ensure the data arrays are at least as long as the labels array.
                        // Chart.js bar charts don't (yet) accept sparse datasets.
                        for (var i = 0, len = labels.length; i < len; i++) {
                            if (data1[i] === undefined) data1[i] = null;
                            if (data2[i] === undefined) data2[i] = null;
                        }

                        var data = {
                            labels: labels,
                            datasets: [
                                {
                                    label: '{{ __('date.last_year') }}',
                                    fillColor: 'rgba(220,220,220,0.5)',
                                    strokeColor: 'rgba(220,220,220,1)',
                                    data: data2
                                },
                                {
                                    label: '{{ __('date.this_year') }}',
                                    fillColor: 'rgba(151,187,205,0.5)',
                                    strokeColor: 'rgba(151,187,205,1)',
                                    data: data1
                                }
                            ]
                        };

                        new Chart(makeCanvas('chart-2-container')).Bar(data);
                        generateLegend('legend-2-container', data.datasets);
                    })
                            .catch(function (err) {
                                console.error(err.stack);
                            });
                }


                /**
                 * Draw the a chart.js doughnut chart with data from the specified view that
                 * show the top 5 browsers over the past seven days.
                 */
                function renderTopBrowsersChart(ids) {

                    query({
                        'ids': ids,
                        'dimensions': 'ga:browser',
                        'metrics': 'ga:pageviews',
                        'sort': '-ga:pageviews',
                        'max-results': 5
                    })
                            .then(function (response) {

                                var data = [];
                                var colors = ['#4D5360', '#949FB1', '#D4CCC5', '#E2EAE9', '#F7464A'];

                                response.rows.forEach(function (row, i) {
                                    data.push({value: +row[1], color: colors[i], label: row[0]});
                                });

                                new Chart(makeCanvas('chart-3-container')).Doughnut(data);
                                generateLegend('legend-3-container', data);
                            });
                }


                /**
                 * Draw the a chart.js doughnut chart with data from the specified view that
                 * compares sessions from mobile, desktop, and tablet over the past seven
                 * days.
                 */
                function renderTopCountriesChart(ids) {
                    query({
                        'ids': ids,
                        'dimensions': 'ga:country',
                        'metrics': 'ga:sessions',
                        'sort': '-ga:sessions',
                        'max-results': 5
                    })
                            .then(function (response) {

                                var data = [];
                                var colors = ['#4D5360', '#949FB1', '#D4CCC5', '#E2EAE9', '#F7464A'];

                                response.rows.forEach(function (row, i) {
                                    data.push({
                                        label: row[0],
                                        value: +row[1],
                                        color: colors[i]
                                    });
                                });

                                new Chart(makeCanvas('chart-4-container')).Doughnut(data);
                                generateLegend('legend-4-container', data);
                            });
                }


                /**
                 * Extend the Embed APIs `gapi.analytics.report.Data` component to
                 * return a promise the is fulfilled with the value returned by the API.
                 * @param {Object} params The request parameters.
                 * @return {Promise} A promise.
                 */
                function query(params) {
                    return new Promise(function (resolve, reject) {
                        var data = new gapi.analytics.report.Data({query: params});
                        data.once('success', function (response) {
                            resolve(response);
                        })
                                .once('error', function (response) {
                                    reject(response);
                                })
                                .execute();
                    });
                }


                /**
                 * Create a new canvas inside the specified element. Set it to be the width
                 * and height of its container.
                 * @param {string} id The id attribute of the element to host the canvas.
                 * @return {RenderingContext} The 2D canvas context.
                 */
                function makeCanvas(id) {
                    var container = document.getElementById(id);
                    var canvas = document.createElement('canvas');
                    var ctx = canvas.getContext('2d');

                    container.innerHTML = '';
                    canvas.width = container.offsetWidth;
                    canvas.height = container.offsetHeight;
                    container.appendChild(canvas);

                    return ctx;
                }


                /**
                 * Create a visual legend inside the specified element based off of a
                 * Chart.js dataset.
                 * @param {string} id The id attribute of the element to host the legend.
                 * @param {Array.<Object>} items A list of labels and colors for the legend.
                 */
                function generateLegend(id, items) {
                    var legend = document.getElementById(id);
                    legend.innerHTML = items.map(function (item) {
                        var color = item.color || item.fillColor;
                        var label = item.label;
                        return '<li><i style="background:' + color + '"></i>' + label + '</li>';
                    }).join('');
                }


                // Set some global Chart.js defaults.
                Chart.defaults.global.animationSteps = 60;
                Chart.defaults.global.animationEasing = 'easeInOutQuart';
                Chart.defaults.global.responsive = true;
                Chart.defaults.global.maintainAspectRatio = false;

                // resize to redraw charts
                window.dispatchEvent(new Event('resize'));

            });

        </script>

    @endif

@stop
