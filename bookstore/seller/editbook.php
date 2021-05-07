<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Stack - Add book </title>
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
                            <a href="#">Add Books</a>
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
            <?php
                require '../dbconnect.php';
                $book_id=$_REQUEST['book_id'];
                  $qry="SELECT * FROM `book_tbl` WHERE `book_id`=$book_id";
                  $rs = mysqli_query($conn,$qry);
                  if (mysqli_num_rows($rs)>0) 
                  {
                      while ($row=mysqli_fetch_assoc($rs)) 
                          {
                    ?>
        <!-- Page Content  -->
        <div id="content">
            <div>
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Edit Book</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div>
                                
                            <div>
                                <form class="form-horizontal" method="post" action="editbookprocess.php?book_id=<?php echo $book_id;?>" enctype="multipart/form-data">
                                  <div class="form-group">
                                    
                                    <input type="hidden" class="form-control" name="seller_id" value="<?php echo $s_id;?>">

                                    <label for="exampleInputEmail1">Enter Book name  </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="book_name" value="<?php echo $row['book_name']; ?>" required/><br>
                                    
                                     <label for="exampleInputEmail1">Enter ISBN number  </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="isbn_no" value="<?php echo $row['isbn_no']; ?>" required/><br>
    
                                    <label> Book Image </label>
                                    <input type="file" class="form-control" name="bookToUpload" required> <br><br>
                                    <label> Book Description </label>
    
                                    <textarea rows="4" cols="70" class="form-control" name="book_desc" value="<?php echo $row['descryption']; ?>"> </textarea> <br><br>
                                    <label for="exampleInputEmail1">Publisher</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="publisher" value="<?php echo $row['publisher']; ?>" required/><br>

                                    
                                    
                                    <label> Price(Rs): </label><input type="text" class="form-control" name="book_price" pattern="{0-9}" value="<?php echo $row['price']; ?>" required> <br><br>
                                  </div>
                                 
                                  <input type="submit" class="btn btn-primary" name="btn_sb" value="Add Book">
                                    <?php 
                                if(isset($_GET['err']))
                                {
                                    $msg=$_GET['err'];
                                }
                                else
                                {
                                    $msg="";
                                    
                                }
                            
                            ?>
                            <h5 style="color:red"><?php echo $msg?> </h5>  
                                  <!--  </a>   -->
                            </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        </div>
        <?php   
             }
            }
         ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


</body>

</html>