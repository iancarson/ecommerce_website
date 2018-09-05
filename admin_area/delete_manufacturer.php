<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['delete_manufacturer'])){

$delete_id = $_GET['delete_manufacturer'];

$delete_manufacturer = "delete from manufacturers where manufacturer_id='$delete_id'";

$run_manufacturer = mysqli_query($con,$delete_manufacturer);

if($run_manufacturer){

echo "<script>alert('One Manufacturer Has Been Deleted')</script>";
echo "<script>window.open('index.php?view_manufacturers','_self')</script>";

}

}


?>


<?php } ?>