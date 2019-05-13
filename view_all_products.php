<?php
session_start();
require_once("dbcontroller.php");
include_once 'includes/header2.php';

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || !isset($_SESSION["admin"]) ){
    header("location: login/login_admin.php");
    exit;
}

 $sql="SELECT `id`, `name`, `code`,  `price`, `category`, `quantity`, `company` FROM `tblproduct` ";




?>

<div class="">
	
<div class="table-responsive-sm ">
  <table class="table table-hover">
  <thead class="thead-dark" style="color: red;">
    <tr>      
      <th scope="col">Name</th>
      <th scope="col">Product code</th>
      <th scope="col">price</th>
      <th scope="col">category</th>
      <th scope="col">quantity</th>
      <th scope="col">Company</th>     
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    
      <?php   


      $result=$conn->query($sql);
          while ($row=$result->fetch()) {

  
      ?>
      <tr>
      
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["code"]; ?></td>
      <td><?php echo $row["price"]; ?></td>
      <td><?php echo $row["category"]; ?></td>
      <td><?php echo $row["quantity"]; ?></td>
      <td><?php echo $row["company"]; ?></td>
      <td><a href="product_edit.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-primary">Edit procuct</button></a></td>
      
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
