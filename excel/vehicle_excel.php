<?php
require 'database.php';

$query = "SELECT * from vehicle";
$result = mysqli_query($conn, $query);

include_once("xlsxwriter.class.php");
$writer = new XLSXWriter();
$writer->writeSheetHeader('Sheet1', array('Vehicle Name'=>'string','Vehicle Number'=>'string','Serial Number'=>'string',
'Local KM Range'=>'integer','Local KM Rate'=>'integer','Local Extra KM'=>'integer','Local Extra Hour'=>'integer'
,'Out-Station KM Range'=>'integer','Out-Station KM Rate'=>'integer','Out-Station Extra KM'=>'integer','Out-Station Extra Hour'=>'integer') );


if(mysqli_num_rows($result) >= 1) {
  $data = array();
  while ($row = mysqli_fetch_assoc($result)) {
            $vname=$row['vname'];
            $vnumber=$row['vnumber'];
            $vserial=$row['vserial'];
            $local_km_range=$row['local_km_range'];
            $local_km_rate=$row['local_km_rate'];
            $local_ext_km=$row['local_ext_km'];
            $local_ext_hour=$row['local_ext_hour'];
            $out_km_range=$row['out_km_range'];
            $out_km_rate=$row['out_km_rate'];
            $out_ext_km=$row['out_ext_km'];
            $out_ext_hour=$row['out_ext_hour'];


  $writer->writeSheetRow('Sheet1', array(
  $vname,
  $vnumber,
  $vserial,
  $local_km_range,
  $local_km_rate,
  $local_ext_km,
  $local_ext_hour,
  $out_km_range,
  $out_km_rate,
  $out_ext_km,
  $out_ext_hour));

}
}
$writer->writeToFile('Vehicle.xlsx');

// Download the generated file
$file_name = 'Vehicle.xlsx';
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
