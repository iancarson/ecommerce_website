<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['order_delete'])){

$delete_id = $_GET['order_delete'];

$delete_order = "delete from pending_orders where order_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_order);

if($run_delete){

echo "<script>alert('Order Has Been Deleted')</script>";

echo "<script>window.open('index.php?view_orders','_self')</script>";


}


}



?>



<?php }  ?>