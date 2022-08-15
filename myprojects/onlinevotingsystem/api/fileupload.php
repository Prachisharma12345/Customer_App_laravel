<?php

//file upload section start
$target_dir = "../images/";
$target_file=$target_dir.basename($_FILES["image"]["name"]);
$uploadOk=1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//check if image is a actual image or fake image
if(isset($_POST['submit'])){
    $check=getimagesize($_FILES['image']['tmp_name']);
    if($check!=false){
        echo"file is an image-".$check['mime'].".";
        $uploadOk=1;
    }else{
        echo "File is not an image";
        $uploadOk=0;
    }
}
//check if file already exists
if(file_exists($target_file)){
    echo "File already exists";
    $uploadOk=0;
}
//check if file size is too large
if($_FILES['image']['size']>500000){
    echo "Sorry, your file is too large";
    $uploadOk=0;
}
//allow certain file formats
if($imageFileType!="jpg" && $imageFileType!="jpeg" && $imageFileType!="png" && $imageFileType!=="gif"){
    echo"sorry only jpg, png,jpeg and png file are allowed";
    $uploadOk=0;
}
//check if upload0k is set to 0 by an error
if($uploadOk==0){
    echo "sorry, file was not uploaded";
}else{
    if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file)){
        echo "The file". htmlspecialchars (basename($_FILES ["image"]["name"]))."has been uploaded";
    }else{
        echo "There was an error uploading your file";
    }
}
?>