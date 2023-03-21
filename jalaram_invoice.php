<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$a=$_REQUEST['a'];
$query = "SELECT * from admin";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) >= 1) {
  $data = array();
  while ($row = mysqli_fetch_assoc($result)) {
          $name=$row['name'];
          $email=$row['email'];
          $phone=$row['phone'];
          $address1=$row['address1'];
          $address2=$row['address2'];
          $mobile2=$row['mobile2'];
          $gstin=$row['gstin'];
          $accno=$row['accno'];
          $bank=$row['bank'];
          $branch=$row['branch'];
          $ifsc=$row['ifsc'];
  }
}

$query = "SELECT customer.*, invoice.*, vehicle.vname FROM customer INNER JOIN invoice ON customer.name =
invoice.customer INNER JOIN vehicle ON vehicle.vnumber = invoice.vehicle where
invoice.code='$a';";
// echo $query;
$result = mysqli_query($conn, $query);


if(mysqli_num_rows($result) >= 1) {
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
  
      $code=$row['code'];
      $date=$row['date'];
      $customer=$row['customer'];
      $vehicle=$row['vehicle'];
      $trip=$row['trip'];
      $period_start=$row['period_start'];
      $period_end=$row['period_end'];
      $visitor_name=$row['visitor_name'];

      $km=$row['km'];
      $extra_km=$row['extra_km'];
      $extra_hour=$row['extra_hour'];
      $toll=$row['toll'];
      $parking=$row['parking'];
      $driver=$row['driver'];
      $night_hold=$row['night_hold'];
      $border_tax=$row['border_tax'];
      $airport=$row['airport'];

      $cgst=$row['cgst'];
      $sgst=$row['sgst'];
      $igst=$row['igst'];
      $tax=$row['tax'];
      $test=$row['test'];
      $id=$row['id'];
      $name=$row['name'];
      $address=$row['address'];
      $gst=$row['gst'];
      $vname=$row['vname'];

      $total=
        json_decode($km,true)["t"]+
        json_decode($extra_km,true)["t"]+
        json_decode($extra_hour,true)["t"]+
        json_decode($toll,true)["t"]+
        json_decode($parking,true)["t"]+
        json_decode($driver,true)["t"]+
        json_decode($night_hold,true)["t"]+
        json_decode($border_tax,true)["t"]+
        json_decode($airport,true)["t"];
    $tcgst=($total*(json_decode($cgst,true)["rate"]))/100;
    $tsgst=($total*(json_decode($sgst,true)["rate"]))/100;
    $tigst=($total*(json_decode($igst,true)["rate"]))/100;

    $final=$total+$tcgst+$tsgst+$tigst;
  
    }
  }

// echo json_decode($cgst,true)["name"];
$conn->close();
?>



<body id="pdf-content"">
    
<table  style="border: 1px solid;width: 100%;border-radius: 5px;font-family: Arial, Helvetica, sans-serif;background-color: #008fd3;color: white;">
    <tr>
        <td class="logo" style="background-color: #008fd3;">
            <center><img src="http://localhost/pdf/jalaram_logo.jpg"  height="180px"  style="margin: 10px;border: none;"></center>
        </td>
        <td style="padding-left: 40px;">
            <h1 style="margin-left: 20px;color: white;" >JALARAM TRAVELS</h1>
            
            <span style="font-size:15px;"> <?php echo $address1?>  <?php echo $address2?></span><br>
            <span style="font-size:15px;">Mob. :  <?php echo $phone?>,  <?php echo $mobile2?></span><br>
            <span style="font-size:15px;">E-mail : <?php echo $email?></span><br>
            <span style="font-size:15px;">GSTin No :  <?php echo $gstin?></span><br><br>
  
        </td>
    </tr>
</table>


<table  style="margin-top: 5px; border: 1px solid;width: 100%;border-radius: 5px;font-family: Arial, Helvetica, sans-serif;">
    <tr>
        <td>
           <center>
            <span style="font-size: 20px;">All Type of A.C. & Non A.C. Luxurious Car Available on Hire </span>
           </center> 
        </td>
    </tr>
</table>

<table  style="margin-top: 5px;width: 100%;border-radius: 5px;font-family: Arial, Helvetica, sans-serif;">
    <tr >
        <td style="border: 1px solid;border-radius: 5px;width: 60%;">
            <span>M/s <?php echo ucwords($customer)?></span><br><br>
            <span>GST No : <?php echo $gst?></span>
        </td>
        <td style="border: 1px solid;border-radius: 5px;padding: 10px;">
            <span>Bill No : <?php echo $code?></span><br><br>
            <span>Date : <?php echo date("d-m-Y", strtotime($date))?></span>
        </td>
    </tr>    
</table>



<table style="margin-top: 5px; border: 1px solid;width: 100%;border-radius: 5px;font-family: Arial, Helvetica, sans-serif;">

    <tr >
        
        <td>Place Of Visit </td>
        <td>Qty </td>
        <td>Rate </td>
        <td>Amount </td>
    </tr>
    <hr style="position: absolute;width: 701px;left: -0.3px;">

    
    <br>

    <tr>
        <td>Bill of Hired Vehicle : <?php echo $vname?></td> 
        <td></td>       
        <td></td>       
        <td></td>       
    </tr>

    <tr>
        <td>For The Month Of : <?php echo date("F",strtotime($date))?></td>
        <td></td>       
        <td></td>       
        <td></td>       
    </tr>

    <tr>
        <td>Period from : <b><?php echo $period_start?></b> To : <b><?php echo $period_end?></b></td>
        <td></td>       
        <td></td>       
        <td></td>       
    </tr>

    <tr>
        <td>Vehicle No.: <?php echo $vehicle?></td>
        <td></td>       
        <td></td>       
        <td></td>       
    </tr>

    <tr>
        <td>Total Km</td>
        <td><?php echo json_decode($km,true)["q"]?></td>
        <td><?php echo json_decode($km,true)["r"]?></td>
        <td><?php echo json_decode($km,true)["t"]?></td>
    </tr>

    <tr>
        <td>Total Extra Km</td>
        <td><?php echo json_decode($extra_km,true)["q"]?></td>
        <td><?php echo json_decode($extra_km,true)["r"]?></td>
        <td><?php echo json_decode($extra_km,true)["t"]?></td>
    </tr>

    <tr>
        <td>Total Extra Hours</td>
        <td><?php echo json_decode($extra_hour,true)["q"]?></td>
        <td><?php echo json_decode($extra_hour,true)["r"]?></td>
        <td><?php echo json_decode($extra_hour,true)["t"]?></td>
    </tr>

    <tr>
        <td>Toll Tax</td>
        <td><?php echo json_decode($toll,true)["q"]?></td>
        <td><?php echo json_decode($toll,true)["r"]?></td>
        <td><?php echo json_decode($toll,true)["t"]?></td>
    </tr>

    <tr>
        <td>Parking</td>
        <td><?php echo json_decode($parking,true)["q"]?></td>
        <td><?php echo json_decode($parking,true)["r"]?></td>
        <td><?php echo json_decode($parking,true)["t"]?></td>
    </tr>

    <tr>
        <td>Driver Charge</td>
        <td><?php echo json_decode($driver,true)["q"]?></td>
        <td><?php echo json_decode($driver,true)["r"]?></td>
        <td><?php echo json_decode($driver,true)["t"]?></td>
    </tr>

    <tr>
        <td>Night Hold</td>
        <td><?php echo json_decode($night_hold,true)["q"]?></td>      
        <td><?php echo json_decode($night_hold,true)["r"]?></td>      
        <td><?php echo json_decode($night_hold,true)["t"]?></td> 
    </tr>

    <tr>
        <td>Border Tax</td>
        <td><?php echo json_decode($border_tax,true)["q"]?></td>           
        <td><?php echo json_decode($border_tax,true)["r"]?></td>           
        <td><?php echo json_decode($border_tax,true)["t"]?></td>       
    </tr>

    <tr>
        <td>Airport & Station Pickup/Drop</td>
        <td><?php echo json_decode($airport,true)["q"]?></td>
        <td><?php echo json_decode($airport,true)["r"]?></td>
        <td><?php echo json_decode($airport,true)["t"]?></td>
    </tr>
<hr style="position: absolute;width: 701px;left: -0.3px;">
<br>
    <!-- ================================================= -->


    <tr>
        <td><b>HSN Code : 004400294</b></td>
        <td colspan="2">Gross Amount</td>        
        <td> : <?php echo $total?></td>        
    </tr>

    <tr>
        <td><b> SAC Code : 9966</b></td>
        <td colspan="2"><b>CGST </b> <?php echo json_decode($cgst,true)["rate"]?>%</td>            
        <td> : <?php echo $tcgst?></td>  
          
    </tr>

    <tr>
        <td></td>
        <td colspan="2"><b>SGST  </b><?php echo json_decode($sgst,true)["rate"]?>%</td>            
        <td> : <?php echo $tsgst?></td>      
    </tr>

    <tr>
        <td></td>
        <td colspan="2"><b>IGST </b><?php echo json_decode($igst,true)["rate"]?>%</td>            
        <td> : <?php echo $tigst?></td>        
    </tr>

    <tr>
        <td></td>
        <td colspan="2"><b>Tax </b><?php echo json_decode($igst,true)["rate"]?>%</td>            
        <td> : <?php echo $tigst?></td>    
    </tr>

    <tr>
        <td></td>
        <td colspan="5"><hr></td>            
        <td></td>    
    </tr>

    <tr>
        <td><b></b></td>
        <td><b>Total : </b></td>    
        <td></td>   
        <td><?php echo $final?></td>       
    </tr>

</table>

<table style="margin-top: 5px; border: 1px solid;width: 100%;border-radius: 5px;font-family: Arial, Helvetica, sans-serif;">

    <tr>
        <td><B>JALARAM TRAVELS</B></td>
        <td style="font-size: 10px;">Subject to Ahmedabad Jurisdiction <br> E. & O. E.</td>
        <td><b>For, JALARAM TRAVELS</b></td>
    </tr>
    <tr style="font-size: 13px;">
        <td>A/C No. :  <?php echo $accno?></td>
        <td></td>
        <td></td>
    </tr>
    <tr style="font-size: 13px;">
        <td>Bank :  <?php echo $bank?></td>
        <td></td>
        <td></td>
    </tr>
    <tr style="font-size: 13px;">
        <td>Branch :  <?php echo $branch?></td>
        <td></td>
        <td></td>
    </tr>
    <tr style="font-size: 13px;">
        <td>ISFC Code :  <?php echo $ifsc?></td>
        <td></td>
        <td>Authorized Signatory</td>
    </tr>
</table>






</body>      


    