<?php
header("Access-Control-Allow-Origin: http://127.0.0.1:5500");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

session_set_cookie_params(60*60); 
ini_set('session.gc_maxlifetime', 60*60); 
ini_set('session.cookie_lifetime', 60*60);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car";

// $servername = "localhost";
// $username = "id20438900_car_test";
// $password = "Ahmedabad@206";
// $dbname = "id20438900_car";




$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_REQUEST['obj'])){
  $choice=$_REQUEST['obj'];
}else{
  $choice=null;
}


  session_start();

class Login {
  function login($con) {

    if(isset($_REQUEST['phone']) && isset($_REQUEST['password'])) {
      $phone = mysqli_real_escape_string($con, $_REQUEST['phone']);
      $password = mysqli_real_escape_string($con, $_REQUEST['password']);

      // Use prepared statements to prevent SQL injection
      $stmt = mysqli_prepare($con, "SELECT name FROM admin WHERE phone=? AND password=?");
      mysqli_stmt_bind_param($stmt, "ss", $phone, $password);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      
      if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        
        // Regenerate the session ID to prevent session hijacking
        session_regenerate_id();
        $_SESSION['phone'] = $phone;
        
        $data = array('name' => $row['name']);
        $response = array('data' => array($data), 'message' => '1', 'link' => 'home.php');
        echo json_encode($response);

      } else {
        echo '{"message":"Wrong Phone Number or Password"}';
      }
        
    } else {
      echo '{"message":"Missing parameters"}';
    }
  }
  
  function check_auth(){

    if(isset($_SESSION['phone']) && isset($_SESSION['name'])) {
      return 1;
    } else {
      return 0;
    }

  }

  function sess_destroy() {
    session_unset();
    session_destroy();
  }
}



  
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
    $name = ucwords($_REQUEST['name']);
    $address = mysqli_real_escape_string($con, $_REQUEST['address']);
    $gst = mysqli_real_escape_string($con, $_REQUEST['gst']);
    
    $query = "INSERT INTO `customer` (`id`, `name`, `address`, `gst`) VALUES (NULL,'$name', '$address', '$gst');";
    $result = mysqli_query($con, $query);

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
    $id = mysqli_real_escape_string($con, $_REQUEST['id']);
    $name = ucwords($_REQUEST['name']);
    $address = mysqli_real_escape_string($con, $_REQUEST['address']);
    $gst = mysqli_real_escape_string($con, $_REQUEST['gst']);
    
    $query = "UPDATE `customer` SET `name`='$name', `address`='$address', `gst`='$gst' WHERE `id`='$id'";
    $result = mysqli_query($con, $query);

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
    $id = mysqli_real_escape_string($con, $_REQUEST['id']);
    
    $query = "DELETE FROM `customer` WHERE `id`='$id'";
    $result = mysqli_query($con, $query);

    if($result) {
        $response = array('message' => 'true');
        echo json_encode($response);
    } else {
        $response = array('message' => 'false');
        echo json_encode($response);
    }
  }

}



class Vehicle{
  function vehicle_display($con) {
    if(isset($_SESSION['phone'])) {
    $query = "SELECT * FROM `vehicle`";
    $result = mysqli_query($con, $query);
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = array(
            'vname' => ucwords($row['vname']),
            'vnumber' => $row['vnumber'],
            'vserial' => strtoupper($row['vserial']),
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
  } else {
    echo '{"message": "Unauthorized"}';
    }
  }

  
  function vehicle_add($con) {
    if(isset($_SESSION['phone'])) {
        $vnumber = strtoupper($_REQUEST['vnumber']);
        $query = "SELECT * FROM `vehicle` WHERE `vnumber` = '$vnumber'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) >= 1) {
            echo '{"message": false}';
            return;
        }
        $vname = ucwords($_REQUEST['vname']);
        $vserial = strtoupper($_REQUEST['vserial']);
        $local_km_range = mysqli_real_escape_string($con, $_REQUEST['local_km_range']);
        $local_km_rate = mysqli_real_escape_string($con, $_REQUEST['local_km_rate']);
        $local_ext_km = mysqli_real_escape_string($con, $_REQUEST['local_ext_km']);
        $local_ext_hour = mysqli_real_escape_string($con, $_REQUEST['local_ext_hour']);
        $out_km_range = mysqli_real_escape_string($con, $_REQUEST['out_km_range']);
        $out_km_rate = mysqli_real_escape_string($con, $_REQUEST['out_km_rate']);
        $out_ext_km = mysqli_real_escape_string($con, $_REQUEST['out_ext_km']);
        $out_ext_hour = mysqli_real_escape_string($con, $_REQUEST['out_ext_hour']);

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
        $vname = mysqli_real_escape_string($con, $_REQUEST['evname']);
        $vnumber = mysqli_real_escape_string($con, $_REQUEST['evnumber']);
        $vserial = mysqli_real_escape_string($con, $_REQUEST['evserial']);
        $local_km_range = mysqli_real_escape_string($con, $_REQUEST['elocal_km_range']);
        $local_km_rate = mysqli_real_escape_string($con, $_REQUEST['elocal_km_rate']);
        $local_ext_km = mysqli_real_escape_string($con, $_REQUEST['elocal_ext_km']);
        $local_ext_hour = mysqli_real_escape_string($con, $_REQUEST['elocal_ext_hour']);
        $out_km_range = mysqli_real_escape_string($con, $_REQUEST['eout_km_range']);
        $out_km_rate = mysqli_real_escape_string($con, $_REQUEST['eout_km_rate']);
        $out_ext_km = mysqli_real_escape_string($con, $_REQUEST['eout_ext_km']);
        $out_ext_hour = mysqli_real_escape_string($con, $_REQUEST['eout_ext_hour']);

        $query = "UPDATE `vehicle` SET 
            `vname` = '$vname', 
            `vserial` = '$vserial', 
            `local_km_range` = '$local_km_range', 
            `local_km_rate` = '$local_km_rate', 
            `local_ext_km` = '$local_ext_km', 
            `local_ext_hour` = '$local_ext_hour', 
            `out_km_range` = '$out_km_range', 
            `out_km_rate` = '$out_km_rate', 
            `out_ext_km` = '$out_ext_km', 
            `out_ext_hour` = '$out_ext_hour' 
            WHERE `vnumber` = '$vnumber'";
        $result = mysqli_query($con, $query);

        if($result) {
            $response = array('message' => true);
            echo json_encode($response);
        } else {
            $response = array('message' => false);
            echo json_encode($response);
        }
    } else {
        echo '{"message":"Unauthorized"}';
    }
  }

  
  function vehicle_delete($con) {
    if(isset($_SESSION['phone'])) {
        $vnumber = strtoupper($_REQUEST['vnumber']);
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




class Taxes{

  function tax_display($con) {
    if(isset($_SESSION['phone'])) {
  
      $query = "SELECT id,tax_name,tax_percentage FROM tax";
      $result = mysqli_query($con, $query);
      
      if(mysqli_num_rows($result) >= 1) {
        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = array(
                'id' => $row['id'],
                'tax_name' => $row['tax_name'],
                'tax_percentage' => $row['tax_percentage']
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
  


  function tax_add($con) {
    
    if(isset($_SESSION['phone'])) {
      $taxname = mysqli_real_escape_string($con, $_REQUEST['taxname']);
      $taxper = mysqli_real_escape_string($con, $_REQUEST['taxper']);
      $query = "INSERT INTO tax (tax_name, tax_percentage) VALUES ('$taxname', '$taxper')";
      $result = mysqli_query($con, $query);
  
      if($result) {
        echo '{"message":true}';
      } else {
        echo '{"message":false}';
      }
    } else {
      echo '{"message":"Unauthorized"}';
    }
  }


  function tax_edit($con) {
    
    if(isset($_SESSION['phone'])) {
      $id = mysqli_real_escape_string($con, $_REQUEST['id']);
      $taxname = mysqli_real_escape_string($con, $_REQUEST['taxname']);
      $taxper = mysqli_real_escape_string($con, $_REQUEST['taxper']);
      $query = "UPDATE tax SET tax_name='$taxname', tax_percentage='$taxper' WHERE id='$id'";
      $result = mysqli_query($con, $query);

      if($result) {
        echo '{"message":true}';
      } else {
        echo '{"message":false}';
      }
    } else {
      echo '{"message":"Unauthorized"}';
    }
  }

  function tax_delete($con) {
    
    if(isset($_SESSION['phone'])) {
      $id = mysqli_real_escape_string($con, $_REQUEST['id']);
      $query = "DELETE FROM tax WHERE id='$id'";
      $result = mysqli_query($con, $query);

      if($result) {
        echo '{"message":true}';
      } else {
        echo '{"message":false}';
      }

    } else {
      echo '{"message":"Unauthorized"}';
    }
  }



}


class Invoice{

  function invoice_add($con) {
    if(isset($_SESSION['phone'])) {
      // Get post data
      $code = mysqli_real_escape_string($con, $_REQUEST['code']);
      $date = mysqli_real_escape_string($con, $_REQUEST['date']);
      $customer = mysqli_real_escape_string($con, $_REQUEST['customer_select']);
      $vehicle = mysqli_real_escape_string($con, $_REQUEST['vehicle_select']);
      $trip = mysqli_real_escape_string($con, $_REQUEST['trip']);
      $period_start = mysqli_real_escape_string($con, $_REQUEST['period_start']);
      $period_end = mysqli_real_escape_string($con, $_REQUEST['period_end']);
      $visitor_name = mysqli_real_escape_string($con, $_REQUEST['visitor_name']);
      $km = mysqli_real_escape_string($con, $_REQUEST['km']);
      $extra_km = mysqli_real_escape_string($con, $_REQUEST['extra_km']);
      $extra_hour = mysqli_real_escape_string($con, $_REQUEST['extra_hour']);
      $toll = mysqli_real_escape_string($con, $_REQUEST['toll']);
      $parking = mysqli_real_escape_string($con, $_REQUEST['parking']);
      $driver = mysqli_real_escape_string($con, $_REQUEST['driver']);
      $night_hold = mysqli_real_escape_string($con, $_REQUEST['night_hold']);
      $border_tax = mysqli_real_escape_string($con, $_REQUEST['border_tax']);
      $airport = mysqli_real_escape_string($con, $_REQUEST['airport']);
      $cgst = mysqli_real_escape_string($con, $_REQUEST['cgst']);
      $sgst = mysqli_real_escape_string($con, $_REQUEST['gst']);
      $igst = mysqli_real_escape_string($con, $_REQUEST['igst']);
      $tax = mysqli_real_escape_string($con, $_REQUEST['tax']);
      $test = $_REQUEST['test'];
  
      // Check if code already exists
      $check_query = "SELECT code FROM invoice WHERE code='$code'";
      $check_result = mysqli_query($con, $check_query);
  
      if(mysqli_num_rows($check_result) > 0) {
        echo '{"message":"exists"}';
      } else {
        // Insert into invoice table
        $query = "INSERT INTO invoice (code, date, customer, vehicle, trip, period_start, period_end, visitor_name, km, extra_km, extra_hour, toll, parking, driver, night_hold, border_tax, airport, cgst, sgst, igst, tax,test) 
                  VALUES ('$code', '$date', '$customer', '$vehicle', '$trip', '$period_start', '$period_end', '$visitor_name', '$km', '$extra_km', '$extra_hour', '$toll', '$parking', '$driver', '$night_hold', '$border_tax', '$airport', '$cgst', '$sgst', '$igst', '$tax','$test')";
        $result = mysqli_query($con, $query);
  
        if($result) {
          echo '{"message":true}';
        } else {
          echo '{"message":false}';
        }
      }
    } else {
      echo '{"message":"Unauthorized"}';
    }
  }
  
  function invoice_display($con) {
    if(isset($_SESSION['phone'])) {
    
      $query = "SELECT customer.*, invoice.*, vehicle.vname FROM customer INNER JOIN invoice ON customer.name = invoice.customer INNER JOIN vehicle ON vehicle.vnumber = invoice.vehicle ORDER BY code;";
      $result = mysqli_query($con, $query);
      
      if(mysqli_num_rows($result) >= 1) {
        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = array(
                'code' => $row['code'],
                'date' => $row['date'],
                'customer' => $row['customer'],
                'vehicle' => $row['vehicle'],
                'trip' => $row['trip'],
                'period_start' => $row['period_start'],
                'period_end' => $row['period_end'],
                'visitor_name' => $row['visitor_name'],
                'km' => $row['km'],
                'extra_km' => $row['extra_km'],
                'extra_hour' => $row['extra_hour'],
                'toll' => $row['toll'],
                'parking' => $row['parking'],
                'driver' => $row['driver'],
                'night_hold' => $row['night_hold'],
                'border_tax' => $row['border_tax'],
                'airport' => $row['airport'],
                'cgst' => $row['cgst'],
                'sgst' => $row['sgst'],
                'igst' => $row['igst'],
                'tax' => $row['tax'],
                'test' => $row['test'],
                'id' => $row['id'],
                'name' => $row['name'],
                'address' => $row['address'],
                'gst' => $row['gst'],
                'vname' => $row['vname']
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

  
  function invoice_edit($con) {
    if(isset($_SESSION['phone'])) {
      $code = mysqli_real_escape_string($con, $_REQUEST['code']);
      $query = "SELECT * FROM invoice WHERE code = '$code'";
      $result = mysqli_query($con, $query);
      if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $date = mysqli_real_escape_string($con, $_REQUEST['date']);
        $customer = mysqli_real_escape_string($con, $_REQUEST['customer']);
        $vehicle = mysqli_real_escape_string($con, $_REQUEST['vehicle']);
        $trip = mysqli_real_escape_string($con, $_REQUEST['trip']);
        $period_start = mysqli_real_escape_string($con, $_REQUEST['period_start']);
        $period_end = mysqli_real_escape_string($con, $_REQUEST['period_end']);
        $visitor_name = mysqli_real_escape_string($con, $_REQUEST['visitor_name']);
        $km = mysqli_real_escape_string($con, $_REQUEST['km']);
        $extra_km = mysqli_real_escape_string($con, $_REQUEST['extra_km']);
        $extra_hour = mysqli_real_escape_string($con, $_REQUEST['extra_hour']);
        $toll = mysqli_real_escape_string($con, $_REQUEST['toll']);
        $parking = mysqli_real_escape_string($con, $_REQUEST['parking']);
        $driver = mysqli_real_escape_string($con, $_REQUEST['driver']);
        $night_hold = mysqli_real_escape_string($con, $_REQUEST['night_hold']);
        $border_tax = mysqli_real_escape_string($con, $_REQUEST['border_tax']);
        $airport = mysqli_real_escape_string($con, $_REQUEST['airport']);
        $cgst = mysqli_real_escape_string($con, $_REQUEST['cgst']);
        $sgst = mysqli_real_escape_string($con, $_REQUEST['sgst']);
        $igst = mysqli_real_escape_string($con, $_REQUEST['igst']);
        $tax = mysqli_real_escape_string($con, $_REQUEST['tax']);
        $query = "UPDATE invoice SET 
                  date = '$date', 
                  customer = '$customer', 
                  vehicle = '$vehicle', 
                  trip = '$trip', 
                  period_start = '$period_start', 
                  period_end = '$period_end', 
                  visitor_name = '$visitor_name', 
                  km = '$km', 
                  extra_km = '$extra_km', 
                  extra_hour = '$extra_hour', 
                  toll = '$toll', 
                  parking = '$parking', 
                  driver = '$driver', 
                  night_hold = '$night_hold', 
                  border_tax = '$border_tax', 
                  airport = '$airport', 
                  cgst = '$cgst', 
                  sgst = '$sgst', 
                  igst = '$igst', 
                  tax = '$tax' 
                  WHERE id = $id";
        if(mysqli_query($con, $query)) {
          echo '{"message":true}';
        } else {
          echo '{"message":false}';
        }
      } else {
        echo '{"message":false}';
      }
    } else {
      echo '{"message":"Unauthorized"}';
    }
  }

  function invoice_delete($con) {
    if(isset($_SESSION['phone'])) {
      $code = mysqli_real_escape_string($con, $_REQUEST['code']);
      $query = "SELECT * FROM invoice WHERE code = '$code'";
      $result = mysqli_query($con, $query);
      if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['code'];
        $query = "DELETE FROM invoice WHERE code = '$id'";

        if(mysqli_query($con, $query)) {
          echo '{"message":true}';
        } else {
          echo '{"message":false}';
        }
      } else {
        echo '{"message":false}';
      }
    } else {
      echo '{"message":"Unauthorized"}';
    }
  }

  function invoice_dataAdmin($con) {

      $query = "SELECT * from admin";
      $result = mysqli_query($con, $query);
      
      if(mysqli_num_rows($result) >= 1) {
        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = array(
                'name'=>$row['name'],
                'email'=>$row['email'],
                'phone'=>$row['phone'],
                'address1'=>$row['address1'],
                'address2'=>$row['address2'],
                'mobile2'=>$row['mobile2'],
                'gstin'=>$row['gstin'],
                'accno'=>$row['accno'],
                'bank'=>$row['bank'],
                'branch'=>$row['branch'],
                'ifsc'=>$row['ifsc'],
            );
        }
        $response = array('data' => $data, 'message' => true);
        echo json_encode($response);
      } else {
        echo '{"message":false}';
      }

  }


  
  

}

$admin = new Login();
$customer = new Customer();
$vehicle = new Vehicle();
$taxes = new Taxes();
$invoice = new Invoice();

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
  
  
  case 'tax_display':$taxes->tax_display($conn);break;
  case 'tax_add':$taxes->tax_add($conn);break;
  case 'tax_edit':$taxes->tax_edit($conn);break;
  case 'tax_delete':$taxes->tax_delete($conn);break;


  case 'invoice_add':$invoice->invoice_add($conn);break;
  case 'invoice_display':$invoice->invoice_display($conn);break;
  case 'invoice_delete':$invoice->invoice_delete($conn);break;
  case 'invoice_dataAdmin':$invoice->invoice_dataAdmin($conn);break;


}

?>





