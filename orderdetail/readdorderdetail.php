<?php

if(isset($_POST['btnnhap'])){
try{
include_once('../ketnoi.php');

echo $name=$_POST['txtname'];
echo $count=$_POST['txtcount'];
echo $ordid=$_POST['ordid'];
echo $proid=$_POST['proid'];

$sql="insert into orderdetails (name,count_product,orders_id,products_id)";
$sql=$sql." values ('$name','$count','$ordid','$proid')";

$db->exec($sql);
}
catch (Exception $e)
{
//xy ly loi
 echo $e->getMessage();
}
echo "<script type='text/javascript'>alert('Them Thanh Cong');</script>";




}

?>
<script>
	window.location.href="orderdetail.php";
</script>