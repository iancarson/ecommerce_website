
<center><!-- center Starts -->

<h1>My Orders</h1>

<p class="lead"> Your orders on one place.</p>

<p class="text-muted" >

If you have any questions, please feel free to <a href="../contact.php" > contact us,</a> our customer service center is working for you 24/7.


</p>


</center><!-- center Ends -->

<hr>

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover" ><!-- table table-bordered table-hover Starts -->

<thead><!-- thead Starts -->

<tr>

<th>O N:</th>
<th>Due Amount:</th>
<th>Invoice No:</th>
<th>Qty:</th>
<th>Size:</th>
<th>Order Date:</th>
<th>Paid/Unpaid:</th>
<th>Status:</th>


</tr>

</thead><!-- thead Ends -->

<tbody><!--- tbody Starts --->

<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$get_orders = "select * from customer_orders where customer_id='$customer_id'";

$run_orders = mysqli_query($con,$get_orders);

$i = 0;

while($row_orders = mysqli_fetch_array($run_orders)){

$order_id = $row_orders['order_id'];

$due_amount = $row_orders['due_amount'];

$invoice_no = $row_orders['invoice_no'];

$qty = $row_orders['qty'];

$size = $row_orders['size'];

$order_date = substr($row_orders['order_date'],0,11);

$order_status = $row_orders['order_status'];

$i++;

if($order_status=='pending'){

$order_status = "Unpaid";

}
else{

$order_status = "Paid";

}

?>

<tr><!-- tr Starts -->

<th><?php echo $i; ?></th>

<td>$<?php echo $due_amount; ?></td>

<td><?php echo $invoice_no; ?></td>

<td><?php echo $qty; ?></td>

<td><?php echo $size; ?></td>

<td><?php echo $order_date; ?></td>

<td><?php echo $order_status; ?></td>

<td>
<a href="confirm.php?order_id=<?php echo $order_id; ?>" target="blank" class="btn btn-primary btn-sm" > Confirm If Paid </a>
</td>


</tr><!-- tr Ends -->

<?php } ?>

</tbody><!--- tbody Ends --->


</table><!-- table table-bordered table-hover Ends -->

</div><!-- table-responsive Ends -->



