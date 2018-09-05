<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['delete_store'])){

$delete_id = $_GET['delete_store'];

$delete_store = "delete from store where store_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_store);

if($run_delete){

echo "<script>alert('One store column Has Been Deleted')</script>";

echo "<script>window.open('index.php?view_store','_self')</script>";

}


}

?>


<?php } ?>