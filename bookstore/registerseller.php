<!DOCTYPE html>
<html>
    <head>
        <title>
            Registration
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta name="description" content="" />
        <meta name="keywords" content="">
        <meta name="author" content="" />
        <meta name="MobileOptimized" content="320">
        <link rel="stylesheet" href="css/color.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
    <body id="main_bg">
    <?php 
        require 'header.php'; 
    ?>

    <div class="container">
        <div class="row">
            <div class="col-6">
                 <div class="card">
                          <div class="card-body">
                              <h3 class="card-title mb-3">Register here</h3>
                              <form action="addseller.php" method="POST">
                              
                                  <div class="row"> 
                                      <div class="col-6">
                                              <div class="mb-3">
                                             <label class="form-label">First Name</label>
                                            <input type="text" name="fname" class="form-control"  placeholder="First Name">
                                             <div class="invalid-feedback">
                                              Please enter First name
                                             </div>
                                              </div>  
                                      </div>
                                      <div class="col-6">
                                                  <div class="mb-3">
                                               <label class="form-label">Last Name</label>
                                               <input type="text" name="lname" class="form-control"  placeholder="Last Name">
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
                                            <input type="text" name="user_name" class="form-control"  placeholder="Name">
                                            <div class="invalid-feedback">
                                                Please enter username First
                                            </div>
                                          </div>
                                </div>
                                <div class="col-6">

                                       <div class="mb-3">
                                           <label class="form-label">City</label>
                                           <input type="text" name="city" class="form-control"  placeholder="Ahmedabad">
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
                                           <input type="number" name="phone" class="form-control"  placeholder="enter phone no.">
                                           <div class="invalid-feedback">
                                               Please enter mobile no. 
                                           </div>
                                         </div>


                                </div>
                                 <div class="col-6">

                                       <div class="mb-3">
                                           <label class="form-label">Email</label>
                                           <input type="email" name="email" class="form-control"  placeholder="enter email id">
                                           <div class="invalid-feedback">
                                               Please enter email id. 
                                           </div>
                                         </div>


                                </div>
                            </div>
                          </div>

                            <div class="row">
                                <div class="col-6">

                                          <div class="mb-3">
                                          <label class="form-label">Password</label>
                                          <input type="password" name="password" class="form-control" placeholder="Password">
                                          <div class="invalid-feedback">
                                              Please enter password 
                                          </div>
                                        </div>


                                </div>
                                <div class="col-6">
                                         <div class="mb-3">
                                             <label class="form-label">Confirm Password</label>
                                             <input type="password" name="cpassword" class="form-control" placeholder="Retype password">
                                             <div class="invalid-feedback">
                                                 Please enter password 
                                             </div>
                                           </div>
                                </div>
                            </div>
          
                                  <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                  </div>

                              </form>
                              
                          </div>
                      </div>
            <div class="col-6">
                <img src="images/register.jpg" alt="" width="100%" height="80%" /> 
            </div>
        </div>




    </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    </body>
</html>