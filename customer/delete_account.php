
<center>

<h1>Do You Really Want To Delete Your Account!</h1>

<form action="" method="post">

<input class="btn btn-danger" type="submit" name="yes" value="Yes, I want to delete">

<input class="btn btn-primary" type="submit" name="no" value="No, I Don,t want to delete">

</form>

</center>

<?php

$c_email = $_SESSION['customer_email'];

if(isset($_POST['yes'])){

$delete_customer = "delete from customers where customer_email='$c_email'";

$run_delete = mysqli_query($con,$delete_customer);

if($run_delete){

session_destroy();

echo "<script>alert('Your Account Has Been Deleted! Good By')</script>";

echo "<script>window.open('../index.php','_self')</script>";

}

}

if(isset($_POST['no'])){

echo "<script>window.open('my_account.php?my_orders','_self')</script>";

}


?>