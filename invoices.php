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

    <title>Jalaram Travels</title>

    <meta name="description" content="" />
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="jalaram_logo.jpg" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
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
              <span class="app-brand-text demo menu-text fw-bolder ms-2"style="text-transform: capitalize;">Jalaram Travels</span>
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
            <li class="menu-item ">
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
            <li class="menu-item active">
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

                      <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                          <input
                            type="text"
                            class="form-control border-0 shadow-none"
                            placeholder="Search In Invoices..."
                            aria-label="Search..."
                            id="searchInputNumber"
                          />
                          
                        </div>
                      </div>
                     
                      <!-- /Search -->
        
                      <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- Place this tag where you want the button to render. -->
                    
        
                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <div class="avatar ">
                              <img src="jalaram_logo.jpg" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                              <a class="dropdown-item" href="#">
                                <div class="d-flex">
                                  <div class="flex-shrink-0 me-3">
                                    <div class="avatar ">
                                      <img src="jalaram_logo.jpg" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                  </div>
                                  <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">Jalaram Travels</span>
                                    <small class="text-muted">Admin</small>
                                  </div>
                                </div>
                              </a>
                            </li>
                            <li>
                              <div class="dropdown-divider"></div>
                            </li>
                            <li>
                              <a class="dropdown-item" href="home.php">
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
            <div class="navbar-nav align-items-center">
                        
            <div class="container-xxl flex-grow-1 container-p-y">

              <!-- Bootstrap modals -->
             
            

               <!-- Fullscreen Modal -->
               <div class="col-lg-4 col-md-6">
                <div class="mt-3">
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#fullscreenModal"
                        style="margin-bottom:15px"
                      >
                        Generate Invoice
                      </button>
                        <button
                          type="button"
                          class="btn btn-success"
                          id="excel"
                          style="margin-bottom:15px">
                          Download Excel
                        </button>

                        <script>
                          document.getElementById("excel").addEventListener("click",()=>{
                            location.href="excel/invoice_excel.php"
                          });
                        </script>

                  <!-- Modal -->
                  <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <table>
                            <tr>
                              <td>
                          <h5 class="modal-title" id="modalFullTitle">Invoice Number : </h5>
                              </td>
                              <td>
                                <input type="text" name="code" id="code" disabled>
                              </td>
                            </tr>
                          </table>
                          <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                            id="closebtn"
                          ></button>
                        </div>
                        <div class="modal-body">
                         
                          <div class="row">
                            <div class="col mb-3">
                              <label for="nameBasic" class="form-label" >Invoice Date</label>
                              <input type="date" id="date" class="form-control" style="min-width: 200px;"/>
                            </div>

                            <div class="col mb-3">
                              <label for="customer_select" class="form-label" id="customer">Select Customer</label>
                              <select class="form-select" id="customer_select" aria-label="Default select example" style="min-width: 200px;">
                                <option selected value="0">Select Customer</option>
                              </select>
                            </div>

                            <div class="col mb-3">
                              <label for="vehicle_select" class="form-label" id="vehicle">Select Vehicle</label>
                              <select class="form-select" id="vehicle_select" aria-label="Default select example" style="min-width: 200px;">
                                <option selected value="0">Select Vehicle</option>
                              </select>
                            </div>
                          </div>

                          

                          <div class="row">
                            <div class="col mb-3">
                              <label for="nameBasic" class="form-label" >Visitor Name</label>
                              <input type="text" id="visitor_name" class="form-control" placeholder="Visitor Name"style="min-width: 250px;" />
                            </div>
                            <div class="col mb-3">
                              <label for="nameBasic" class="form-label" >Period From</label>
                              <input type="date" id="period_start" class="form-control" />
                            </div>
                            <div class="col mb-3">
                              <label for="nameBasic" class="form-label" >To</label>
                              <input type="date" id="period_end" class="form-control" />
                            </div>
                          </div>

                          

                         
                            <table>
                              <tr>
                                <td>
                                  <div class="form-check form-switch mb-2">
                                    <label class="form-check-label" for="trip">Local Trip</label>
                                    <input class="form-check-input" type="checkbox" id="trip" />
                                  </div>
                                </td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              </tr>
                            </table>
                                      
                            
                            <div class="divider divider-dashed">
                              <div class="divider-text">Travel Data</div>
                            </div>

                          


                          <!-- Basic Bootstrap Table -->
                            <div class="card">
                             
                              <div class="table-responsive text-nowrap">
                                
                                <table class="table">
                                  
                                  <thead>
                                    <tr style="background-color: rgb(247, 247, 247);">
                                      <th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                      <th style="padding: 0;text-align: center;">QTY </th>
                                      <th style="padding: 0;text-align: center;">Rate </th>
                                      <th style="padding: 0;text-align: center;">Amount </th>
                                    </tr>
                                  </thead>
                                  <tbody class="table-border-bottom-0">
                                  
                                    <tr>
                                      <td style="padding: 5px 10px">
                                        <label for="km" class="form-label">Total KM</label>
                                      </td>
                                      <td style="padding: 5px 10px">
                                            <input type="number" id="km" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                            <input type="number" id="kmqty" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="kmtotal" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0" disabled />
                                      </td>
                                    </tr>
                                  
                                    <tr style="display:none">
                                      <td style="padding: 5px 10px">
                                        <label for="extrakm" class="form-label">Extra KM</label>
                                      </td>
                                      <td style="padding: 5px 10px">
                                            <input type="number" id="extra_km" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                            <input type="number" id="extra_kmqty" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="extra_kmtotal" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" disabled value="0"/>
                                      </td>
                                    </tr>
                                  
                                    <tr style="display:none">
                                      <td style="padding: 5px 10px">
                                        <label for="extra_hour" class="form-label">Extra<br>Hour</label>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="extra_hour" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="extra_hour_qty" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="extra_hour_total" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" disabled value="0" />
                                      </td>
                                    </tr>
                                  
                                    <tr>
                                      <td style="padding: 5px 10px">
                                        <label for="toll" class="form-label">Toll<br>Tax</label>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="toll" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="toll_qty" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="toll_total" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" disabled value="0"/>
                                      </td>
                                    </tr>

                                    <tr>
                                      <td style="padding: 5px 10px">
                                        <label for="parking" class="form-label">Parking<br>Charges</label>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="parking" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="parking_qty" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="parking_total" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" disabled value="0"/>
                                      </td>
                                    </tr>
                                    

                                    <tr>
                                      <td style="padding: 5px 10px">
                                        <label for="driver" class="form-label">Driver</label>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="driver" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="driverqty" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="drivertotal" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" disabled value="0"/>
                                      </td>
                                    </tr>
                                    
                                    <tr>
                                      <td style="padding: 5px 10px">
                                        <label for="night_hold" class="form-label">Night Hold</label>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="night_hold" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="night_hold_qty" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="night_hold_total" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" disabled value="0"/>
                                      </td>
                                    </tr>
                                    
                                    

                                    <tr>
                                      <td style="padding: 5px 10px">
                                        <label for="border_tax" class="form-label">Border Tax</label>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="border_tax" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="border_tax_qty" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="border_tax_total" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" disabled value="0"/>
                                      </td>
                                    </tr>

                                    <tr>
                                      <td style="padding: 5px 10px">
                                        <label for="airport" class="form-label">Airport</label>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="airport" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="airport_qty" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" value="0"/>
                                      </td>
                                      <td style="padding: 5px 10px">
                                        <input type="number" id="airport_total" class="form-control" style="padding-left: 0;padding-right: 0;text-align:center;" disabled value="0"/>
                                      </td>
                                    </tr>
                                    
                                    
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          <!--/ Basic Bootstrap Table -->
  <br><br> 

                            <div class="divider divider-dashed">
                              <div class="divider-text">Tax</div>
                            </div>

                          <table align="center" >
                            <tr >
                              <td>
                                SGST
                              </td>
                              <td>
                                <select class="form-select" id="gst" aria-label="Default select example">
                                  <option selected value="0">SGST Tax</option>
                                </select>
                              </td>
                              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              <td>
                                <input type="number" id="gst_total" class="form-control" placeholder="Total" disabled value="0"/>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                CGST &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              </td>
                              <td>
                                <select class="form-select" id="cgst" aria-label="Default select example">
                                  <option selected value="0">CGST Tax</option>
                                
                                </select>
                              </td>
                              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              <td>
                                <input type="number" id="cgst_total" class="form-control" placeholder="Total" disabled value="0"/>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                IGST &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              </td>
                              <td>
                                <select class="form-select" id="igst" aria-label="Default select example">
                                  <option selected value="0">IGST Tax</option>
                              
                                </select>
                              </td>
                              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              <td>
                                <input type="number" id="igst_total" class="form-control" placeholder="Total" disabled value="0"/>
                              </td>
                            </tr>


                            

                            <tr>
                              <td>
                                Tax &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              </td>
                              <td>
                                <input type="text" id="tax_name" class="form-control" placeholder="Tax" />

                              </td>
                              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              <td>
                                <input type="number" id="tax_rate" class="form-control" placeholder="Total" />
                              </td>
                            </tr>

                          
                          </table>

                          <div class="divider divider-dashed">
                            <div class="divider-text">Total Amount</div>
                          </div>


                          <table align="center">
                            
                            <tr>
                              <td>
                                Gross Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              </td>
                              
                              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              <td>
                                <input type="number" id="gross" class="form-control" placeholder="Total" value="0" disabled/>
                              </td>
                            </tr>
                            
                            <tr>
                              <td>
                                Tax Amount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              </td>
                              
                              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              <td>
                                <input type="number" id="tax_total" class="form-control" placeholder="Total" value="0" disabled />
                              </td>
                            </tr>
                            
                            <tr>
                              <td>
                                Total Amount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              </td>
                              
                              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              <td>
                                <input type="number" id="total_amount" class="form-control" placeholder="Total" />
                              </td>
                            </tr>

                          </table>

                          

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                          </button>
                          <button type="button" class="btn btn-primary" id="addinvoice">Add Invoice</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              

                   
              
              <!--/ Bootstrap modals -->

               <!-- Bootstrap Table with Header - Light -->
                    <div class="card" >
                    <div class="nav-item d-flex align-items-center">
                            <input
                            type="date"
                            class="form-control border-0 shadow-none"
                            placeholder="Search In Invoices..."
                            aria-label="Search..."
                            id="date1"
                            />
                            <input
                            type="date"
                            class="form-control border-0 shadow-none"
                            placeholder="Search In Invoices..."
                            aria-label="Search..."
                            id="date2"
                            />
                            <button
                            type="button"
                            class="btn btn-light"
                            id="excel_date"
                            style="margin-bottom:15px">
                            <i class="bx bxs-download me-1"></i>
                            </button> 
                            <script>
                          document.getElementById("excel_date").addEventListener("click",()=>{
                            location.href="excel/invoice_excel_date.php?d1="+document.getElementById("date1").value+"&d2="+document.getElementById("date2").value
                            // console.log(document.getElementById("date1"))
                          });
                        </script>

                        </div>

                <div class="table-responsive text-nowrap" style="min-height: 400px;">
                

                  <table class="table" id="mytable>
                    <thead class="table-light">
                      <tr>
                        <th>Invoice ID</th>
                        <th>Customer Name</th>
                        <th>GST No</th>
                        <th>Vehicle Name</th>
                        <th>Trip</th>
                        <th>Gross</th>
                        <th>Tax</th>
                        <th>Total</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" id="table-body">
                    
                      
                    </tbody>
                  </table>

                </div>
              </div>
              <!-- Bootstrap Table with Header - Light -->

            </div>

            
            <!-- / Content -->

            <!-- Footer -->
  
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
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
 
    <script src="js.js"></script>
    <script src="invoice.js"></script>
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


//   var today = new Date();
// var year = today.getFullYear();
// var month = ('0' + (today.getMonth() + 1)).slice(-2);
// var day = ('0' + today.getDate()).slice(-2);
// var dateString = year + '-' + month + '-' + day;
// var dateInput = document.getElementById('date2');
// dateInput.value = dateString;


// var dateString = "2015" + '-' + "01" + '-' + "01";
// var dateInput = document.getElementById('date1');
// dateInput.value = dateString;



var dateInput1 = document.getElementById('date1');
var dateInput2 = document.getElementById('date2');
dateInput1.addEventListener('change', function() {

  var selectedDate1 = dateInput1.value;
  var selectedDate2 = dateInput2.value;
  if (selectedDate1 && selectedDate2) {
    dateSelected(selectedDate1,selectedDate2);
  } else {
    dateNotSelected();
  }

});

var dateInput1 = document.getElementById('date1');
var dateInput2 = document.getElementById('date2');
dateInput2.addEventListener('change', function() {

  var selectedDate1 = dateInput1.value;
  var selectedDate2 = dateInput2.value;
  if (selectedDate1 && selectedDate2) {
    dateSelected(selectedDate1,selectedDate2);
  } else {
    dateNotSelected();
  }

});

function dateSelected(date1,date2) {
  datefilter(date1,date2)
}
function dateNotSelected() {
  main();
}

  

async function filter(key) {
  console.log(key)
  function loaddata() {
    const newform = new FormData();
    newform.append("obj", "invoice_filter");
    newform.append("key", key);
    return fetch("API/car.php", {
      method: "POST",
      body: newform,
      mode: "cors",
      credentials: "include"
    }).then(response => response.json());
  }
  const data = await loaddata();


    if(data.message==true){
      const lastCode = data.data[data.data.length - 1].code; 
      let number = lastCode;
      let incrementedNumber = parseInt(number.substring(2)) + 1;
      incrementedNumber = 'SI' + incrementedNumber.toString().padStart(7, '0');
      document.getElementById("code").value=incrementedNumber
    }else{
      document.getElementById("code").value='SI0000001';

    }
  
  document.getElementById("table-body").innerHTML=""
  if(data.message==true){
    data.data.forEach(i => {
var row = document.createElement("tr");


var invoiceId = document.createElement("td");
invoiceId.innerText = i.code;
row.appendChild(invoiceId);

var customerName = document.createElement("td");
customerName.innerText = i.name;
row.appendChild(customerName);

var gstNo = document.createElement("td");
gstNo.innerText = i.gst;
row.appendChild(gstNo);

var vehicleName = document.createElement("td");
vehicleName.innerText = i.vname;
row.appendChild(vehicleName);

var trip = document.createElement("td");
trip.innerText = (i.trip==1)?"Local":"Out";
row.appendChild(trip);

var gross = document.createElement("td");
gross.innerText = totalgross(i);
row.appendChild(gross);


var tax = document.createElement("td");
tax.innerText = totaltax(i);
row.appendChild(tax);

var total = document.createElement("td");
total.innerText = totalamt(i);
row.appendChild(total);

var action = document.createElement("td");
var dropdown = document.createElement("div");
dropdown.classList.add("dropdown");

var button = document.createElement("button");
button.type = "button";
button.classList.add("btn", "p-0", "dropdown-toggle", "hide-arrow");
button.setAttribute("data-bs-toggle", "dropdown");

var icon = document.createElement("i");
icon.classList.add("bx", "bx-dots-vertical-rounded");
button.appendChild(icon);
dropdown.appendChild(button);

var dropdownMenu = document.createElement("div");
dropdownMenu.classList.add("dropdown-menu");

var editLink = document.createElement("a");
editLink.classList.add("dropdown-item");
editLink.href = "javascript:void(0);";

var editIcon = document.createElement("i");
editIcon.classList.add("bx", "bxs-download", "me-1");
editLink.appendChild(editIcon);
editLink.appendChild(document.createTextNode("Download Invoice"));
editLink.href = "pdf.php?a="+i.code;

var preLink = document.createElement("a");
preLink.classList.add("dropdown-item");
preLink.href = "javascript:void(0);";

var preIcon = document.createElement("i");
preIcon.classList.add("bx", "bxs-spreadsheet", "me-1");
preLink.appendChild(preIcon);
preLink.appendChild(document.createTextNode("View Invoice"));
preLink.href = "pdfpre.php?a="+i.code;

var deleteLink = document.createElement("a");
deleteLink.classList.add("dropdown-item");
deleteLink.href = "javascript:void(0);";

var deleteIcon = document.createElement("i");
deleteIcon.classList.add("bx", "bx-trash", "me-1");
deleteLink.appendChild(deleteIcon);
deleteLink.appendChild(document.createTextNode("Delete"));

deleteLink.addEventListener("click", function() {
  deletetax(i.code)    
});

dropdownMenu.appendChild(editLink);
dropdownMenu.appendChild(preLink);
dropdownMenu.appendChild(deleteLink);
dropdown.appendChild(dropdownMenu);

action.appendChild(dropdown);
row.appendChild(action);

var tableBody = document.getElementById("table-body");
tableBody.appendChild(row);

    });
  }

}

  

async function datefilter(key1,key2) {
  function loaddata() {
    const newform = new FormData();
    newform.append("obj", "invoice_datefilter");
    newform.append("date1", key1);
    newform.append("date2", key2);
    return fetch("API/car.php", {
      method: "POST",
      body: newform,
      mode: "cors",
      credentials: "include"
    }).then(response => response.json());
  }
  const data = await loaddata();


    if(data.message==true){
      const lastCode = data.data[data.data.length - 1].code; 
      let number = lastCode;
      let incrementedNumber = parseInt(number.substring(2)) + 1;
      incrementedNumber = 'SI' + incrementedNumber.toString().padStart(7, '0');
      document.getElementById("code").value=incrementedNumber
    }else{
      document.getElementById("code").value='SI0000001';

    }
  
  document.getElementById("table-body").innerHTML=""
  if(data.message==true){
    data.data.forEach(i => {
var row = document.createElement("tr");


var invoiceId = document.createElement("td");
invoiceId.innerText = i.code;
row.appendChild(invoiceId);

var customerName = document.createElement("td");
customerName.innerText = i.name;
row.appendChild(customerName);

var gstNo = document.createElement("td");
gstNo.innerText = i.gst;
row.appendChild(gstNo);

var vehicleName = document.createElement("td");
vehicleName.innerText = i.vname;
row.appendChild(vehicleName);

var trip = document.createElement("td");
trip.innerText = (i.trip==1)?"Local":"Out";
row.appendChild(trip);

var gross = document.createElement("td");
gross.innerText = totalgross(i);
row.appendChild(gross);


var tax = document.createElement("td");
tax.innerText = totaltax(i);
row.appendChild(tax);

var total = document.createElement("td");
total.innerText = totalamt(i);
row.appendChild(total);

var action = document.createElement("td");
var dropdown = document.createElement("div");
dropdown.classList.add("dropdown");

var button = document.createElement("button");
button.type = "button";
button.classList.add("btn", "p-0", "dropdown-toggle", "hide-arrow");
button.setAttribute("data-bs-toggle", "dropdown");

var icon = document.createElement("i");
icon.classList.add("bx", "bx-dots-vertical-rounded");
button.appendChild(icon);
dropdown.appendChild(button);

var dropdownMenu = document.createElement("div");
dropdownMenu.classList.add("dropdown-menu");

var editLink = document.createElement("a");
editLink.classList.add("dropdown-item");
editLink.href = "javascript:void(0);";

var editIcon = document.createElement("i");
editIcon.classList.add("bx", "bxs-download", "me-1");
editLink.appendChild(editIcon);
editLink.appendChild(document.createTextNode("Download Invoice"));
editLink.href = "pdf.php?a="+i.code;

var preLink = document.createElement("a");
preLink.classList.add("dropdown-item");
preLink.href = "javascript:void(0);";

var preIcon = document.createElement("i");
preIcon.classList.add("bx", "bxs-spreadsheet", "me-1");
preLink.appendChild(preIcon);
preLink.appendChild(document.createTextNode("View Invoice"));
preLink.href = "pdfpre.php?a="+i.code;

var deleteLink = document.createElement("a");
deleteLink.classList.add("dropdown-item");
deleteLink.href = "javascript:void(0);";

var deleteIcon = document.createElement("i");
deleteIcon.classList.add("bx", "bx-trash", "me-1");
deleteLink.appendChild(deleteIcon);
deleteLink.appendChild(document.createTextNode("Delete"));

deleteLink.addEventListener("click", function() {
  deletetax(i.code)    
});

dropdownMenu.appendChild(editLink);
dropdownMenu.appendChild(preLink);
dropdownMenu.appendChild(deleteLink);
dropdown.appendChild(dropdownMenu);

action.appendChild(dropdown);
row.appendChild(action);

var tableBody = document.getElementById("table-body");
tableBody.appendChild(row);

    });
  }

}








  var input = document.getElementById("searchInputNumber");
  var clic = document.getElementById("clic");
var tableBody = document.getElementById("table-body");

input.addEventListener("input",()=>{
  filter(document.getElementById("searchInputNumber").value)
});


// Add event listener to input field with debouncing
// input.addEventListener("input", _.debounce(filterTable, 500));

// function filterTable() {
//   // Get the input value and convert to uppercase
//   var filter = input.value.toUpperCase();

//   // Get all table rows
//   var rows = tableBody.getElementsByTagName("tr");

//   // Loop through rows and hide/show based on filter
//   for (var i = 0; i < rows.length; i++) {
//     var vehicleNumber = rows[i].getElementsByTagName("td")[0].innerText.toUpperCase();
//     var name = rows[i].getElementsByTagName("td")[1].innerText.toUpperCase();
//     var gst = rows[i].getElementsByTagName("td")[2].innerText.toUpperCase();
//     var vehicleName = rows[i].getElementsByTagName("td")[3].innerText.toUpperCase();
//     var trip = rows[i].getElementsByTagName("td")[4].innerText.toUpperCase();
//     if (vehicleNumber.includes(filter) || vehicleName.includes(filter) || gst.includes(filter)|| name.includes(filter)|| trip.includes(filter)) {
//       rows[i].style.display = "";
//     } else {
//       rows[i].style.display = "none";
//     }
//   }
// }

    </script>
 
 
  </body>
</html>