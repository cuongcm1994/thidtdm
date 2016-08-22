<?php
include_once('../ketnoi.php');

if(isset($_POST['btnedit'])){

$target_dir = 'uploads/';
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if($uploadOk == 0){
$mes = "Your file was not upload";
}else{
	if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){
		$mes = "Your file uploaded";
	}else{
		$mes = "Your file was not upload";
	}
}
echo $ma=$_POST['idcat'];
echo $name=$_POST['txtname'];
echo $content=$_POST['txtcontent'];
echo $price=$_POST['txtprice'];
$images = $_FILES['fileToUpload']['name'];
if($images == ""){
	$images = $_POST['oldimg'];
}
echo $catproid=$_POST['catproid'];
$sql="UPDATE `products` SET `name` = '$name',`content` = '$content',`price` = '$price',`catproducts_id` = '$catproid',`images` = '$images' WHERE `products`.`id` = $ma";
//echo $sql;
$db->exec($sql);

echo "<script type='text/javescript'>alert ('".$mes."');</script>";




}


?>
<script>
	window.location.href="product.php";
</script>