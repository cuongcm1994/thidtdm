<?php
include_once('../ketnoi.php');

if(isset($_POST['btnedit'])){


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if ($uploadOk == 0) {
    $mes = "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $mes = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        $mes = "Sorry, there was an error uploading your file.";
    }
}

 $ma=$_POST['idcat'];
 $name=$_POST['txtname'];
$content=$_POST['txtcontent'];
$images=$_FILES['fileToUpload']['name'];
if($images == ""){
	echo $images = $_POST['oldimg'];
}

$sql="UPDATE `catproducts` SET `name` = '$name',`content` = '$content',`images` = '$images' WHERE `catproducts`.`id` = $ma";
//echo $sql;
$db->exec($sql);

echo "<script type='text/javascript'>alert ('".$mes."');</script>";




}


?>
<script>
	window.location.href = "catproduct.php";
</script>