<?php
include_once('../ketnoi.php');

if (isset( $_GET['id'])){
 $ma=$_GET['id'];
 $sql="DELETE FROM `catproducts` WHERE `catproducts`.`id` = $ma";
 //echo $sql;
$check = $db->exec($sql) ;
if($check == true){
 echo "<script type='text/javascript'>alert ('Xoá thành công');</script>";
}else{
	echo "<script type='text/javascript'>alert ('Xoa that bai,san pham da chua danh muc nay');</script>";
}

}
?>
<script>
	window.location.href="catproduct.php";
</script>