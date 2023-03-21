<?php

if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
  
    $extensions= array("jpeg","jpg","png");
  
    if(in_array($file_ext,$extensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
  
    if(empty($errors)) {
        $upload_dir = "uploads/";
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true); // create the directory if it doesn't exist
        }
        $new_file_name = "sign.jpeg"; // generate a unique file name
        $target_file = $upload_dir . $new_file_name; // set the target path for the uploaded file
        if (move_uploaded_file($file_tmp, $target_file)) {
            $response = array(
                "status" => "success",
                "message" => "File uploaded successfully"
            );
            echo json_encode($response); // send the JSON response back to JavaScript
        } else {
            $errors[] = "File upload failed";
            $response = array(
                "status" => "error",
                "message" => $errors
            );
            echo json_encode($response); // send the JSON response back to JavaScript
        }
    } else {
        $response = array(
            "status" => "error",
            "message" => $errors
        );
        echo json_encode($response); // send the JSON response back to JavaScript
    }
}
?>
