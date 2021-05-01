<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Stack - View book </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">Student Stack</a>
          <ul class="navbar-nav ml-auto">
          <li class="=nav-item">
            <a class="nav-link" href="profile.php">
                My profile
            </a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                  Logout
                </a>
            </li>
            </ul>
        </nav>
      </div>

      <div class="container justify-content-center">
           <h3 class="card-title mb-3">Login here</h3>
           <form action="check.php" method="POST">
             <div class="mb-3">
                 <label class="form-label">Username</label>
                 <input type="text" name="user_name" class="form-control"  placeholder="Name">
                 <div class="invalid-feedback">
                     Please enter username First
                 </div>
               </div>
               
               <div class="mb-3">
                 <label class="form-label">Password</label>
                 <input type="password" name="password" class="form-control" placeholder="Password">
                 <div class="invalid-feedback">
                     Please enter password 
                 </div>
               </div>
               
               <div class="col-12">
                 <button type="submit" name="btn_sb" class="btn btn-primary">Login</button>
               </div>

           </form>
           
            </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


</body>

</html>