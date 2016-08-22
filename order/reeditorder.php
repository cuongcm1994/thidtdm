<?php
include_once('../ketnoi.php');

if(isset($_POST['btnedit'])){

echo $ma=$_POST['idcat'];
echo $name=$_POST['txtname'];
echo $cusid=$_POST['cusid'];
$sql="UPDATE `orders` SET `name` = '$name',`custommers_id` = '$cusid' WHERE `orders`.`id` = $ma";
//echo $sql;
$db->exec($sql);
	echo "<script type='text/javascript'>alert ('Sua Thanh Cong');</script>";





}


?>
<script>
	window.location.href="order.php";
</script>