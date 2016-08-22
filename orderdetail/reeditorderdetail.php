<?php
include_once('../ketnoi.php');

if(isset($_POST['btnedit'])){

echo $ma=$_POST['idcat'];
echo $name=$_POST['txtname'];
echo $count=$_POST['txtcount'];
echo $ordid=$_POST['ordid'];
echo $proid=$_POST['proid'];
$sql="UPDATE `orderdetails` SET `name` = '$name',`count_product` = '$count',`orders_id` = '$ordid',`products_id` = '$proid' WHERE `orderdetails`.`id` = $ma";
//echo $sql;
$db->exec($sql);
	echo "<script type='text/javascript'>alert ('Sua Thanh Cong');</script>";





}


?>
<script>
	window.location.href="orderdetail.php";
</script>