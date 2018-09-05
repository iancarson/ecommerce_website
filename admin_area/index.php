<?php

session_start();

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<?php

$admin_session = $_SESSION['admin_email'];

$get_admin = "select * from admins  where admin_email='$admin_session'";

$run_admin = mysqli_query($con,$get_admin);

$row_admin = mysqli_fetch_array($run_admin);

$admin_id = $row_admin['admin_id'];

$admin_name = $row_admin['admin_name'];

$admin_email = $row_admin['admin_email'];

$admin_image = $row_admin['admin_image'];

$admin_country = $row_admin['admin_country'];

$admin_job = $row_admin['admin_job'];

$admin_contact = $row_admin['admin_contact'];

$admin_about = $row_admin['admin_about'];


$get_products = "select * from products";
$run_products = mysqli_query($con,$get_products);
$count_products = mysqli_num_rows($run_products);

$get_customers = "select * from customers";
$run_customers = mysqli_query($con,$get_customers);
$count_customers = mysqli_num_rows($run_customers);

$get_p_categories = "select * from product_categories";
$run_p_categories = mysqli_query($con,$get_p_categories);
$count_p_categories = mysqli_num_rows($run_p_categories);


$get_pending_orders = "select * from pending_orders";
$run_pending_orders = mysqli_query($con,$get_pending_orders);
$count_pending_orders = mysqli_num_rows($run_pending_orders);


?>


<!DOCTYPE html>
<html>

<head>

<title>Admin Panel</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
<link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/2484/9148/files/SDQSDSQ_32x32.png?v=1511436147" type="image/png">

</head>

<body>

<div id="wrapper"><!-- wrapper Starts -->

<?php include("includes/sidebar.php");  ?>

<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->

<?php

if(isset($_GET['dashboard'])){

include("dashboard.php");

}

if(isset($_GET['insert_product'])){

include("insert_product.php");

}

if(isset($_GET['view_products'])){

include("view_products.php");

}

if(isset($_GET['delete_product'])){

include("delete_product.php");

}

if(isset($_GET['edit_product'])){

include("edit_product.php");

}

if(isset($_GET['insert_p_cat'])){

include("insert_p_cat.php");

}

if(isset($_GET['view_p_cats'])){

include("view_p_cats.php");

}

if(isset($_GET['delete_p_cat'])){

include("delete_p_cat.php");

}

if(isset($_GET['edit_p_cat'])){

include("edit_p_cat.php");

}

if(isset($_GET['insert_cat'])){

include("insert_cat.php");

}

if(isset($_GET['view_cats'])){

include("view_cats.php");

}

if(isset($_GET['delete_cat'])){

include("delete_cat.php");

}

if(isset($_GET['edit_cat'])){

include("edit_cat.php");

}

if(isset($_GET['insert_slide'])){

include("insert_slide.php");

}


if(isset($_GET['view_slides'])){

include("view_slides.php");

}

if(isset($_GET['delete_slide'])){

include("delete_slide.php");

}


if(isset($_GET['edit_slide'])){

include("edit_slide.php");

}


if(isset($_GET['view_customers'])){

include("view_customers.php");

}

if(isset($_GET['customer_delete'])){

include("customer_delete.php");

}


if(isset($_GET['view_orders'])){

include("view_orders.php");

}

if(isset($_GET['order_delete'])){

include("order_delete.php");

}


if(isset($_GET['view_payments'])){

include("view_payments.php");

}

if(isset($_GET['payment_delete'])){

include("payment_delete.php");

}

if(isset($_GET['insert_user'])){

include("insert_user.php");

}

if(isset($_GET['view_users'])){

include("view_users.php");

}


if(isset($_GET['user_delete'])){

include("user_delete.php");

}



if(isset($_GET['user_profile'])){

include("user_profile.php");

}

if(isset($_GET['insert_box'])){

include("insert_box.php");

}

if(isset($_GET['view_boxes'])){

include("view_boxes.php");

}

if(isset($_GET['delete_box'])){

include("delete_box.php");

}

if(isset($_GET['edit_box'])){

include("edit_box.php");

}

if(isset($_GET['insert_term'])){

include("insert_term.php");

}

if(isset($_GET['view_terms'])){

include("view_terms.php");

}

if(isset($_GET['delete_term'])){

include("delete_term.php");

}

if(isset($_GET['edit_term'])){

include("edit_term.php");

}

if(isset($_GET['edit_css'])){

include("edit_css.php");

}

if(isset($_GET['insert_manufacturer'])){

include("insert_manufacturer.php");

}

if(isset($_GET['view_manufacturers'])){

include("view_manufacturers.php");

}

if(isset($_GET['delete_manufacturer'])){

include("delete_manufacturer.php");

}

if(isset($_GET['edit_manufacturer'])){

include("edit_manufacturer.php");

}


if(isset($_GET['insert_coupon'])){

include("insert_coupon.php");

}

if(isset($_GET['view_coupons'])){

include("view_coupons.php");

}

if(isset($_GET['delete_coupon'])){

include("delete_coupon.php");

}


if(isset($_GET['edit_coupon'])){

include("edit_coupon.php");

}


if(isset($_GET['insert_icon'])){

include("insert_icon.php");

}


if(isset($_GET['view_icons'])){

include("view_icons.php");

}

if(isset($_GET['delete_icon'])){

include("delete_icon.php");

}

if(isset($_GET['edit_icon'])){

include("edit_icon.php");

}

if(isset($_GET['insert_bundle'])){

include("insert_bundle.php");

}

if(isset($_GET['view_bundles'])){

include("view_bundles.php");

}

if(isset($_GET['delete_bundle'])){

include("delete_bundle.php");

}


if(isset($_GET['edit_bundle'])){

include("edit_bundle.php");

}


if(isset($_GET['insert_rel'])){

include("insert_rel.php");

}

if(isset($_GET['view_rel'])){

include("view_rel.php");

}

if(isset($_GET['delete_rel'])){

include("delete_rel.php");

}


if(isset($_GET['edit_rel'])){

include("edit_rel.php");

}


if(isset($_GET['edit_contact_us'])){

include("edit_contact_us.php");

}

if(isset($_GET['insert_enquiry'])){

include("insert_enquiry.php");

}


if(isset($_GET['view_enquiry'])){

include("view_enquiry.php");

}

if(isset($_GET['delete_enquiry'])){

include("delete_enquiry.php");

}

if(isset($_GET['edit_enquiry'])){

include("edit_enquiry.php");

}


if(isset($_GET['edit_about_us'])){

include("edit_about_us.php");

}


if(isset($_GET['insert_store'])){

include("insert_store.php");

}

if(isset($_GET['view_store'])){

include("view_store.php");

}

if(isset($_GET['delete_store'])){

include("delete_store.php");

}

if(isset($_GET['edit_store'])){

include("edit_store.php");

}

?>

</div><!-- container-fluid Ends -->

</div><!-- page-wrapper Ends -->

</div><!-- wrapper Ends -->

<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>


</body>


</html>

<?php } ?>