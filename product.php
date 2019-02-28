<?php include_once 'template/head.php';?>

<body>
 <!-- Navigation -->
  <?php include_once 'template/nav_bar.php';?>
 <div class="container">
   <h1 class="mt-4 mb-3"> Our
      <small>Products</small>
    </h1>
        <div class="col-lg-9">

          <div class="row">
<?php 
		include_once 'database/DBcon.php';
		$conn = connect();
		
		$sql = "SELECT * FROM products ";
		
		$result = $conn->query($sql);
		
		foreach($result AS $row){
		?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/<?=$row['image']?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?=$row['name']?></a>
                  </h4>
                  <h5><?=$row['price']?></h5>
                  <p class="card-text"><?=$row['description']?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				  
					   
					 </div>
                </div>
              </div>
            
		<?php } ?>
            
          </div>
          <!-- /.row -->
 </div>
        <!-- /.col-lg-9 -->
      <!-- /.row -->

    </div>

  <?php include_once 'template/footer.php';?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
