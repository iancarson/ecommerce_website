<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['delete_term'])){

$delete_id = $_GET['delete_term'];

$delete_term = "delete from terms where term_id='$delete_id'";

$run_term = mysqli_query($con,$delete_term);

if($run_term){

echo "<script>alert(' One Term Box Has Been Deleted ')</script>";

echo "<script>window.open('index.php?view_terms','_self')</script>";

}


}


?>


<?php } ?>