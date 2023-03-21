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
            <li class="menu-item active">
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

             

                <!-- Pills -->

                <div class="row">
                 
  
                  <div class="col-xl-6" style="width: 100%;">
                    <div class="nav-align-top mb-4" >
                      <ul class="nav nav-pills mb-3" role="tablist">

                        <li class="nav-item">
                          <button
                            type="button"
                            class="nav-link active"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-pills-justified-home"
                            aria-controls="navs-pills-justified-home"
                            aria-selected="true"
                          >
                            <i class="tf-icons bx bx-home"></i> Home
                          </button>
                        </li>
                        <li class="nav-item">
                          <button
                            type="button"
                            class="nav-link"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-pills-justified-profile"
                            aria-controls="navs-pills-justified-profile"
                            aria-selected="false"
                          >
                            <i class="tf-icons bx bx-user"></i> Profile
                          </button>
                        </li>
                        <li class="nav-item">
                          
                          <button
                            type="button"
                            class="nav-link"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-pills-justified-messages"
                            aria-controls="navs-pills-justified-messages"
                            aria-selected="false"
                          >
                            <i class="tf-icons bx bxs-key"></i> Security
                          </button>
                        </li>
                       
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">


                          <div class="row">
                            <div class="col-md-12" >
                                                        

                              <!-- Basic List group -->
                                <div class="col-lg-6 mb-4 mb-xl-0" >
                                  <div class="demo-inline-spacing mt-3" >
                                    <div class="list-group" >
                                      <a href="javascript:void(0);" class="list-group-item list-group-item-action active"
                                        >Profile Details</a>
                                      
                                      <span class="list-group-item list-group-item-action" ><b>Name </b> : <span id="name"> </span></span>
                                      <span class="list-group-item list-group-item-action" ><b>Mobile1 </b> : <span id="ephone"> </span></span>
                                      <span class="list-group-item list-group-item-action" ><b>Mobile2 </b> : <span id="emobile2"> </span></span>
                                      <span class="list-group-item list-group-item-action" ><b>Address Line1 </b> : <span id="eaddress1"> </span></span>
                                      <span class="list-group-item list-group-item-action" ><b>Address Line2 </b> : <span id="eaddress2"> </span></span>
                                      <span class="list-group-item list-group-item-action" ><b>Email </b> : <span id="eemail"> </span></span>
                                      <span class="list-group-item list-group-item-action" ><b>GST NO </b> : <span id="egstin"> </span></span>
                                    </div>
                                    
                                  </div>
                                  
                                </div>


                                <div class="col-lg-6 mb-4 mb-xl-0" >
                                  <div class="demo-inline-spacing mt-3">
                                    <div class="list-group">
                                      <a href="javascript:void(0);" class="list-group-item list-group-item-action active"
                                        >Bank Details</a>
                                      
                                      <span class="list-group-item list-group-item-action" ><b>Account Holder  Name </b> : <span id="eaccname"> </span></span>
                                      <span class="list-group-item list-group-item-action" ><b>Account No. </b> : <span id="eaccno"> </span></span>
                                      <span class="list-group-item list-group-item-action" ><b>Bank Name </b> : <span id="ebname"> </span></span>
                                      <span class="list-group-item list-group-item-action" ><b>Branch  Name </b> : <span id="ebrname"> </span></span>
                                      <span class="list-group-item list-group-item-action" ><b>IFSC Code </b> : <span id="eifsc"> </span></span>

                                    </div>
                                  </div>
                                </div>


                                <!--/ Basic List group -->
                           


                            </div>
                          </div>
                          




                        </div>
                        <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
                         
<!------------------- ------------------------------------------profile edit------------------------------------------ -->



                          
                          <div class="row">
                            
                                
                          
                          <div class="row">
                            <div class="col-md-12" >
                              
                              <div class="card mb-4">
                                <h5 class="card-header">Profile Edit</h5>
                                <!-- Account -->
                                
                                <hr class="my-0" />
                                <div class="card-body">
                                    <div class="row">
                                      <div class="mb-3 col-md-6">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input
                                          class="form-control"
                                          type="text"
                                          id="fname"
                                          name="firstName"
                                          placeholder="First Name"
                                          autofocus
                                        />
                                      </div>
                                      <div class="mb-3 col-md-6">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input class="form-control" type="text" name="lastName" id="lname" placeholder="Last Name" />
                                      </div>
                                      <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input
                                          class="form-control"
                                          type="email"
                                          id="email"
                                          name="email"
                                          placeholder="Email"
                                        />
                                      </div>
                                      <div class="mb-3 col-md-6">
                                        <label for="organization" class="form-label">GSTin No.</label>
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="gstin"
                                          name="organization"
                                          placeholder="GSTin No."
                                        />
                                      </div>
                                      <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">Phone Number : 1</label>
                                        <div class="input-group input-group-merge">
                                          <input
                                            type="number"
                                            id="phone"
                                            name="phoneNumber"
                                            class="form-control"
                                            placeholder="Mobile1"
                                          />
                                        </div>
                                      </div>
                                      <div class="mb-3 col-md-6">
                                        <label for="address" class="form-label">Phone Number : 2</label>
                                        <input type="number" class="form-control" id="mobile2" name="address" placeholder="Mobile2" />
                                      </div>
                                      <div class="mb-3 col-md-6">
                                        <label for="state" class="form-label">Address Line 1</label>
                                        <input class="form-control" type="text" id="address1" name="state" placeholder="Address Line1" />
                                      </div>
                                      <div class="mb-3 col-md-6">
                                        <label for="zipCode" class="form-label">Address Line 2</label>
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="address2"
                                          name="zipCode"
                                          placeholder="Address Line 2"
                                        />
                                      </div>
                                      
                                     
                                    </div>
                                    <div class="mt-2">
                                      <button id="savechange" class="btn btn-primary me-2">Save changes</button>
                                      <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                                </div>
                                <!-- /Account -->
                              </div>
                             
                            </div>
                          </div>

                                <!-- /Account -->
                              
                          </div>

                        </div>



<!-- ---------------------------------------------------------------bank ------------------------------------------- -->

                        <div class="tab-pane fade" id="navs-pills-justified-messages" role="tabpanel">
                          

                            
                          
                                <h5 class="card-header">Signature</h5>
                                <!-- Account -->
                                

                                <form action="API/upload.php" method="POST" enctype="multipart/form-data">
                                  <div class="card-body">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                      <img
                                        src="API/uploads/sign.jpeg"
                                        alt="user-avatar"
                                        class="d-block rounded"
                                        height="100"
                                        width="100"
                                        id="uploadedAvatar"
                                      />
                                      <div class="button-wrapper">
                                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                          <span class="d-none d-sm-block">Upload new Image</span>
                                          <i class="bx bx-upload d-block d-sm-none"></i>
                                          <input
                                            type="file"
                                            id="upload"
                                            class="account-file-input"
                                            hidden
                                            accept="image/png, image/jpeg"
                                            name="image"
                                          />
                                        </label>
                                        <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                          <i class="bx bx-reset d-block d-sm-none"></i>
                                          <span class="d-none d-sm-block">Reset</span>
                                        </button>
                                        <button type="submit" class="btn btn-primary mb-4">Submit</button>
                                      </div>
                                    </div>
                                  </div>
                                </form>



                                <hr class="my-0" />
                                
                          
                          <div class="row">
                            <div class="col-md-12" >
                              
                              <div class="card mb-4">
                                <h5 class="card-header">Banking Details</h5>
                                <!-- Account -->
                                
                                <hr class="my-0" />
                                <div class="card-body">
                                    <div class="row">
                                      <div class="mb-3 col-md-6">
                                        <label for="firstName" class="form-label">Account No.</label>
                                        <input
                                          class="form-control"
                                          type="number"
                                          id="accno"
                                          name="accno"
                                          placeholder="Account Number"
                                          autofocus
                                        />
                                      </div>
                                      <div class="mb-3 col-md-6">
                                        <label for="lastName" class="form-label">Bank Name</label>
                                        <input class="form-control" type="text" name="lastName" id="bname" placeholder="Last Name" />
                                      </div>
                                      <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">Account Holder Name</label>
                                        <input
                                          class="form-control"
                                          type="text"
                                          id="accname"
                                          name="email"
                                          placeholder="Account Holder Name"
                                        />
                                      </div>
                                      <div class="mb-3 col-md-6">
                                        <label for="organization" class="form-label">Branch Name</label>
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="brname"
                                          name="organization"
                                          placeholder="GSTin No."
                                        />
                                      </div>
                                      <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">IFSC CODE</label>
                                        <div class="input-group input-group-merge">
                                          <input
                                            type="text"
                                            id="ifsc"
                                            name="phoneNumber"
                                            class="form-control"
                                            placeholder="IFSC CODE"
                                          />
                                        </div>
                                      </div>
                                      
                                      
                                     
                                    </div>
                                    <div class="mt-2">
                                      <button id="changeprofile" class="btn btn-primary me-2">Save changes</button>
                                    </div>
                                </div>


                                <h5 class="card-header" style="color: red;">Change Password</h5>

                                <div class="card-body">

                                  <div class="row">
                                    <div class="mb-3 col-md-6">
                                      <label for="firstName" class="form-label">New Password</label>
                                      <input
                                        class="form-control"
                                        type="password"
                                        id="password"
                                        name="accno"
                                        placeholder="Account Number"
                                        value=""
                                        autofocus
                                      />
                                    </div>
                                    
                                    <div class="mb-3 col-md-6">
                                      <label for="email" class="form-label">Confirm Password</label>
                                      <input
                                        class="form-control"
                                        type="password"
                                        id="cnfpassword"
                                        name="email"
                                        placeholder="Confirm Password"
                                      />
                                    </div>
                                    
                                    
                                    
                                   
                                  </div>
                                  <div class="mt-2">
                                    <button id="changepassword" class="btn btn-danger btn-buy-now">Change Password</button>
                                  </div>
                              </div>
                                <!-- /Account -->
                              </div>
                             
                            </div>
                          </div>

                        </div>


                        
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Pills -->
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

  async function main() {
  function loaddata(){
  newform = new FormData();
    newform.append("obj", "admin_profile_display");
    return fetch("API/car.php", {
      method: "POST",
      body: newform,   
      mode: "cors",
      credentials: "include"
    }).then(response => response.json());
  }

  let data = await loaddata();

  name=data.data[0].name
  c=name.split(" ")
  
  document.getElementById("fname").value=c[0];
  document.getElementById("lname").value=c[1];
  document.getElementById("email").value=data.data[0].email;
  document.getElementById("phone").value=data.data[0].phone;
  document.getElementById("mobile2").value=data.data[0].mobile2;
  document.getElementById("gstin").value=data.data[0].gstin;
  document.getElementById("address1").value=data.data[0].address1;
  document.getElementById("address2").value=data.data[0].address2;
  document.getElementById("accno").value=data.data[0].accno;
  document.getElementById("bname").value=data.data[0].bank;
  document.getElementById("brname").value=data.data[0].branch;
  document.getElementById("accname").value=data.data[0].acc_holder;
  document.getElementById("ifsc").value=data.data[0].ifsc;

  document.getElementById("name").innerHTML=c[0]+" "+c[1];
  document.getElementById("eemail").innerHTML=data.data[0].email;
  document.getElementById("ephone").innerHTML=data.data[0].phone;
  document.getElementById("emobile2").innerHTML=data.data[0].mobile2;
  document.getElementById("egstin").innerHTML=data.data[0].gstin;
  document.getElementById("eaddress1").innerHTML=data.data[0].address1;
  document.getElementById("eaddress2").innerHTML=data.data[0].address2;
  document.getElementById("eaccno").innerHTML=data.data[0].accno;
  document.getElementById("ebname").innerHTML=data.data[0].bank;
  document.getElementById("ebrname").innerHTML=data.data[0].branch;
  document.getElementById("eaccname").innerHTML=data.data[0].acc_holder;
  document.getElementById("eifsc").innerHTML=data.data[0].ifsc;


}

main();



async function edit() {
  function loaddata(){
  newform = new FormData();
    newform.append("obj", "admin_profile_edit");
    newform.append("name",   document.getElementById("fname").value+" "+document.getElementById("lname").value);
    newform.append("email",   document.getElementById("email").value);
    newform.append("phone",   document.getElementById("phone").value);
    newform.append("mobile2",   document.getElementById("mobile2").value);
    newform.append("gstin",   document.getElementById("gstin").value);
    newform.append("address1",   document.getElementById("address1").value);
    newform.append("address2",   document.getElementById("address2").value);
    newform.append("accno",   document.getElementById("accno").value);
    newform.append("bname",   document.getElementById("bname").value);
    newform.append("brname",   document.getElementById("brname").value);
    newform.append("accname",   document.getElementById("accname").value);
    newform.append("ifsc",   document.getElementById("ifsc").value);
    return fetch("API/car.php", {
      method: "POST",
      body: newform,   
      mode: "cors",
      credentials: "include"
    }).then(response => response.json());
  }
  let data = await loaddata();

}


async function password_change() {
  pass=document.getElementById("password").value;
  cpass=document.getElementById("cnfpassword").value;

  if(pass=="" && cpass==""){
    alert("Please Enter a valid Password!..")
  }else if(pass!=cpass){
    alert("Password Doesnot Match!..")
  }else{

  function loaddata(){
  newform = new FormData();
    newform.append("obj", "admin_password_change");
    newform.append("pass",document.getElementById("password").value);
    return fetch("API/car.php", {
      method: "POST",
      body: newform,   
      mode: "cors",
      credentials: "include"
    }).then(response => response.json());
  }
  let data = await loaddata();
  if(data.message){
    alert("Password Has Been Changed Successfully!..")
    location.reload();
  }

}

}

document.getElementById("savechange").addEventListener("click", edit)
document.getElementById("changeprofile").addEventListener("click", edit)
document.getElementById("changepassword").addEventListener("click", password_change)


const form = document.querySelector('form');
const inputFile = document.querySelector('#upload');
const uploadedAvatar = document.querySelector('#uploadedAvatar');

form.addEventListener('submit', (e) => {
  e.preventDefault(); // prevent default form submission behavior

  const xhr = new XMLHttpRequest();
  const formData = new FormData(); 
  if(inputFile.files[0]==null){
    alert("Please Select an Image")
  }else{
    const allowedTypes = ['image/jpeg', 'image/png'];
    const file = inputFile.files[0];
    if (allowedTypes.indexOf(file.type) === -1) {
      alert('Only JPG, JPEG, and PNG images are allowed');
      return;
    }
    
    formData.append('image', file);

    xhr.open('POST', form.action, true);
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          const response = (xhr.responseText);
          if (response.status === "success") {
            uploadedAvatar.src = response.url;
            location.reload();
          } else {
            location.reload();
          }
        } else {
          location.reload();
        }
      }
    };

    xhr.send(formData);
  }
});


    </script>
 
 
  </body>
</html>