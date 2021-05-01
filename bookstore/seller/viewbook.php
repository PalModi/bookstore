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
                            <a href="#">View Books</a>
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
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <div>
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1>View Book</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div>
                                <div>
                                   <!-- My Books -->
                                </div>
                            
                                <div>
                            <div>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <!-- <th>Id</th>  -->
                                            <th>Book name</th>
                                            <th>Book Pic</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Publication</th>
                                            <th>Edit</th>
                                            <!-- <th>Edit</th> -->
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                     <?php
                                     require '../dbconnect.php';
                                            $qry="SELECT * FROM `book_tbl` ";
                                            $rs = mysqli_query($conn,$qry);
                                            if (mysqli_num_rows($rs)>0) 
                                            {
                                                while ($row=mysqli_fetch_assoc($rs)) 
                                                    {
                                        ?>
                                            <tr>
                                                
                                                <td><?php echo $row['book_name']?></td>
                                                <td><img src="<?php echo 'http://localhost/bookstore/'.$row['book_pic']?>" width="50" height="50"></td>
                                                <td><?php echo $row['descryption']?></td>
                                                <td><?php echo $row['price']?></td>
                                                <td><?php echo $row['publisher']?></td>
                                                <td><a href="editbook.php?book_id=<?php echo $row['book_id'] ?>">Edit</a></td>
                                                <td><a href="deletebook.php?book_id=<?php echo $row['book_id'] ?>">Delete</a></td>    
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
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


</body>

</html>