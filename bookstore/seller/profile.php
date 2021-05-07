<!DOCTYPE html>
<?php
    session_start();
    require '../dbconnect.php';
    $user_name = $_SESSION['user_name'];

    // $user_name=$_REQUEST['user_name'];
    // $user_name="jay";

?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Stack - My Profile </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">Student Stack</a>
          <ul class="navbar-nav ml-auto">
          <li class="=nav-item">
            <a class="nav-link" href="editprofile.php?user_name=<?php echo "$user_name" ?>">
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


        <div id="content">
            <div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>My Profile</h1>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-md-11">
                        <div>
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >


                              <div>
                            <div>
                              <div class="row">
                                <?php 
                                    $qry1="SELECT * FROM user_tbl WHERE user_name='$user_name' ";
                                    $rs1=mysqli_query($conn,$qry1);
                                
                                    $row1=mysqli_fetch_assoc($rs1);
                                ?> 

                                <div class=" col-md-12 col-lg-12 "> 
                                  <table align="center" class="table table-striped table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th>First Name</th>
                                            <!-- <td>Pal Modi</td> -->
                                            <td><?php echo $row1['f_name']?></td>
                                        </tr>
                                        <tr>
                                            <th>Last Name</th>
                                            <!-- <td>Pal Modi</td> -->
                                            <td><?php echo $row1['l_name']?></td>
                                        </tr>
                                        <tr>
                                            <th>User Name</th>
                                            <!-- <td>Pal Modi</td> -->
                                            <td><?php echo $row1['user_name']?></td>
                                        </tr>
                                        
                                        <!-- <tr>
                                            <th>Gender</th>
                                             <td>Male</td> 
                                            <td><?php echo $row1['gender']?></td>
                                        </tr> -->
                                        <!-- <tr>
                                            <th>Home Address</th>
                                            <td>Shivanta</td>
                                             <td><?php echo $row1['address']?></td>
                                        </tr> -->
                                        <tr>
                                            <th>Email</th>
                                            <!-- <td>palmodi@gmail.com</td> -->
                                            <td><?php echo $row1['email']?></td>
                                        </tr>
                                        <tr>
                                            <th>Phone Number</th>
                                            <!-- <td>9638355713</td> -->
                                            <td><?php echo $row1['m_no']?></td>

                                        </tr>
                                        <tr>
                                            <th>City</th>
                                            <td><?php echo $row1['city']?></td>

                                        </tr>

                                        
                                    </tbody>
                                  </table>
                                        
                                </div>            
                                </div>
                                        
                                </div>
                                </div>
                        </div>
                            </div>    
                            </div>
                            <!-- <?php
                            
                        ?> -->
        </div>
            </div>
        </div>


      </div>


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


</body>
</html>
