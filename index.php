<?php
include('connection.php');

if(isset($_POST['submit'])){
    $file= rand(100,1000)."_".$_FILES['file']['name'];
    $file_loc= $_FILES['file']['tmp_name'];
    $file_size= $_FILES['file']['size'];
    $file_type= $_FILES['file']['type'];
    $folder="folder/";

    $new_size= $file_size/1024;
    $new_file_name=strtolower($file);
    $final_file=str_replace('','_',$new_file_name);
  
    if(move_uploaded_file($file_loc,$folder.$final_file))
    {
        $sql="INSERT INTO file(file,type,size) VALUES('$final_file','$file_type','$new_size')";
        mysqli_query($db,$sql);
      
        echo "uploaded";
    }
    else{
        echo "went wrong";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" />
    <button type="submit" name="submit">Upload</button>
</body>
</html>