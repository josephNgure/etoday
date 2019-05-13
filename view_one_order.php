<?php
session_start();
require_once("dbcontroller.php");
include_once 'includes/header2.php';

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || !isset($_SESSION["admin"]) ){
    header("location: login/login_admin.php");
    exit;
}

?>


<div class="">
	
<div class="table-responsive-sm ">
  <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Quantity</th>
      <th scope="col">Name of products</th>
      <!-- <th scope="col">delete</th> -->
      
    </tr>
  </thead>
  <tbody>
   <?php
      if (isset($_GET['order'])) {
  $order_id=$_GET['order'];

  $sql="SELECT `id`, `order_id`, `quantity`, `name` FROM `orders` where `order_id`='$order_id' ";

    $result=$conn->query($sql);
        while ($row=$result->fetch()) {
          ?>
       <tr>
      <td><?php echo $row["quantity"]; ?></td>
      <td><?php echo $row["name"]; ?></td>
      
      </tr>
      
      <?php
    
  }
    }
  ?>  
      
    
    
  </tbody>
</table>
</div>

</div>



<?php
include_once 'includes/footer2.php';
?>
