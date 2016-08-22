<?php
include_once('../ketnoi.php');

if(isset($_POST['btnedit'])){


$target_dir = 'uploads/';
$target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
$uploadOk = 1 ;
$imagesFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if($uploadOk == 0){
	$mes ="Your File was not upload";
}else{
	if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){
		$mes = "Your file uploaded";
	}else{
		$mes = "Your file was not upload";
	}
}
echo $ma=$_POST['idcat'];
echo $name=$_POST['txtname'];
echo $email=$_POST['txtemail'];
echo $phone=$_POST['txtphone'];
echo $address=$_POST['txtaddress'];
$images = $_FILES['fileToUpload']['name'];
if($images == ""){
	$images = $_POST['oldimg'];
}
$sql="UPDATE `custommers` SET `name` = '$name',`email` = '$email',`phone` = '$phone',`address` = '$address',`images` = '$images' WHERE `custommers`.`id` = $ma";
//echo $sql;
$db->exec($sql);
	echo "<script type='text/javascript'>alert('".$mes."');</script>";





}


?>
<script>
	window.location.href="custommer.php";
</script>