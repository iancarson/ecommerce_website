<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['delete_rel'])){

$delete_id = $_GET['delete_rel'];

$delete_rel = "delete from bundle_product_relation where rel_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_rel);

if($run_delete){

echo "<script>alert('One Relation Has Been Deleted')</script>";

echo "<script>window.open('index.php?view_rel','_self')</script>";

}

}


?>


<?php } ?>
