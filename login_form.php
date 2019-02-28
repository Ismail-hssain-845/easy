<?php include_once 'template/head.php';?>

<body>


  <!-- Navigation -->
  <?php include_once 'template/nav_bar.php';?>
  <h1>Login page</h1>
    
 <div class="col-lg-6 m-auto" >
        <form action="php/login_check.php" method="POST">
          <div class="card-header bg-dark" >
            <h1 class="text-white text-center">LOGIN HERE!</h1>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          
          
          <button type="submit" class="btn btn-success">login</button>
        </form>
        </div>

        <div class="col-lg-6">
        <h2>
        <?php
        //Show message using session
          
          if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'] ;
            unset($_SESSION['msg']) ;
          }
                
        ?>
        </h2>
      </div>
        
  <!-- Footer -->
 <?php include_once 'template/footer.php';?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
