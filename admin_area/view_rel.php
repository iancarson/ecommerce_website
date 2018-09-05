<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts --->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / View Relations

</li>

</ol><!-- breadcrumb Ends --->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> View Relations

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->


<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->


<thead><!-- thead Starts -->

<tr>

<th>Relation Id:</th>

<th>Relation Title:</th>

<th>Relation Product:</th>

<th>Relation Bundle:</th>

<th>Delete Relation:</th>

<th>Edit Relation:</th>


</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$i = 0;


$get_rel = "select * from bundle_product_relation";

$run_rel = mysqli_query($con,$get_rel);

while($row_rel = mysqli_fetch_array($run_rel)){

$rel_id = $row_rel['rel_id'];

$rel_title = $row_rel['rel_title'];

$bundle_id = $row_rel['bundle_id'];

$product_id = $row_rel['product_id'];

$get_p = "select * from products where product_id='$product_id'";

$run_p = mysqli_query($con,$get_p);

$row_p = mysqli_fetch_array($run_p);

$p_title = $row_p['product_title'];


$get_b = "select * from products where product_id='$bundle_id'";

$run_b = mysqli_query($con,$get_b);

$row_b = mysqli_fetch_array($run_b);

$b_title = $row_b['product_title'];

$i++;

?>

<tr>

<td> <?php echo $i; ?> </td>

<td> <?php echo $rel_title; ?> </td>

<td> <?php echo $p_title; ?> </td>

<td> <?php echo $b_title; ?> </td>

<td>

<a href="index.php?delete_rel=<?php echo $rel_id; ?>">

<i class="fa fa-trash-o"></i> Delete

</a>

</td>

<td>

<a href="index.php?edit_rel=<?php echo $rel_id; ?>">

<i class="fa fa-pencil"></i> Edit

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