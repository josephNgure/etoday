<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || !isset($_SESSION["admin"]) ){
    header("location: login/login_admin.php");
    exit;
}

require_once("dbcontroller.php");
include_once 'includes/header.php';

 $sql="SELECT `id`, `user_id`, `order_code`, `payment`, `address`, `city`, `country`, `total` FROM `all_orders`";




?>

<div class="">
	
<div class="table-responsive-sm ">
  <table class="table table-hover">
  <thead class="thead-dark">
    <tr>      
      <th scope="col">User_ID</th>
      <th scope="col">Order_code</th>
      <th scope="col">Payment</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Country</th>
      <th scope="col">Total</th>
      <th scope="col">View order</th>
    </tr>
  </thead>
  <tbody>
    
      <?php   


      $result=$conn->query($sql);
          while ($row=$result->fetch()) {

  
      ?>
      <tr>
      <td><?php echo $row["user_id"]; ?></td>
      <td><?php echo $row["order_code"]; ?></td>
      <td><?php echo $row["payment"]; ?></td>
      <td><?php echo $row["address"]; ?></td>
      <td><?php echo $row["city"]; ?></td>
      <td><?php echo $row["country"]; ?></td>
      <td><?php echo $row["total"]; ?></td>
      <td><a href="view_one_order.php?order=<?php echo $row["order_code"]; ?>"><button class="btn btn-primary">view order</button></a></td>
       </tr>
      <?php
    
  }
  ?>  

          
     
   
    
  </tbody>
</table>
</div>

</div>



<?php
include_once 'includes/footer2.php';
?>
