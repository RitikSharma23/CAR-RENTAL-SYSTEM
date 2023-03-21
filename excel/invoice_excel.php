<?php
require 'database.php';

$query = "SELECT customer.*, invoice.*, vehicle.vname FROM customer INNER JOIN invoice ON customer.name =
invoice.customer INNER JOIN vehicle ON vehicle.vnumber = invoice.vehicle ;";
$result = mysqli_query($conn, $query);

include_once("xlsxwriter.class.php");
$writer = new XLSXWriter();
$writer->writeSheetHeader('Sheet1', array(
  'Invoice No'=>'string',
  'Invoice Date'=>'date',
  'Customer'=>'string',
  'GSTin No.'=>'string',
  'Vehicle Name'=>'string',
  'Vehicle No.'=>'string',
  'Trip'=>'string',
  'Gross Amount'=>'integer',
  'Tax Amount'=>'integer',
  'Total Amount'=>'integer',
));


if(mysqli_num_rows($result) >= 1) {
  $data = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $code=$row['code'];
    $date=$row['date'];
    $customer=$row['customer'];
    $gst=$row['gst'];
    $vname=$row['vname'];
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

    $trip=($trip==1)?"Local":"Out";

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
if(json_decode($tax,true)["name"]){$ttax=($total*(json_decode($tax,true)["rate"]))/100;}

if(json_decode($tax,true)["name"]){
    $ttax=($total*(json_decode($tax,true)["rate"]))/100;
    $final=$total+$tcgst+$tsgst+$tigst+$ttax;
    $total_tax=$tcgst+$tsgst+$tigst+$ttax;
}else{
    $final=$total+$tcgst+$tsgst+$tigst;
    $total_tax=$tcgst+$tsgst+$tigst;
}

  echo $name;
  $writer->writeSheetRow('Sheet1', array(
    $code,
    $date,
    $customer,
    $gst,
    $vname,
    $vehicle,
    $trip,
    $total,
    $total_tax,
    $final,
  ));

}
}
$writer->writeToFile('Invoice.xlsx');


$file_name = 'Invoice.xlsx';
$file_path = realpath($file_name);
if (file_exists($file_path)) {
    ob_clean();
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length: ' . filesize($file_path));
  readfile($file_path);
  exit;
}

$conn->close();
?>
