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

<i class="fa fa-dashboard" ></i> Dashboard / View Enquiry Types

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> View Enquiry Types 

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>

<th>Enquiry Type Id</th>

<th>Enquiry Type Title</th>

<th>Delete Enquiry Type</th>

<th>Edit Enquiry Type</th>

</tr>

</thead>

<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_enquiry_types = "select * from enquiry_types";

$run_enquiry_types = mysqli_query($con,$get_enquiry_types);

while($row_enquiry_types = mysqli_fetch_array($run_enquiry_types)){

$enquiry_id = $row_enquiry_types['enquiry_id'];

$enquiry_title = $row_enquiry_types['enquiry_title'];

$i++;

?>

<tr>

<td> <?php echo $i; ?> </td>

<td> <?php echo $enquiry_title; ?> </td>

<td>

<a href="index.php?delete_enquiry=<?php echo $enquiry_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>


<td>

<a href="index.php?edit_enquiry=<?php echo $enquiry_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>


</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->



<?php } ?>