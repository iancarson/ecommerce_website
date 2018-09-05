<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['edit_enquiry'])){

$edit_id = $_GET['edit_enquiry'];

$get_enquiry_type = "select * from enquiry_types where enquiry_id='$edit_id'";

$run_enquiry_type = mysqli_query($con,$get_enquiry_type);

$row_enquiry_type = mysqli_fetch_array($run_enquiry_type);

$enquiry_id = $row_enquiry_type['enquiry_id'];

$enquiry_title = $row_enquiry_type['enquiry_title'];

}


?>

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts --> 

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard" ></i> Dashboard / Edit Enquiry Type

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit Enquiry Type 

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" ><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Enquiry Title </label>

<div class="col-md-6">

<input type="text" name="enquiry_title" class="form-control" value="<?php echo $enquiry_title; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">  </label>

<div class="col-md-6">

<input type="submit" name="update" class="btn btn-primary form-control" value="Update Enquiry Type">

</div>

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends-->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['update'])){

$enquiry_title = $_POST['enquiry_title'];

$update_enquiry = "update enquiry_types set enquiry_title='$enquiry_title' where enquiry_id='$enquiry_id'";

$run_enquiry = mysqli_query($con,$update_enquiry);

if($run_enquiry){

echo "<script>alert('One Enquiry Type Has Been Updated')</script>";

echo "<script>window.open('index.php?view_enquiry','_self')</script>";

}

}


?>


<?php } ?>