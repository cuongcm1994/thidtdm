<?php

if(isset($_POST['btnnhap'])){
try{
include_once('../ketnoi.php');

$name=$_POST['txtname'];
$cusid=$_POST['cusid'];

$sql="insert into orders (name,custommers_id)";
$sql=$sql." values ('$name','$cusid')";

$db->exec($sql);
}
catch (Exception $e)
{
//xy ly loi
 echo $e->getMessage();
}
echo "<script type='text/javascript'>alert('Thêm thành công');</script>";




}

?>
<script type="text/javascript" >
	window.location.href="order.php";
</script>