<?php
     //var_dump($_FILES);

    // move_uploaded_file($_FILES['upload_file']['tmp_name'], 'IMG/'.$_FILES['upload_file']['name']);

    $folder_path = '../IMG'; //thu muc up file vao
    $file_path = $folder_path.basename($_FILES['upload_file']['name']);

    $flag_ok = true;
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["upload_file"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $flag_ok = true;
        } else {
          echo "File is not an image.";
          $flag_ok = false;
        }
      }

    //check trung ten
    if(file_exists($file_path)){
        $flag_ok = false;
        echo "trung ten";
    }
    //jpg, png, gif, jpeg : đuôi ảnh.
     // lấy đuôi ảnh.
    $ex = array('jpg', 'jpeg', 'png', 'gif');
    $file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    //echo $file_type;
    if(!in_array( $file_type, $ex)){
        $flag_ok = false;
    }
    // check dung luong 44,942
    if($_FILES['upload_file']['size'] > 400000){
        echo 'dung luong anh qua lon';
        $flag_ok = false;
    }
     
    if($flag_ok){
        move_uploaded_file($_FILES['upload_file']['tmp_name'],$file_path );
    }
    else{
        echo "cc";
    }


?>