<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta name="description" content="" />
        <meta name="keywords" content="">
        <meta name="author" content="" />
        <meta name="MobileOptimized" content="320">
        <link href="css/color.css" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>

          <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark mb-4">
            <div class="container">
              <a class="navbar-brand" href="#">Student Stack</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <?php
                    // if (!isset($_SESSION["id"])) {
                      $uname = (isset($_SESSION["user_name"])) ? $_SESSION["user_name"] : '';
                if($uname=='')
                {
                ?>
              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="book.php">Books</a></li>
                      <li><a class="dropdown-item" href="stationary.php">Stationary</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="contact.php">Contact</a>
                  </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="login.php">Login</a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Register
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="registerseller.php">Seller</a></li>
                      <li><a class="dropdown-item" href="registerbuyer.php">Buyer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <?php  
                }
              else {
                    ?>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="book.php">Books</a></li>
                      <li><a class="dropdown-item" href="stationary.php">Stationary</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="contact.php">Contact</a>
                  </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="logout.php">Logout</a>
                  </li>
                  <?php
                }
              
                ?>
                </ul>
              </div>



            </div>
          </nav> 

          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>