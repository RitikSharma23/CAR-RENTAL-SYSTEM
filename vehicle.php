<?php
ob_start();

require 'check.php';
?>

<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment  icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"
                    ></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"
                    ></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"
                    ></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"
                    ></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item ">
              <a href="home.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Home</div>
              </a>
            </li>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="vehicle.php" class="menu-link">
                
                <i class="menu-icon tf-icons bx bx-car"></i>
                <div data-i18n="Analytics">Vehicles</div>
              </a>
            </li>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item ">
              <a href="taxes.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div data-i18n="Analytics">Taxes</div>
              </a>
            </li>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item ">
              <a href="customer.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Customers</div>
              </a>
            </li>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item ">
              <a href="invoices.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-credit-card-front"></i>
                <div data-i18n="Analytics">Invoices</div>
              </a>
            </li>

    
            
            
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->

                <!-- Layout container -->
                <div class="layout-page">
                  <!-- Navbar -->
        
                  <nav
                    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar"
                  >
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                      </a>
                    </div>
        
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                      <!-- Search -->
                     
                      <!-- /Search -->
        
                      <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- Place this tag where you want the button to render. -->
                    
        
                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <div class="avatar avatar-online">
                              <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                              <a class="dropdown-item" href="#">
                                <div class="d-flex">
                                  <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                      <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                  </div>
                                  <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">John Doe</span>
                                    <small class="text-muted">Admin</small>
                                  </div>
                                </div>
                              </a>
                            </li>
                            <li>
                              <div class="dropdown-divider"></div>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">
                                <i class="bx bx-user me-2"></i>
                                <span class="align-middle">My Profile</span>
                              </a>
                            </li>
                   
                            <li>
                              <div class="dropdown-divider"></div>
                            </li>
                            <li id="logoutbtn">
                              <a class="dropdown-item" >
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle" >Log Out</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <!--/ User -->
                      </ul>
                    </div>
                  </nav>
        
                  <!-- / Navbar -->
        
                  <!-- Content wrapper -->

                  <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">




              <!-- Bootstrap modals -->
              


                    <!-- Default Modal -->
                    <div class="col-lg-4 col-md-6">
                      <div class="mt-3">
                        <!-- Button trigger modal -->
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#basicModal"
                        >
                          Add Vehicles
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Add Vehicles</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="vname" class="form-label">Vehicle Name</label>
                                    <input type="text"  id="vname" class="form-control" placeholder="Vehicle Name" />
                                  </div>
                                </div>

                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="vnumber" class="form-label">Vehicle No</label>
                                    <input type="text"  id="vnumber" class="form-control" placeholder="Vehicle No" style="text-transform:uppercase" />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="vserial" class="form-label">Serial No</label>
                                    <input type="text"  id="vserial" class="form-control" placeholder="Serial No" style="text-transform:uppercase"/>
                                  </div>
                                </div>

                                 <div class="divider divider-success">
                                  <div class="divider-text">LOCAL TRIP</div>
                                </div>
     

                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="local_km_range" class="form-label">KM Range</label>
                                    <input type="number"  id="local_km_range" class="form-control" placeholder="KM Range" />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="local_km_rate" class="form-label">Rate</label>
                                    <input type="number"  id="local_km_rate" class="form-control" placeholder="Rate" />
                                  </div>
                                </div>

                                
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="local_ext_km" class="form-label">Per Extra KM Charge</label>
                                    <input type="number"  id="local_ext_km" class="form-control" placeholder="Per Extra KM Charge" />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="local_ext_hour" class="form-label">Per Extra Hour Charge</label>
                                    <input type="number"  id="local_ext_hour" class="form-control" placeholder="Per Extra Hour Charge" />
                                  </div>

                                  <div class="divider divider-warning">
                                    <div class="divider-text">OUTSTATION TRIP</div>
                                  </div>

                                </div>

                                
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="out_km_range" class="form-label">KM Range</label>
                                    <input type="number"  id="out_km_range" class="form-control" placeholder="KM Range" />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="out_km_rate" class="form-label">Rate</label>
                                    <input type="number"  id="out_km_rate" class="form-control" placeholder="Rate" />
                                  </div>
                                </div>

                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="out_ext_km" class="form-label">Per Extra KM Charge</label>
                                    <input type="number"  id="out_ext_km" class="form-control" placeholder="Per Extra KM Charge" />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="out_ext_hour" class="form-label">Per Extra Hour Charge</label>
                                    <input type="number"  id="out_ext_hour" class="form-control" placeholder="Per Extra Hour Charge" />
                                  </div>

                                  <!-- <hr class="m-0" /> -->
                                </div>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" id="addclose">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary" id="add">Add Vehicle</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- Slide from Top Modal -->
                    <div class="col-lg-4 col-md-6">
                      <div class="mt-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTop" id="editbtn" hidden>
                          Edit Vehicle
                        </button>

                        <!-- Modal -->
                        <div class="modal modal-top fade" id="modalTop" tabindex="-1">
                          <div class="modal-dialog">
                            <form class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalTopTitle">Edit Vehicle</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="evname" class="form-label">Vehicle Name</label>
                                    <input
                                      type="text"
                                      id="evname"
                                      class="form-control"
                                      placeholder="Vehicle Name"
                                    />
                                  </div>
                                </div>

                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="evnumber" class="form-label">Vehicle No</label>
                                    <input
                                      type="text"
                                      id="evnumber"
                                      class="form-control"
                                      placeholder="Vehicle No"
                                      style="text-transform:uppercase"
                                      disabled
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="evserial" class="form-label">Serial No</label>
                                    <input
                                      type="text"
                                      id="evserial"
                                      class="form-control"
                                      placeholder="Serial No"
                                      style="text-transform:uppercase"
                                    />
                                  </div>
                                </div>

<!-- =================================  local trip =================================== -->
                                <div class="divider divider-success">
                                  <div class="divider-text">LOCAL TRIP</div>
                                </div>

                                
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="evno" class="form-label">Km Range</label>
                                    <input
                                      type="text"
                                      id="elocal_km_range"
                                      class="form-control"
                                      placeholder="KM Range"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="evsn" class="form-label">KM Rate</label>
                                    <input
                                      type="text"
                                      id="elocal_km_rate"
                                      class="form-control"
                                      placeholder="KM Rate"
                                    />
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="evno" class="form-label">Per Extra KM Charge</label>
                                    <input
                                      type="text"
                                      id="elocal_ext_km"
                                      class="form-control"
                                      placeholder="KM Charge"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="evsn" class="form-label">Per Extra Hour Charge</label>
                                    <input
                                      type="text"
                                      id="elocal_ext_hour"
                                      class="form-control"
                                      placeholder="Hour Charge"
                                    />
                                  </div>
                                </div>

<!-- =================================  global trip =================================== -->

                                <div class="divider divider-warning">
                                  <div class="divider-text">GLOBAL TRIP</div>
                                </div>


                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="evno" class="form-label">Km Range</label>
                                    <input
                                      type="text"
                                      id="eout_km_range"
                                      class="form-control"
                                      placeholder="KM Range"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="evsn" class="form-label">KM Rate</label>
                                    <input
                                      type="text"
                                      id="eout_km_rate"
                                      class="form-control"
                                      placeholder="KM Rate"
                                    />
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="evno" class="form-label">Per Extra KM Charge</label>
                                    <input
                                      type="text"
                                      id="eout_ext_km"
                                      class="form-control"
                                      placeholder="KM Charge"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="evsn" class="form-label">Per Extra Hour Charge</label>
                                    <input
                                      type="text"
                                      id="eout_ext_hour"
                                      class="form-control"
                                      placeholder="Hour Charge"
                                    />
                                  </div>
                                </div>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" id="editclose">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary" id="editsave">Save Changes</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                   
                
              <!--/ Bootstrap modals -->

              <div class="card" >
                <h5 class="card-header"></h5>
                <div class="table-responsive text-nowrap" style="min-height: 400px;">
                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th>Vehicle Number</th>
                        <th>Vehicle Name</th>
                        <th>Vehicle Serial</th>
                        <th>Local KM <br>Range</th>
                        <th>Local KM <br>Rate</th>
                        <th>Local Ext. <br>Km C</th>
                        <th>Local Ext. <br>Hour c</th>
                        <th>Out KM <br> Range</th>
                        <th>Out KM <br> Rate</th>
                        <th>Out Ext. <br> Km C</th>
                        <th>Out Ext. <br> Hour C</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody class="table-border-bottom-0" id="table-body">
                     
                      

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
                
                  <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
       
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
 

    <script>

      $('#logoutbtn').click(function() {
    $.ajax({
      url: 'logout.php', // replace with your PHP page path
      success: function(response) {
        $('#included-content').html(response);
        location.reload();
      }
    });
  });














 

async function addvehicle() {
  function loaddata() {
  let isEmpty = false;
  const fieldIds = [
    "vname",
    "vnumber",
    "vserial",
    "local_km_range",
    "local_km_rate",
    "local_ext_km",
    "local_ext_hour",
    "out_km_range",
    "out_km_rate",
    "out_ext_km",
    "out_ext_hour",
  ];

  const newform = new FormData();
  newform.append("obj", "vehicle_add");

  fieldIds.forEach((fieldId) => {
    const fieldValue = document.getElementById(fieldId).value;
    if (!fieldValue) {
      isEmpty = true;
      document.getElementById(fieldId).focus();
      return;
    }
    newform.append(fieldId, fieldValue);
  });

  // if any field is empty, return a Promise.reject with an error message
  if (isEmpty) {
    return Promise.reject("Please fill all fields.");
  }

  // if all fields are filled, send the data using fetch()
  return fetch("API/car.php", {
    method: "POST",
    body: newform,
    mode: "cors",
    credentials: "include",
  }).then((response) => response.json());
}


  let data = await loaddata();

  console.log(data)


  if(data.message){
    const button = document.getElementById("addclose");
    button.click();
    document.getElementById("vname").value=""
    document.getElementById("vnumber").value=""
    document.getElementById("vserial").value=""
    document.getElementById("local_km_range").value=""
    document.getElementById("local_km_rate").value=""
    document.getElementById("local_ext_km").value=""
    document.getElementById("local_ext_hour").value=""
    document.getElementById("out_km_range").value=""
    document.getElementById("out_km_rate").value=""
    document.getElementById("out_ext_km").value=""
    document.getElementById("out_ext_hour").value=""
    main();

  }else{
    alert("Vehicle already Exists!..")
  }
}

document.getElementById("add").addEventListener("click", addvehicle);

  

async function main() {
  function loaddata(){
  newform = new FormData();
    newform.append("obj", "vehicle_display");
    return fetch("API/car.php", {
      method: "POST",
      body: newform,   
      mode: "cors",
      credentials: "include"
    }).then(response => response.json());
  }

  let data = await loaddata();

  document.getElementById("table-body").innerHTML=""

  for (let i = 0; i < data.data.length; i++) {


const tableBody = document.getElementById("table-body");

// create a new row element
const row = document.createElement("tr");

// create and add the cells to the row
const vehicleNumber = document.createElement("td");
vehicleNumber.innerHTML = "<i class='fab fa-angular fa-lg text-danger me-3'></i> <strong>"+data.data[i].vnumber+"</strong>";
row.appendChild(vehicleNumber);

const vehicleName = document.createElement("td");
vehicleName.textContent = data.data[i].vname;
row.appendChild(vehicleName);

const vehicleSerial = document.createElement("td");
vehicleSerial.textContent = data.data[i].vserial;
row.appendChild(vehicleSerial);

const localKmRange = document.createElement("td");
localKmRange.textContent = data.data[i].local_km_range;
row.appendChild(localKmRange);

const localKmRate = document.createElement("td");
localKmRate.textContent = data.data[i].local_km_rate;
row.appendChild(localKmRate);

const localExtKmC = document.createElement("td");
localExtKmC.textContent = data.data[i].local_ext_km;
row.appendChild(localExtKmC);

const localExtHourC = document.createElement("td");
localExtHourC.textContent = data.data[i].local_ext_hour;
row.appendChild(localExtHourC);

const outKmRange = document.createElement("td");
outKmRange.textContent = data.data[i].out_km_range;
row.appendChild(outKmRange);

const outKmRate = document.createElement("td");
outKmRate.textContent = data.data[i].out_km_rate;
row.appendChild(outKmRate);

const outExtKmC = document.createElement("td");
outExtKmC.textContent = data.data[i].out_ext_km;
row.appendChild(outExtKmC);

const outExtHourC = document.createElement("td");
outExtHourC.textContent = data.data[i].out_ext_hour;
row.appendChild(outExtHourC);

const action = document.createElement("td");
const dropdown = document.createElement("div");
dropdown.className = "dropdown";

const button = document.createElement("button");
button.className = "btn p-0 dropdown-toggle hide-arrow";
button.setAttribute("type", "button");
button.setAttribute("data-bs-toggle", "dropdown");

const icon = document.createElement("i");
icon.className = "bx bx-dots-vertical-rounded";

button.appendChild(icon);
dropdown.appendChild(button);

const dropdownMenu = document.createElement("div");
dropdownMenu.className = "dropdown-menu";

const editLink = document.createElement("a");
editLink.className = "dropdown-item";
editLink.href = "javascript:void(0);";

const editIcon = document.createElement("i");
editIcon.className = "bx bx-edit-alt me-1";

editLink.appendChild(editIcon);
editLink.appendChild(document.createTextNode("Edit"));

editLink.addEventListener("click", function() {
  const button = document.getElementById("editbtn");
    button.click();
    document.getElementById("evname").value=data.data[i].vname;
    document.getElementById("evnumber").value=data.data[i].vnumber;
    document.getElementById("evserial").value=data.data[i].vserial;
    document.getElementById("elocal_km_range").value=data.data[i].local_km_range;
    document.getElementById("elocal_km_rate").value=data.data[i].local_km_rate;
    document.getElementById("elocal_ext_km").value=data.data[i].local_ext_km;
    document.getElementById("elocal_ext_hour").value=data.data[i].local_ext_hour;
    document.getElementById("eout_km_range").value=data.data[i].out_km_range;
    document.getElementById("eout_km_rate").value=data.data[i].out_km_rate;
    document.getElementById("eout_ext_km").value=data.data[i].out_ext_km;
    document.getElementById("eout_ext_hour").value=data.data[i].out_ext_hour;
});



const deleteLink = document.createElement("a");
deleteLink.className = "dropdown-item";
deleteLink.href = "javascript:void(0);";

deleteLink.addEventListener("click", function() {
  deleteVehicle(data.data[i].vnumber)    
});

const deleteIcon = document.createElement("i");
deleteIcon.className = "bx bx-trash me-1";

deleteLink.appendChild(deleteIcon);
deleteLink.appendChild(document.createTextNode("Delete"));

dropdownMenu.appendChild(editLink);
dropdownMenu.appendChild(deleteLink);

dropdown.appendChild(dropdownMenu);
action.appendChild(dropdown);
row.appendChild(action);
tableBody.appendChild(row);

}
}
  
main();



async function deleteVehicle(id) {
  function loaddata(){
  newform = new FormData();
    newform.append("obj", "vehicle_delete");
    newform.append("vnumber", id);
    return fetch("API/car.php", {
      method: "POST",
      body: newform,   
      mode: "cors",
      credentials: "include"
    }).then(response => response.json());
  }

  let data = await loaddata();

  if(data.message){
    main();
  }else{
    alert("Something Went Wrong! \n Please Try Again Later");
  }
}
  

async function editvehicle() {
  function loaddata() {
  // create a flag to track if any field is empty
  let isEmpty = false;

  // create a list of input field IDs
  const fieldIds = [
    "evname",
    "evnumber",
    "evserial",
    "elocal_km_range",
    "elocal_km_rate",
    "elocal_ext_km",
    "elocal_ext_hour",
    "eout_km_range",
    "eout_km_rate",
    "eout_ext_km",
    "eout_ext_hour",
  ];

  // create a new FormData object
  const newform = new FormData();
  newform.append("obj", "vehicle_edit");

  // loop through the list of input field IDs and check if any field is empty
  fieldIds.forEach((fieldId) => {
    const fieldValue = document.getElementById(fieldId).value;
    if (!fieldValue) {
      isEmpty = true;
      // set focus to the empty field
      document.getElementById(fieldId).focus();
      return;
    }
    newform.append(fieldId, fieldValue);
  });

  // if any field is empty, return a Promise.reject with an error message
  if (isEmpty) {
    return Promise.reject("Please fill all fields.");
  }

  // if all fields are filled, send the data using fetch()
  return fetch("API/car.php", {
    method: "POST",
    body: newform,
    mode: "cors",
    credentials: "include",
  }).then((response) => response.json());
}


  let data = await loaddata();

  if(data.message){
    main();
    const button = document.getElementById("editclose");
    button.click();
    inputs = document.getElementsByTagName('input');
    for (index = 0; index < inputs.length; ++index) {
        inputs[index].value=""
    }

  }else{
    alert("Something Went Wrong! \n Please Try Again Later");
  }
}
  


document.getElementById("editsave").addEventListener("click", editvehicle);




    </script>
 
 
  </body>
</html>