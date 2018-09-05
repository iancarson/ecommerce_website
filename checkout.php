<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">Checkout</span>
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>



<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->




<div class="col-md-12" ><!-- col-md-12 Starts -->

<?php

if(!isset($_SESSION['customer_email'])){

include("customer/customer_login.php");


}else{

include("payment_options.php");

}



?>


</div><!-- col-md-12 Ends -->


</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
