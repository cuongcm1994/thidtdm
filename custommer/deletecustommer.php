<?php
include_once('../ketnoi.php');

if (isset( $_GET['id'])){
 $ma=$_GET['id'];
 $sql="DELETE FROM `custommers` WHERE `custommers`.`id` = $ma";
 //echo $sql;
 $check = $db->exec($sql);
 if($check == true){
 	echo "<script type='text/javascript'>alert ('Xoa Thanh Cong');</script>";
 }else{
 	echo "<script type='text/javascript'>alert ('Xoa that bai');</script>";
 }

}
?>
<script>
	window.location.href="custommer.php";
</script>