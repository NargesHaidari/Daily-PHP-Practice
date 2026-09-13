<?php

$allowed_types = ['image/png', 'image/jpg', 'image/gif'];
$max_file_size = 2*1024*1024;
$target_dir = "uploads/";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(isset($_FILES['my_file']) && $_FILES['my_file']['error'] === 0){

        $file_tmp_path = $_FILES['my_file']['tmp_name'];
        $file_tmp_name = basename($_FILES['my_file']['name']);
        $file_size = $_FILES['my_file']['size'];

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $file_tmp_path);
        finfo_close($finfo);

        if(!in_array($mime, $allowed_types)){
            die('The file format is not valid');
        }

        if($file_size > $max_file_size){
            die('The uploaded file size is more than 2 MB');
        }

        $ext = pathinfo($file_tmp_name, PATHINFO_EXTENSION);
        $new_name = uniqid("narges_" , true).'.'.$ext;

        $target_file = $target_dir.$new_name;

        if(move_uploaded_file($file_tmp_path,$target_file)){
            echo 'Your file was uploaded successfully'.'<br>';
        }else{
            echo 'An error occurred while transferring the file';
        }
        
    }else{
        echo 'No file was uploaded or an error occurred';
    }

}else{
    echo 'Invalid request';
}