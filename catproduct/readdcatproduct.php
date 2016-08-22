<?php

if(isset($_POST['btnnhap'])){
try{
include_once('../ketnoi.php');



$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


if ($uploadOk == 0) {
    $mes =  "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $mes =  "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        $mes =  "Sorry, there was an error uploading your file.";
    }
}


$images=$_FILES["fileToUpload"]["name"];
$name=$_POST['txtname'];
$content=$_POST['txtcontent'];

$sql="insert into catproducts (name,content,images)";
$sql=$sql." values ('$name','$content','$images')";

$db->exec($sql);
}
catch (Exception $e)
{
//xy ly loi
 echo $e->getMessage();
}
echo "<script type='text/javascript'>alert('".$mes."');</script>";




}

?>
<script>
    window.location.href = "catproduct.php";
</script>