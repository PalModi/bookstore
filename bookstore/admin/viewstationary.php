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
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage Staionary</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="addstationary.php">Add Stationary</a>
                        </li>
                        <li>
                            <a href="#">View Stationary</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="viewbuyer.php">View Buyer</a>
                </li>
                <li>
                    <a href="viewseller.php">View seller</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

        <div>
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1>View Stationary</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div>
                                <div>
                                   <!-- My Stationary -->
                                </div>
                            
                                <div>
                            <div>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <!-- <th>Id</th>  -->
                                            <th>Stationary name</th>
                                            <th>Stationary Pic</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Brand</th>
                                            <th>Edit</th>
                                            <!-- <th>Edit</th> -->
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php
                                     require '../dbconnect.php';
                                            $qry="SELECT * FROM `stationary_tbl` ";
                                            $rs = mysqli_query($conn,$qry);
                                            if (mysqli_num_rows($rs)>0) 
                                            {
                                                while ($row=mysqli_fetch_assoc($rs)) 
                                                    {
                                        ?>
                                            <tr>
                                            
                                                <td><?php echo $row['stationary_name']?></td>
                                                <td><img src="<?php echo 'http://localhost/bookstore/bookstore/'.$row['stationary_pic']?>" width="50" height="50"></td>
                                                <td><?php echo $row['descryption']?></td>
                                                <td><?php echo $row['price']?></td>
                                                <td><?php echo $row['Brand']?></td>
                                                <td><a href="editstationary.php?stationary_id=<?php echo $row['stationary_id'] ?>">Edit</a></td>
                                                <td><a href="deletestationary.php?stationary_id=<?php echo $row['stationary_id'] ?>">Delete</a></td>    
                                  </tr>      
                                        <?php   
                                                }
                                            }
                                        ?>
                                        
                                    </tbody>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        </div>
        </div>
            
            <!-- /. PAGE WRAPPER  -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

</html>