<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>


<?php

$get_conatct_us = "select * from contact_us";

$run_contact_us = mysqli_query($con,$get_conatct_us);

$row_contact_us = mysqli_fetch_array($run_contact_us);

$contact_email = $row_contact_us['contact_email'];

$contact_heading = $row_contact_us['contact_heading'];

$contact_desc = $row_contact_us['contact_desc'];



?>



<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts --> 

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard" ></i> Dashboard / Edit Contact Us

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit Contact Us  

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Contact Email: </label>

<div class="col-md-6">

<input type="text" name="contact_email" class="form-control" value="<?php echo $contact_email; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Contact Heading: </label>

<div class="col-md-6">

<input type="text" name="contact_heading" class="form-control" value="<?php echo $contact_heading; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Contact Description: </label>

<div class="col-md-6">

<textarea name="contact_desc" class="form-control" rows="6" cols="19">
<?php echo $contact_desc; ?>
</textarea>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="submit" class="btn btn-primary form-control" value=" Update Contact Us ">

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<?php

if(isset($_POST['submit'])){

$contact_email = $_POST['contact_email'];

$contact_heading = $_POST['contact_heading'];

$contact_desc = $_POST['contact_desc'];


$update_contact_us = "update contact_us set contact_email='$contact_email',contact_heading='$contact_heading',contact_desc='$contact_desc'";

$run_contact_us = mysqli_query($con,$update_contact_us);

if($run_contact_us){

echo "<script>alert('Contact Us Page Has Been Updated')</script>";

echo "<script>window.open('index.php?dashboard','_self')</script>";

}

}

?>


<?php } ?>