<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php">products</a>
          </li>
        <?php 
        session_start();
        if(isset($_SESSION['loggedin'])){
        ?>
      <li class="nav-item">
        <a class="nav-link" href="#"><?php echo $_SESSION['user_name']; ?></a> 
      </li>
       <li class="nav-item">
              <a class="nav-link" href="add_product_form.php">Add product</a>
            </li>
      <li class="nav-item">
              <a class="nav-link" href="php/logout.php">Logout</a>
            </li>
        <?php } else { ?>
     <li class="nav-item">
            <a class="nav-link" href="reg_form.php">registration</a>
          </li>
       <li class="nav-item">
            <a class="nav-link" href="login_form.php">Login</a>
          </li>
      <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
