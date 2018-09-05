<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php


if(isset($_GET['edit_term'])){

$edit_id = $_GET['edit_term'];

$get_term = "select * from terms where term_id='$edit_id'";

$run_term = mysqli_query($con,$get_term);

$row_term = mysqli_fetch_array($run_term);

$term_id = $row_term['term_id'];

$term_title = $row_term['term_title'];

$term_link = $row_term['term_link'];

$term_desc = $row_term['term_desc'];

}

?>

 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / Edit Terms

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->



<div class="row"><!-- 2 row Starts -->


<div class="col-lg-12"><!-- col-lg-12 Starts -->


<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> Edit Terms

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Term Title </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="term_title" class="form-control" value="<?php echo $term_title; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Term Description </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<textarea name="term_desc" class="form-control" rows="6" cols="19" >
<?php echo $term_desc; ?>
</textarea>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Term Link </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="term_link" class="form-control" value="<?php echo $term_link; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="submit" name="update" value="Update Term" class="btn btn-primary form-control" >

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->


</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<?php

if(isset($_POST['update'])){

$term_title = $_POST['term_title'];

$term_desc = $_POST['term_desc'];

$term_link = $_POST['term_link'];

$update_term = "update terms set term_title='$term_title',term_link='$term_link',term_desc='$term_desc' where term_id='$term_id'";

$run_term = mysqli_query($con,$update_term);

if($run_term){

echo "<script>alert('One Term Box Has Been Updated ')</script>";

echo "<script>window.open('index.php?view_terms','_self')</script>";

}

}


?>


<?php } ?>