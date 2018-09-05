<?php
$aMan  = array();

$aPCat = array();

$aCat  = array();

/// Manufacturers Code Starts ///

if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

foreach($_REQUEST['man'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aMan[(int)$sVal] = (int)$sVal;

}

}

}

/// Manufacturers Code Ends ///

/// Products Categories Code Starts ///

if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aPCat[(int)$sVal] = (int)$sVal;

}

}

}

/// Products Categories Code Ends ///

/// Categories Code Starts ///

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

foreach($_REQUEST['cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aCat[(int)$sVal] = (int)$sVal;

}

}

}

/// Categories Code Ends ///


?>

<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

Manufacturers

<div class="pull-right"><!-- pull-right Starts -->

<a href="#" style="color:black;">

<span class="nav-toggle hide-show">

Hide

</span>

</a>

</div><!-- pull-right Ends -->

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-collapse collapse-data"><!-- panel-collapse collapse-data starts -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="input-group"><!-- input-group Starts -->

<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-manufacturer" placeholder="Filter Manufacturers">


<a class="input-group-addon"> <i class="fa fa-search"></i> </a>

</div><!-- input-group Ends -->

</div><!-- panel-body Ends -->

<div class="panel-body scroll-menu"><!-- panel-body scroll-menu Starts -->

<ul class="nav nav-pills nav-stacked category-menu" id="dev-manufacturer"><!-- nav nav-pills nav-stacked category-menu Starts -->

<?php

$get_manfacturer = "select * from manufacturers where manufacturer_top='yes'";

$run_manfacturer = mysqli_query($con,$get_manfacturer);

while($row_manfacturer = mysqli_fetch_array($run_manfacturer)){

$manufacturer_id = $row_manfacturer['manufacturer_id'];

$manufacturer_title = $row_manfacturer['manufacturer_title'];

$manufacturer_image = $row_manfacturer['manufacturer_image'];

if($manufacturer_image == ""){

}
else{

$manufacturer_image = "

<img src='admin_area/other_images/$manufacturer_image' width='20px' >&nbsp;

";

}

echo "

<li style='background:#dddddd;' class='checkbox checkbox-primary'>

<a>

<label>

<input ";

if(isset($aMan[$manufacturer_id])){ echo "checked='checked'"; }

echo " type='checkbox' value='$manufacturer_id' name='manufacturer' class='get_manufacturer'>

<span>
$manufacturer_image
$manufacturer_title
</span>

</label>

</a>

</li>

";


}


$get_manfacturer = "select * from manufacturers where manufacturer_top='no'";

$run_manfacturer = mysqli_query($con,$get_manfacturer);

while($row_manfacturer = mysqli_fetch_array($run_manfacturer)){

$manufacturer_id = $row_manfacturer['manufacturer_id'];

$manufacturer_title = $row_manfacturer['manufacturer_title'];

$manufacturer_image = $row_manfacturer['manufacturer_image'];

if($manufacturer_image == ""){


}
else{

$manufacturer_image = "

<img src='admin_area/other_images/$manufacturer_image' width='20px'> &nbsp;

";

}

echo "

<li class='checkbox checkbox-primary'>

<a>

<label>

<input ";

if(isset($aMan[$manufacturer_id])){ echo "checked='checked'"; }

echo " type='checkbox' value='$manufacturer_id' name='manufacturer' class='get_manufacturer'>

<span>
$manufacturer_image
$manufacturer_title
</span>

</label>

</a>

</li>

";

}

?>

</ul><!-- nav nav-pills nav-stacked category-menu Ends -->

</div><!-- panel-body scroll-menu Ends -->

</div><!-- panel-collapse collapse-data Ends -->


</div><!-- panel panel-default sidebar-menu Ends -->


<div class="panel panel-default sidebar-menu"><!--- panel panel-default sidebar-menu Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

Products Categories

<div class="pull-right"><!-- pull-right Starts -->

<a href="#" style="color:black;">

<span class="nav-toggle hide-show">

Hide

</span>

</a>

</div><!-- pull-right Ends -->

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-collapse collapse-data"><!-- panel-collapse collapse-data Starts -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="input-group"><!-- input-group Starts -->

<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-p-cats" placeholder="Filter Product Categories">

<a class="input-group-addon"> <i class="fa fa-search"></i> </a>

</div><!-- input-group Ends -->

</div><!-- panel-body Ends -->

<div class="panel-body scroll-menu"><!-- panel-body scroll-menu Starts -->

<ul class="nav nav-pills nav-stacked category-menu" id="dev-p-cats"><!-- nav nav-pills nav-stacked category-menu Starts -->

<?php

$get_p_cats = "select * from product_categories where p_cat_top='yes'";

$run_p_cats = mysqli_query($con,$get_p_cats);

while($row_p_cats = mysqli_fetch_array($run_p_cats)){

$p_cat_id = $row_p_cats['p_cat_id'];

$p_cat_title = $row_p_cats['p_cat_title'];

$p_cat_image = $row_p_cats['p_cat_image'];

if($p_cat_image == ""){


}
else{

$p_cat_image = "<img src='admin_area/other_images/$p_cat_image' width='20'> &nbsp;";

}

echo "

<li class='checkbox checkbox-primary' style='background:#dddddd;' >

<a>

<label>

<input ";

if(isset($aPCat[$p_cat_id])){ echo "checked='checked'"; }

echo " type='checkbox' value='$p_cat_id' name='p_cat' class='get_p_cat' id='p_cat' >

<span>

$p_cat_image
$p_cat_title

</span>

</label>

</a>

</li>

";


}

$get_p_cats = "select * from product_categories where p_cat_top='no'";

$run_p_cats = mysqli_query($con,$get_p_cats);

while($row_p_cats = mysqli_fetch_array($run_p_cats)){

$p_cat_id = $row_p_cats['p_cat_id'];

$p_cat_title = $row_p_cats['p_cat_title'];

$p_cat_image = $row_p_cats['p_cat_image'];

if($p_cat_image == ""){


}
else{

$p_cat_image = "<img src='admin_area/other_images/$p_cat_image' width='20'> &nbsp;";

}

echo "

<li class='checkbox checkbox-primary'>

<a>

<label>

<input ";

if(isset($aPCat[$p_cat_id])){ echo "checked='checked'"; }

echo " type='checkbox' value='$p_cat_id' name='p_cat' class='get_p_cat' id='p_cat' >

<span>

$p_cat_image
$p_cat_title

</span>

</label>

</a>

</li>

";


}

?>

</ul><!-- nav nav-pills nav-stacked category-menu Ends -->

</div><!-- panel-body scroll-menu Ends -->

</div><!-- panel-collapse collapse-data Ends -->

</div><!--- panel panel-default sidebar-menu Ends -->



<div class="panel panel-default sidebar-menu"><!--- panel panel-default sidebar-menu Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

Categories

<div class="pull-right"><!-- pull-right Starts -->

<a href="#" style="color:black;">

<span class="nav-toggle hide-show">

Hide

</span>

</a>

</div><!-- pull-right Ends -->


</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-collapse collapse-data"><!-- panel-collapse collapse-data Starts -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="input-group"><!-- input-group Starts -->

<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-cats" placeholder="Filter Categories">

<a class="input-group-addon"> <i class="fa fa-search"> </i> </a>

</div><!-- input-group Ends -->

</div><!-- panel-body Ends -->

<div class="panel-body scroll-menu"><!-- panel-body scroll-menu Starts -->

<ul class="nav nav-pills nav-stacked category-menu" id="dev-cats"><!-- nav nav-pills nav-stacked category-menu Starts -->

<?php

$get_cat = "select * from categories where cat_top='yes'";

$run_cat = mysqli_query($con,$get_cat);

while($row_cat = mysqli_fetch_array($run_cat)){

$cat_id = $row_cat['cat_id'];

$cat_title = $row_cat['cat_title'];

$cat_image = $row_cat['cat_image'];

if($cat_image == ""){

}
else{

$cat_image = "<img src='admin_area/other_images/$cat_image' width='20'>&nbsp;";

}

echo "

<li class='checkbox checkbox-primary' style='background:#dddddd;'>

<a>

<label>

<input ";

if(isset($aCat[$cat_id])){ echo "checked='checked'"; }

echo " type='checkbox' value='$cat_id' name='cat' class='get_cat' id='cat'> 

<span>
$cat_image
$cat_title
</span>

</label>

</a>

</li>

";

}


$get_cat = "select * from categories where cat_top='no'";

$run_cat = mysqli_query($con,$get_cat);

while($row_cat = mysqli_fetch_array($run_cat)){

$cat_id = $row_cat['cat_id'];

$cat_title = $row_cat['cat_title'];

$cat_image = $row_cat['cat_image'];

if($cat_image == ""){

}
else{

$cat_image = "<img src='admin_area/other_images/$cat_image' width='20'>&nbsp;";

}

echo "

<li class='checkbox checkbox-primary'>

<a>

<label>

<input ";

if(isset($aCat[$cat_id])){ echo "checked='checked'"; }

echo " type='checkbox' value='$cat_id' name='cat' class='get_cat' id='cat'> 

<span>
$cat_image
$cat_title
</span>

</label>

</a>

</li>

";

}


?>

</ul><!-- nav nav-pills nav-stacked category-menu Ends -->

</div><!-- panel-body scroll-menu Ends -->

</div><!-- panel-collapse collapse-data Ends -->

</div><!--- panel panel-default sidebar-menu Ends -->
