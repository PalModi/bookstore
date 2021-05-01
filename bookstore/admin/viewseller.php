<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Stack - View Seller </title>
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
                    <a href="#">Dashboard</a>
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
                            <a href="viewstationary.php">View Stationary</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="viewbuyer.php">View Buyer</a>
                </li>
                <li class="active">
                    <a href="viewseller.php">View Seller</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <div>
                <div">
                    <div class="row">
                        <div class="col-md-12">
                            <h1> Users
                            </h1>
                        </div>
                    </div>
                    <div>

                        <div>
                            <div>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                        </tr>

                                        </thead>
                                    <tbody>
                                        
                                     <?php
                                     require '../dbconnect.php';
                                            $qry="SELECT * FROM `user_tbl`";
                                            $rs = mysqli_query($conn,$qry);
                                            
                                            if (mysqli_num_rows($rs)>0) 
                                            {
                                                while ($row=mysqli_fetch_assoc($rs)) 
                                                {
                                                    if($row['user_type']==1)
                                                    {
                                        ?>
                                    <tr>
                                            <td><?php echo $row['f_name']; ?></td>
                                            <td><?php echo $row['l_name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['m_no']; ?></td>
                                        </tr>
                                        <?php
                                                    }
                                                }
                                            }
                                        ?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
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