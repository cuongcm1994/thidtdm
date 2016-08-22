<?php
include_once('../ketnoi.php');

if (isset( $_GET['id'])){
 $ma=$_GET['id'];
 $sql="DELETE FROM `products` WHERE `products`.`id` = $ma";
 //echo $sql;
 $db->exec($sql);
 echo "<script type='text/javascript'>alert ('Xoa Thanh Cong');</script>";

}
?>
<script>
	window.location.href="product.php";
</script>