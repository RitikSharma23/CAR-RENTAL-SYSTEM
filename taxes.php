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
            <li class="menu-item active">
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
                          Add Tax
                        </button>
                        <button
                          type="button"
                          class="btn btn-success"
                          id="excel"
                        >
                          Download Excel
                        </button>

                        <script>
                          document.getElementById("excel").addEventListener("click",()=>{
                            location.href="excel/tax_excel.php"
                          });
                        </script>

                        <!-- Modal -->
                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Add Tax</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                  id="addtax"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="taxname" class="form-label">Tax Name</label>
                                    <input type="text" id="taxname" class="form-control" placeholder="Tax Name" style="text-transform: uppercase;"/>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="taxper" class="form-label">Tax Percentage</label>
                                    <input type="number" id="taxper" class="form-control" placeholder="Tax Percentage" />
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" id="closeadd">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary" id="addtaxbtn">Add Tax</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Vertically Centered Modal -->
                    <div class="col-lg-4 col-md-6">
                      <div class="mt-3">
                        <!-- Button trigger modal -->
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalCenter"
                          id="edittax"
                          hidden
                        >
                          Edit Tax
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Edit Tax</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                  id="editclose"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Tax Name</label>
                                    <input type="number" name="id" id="id" hidden>
                                    <input
                                      type="text"
                                      id="etaxname"
                                      class="form-control"
                                      placeholder="Tax Name"
                                    />
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Tax Percentage</label>
                                    <input
                                      type="number"
                                      id="etaxper"
                                      class="form-control"
                                      placeholder="Tax Percantage"
                                    />
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" id="closeedit">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary" id="savetaxbtn">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                   
              
              <!--/ Bootstrap modals -->

               <!-- Bootstrap Table with Header - Light -->
               <div class="card" >
                <h5 class="card-header"></h5>
                <div class="table-responsive text-nowrap" style="min-height: 400px;">

                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th>Tax Name</th>
                        <th>Tax Percentage</th>
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
    newform.append("obj", "tax_display");
    return fetch("API/car.php", {
      method: "POST",
      body: newform,   
      mode: "cors",
      credentials: "include"
    }).then(response => response.json());
  }

  let data = await loaddata();

document.getElementById("table-body").innerHTML="";

  
  for (let i = 0; i < data.data.length; i++) {

  
const tableBody = document.getElementById('table-body');

const newRow = document.createElement('tr');

const taxNameCell = document.createElement('td');
taxNameCell.textContent = data.data[i].tax_name;

const taxPercentageCell = document.createElement('td');
taxPercentageCell.textContent = data.data[i].tax_percentage;

const actionCell = document.createElement('td');

const dropdownDiv = document.createElement('div');
dropdownDiv.className = 'dropdown';

const dropdownButton = document.createElement('button');
dropdownButton.type = 'button';
dropdownButton.className = 'btn p-0 dropdown-toggle hide-arrow';
dropdownButton.setAttribute('data-bs-toggle', 'dropdown');

const dropdownIcon = document.createElement('i');
dropdownIcon.className = 'bx bx-dots-vertical-rounded';

dropdownButton.appendChild(dropdownIcon);

const dropdownMenu = document.createElement('div');
dropdownMenu.className = 'dropdown-menu';

const editDropdownItem = document.createElement('a');
editDropdownItem.className = 'dropdown-item';
editDropdownItem.href = 'javascript:void(0);';

const editIcon = document.createElement('i');
editIcon.className = 'bx bx-edit-alt me-1';

editDropdownItem.textContent = 'Edit';

editDropdownItem.appendChild(editIcon);

editDropdownItem.addEventListener("click", function() {
  const button = document.getElementById("edittax");
    button.click();
    document.getElementById("id").value=data.data[i].id;
    document.getElementById("etaxname").value=data.data[i].tax_name
    document.getElementById("etaxper").value=data.data[i].tax_percentage
});



const deleteDropdownItem = document.createElement('a');
deleteDropdownItem.className = 'dropdown-item';
deleteDropdownItem.href = 'javascript:void(0);';

const deleteIcon = document.createElement('i');
deleteIcon.className = 'bx bx-trash me-1';

deleteDropdownItem.textContent = 'Delete';

deleteDropdownItem.appendChild(deleteIcon);

deleteDropdownItem.addEventListener("click", function() {
  deletetax(data.data[i].id)    
});

dropdownMenu.appendChild(editDropdownItem);
dropdownMenu.appendChild(deleteDropdownItem);

dropdownDiv.appendChild(dropdownButton);
dropdownDiv.appendChild(dropdownMenu);

newRow.appendChild(taxNameCell);
newRow.appendChild(taxPercentageCell);
actionCell.appendChild(dropdownDiv);
newRow.appendChild(actionCell);

tableBody.appendChild(newRow);




}
}

main();

async function edittax() {
  console.log(document.getElementById("id").value)


  
  function loaddata(){
    const etaxname = document.getElementById("etaxname").value;
  const etaxper = document.getElementById("etaxper").value;
  
  if(!etaxname){
    // alert("Please enter a tax name");
    document.getElementById("etaxname").focus();
    return;
  }
  if(!etaxper){
    // alert("Please enter a tax percentage");
    document.getElementById("etaxper").focus();
    return;
  }
  newform = new FormData();
    newform.append("obj", "tax_edit");
    newform.append("id", document.getElementById("id").value);
    newform.append("taxname", document.getElementById("etaxname").value);
    newform.append("taxper", document.getElementById("etaxper").value);
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
    const button = document.getElementById("editclose");
    button.click();
    document.getElementById("eid").value=""
  document.getElementById("etaxname").value=""
  document.getElementById("etaxper").value=""
  }else{
    alert("Something Went Wrong! \n Please Try Again Later");
  }
}
  

async function addtax() {
  function loaddata(){
  const taxname = document.getElementById("taxname").value;
  const taxper = document.getElementById("taxper").value;
  
  if(!taxname){
    // alert("Please enter a tax name");
    document.getElementById("taxname").focus();
    return;
  }
  if(!taxper){
    // alert("Please enter a tax percentage");
    document.getElementById("taxper").focus();
    return;
  }
  
  newform = new FormData();
  newform.append("obj", "tax_add");
  newform.append("taxname", taxname);
  newform.append("taxper", taxper);
  
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
    const button = document.getElementById("closeadd");
    button.click();
    document.getElementById("taxname").value=""
  document.getElementById("taxper").value=""
  }else{
    alert("Something Went Wrong! \n Please Try Again Later");
  }
}
  

async function deletetax(id) {
  function loaddata(){
  newform = new FormData();
    newform.append("obj", "tax_delete");
    newform.append("id", id);
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
  

document.getElementById("savetaxbtn").addEventListener("click", edittax);
document.getElementById("addtaxbtn").addEventListener("click", addtax);





    </script>
 
 
  </body>
</html>