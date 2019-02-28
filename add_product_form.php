<?php include_once 'template/head.php';?>


 <!-- Navigation -->
 <?php if(!isset($_SESSION['loggedin']) || $_SESSION['user_role'] != 1)
      header('location:login_form.php');
  ?>

  <?php include_once 'template/nav_bar.php';?>
<div class="col-lg-6 m-auto" >
          <div class="row">
      <div class="col-lg-6">
        <form action="<?=$script?>_product_code.php" method="POST" enctype="multipart/form-data"> <!-- file name was ( add_product.php ) instade of (add_product_code.php) -->
            <input type="hidden" name="pid" value="">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="text" name="price" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
           
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input type="text" name="description" value="" class="form-control" id="exampleInputPassword1" >
          </div>  
                  <div class="form-group">
            <label for="fileToUpload">Product Image</label>
            <input type="file" name="fileToUpload" class="form-control-file" id="fileToUpload">
           </div> 
           
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      </div>

 </div>

 <div class="col-lg-12">
    <div class="row">
    <table class="table table-striped">
    <thead>
      <tr class="bg-dark text-white text-center">
         <td>id</td>
         <td>Name</td>
         <td>Price</td>
         <td>Description</td>
         <td>Update</td>
         <td>Delete</td>
      
      </tr>
    </thead>
    <tbody>
      
    <?php 
    include_once 'database/DBcon.php';
    $conn = connect();
    
    $sql = "SELECT * FROM products";
    
    $result = $conn->query($sql);
    
    foreach($result AS $row){
    ?>
      <tr class="text-center">
        <td><?=$row['id']?></td>
      <td><?=$row['name']?></td>
      <td><?=$row['price']?></td>
      <td><?=$row['description']?></td>
      <td><button type="submit" class="btn btn-warning"> <a href="#" class="text-white">update</a></button></td>
      <td><button type="submit" class="btn btn-danger"> <a href="#" class="text-white">delete</a></button></td>
      </tr>
    <?php } ?> 
    </tbody>
    </table>
    </div>
        </div>
  <!-- Footer -->
 <?php include_once 'template/footer.php';?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
