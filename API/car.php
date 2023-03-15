<?php
header("Access-Control-Allow-Origin: http://127.0.0.1:5500");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

session_set_cookie_params(60*3); // set cookie lifetime to 60 seconds
ini_set('session.gc_maxlifetime', 60*3); // set session garbage collection lifetime to 60 seconds
ini_set('session.cookie_lifetime', 60*3);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_REQUEST['obj'])){
  $choice=$_REQUEST['obj'];
}else{
  $choice=null;
}





// if(session_status() == PHP_SESSION_NONE) {
  session_start();
// }

class Login {
  function login($con) {

    if(isset($_REQUEST['phone']) && isset($_REQUEST['password'])) {
      $phone = $_REQUEST['phone'];
      $password = $_REQUEST['password'];
      
      $query = "SELECT * FROM admin WHERE phone='$phone' ";
      $result = mysqli_query($con, $query);
      
      if(mysqli_num_rows($result) == 1) {

        $query = "SELECT * FROM admin WHERE phone='$phone' and password='$password';";
        $result = mysqli_query($con, $query);

        
        if(mysqli_num_rows($result) == 1) {
  
          $row = mysqli_fetch_assoc($result);
          $_SESSION['phone'] = $row['phone'];
          $data = array('name' => $row['name']);
          $response = array('data' => array($data), 'message' => '1', 'link' => 'home.html');
          echo json_encode($response);

        } else {
          echo '{"message":"Wrong Password"}';
        }
        
      } else {
        echo '{"message":"Phone Not Valid"}';
      }

    } else {
      echo '{"message":"Missing parameters"}';
    }
  }
  function check_auth(){

    if(isset($_SESSION['phone'])) {
      return 1;
    } else {
      return 0;
    }

  }

  function sess_destroy() {
    session_destroy();
  }
}


// =======================  Customers ==================================
  
class Customer{
    function customer_display($con) {
      if(isset($_SESSION['phone'])) {
    
        $query = "SELECT id,name,address,gst FROM customer";
        $result = mysqli_query($con, $query);
        
        if(mysqli_num_rows($result) >= 1) {
          $data = array();
          while ($row = mysqli_fetch_assoc($result)) {
              $data[] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
                  'address' => $row['address'],
                  'gst' => $row['gst']
              );
          }
          $response = array('data' => $data, 'message' => true);
          echo json_encode($response);
        } else {
          echo '{"message":false}';
        }
      } else {
        echo '{"message":"Unauthorized"}';
      }
  }
  
  function customer_add($con) {
    // get customer data from API request
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $gst = $_REQUEST['gst'];
    
    // insert customer data into database
    $query = "INSERT INTO `customer` (`id`, `name`, `address`, `gst`) VALUES (NULL,'$name', '$address', '$gst');";
    $result = mysqli_query($con, $query);

    // check if customer was added successfully
    if($result) {
        $data = array(
            'name' => $name,
            'address' => $address,
            'gst' => $gst
        );
        $response = array('data' => $data, 'message' => 'true');
        echo json_encode($response);
    } else {
        $response = array('message' => 'false');
        echo json_encode($response);
    }
  }

  function customer_edit($con) {
    // get customer data from API request
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $gst = $_REQUEST['gst'];
    
    // update customer data in database
    $query = "UPDATE `customer` SET `name`='$name', `address`='$address', `gst`='$gst' WHERE `id`='$id'";
    $result = mysqli_query($con, $query);

    // check if customer was updated successfully
    if($result) {
        $data = array(
            'id' => $id,
            'name' => $name,
            'address' => $address,
            'gst' => $gst
        );
        $response = array('data' => $data, 'message' => 'true');
        echo json_encode($response);
    } else {
        $response = array('message' => 'false');
        echo json_encode($response);
    }
  }

  function customer_delete($con) {
    // get customer ID from API request
    $id = $_REQUEST['id'];
    
    // delete customer from database
    $query = "DELETE FROM `customer` WHERE `id`='$id'";
    $result = mysqli_query($con, $query);

    // check if customer was deleted successfully
    if($result) {
        $response = array('message' => 'true');
        echo json_encode($response);
    } else {
        $response = array('message' => 'false');
        echo json_encode($response);
    }
  }

}


// ====================== Vehicles ====================================

class Vehicle{
  function vehicle_display($con) {
    // retrieve all vehicles from database
    $query = "SELECT * FROM `vehicle`";
    $result = mysqli_query($con, $query);

    // create array of vehicles data
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = array(
            'vname' => $row['vname'],
            'vnumber' => $row['vnumber'],
            'vserial' => $row['vserial'],
            'local_km_range' => $row['local_km_range'],
            'local_km_rate' => $row['local_km_rate'],
            'local_ext_km' => $row['local_ext_km'],
            'local_ext_hour' => $row['local_ext_hour'],
            'out_km_range' => $row['out_km_range'],
            'out_km_rate' => $row['out_km_rate'],
            'out_ext_km' => $row['out_ext_km'],
            'out_ext_hour' => $row['out_ext_hour']
        );
    }

    if(count($data) > 0) {
        $response = array('data' => $data, 'message' => true);
        echo json_encode($response);
    } else {
        $response = array('message' => true);
        echo json_encode($response);
    }
}

  
function vehicle_add($con) {
  if(isset($_SESSION['phone'])) {
      $vnumber = $_REQUEST['vnumber'];
      $query = "SELECT * FROM `vehicle` WHERE `vnumber` = '$vnumber'";
      $result = mysqli_query($con, $query);
      if(mysqli_num_rows($result) >= 1) {
          echo '{"message": false}';
          return;
      }
      $vname = $_REQUEST['vname'];
      $vserial = $_REQUEST['vserial'];
      $local_km_range = $_REQUEST['local_km_range'];
      $local_km_rate = $_REQUEST['local_km_rate'];
      $local_ext_km = $_REQUEST['local_ext_km'];
      $local_ext_hour = $_REQUEST['local_ext_hour'];
      $out_km_range = $_REQUEST['out_km_range'];
      $out_km_rate = $_REQUEST['out_km_rate'];
      $out_ext_km = $_REQUEST['out_ext_km'];
      $out_ext_hour = $_REQUEST['out_ext_hour'];

      $query = "INSERT INTO `vehicle` (`vnumber`, `vname`, `vserial`, `local_km_range`, `local_km_rate`, `local_ext_km`, `local_ext_hour`, `out_km_range`, `out_km_rate`, `out_ext_km`, `out_ext_hour`) 
                VALUES ('$vnumber', '$vname', '$vserial', '$local_km_range', '$local_km_rate', '$local_ext_km', '$local_ext_hour', '$out_km_range', '$out_km_rate', '$out_ext_km', '$out_ext_hour')";
      $result = mysqli_query($con, $query);
      if($result) {
          $data = array('vnumber' => $vnumber, 'vname' => $vname, 'vserial' => $vserial, 'local_km_range' => $local_km_range, 'local_km_rate' => $local_km_rate, 'local_ext_km' => $local_ext_km, 'local_ext_hour' => $local_ext_hour, 'out_km_range' => $out_km_range, 'out_km_rate' => $out_km_rate, 'out_ext_km' => $out_ext_km, 'out_ext_hour' => $out_ext_hour);
          $response = array('data' => $data, 'message' => true);
          echo json_encode($response);
      } else {
          echo '{"message": "error"}';
      }
  } else {
      echo '{"message": "Unauthorized"}';
  }
}

  
function vehicle_edit($con) {
  if(isset($_SESSION['phone'])) {
      $id = $_REQUEST['id'];
      $vname = $_REQUEST['vname'];
      $vnumber = $_REQUEST['vnumber'];
      $vserial = $_REQUEST['vserial'];
      $local_km_range = $_REQUEST['local_km_range'];
      $local_km_rate = $_REQUEST['local_km_rate'];
      $local_ext_km = $_REQUEST['local_ext_km'];
      $local_ext_hour = $_REQUEST['local_ext_hour'];
      $out_km_range = $_REQUEST['out_km_range'];
      $out_km_rate = $_REQUEST['out_km_rate'];
      $out_ext_km = $_REQUEST['out_ext_km'];
      $out_ext_hour = $_REQUEST['out_ext_hour'];

      // update vehicle data in database
      $query = "UPDATE `vehicle` SET 
          `vname` = '$vname', 
          `vnumber` = '$vnumber', 
          `vserial` = '$vserial', 
          `local_km_range` = '$local_km_range', 
          `local_km_rate` = '$local_km_rate', 
          `local_ext_km` = '$local_ext_km', 
          `local_ext_hour` = '$local_ext_hour', 
          `out_km_range` = '$out_km_range', 
          `out_km_rate` = '$out_km_rate', 
          `out_ext_km` = '$out_ext_km', 
          `out_ext_hour` = '$out_ext_hour' 
          WHERE `id` = '$id'";
      $result = mysqli_query($con, $query);

      // return response based on success or failure of update operation
      if($result) {
          $response = array('message' => 'Vehicle updated successfully');
          echo json_encode($response);
      } else {
          $response = array('message' => 'Vehicle update failed');
          echo json_encode($response);
      }
  } else {
      echo '{"message":"Unauthorized"}';
  }
}

  
function vehicle_delete($con) {
  if(isset($_SESSION['phone'])) {
      $vnumber = $_REQUEST['vnumber'];
      $query = "SELECT * FROM `vehicle` WHERE `vnumber` = '$vnumber'";
      $result = mysqli_query($con, $query);
      if(mysqli_num_rows($result) == 0) {
          echo '{"message": "Vehicle does not exist"}';
          return;
      }
      $query = "DELETE FROM `vehicle` WHERE `vnumber` = '$vnumber'";
      $result = mysqli_query($con, $query);
      if($result) {
          echo '{"message": "Vehicle deleted successfully"}';
      } else {
          echo '{"message": "Failed to delete vehicle"}';
      }
  } else {
      echo '{"message": "Unauthorized"}';
  }
}
}



$admin = new Login();
$customer = new Customer();
$vehicle = new Vehicle();

switch($choice){
  case 'logout':$admin->sess_destroy();break;
  case 'check_auth':$admin->check_auth();break;
  case 'login':$admin->login($conn);break;


  case 'displaycust':$customer->customer_display($conn);break;
  case 'customer_add':$customer->customer_add($conn);break;
  case 'customer_edit':$customer->customer_edit($conn);break;
  case 'customer_delete':$customer->customer_delete($conn);break;

  
  case 'vehicle_display':$vehicle->vehicle_display($conn);break;
  case 'vehicle_add':$vehicle->vehicle_add($conn);break;
  case 'vehicle_edit':$vehicle->vehicle_edit($conn);break;
  case 'vehicle_delete':$vehicle->vehicle_delete($conn);break;


}

?>





