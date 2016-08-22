<?php

if(isset($_POST['btnnhap'])){
try{
include_once('../ketnoi.php');

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if($uploadOk == 0){
	$mes = 'Your file was not upload';
}else{
	if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){
		$mes = 'Your file uploaded';
	}else{
		$mes = "Your file was not upload";
	}
}

$name=$_POST['txtname'];
$content=$_POST['txtcontent'];
$price=$_POST['txtprice'];
$catproid=$_POST['catproid'];
$images = $_FILES['fileToUpload']['name'];
$sql="insert into products (name,content,price,catproducts_id,images)";
$sql=$sql." values ('$name','$content','$price','$catproid','$images')";

$db->exec($sql);
}
catch (Exception $e)
{
//xy ly loi
 echo $e->getMessage();
}
echo "<script type='text/javascript'>alert('".$mes."');</script>";
// header("Location:product.php");




}

?>
<script>
window.location.href = "product.php";
</script>