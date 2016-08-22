<?php
include_once('../ketnoi.php');

if (isset( $_GET['id'])){
 $ma=$_GET['id'];
 $sql="DELETE FROM `orders` WHERE `orders`.`id` = $ma";
 //echo $sql;
$check = $db->exec($sql);
 if($check == true){
 echo "<script>alert('Xoá thành công');</script>";
}else{
	echo "<script>alert('Xoa that bai .Vui long xoa hoa don chi tiet truoc');</script>";
	}
}
?>
<script>
	window.location.href="order.php";
</script>