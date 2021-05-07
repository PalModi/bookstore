<!DOCTYPE html>
<?php
require '../dbconnect.php';
    $user_name=$_GET['user_name'];
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Stack - Edit profile </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">Student Stack</a>
          <ul class="navbar-nav ml-auto">
          <li class="=nav-item">
            <a class="nav-link" href="editprofile.php">
                Edit profile
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
      <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            

            <ul class="list-unstyled components ">
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage Books</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="addbook.php">Add Books</a>
                        </li>
                        <li>
                            <a href="viewbook.php">View Books</a>
                        </li>
                    </ul>
                </li>
                
                <li class="active">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage Stationary</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="addstationary.php">Add Stationary</a>
                        </li>
                        <li>
                            <a href="viewstationary.php">View Stationary</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>





        <div class="container">
        <div class="row">
            <div class="col-12">
                 <div class="card">
                          <div class="card-body">
                              <h3 class="card-title mb-3">Register here</h3>
                              <form action="editprofileprocess.php" method="POST">
                              <?php 
                                    $qry1="SELECT * FROM user_tbl WHERE user_name='$user_name'";
                                    $rs1=mysqli_query($conn,$qry1);
                                    $row=mysqli_fetch_assoc($rs1);
                                    // echo '<pre>';print_r($row1);exit;
                                ?> 
                                  <div class="row"> 
                                      <div class="col-6">
                                              <div class="mb-6">
                                             <label class="form-label">First Name</label>
                                            <input type="text" name="fname" class="form-control" value="<?php echo $row['f_name']; ?>">
                                             <div class="invalid-feedback">
                                              Please enter First name
                                             </div>
                                              </div>  
                                      </div>
                                      <div class="col-6">
                                                  <div class="mb-6">
                                               <label class="form-label">Last Name</label>
                                               <input type="text" name="lname" class="form-control"  value="<?php echo $row['l_name']; ?>">
                                               <div class="invalid-feedback">
                                                   Please enter Last name
                                                </div>
                                          </div>  
                                      </div>
                                  </div>
                                  
                                  
                            <div class="row">
                                <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="text" name="user_name" class="form-control"  value="<?php echo $row['user_name']; ?>">
                                            <div class="invalid-feedback">
                                                Please enter username First
                                            </div>
                                          </div>
                                </div>
                                <div class="col-6">

                                       <div class="mb-3">
                                           <label class="form-label">City</label>
                                           <input type="text" name="city" class="form-control"  value="<?php echo $row['city']; ?>">
                                           <div class="invalid-feedback">
                                               Please enter CIty First
                                           </div>
                                         </div>


                                </div>
                            </div>
                            <div class ="row">
                            <div class="col-6">

                                       <div class="mb-3">
                                           <label class="form-label">Phone No.</label>
                                           <input type="number" name="phone" class="form-control"  value="<?php echo $row['m_no']; ?>">
                                           <div class="invalid-feedback">
                                               Please enter mobile no. 
                                           </div>
                                         </div>


                                </div>
                                 <div class="col-6">

                                       <div class="mb-3">
                                           <label class="form-label">Email</label>
                                           <input type="email" name="email" class="form-control"  value="<?php echo $row['email']; ?>">
                                           <div class="invalid-feedback">
                                               Please enter email id. 
                                           </div>
                                         </div>


                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">

                                          <div class="mb-3">
                                          <label class="form-label">Password</label>
                                          <input type="password" name="password" class="form-control" value="<?php echo $row['password']; ?>">
                                          <div class="invalid-feedback">
                                              Please enter password 
                                          </div>
                                        </div>


                                </div>
                                <!-- <div class="col-4">
                                         <div class="mb-3">
                                             <label class="form-label">Confirm Password</label>
                                             <input type="password" name="cpassword" class="form-control" value="<?php echo $row['f_name']; ?>">
                                             <div class="invalid-feedback">
                                                 Please enter password 
                                             </div>
                                           </div>
                                </div> -->
                            </div>
          
                                  <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                  </div>

                              </form>
                              
                          </div>
                      </div>
        </div>




    </div>







      </div>






      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


</body>
</html>
