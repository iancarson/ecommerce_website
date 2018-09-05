<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts --> 

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard" ></i> Dashboard / Insert store

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Insert store

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> store Title : </label>

<div class="col-md-6">

<input type="text" name="store_title" class="form-control">

</div>

</div><!-- form-group Ends -->



<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> store Image : </label>

<div class="col-md-6">

<input type="file" name="store_image" class="form-control">

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> store Description : </label>

<div class="col-md-6">

<textarea name="store_desc" class="form-control" rows="10" cols="19">



</textarea>

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> store Button : </label>

<div class="col-md-6">

<input type="text" name="store_button" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> store Url : </label>

<div class="col-md-6">

<input type="url" name="store_url" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="submit" value="Insert store" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$store_title = $_POST['store_title'];

$store_desc = $_POST['store_desc'];

$store_button = $_POST['store_button'];

$store_url = $_POST['store_url'];

$store_image = $_FILES['store_image']['name'];

$tmp_image = $_FILES['store_image']['tmp_name'];

$sel_store = "select * from store";

$run_store = mysqli_query($con,$sel_store);

$count = mysqli_num_rows($run_store);

if($count == 3){

echo "<script>alert('You Have already Inserted 3 store columns')</script>";

}
else{

move_uploaded_file($tmp_image,"store_images/$store_image");

$insert_store = "insert into store (store_title,store_image,store_desc,store_button,store_url) values ('$store_title','$store_image','$store_desc','$store_button','$store_url')";

$run_store = mysqli_query($con,$insert_store);

if($run_store){

echo "<script>alert('New store Column Has Been Inserted')</script>";

echo "<script>window.open('index.php?view_store','_self')</script>";

}

}

}

?>

<?php } ?>