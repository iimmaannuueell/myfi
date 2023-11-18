<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="mpay" />
  <meta name="keywords" content="mpay" />
  <meta name="author" content="mpay" />
  <link rel="manifest" href="manifest.json" />
  <link rel="icon" href="assets/images/logo/favicon.png" type="image/x-icon" />
  <title>mPay App</title>
  <link rel="apple-touch-icon" href="assets/images/logo/favicon.png" />
  <meta name="theme-color" content="#122636" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="apple-mobile-web-app-title" content="mpay" />
  <meta name="msapplication-TileImage" content="assets/images/logo/favicon.png" />
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!--Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&amp;display=swap" rel="stylesheet" />

  <!-- iconsax css -->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/iconsax.css" />


  <!-- bootstrap css -->
  <link rel="stylesheet" id="rtl-link" type="text/css" href="assets/css/vendors/bootstrap.min.css" />

  <!-- swiper css -->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/swiper-bundle.min.css" />

  <!-- Theme css -->
  <link rel="stylesheet" id="change-link" type="text/css" href="assets/css/style.css" />
</head>

<body class="dark">
  <!-- side bar start -->
  <div class="offcanvas sidebar-offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft">
    <div class="offcanvas-header sidebar-header">
      <div class="sidebar-logo">
        <img class="img-fluid logo" src="assets/images/logo/logo.png" alt="logo" />
      </div>
      <div class="balance">
        <img class="img-fluid balance-bg" src="assets/images/background/auth-bg.jpg" alt="auth-bg" />
        <h5>Balance</h5>
        <h2>$1,06,786.65</h2>
      </div>
    </div>
    <div class="offcanvas-body">
      <div class="sidebar-content">
        <ul class="link-section">
          <li>
            <a href="landing.html" class="pages">
              <i class="sidebar-icon" data-feather="credit-card"></i>
              <h3>mPay</h3>
            </a>
          </li>
          <li>
            <a href="crypto.html" class="pages">
              <i class="sidebar-icon" data-feather="dollar-sign"></i>
              <h3>Crypto</h3>
            </a>
          </li>
          <li>
            <a href="page-list.html" class="pages">
              <i class="sidebar-icon" data-feather="file-text"></i>
              <h3>Theme Pages</h3>
            </a>
          </li>
          <li>
            <a href="component.html" class="pages">
              <i class="sidebar-icon" data-feather="command"></i>
              <h3>Theme Components</h3>
            </a>
          </li>

          <li>
            <a href="profile.html" class="pages">
              <i class="sidebar-icon" data-feather="user"></i>
              <h3>Profile</h3>
            </a>
          </li>

          <li>
            <a href="signin.html" class="pages">
              <i class="sidebar-icon" data-feather="log-out"></i>
              <h3>Log out</h3>
            </a>
          </li>
        </ul>
        <div class="mode-switch">
          <ul class="switch-section">
            <li>
              <h3>RTL</h3>
              <div class="switch-btn">
                <input id="dir-switch" type="checkbox" />
              </div>
            </li>
            <li>
              <h3>Dark</h3>
              <div class="switch-btn">
                <input id="dark-switch" type="checkbox" />
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- side bar end -->

  <!-- header start -->
  <header class="section-t-space">
    <div class="custom-container">
      <div class="header-panel">
        <a class="sidebar-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">
          <i class="menu-icon" data-feather="menu"></i>
        </a>
        {{-- <img class="img-fluid logo" src="assets/images/logo/logo.png" alt="logo" /> --}}
        <h2>Oct 2023</h2> 
        
        <a href="notification.html" class="notification">
          <i class="notification-icon" data-feather="bell"></i>
        </a>
      </div>
    </div>
  </header>
  <!-- header end -->

    <!-- card start -->
  <section>
    <div class="custom-container">
      <div class="crypto-wallet-box">
        <div class="card-details">
          <div class="d-block w-75">
            <h5 class="fw-semibold">Net Worth</h5>
            <h2 class="mt-2">₦ 1,06,786.65</h2>
          </div>
          <div class="price-difference">
            <i class="menu-icon" data-feather="arrow-up"></i>
            <h6>8.56% (+253BTC)</h6>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- card end -->

  <!-- card start -->
  <section class="categories-section section-b-space">
    <div class="swiper portfolio">
      <div class="swiper-wrapper">
          <div class="swiper-slide">
              <div class="portfolio-box">
                  <a href="coin-details.html">
                      <div class="d-flex align-items-center gap-2 pb-3">
                          <div class="service-box">
                              <i class="iconsax service-icon" data-icon="bank"></i>
                          </div>
                          <div class="portfolio-details">
                              <div>
                                  <h3>Access Bsnk</h3>
                                  <h6 class="success-color fw-normal">+11%</h6>
                              </div>
                              {{-- <img class="img-fluid" src="assets/images/svg/success-chart.svg"
                                  alt="success-chart" /> --}}
                          </div>
                      </div>
                      <ul class="currency-amount">
                          <li class="light-text">₦45,875.98</li>
                          <li class="dark-text">-12.77 <span>(8%)</span></li>
                      </ul>
                  </a>
              </div>
          </div>
          <div class="swiper-slide">
              <div class="portfolio-box">
                  <a href="coin-details.html">
                      <div class="d-flex align-items-center gap-2 pb-3">
                          <div class="service-box">
                              <i class="categories-icon" data-feather="arrow-down"></i>
                          </div>
                          <div class="portfolio-details">
                              <div>
                                  <h3>Expenses</h3>
                                  <h6 class="error-color fw-normal">-18%</h6>
                              </div>
                              <img class="img-fluid" src="assets/images/svg/lost-chart.svg"
                                  alt="lost-chart" />
                          </div>
                      </div>
                      <ul class="currency-amount">
                          <li class="light-text">$20,256.28</li>
                          <li class="dark-text">+10.77 <span>(20%)</span></li>
                      </ul>
                  </a>
              </div>
          </div>
          <div class="swiper-slide">
              <div class="portfolio-box">
                  <a href="coin-details.html">
                      <div class="d-flex align-items-center gap-2 pb-3">
                          {{-- <div class="portfolio-img">
                              <i class="iconsax service-icon" data-icon="wallet-open-tick"></i>
                          </div> --}}
                          <div class="service-box">
                              <i class="iconsax service-icon" data-icon="wallet-open-tick"></i>
                          </div>
                          <div class="portfolio-details">
                              <div>
                                  <h3>Savingss</h3>
                                  <h6 class="error-color fw-normal">-25%</h6>
                              </div>
                              <img class="img-fluid" src="assets/images/svg/lost-chart.svg"
                                  alt="lost-chart" />
                          </div>
                      </div>
                      <ul class="currency-amount">
                          <li class="light-text">$20,256.28</li>
                          <li class="dark-text">+10.77 <span>(20%)</span></li>
                      </ul>
                  </a>
              </div>
          </div>
          <div class="swiper-slide">
              <div class="portfolio-box">
                  <a href="coin-details.html">
                      <div class="d-flex align-items-center gap-2 pb-3">
                          <div class="service-box">
                              <i class="service-icon" data-feather="bar-chart-2"></i>
                          </div>
                          <div class="portfolio-details">
                              <div>
                                  <h3>Investments</h3>
                                  <h6 class="success-color fw-normal">+30%</h6>
                              </div>
                              <img class="img-fluid" src="assets/images/svg/success-chart.svg"
                                  alt="success-chart" />
                          </div>
                      </div>
                      <ul class="currency-amount">
                          <li class="light-text">$10,256.30</li>
                          <li class="dark-text">-20.05 <span>(12%)</span></li>
                      </ul>
                  </a>
              </div>
          </div>
      </div>
    </div>
  </section>
  <!-- card end -->

   <!-- monthly statistics section starts -->
  <section>
    <div class="custom-container">
      <div class="statistics-banner">
        <div class="d-flex justify-content-center gap-3">
          <div class="statistics-image">
            <i class="icon" data-feather="bar-chart-2"></i>
          </div>
          <div class="statistics-content d-block">
            <h5>Monthly Statistics</h5>
            <h6>30% better performance than previous</h6>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- monthly statistics section end -->

  <!-- categories section starts -->
  {{-- <section class="categories-section section-b-space">
    <div class="custom-container">
      <ul class="categories-list">
        <li>
          <a href="transfer.html">
            <div class="categories-box">
              <i class="categories-icon" data-feather="repeat"></i>
            </div>
            <h5 class="mt-2 text-center">Transfer</h5>
          </a>
        </li>
        <li>
          <a href="bill.html">
            <div class="categories-box">
              <i class="categories-icon" data-feather="file-text"></i>
            </div>
            <h5 class="mt-2 text-center">Bill</h5>
          </a>
        </li>
        <li>
          <a href="request.html">
            <div class="categories-box">
              <i class="categories-icon icon1" data-feather="log-in"></i>
            </div>
            <h5 class="mt-2 text-center">Request</h5>
          </a>
        </li>
        <li>
          <a href="withdraw.html">
            <div class="categories-box">
              <i class="iconsax categories-icon" data-icon="bank"></i>
            </div>
            <h5 class="mt-2 text-center">Withdraw</h5>
          </a>
        </li>
      </ul>
    </div>
  </section> --}}
  <!-- categories section end -->

  <!-- service section starts -->
  {{-- <section>
    <div class="custom-container">
      <div class="title">
        <h2>Select service</h2>
        <a href="service.html">See all</a>
      </div>
      <div class="row gy-3">
        <div class="col-3">
          <a href="service.html">
            <div class="service-box">
              <i class="service-icon" data-feather="activity"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Electricity</h5>
          </a>
        </div>

        <div class="col-3">
          <a href="service.html">
            <div class="service-box">
              <i class="service-icon" data-feather="droplet"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Water</h5>
          </a>
        </div>
        <div class="col-3">
          <a href="service.html">
            <div class="service-box">
              <i class="service-icon" data-feather="wifi"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Internet</h5>
          </a>
        </div>

        <div class="col-3">
          <a href="service.html">
            <div class="service-box">
              <i class="service-icon" data-feather="monitor"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Television</h5>
          </a>
        </div>
        <div class="col-3">
          <a href="service.html">
            <div class="service-box">
              <i class="service-icon" data-feather="bar-chart-2"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Investment</h5>
          </a>
        </div>
        <div class="col-3">
          <a href="service.html">
            <div class="service-box">
              <i class="service-icon" data-feather="tablet"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Mobile</h5>
          </a>
        </div>
        <div class="col-3">
          <a href="service.html">
            <div class="service-box">
              <i class="service-icon" data-feather="plus-square"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Medical</h5>
          </a>
        </div>
        <div class="col-3">
          <a href="service.html">
            <div class="service-box">
              <i class="service-icon" data-feather="more-horizontal"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Other</h5>
          </a>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- service section end --

    <!-- saving plans section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>My Saving Plans</h2>
        <a href="saving-plans.html">See all</a>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="saving-plan-box">
            <div class="saving-plan-icon">
              <img class="img-fluid" src="assets/images/svg/10.svg" alt="p10" />
            </div>
            <h3>New Car</h3>
            <h6>Amount left</h6>
            <div class="progress" role="progressbar" aria-label="progressbar" aria-valuenow="0" aria-valuemin="0"
              aria-valuemax="100">
              <div class="progress-bar bar1"></div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <h5 class="theme-color">$2,000.00</h5>
              <img class="img-fluid arrow" src="assets/images/svg/arrow.svg" alt="arrow" />
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="saving-plan-box">
            <div class="saving-plan-icon">
              <img class="img-fluid" src="assets/images/svg/11.svg" alt="p11" />
            </div>
            <h3>Grand Home</h3>
            <h6>Amount left</h6>
            <div class="progress" role="progressbar" aria-label="progressbar" aria-valuenow="0" aria-valuemin="0"
              aria-valuemax="100">
              <div class="progress-bar bar2"></div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <h5 class="theme-color">$2,000.00</h5>
              <img class="img-fluid arrow" src="assets/images/svg/arrow.svg" alt="arrow" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- saving plans section end -->

  <!-- bill details section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>Bills Detail</h2>
        <a href="bill.html">See all</a>
      </div>
      <div class="row g-3">
        <div class="col-md-3 col-6">
          <div class="bill-box">
            <div class="d-flex gap-3">
              <div class="bill-icon">
                <img class="img-fluid icon" src="assets/images/svg/6.svg" alt="p6" />
              </div>
              <div class="bill-details">
                <h5 class="dark-text">Airtel</h5>
                <h6 class="light-text mt-2">Pre-paid</h6>
              </div>
            </div>
            <div class="bill-price">
              <h5>$69.49</h5>
              <a href="#pay" data-bs-toggle="modal" class="btn bill-pay bill-paid">Pay</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="bill-box">
            <div class="d-flex gap-3">
              <div class="bill-icon">
                <img class="img-fluid icon" src="assets/images/svg/7.svg" alt="p7" />
              </div>
              <div class="bill-details">
                <h5 class="dark-text">Apple</h5>
                <h6 class="light-text mt-2">Subscription</h6>
              </div>
            </div>
            <div class="bill-price">
              <h5>$49.85</h5>
              <a href="#pay" data-bs-toggle="modal" class="btn bill-pay bill-paid">Pay</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="bill-box">
            <div class="d-flex gap-3">
              <div class="bill-icon">
                <img class="img-fluid icon" src="assets/images/svg/8.svg" alt="p8" />
              </div>
              <div class="bill-details">
                <h5 class="dark-text">TV</h5>
                <h6 class="light-text mt-2">Connection</h6>
              </div>
            </div>
            <div class="bill-price">
              <h5>$99.99</h5>
              <a href="#pay" data-bs-toggle="modal" class="btn bill-pay bill-paid">Pay</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="bill-box">
            <div class="d-flex gap-3">
              <div class="bill-icon">
                <img class="img-fluid icon" src="assets/images/svg/9.svg" alt="p9" />
              </div>
              <div class="bill-details">
                <h5 class="dark-text">Torrent</h5>
                <h6 class="light-text mt-2">Electricity</h6>
              </div>
            </div>
            <div class="bill-price">
              <h5>$60.49</h5>
              <a href="#pay" data-bs-toggle="modal" class="btn bill-pay bill-paid">Pay</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- bill details section starts -->

    <!-- Transaction section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>Transaction</h2>
        <a href="transaction-history.html">See all</a>
      </div>

      <div class="row gy-3">
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.html" class="d-flex gap-3">
              <div class="transaction-image">
                <img class="img-fluid transaction-icon" src="assets/images/svg/1.svg" alt="p1" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Amazon prime</h5>
                  <h3 class="error-color">$199.<span>99</span></h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">Subscription</h5>
                  <h5 class="light-text">8:45 am</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.html" class="d-flex gap-3">
              <div class="transaction-image">
                <img class="img-fluid transaction-icon" src="assets/images/svg/2.svg" alt="p2" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Apple store</h5>
                  <h3 class="success-color">$60.<span>30</span></h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">Installment</h5>
                  <h5 class="light-text">9:00 pm</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.html" class="d-flex gap-3">
              <div class="transaction-image">
                <img class="img-fluid transaction-icon" src="assets/images/svg/3.svg" alt="p3" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Grocery shop</h5>
                  <h3 class="error-color">$55.<span>20</span></h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">Purchase</h5>
                  <h5 class="light-text">20 May</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.html" class="d-flex gap-3">
              <div class="transaction-image">
                <img class="img-fluid transaction-icon" src="assets/images/svg/4.svg" alt="p4" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Sanpchat sub</h5>
                  <h3 class="success-color">$18.<span>10</span></h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">Bill pay</h5>
                  <h5 class="light-text">19 May</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.html" class="d-flex gap-3">
              <div class="transaction-image">
                <img class="img-fluid transaction-icon" src="assets/images/svg/5.svg" alt="p5" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Spotify music</h5>
                  <h3 class="success-color">$20.<span>50</span></h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">Transfer</h5>
                  <h5 class="light-text">18 May</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Transaction section end -->

  <!-- panel-space start -->
  <section class="panel-space"></section>
  <!-- panel-space end -->

  <!-- bottom navbar start -->

  <div class="navbar-menu">
    <div class="scanner-bg">
      <a href="scan-pay.html" class="scanner-btn">
        <img class="img-fluid" src="assets/images/svg/scan.svg" alt="scan" />
      </a>
    </div>
    <ul>
      <li class="active">
        <a href="landing.html">
          <div class="icon">
            <img class="unactive" src="assets/images/svg/mpay.svg" alt="mPay" />
            <img class="active" src="assets/images/svg/mpay-fill.svg" alt="mPay" />
          </div>
          <h5 class="active">mPay</h5>
        </a>
      </li>

      <li>
        <a href="crypto.html">
          <div class="icon">
            <img class="unactive" src="assets/images/svg/bitcoin.svg" alt="categories" />
            <img class="active" src="assets/images/svg/bitcoin-fill.svg" alt="categories" />
          </div>
          <h5>Crypto</h5>
        </a>
      </li>

      <li></li>

      <li>
        <a href="insight.html">
          <div class="icon">
            <img class="unactive" src="assets/images/svg/bar-chart.svg" alt="bag" />
            <img class="active" src="assets/images/svg/bar-chart-fill.svg" alt="bag" />
          </div>
          <h5>Insight</h5>
        </a>
      </li>

      <li>
        <a href="profile.html">
          <div class="icon">
            <img class="unactive" src="assets/images/svg/user.svg" alt="profile" />
            <img class="active" src="assets/images/svg/user-fill.svg" alt="profile" />
          </div>
          <h5>Profile</h5>
        </a>
      </li>
    </ul>
  </div>
  <!-- bottom navbar end -->

  <!-- add money modal start -->
  <div class="modal add-money-modal fade" id="add-money" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Add Money</h2>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="inputcard" class="form-label mb-2">From</label>
            <div class="d-flex gap-2">
              <select id="inputcard" class="form-select">
                <option selected>**** **** **** 1566 - Saving a/c</option>
                <option>**** **** **** 1566 - Saving a/c</option>
                <option>**** **** **** 1566 - Saving a/c</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputamount" class="form-label mb-2">Amount</label>
            <div class="form-input">
              <input type="number" class="form-control" id="inputamount" />
            </div>
          </div>
          <a href="landing.html" class="btn theme-btn successfully w-100">Deposit</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- add money modal end -->

  <!-- pay modal starts -->
  <div class="modal pay-modal fade" id="pay" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Apple Bill Detail</h2>
        </div>
        <div class="modal-body">
          <ul class="details-list">
            <li>
              <h3 class="fw-normal dark-text">Amount</h3>
              <h3 class="fw-semibold theme-color">$49.85</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Bill date</h3>
              <h3 class="fw-normal light-text">10 May, 2023</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Due Date</h3>
              <h3 class="fw-normal error-color">31 May, 2023</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Bill number</h3>
              <h3 class="fw-normal light-text">BM452695523</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Mobile number</h3>
              <h3 class="fw-normal light-text">+91 ***** **256</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Bill status</h3>
              <h3 class="fw-semibold error-color">Unpaid</h3>
            </li>
          </ul>
          <a href="make-payment.html" class="btn theme-btn successfully w-100">Pay</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- pay modal end -->

  <!-- paid modal starts -->
  <div class="modal pay-modal fade" id="paid" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Mobile Bill Detail</h2>
        </div>
        <div class="modal-body">
          <ul class="details-list">
            <li>
              <h3 class="fw-normal dark-text">Amount</h3>
              <h3 class="fw-semibold theme-color">$69.49</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Bill date</h3>
              <h3 class="fw-normal light-text">10 May, 2023</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Due Date</h3>
              <h3 class="fw-normal light-text">22 May, 2023</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Bill number</h3>
              <h3 class="fw-normal light-text">BM452695523</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Mobile number</h3>
              <h3 class="fw-normal light-text">+91 ***** **256</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Bill status</h3>
              <h3 class="fw-semibold theme-color">Paid</h3>
            </li>
          </ul>
          <a href="landing.html" class="btn theme-btn successfully w-100">Paid - Thank you !</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- paid modal end -->

  <!-- swiper js -->
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/custom-swiper.js"></script>

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- iconsax js -->
  <script src="assets/js/iconsax.js"></script>

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- homescreen popup js -->
  <script src="assets/js/homescreen-popup.js"></script>

  <!-- PWA offcanvas popup js -->
  <script src="assets/js/offcanvas-popup.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>


</html>