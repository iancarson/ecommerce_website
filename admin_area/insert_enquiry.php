<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts --> 

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard" ></i> Dashboard / Insert Enquiry Type

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Insert Enquiry Type 

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" ><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Enquiry Title </label>

<div class="col-md-6">

<input type="text" name="enquiry_title" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">  </label>

<div class="col-md-6">

<input type="submit" name="submit" class="btn btn-primary form-control" value="Insert Enquiry Type">

</div>

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends-->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$enquiry_title = $_POST['enquiry_title'];

$insert_enquiry =  "insert into enquiry_types (enquiry_title) values ('$enquiry_title')";

$run_enquiry = mysqli_query($con,$insert_enquiry);

if($run_enquiry){

echo "<script> alert('New Enquiry Type Has Been Inserted') </script>";
echo "<script>window.open('index.php?view_enquiry','_self')</script>";

}



}


?>


<?php } ?>