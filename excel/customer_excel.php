<?php
require 'database.php';

$query = "SELECT * from customer";
$result = mysqli_query($conn, $query);

include_once("xlsxwriter.class.php");
$writer = new XLSXWriter();
$writer->writeSheetHeader('Sheet1', array('Name'=>'string','Address'=>'string','GST No.'=>'string') );


if(mysqli_num_rows($result) >= 1) {
  $data = array();
  while ($row = mysqli_fetch_assoc($result)) {
            $id=$row['id'];
            $name=$row['name']	;
            $address=$row['address']	;
            $gst=$row['gst'];

  echo $name;
  $writer->writeSheetRow('Sheet1', array($name,$address,$gst));

}
}
$writer->writeToFile('customer.xlsx');

// Download the generated file
$file_name = 'customer.xlsx';
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
