<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>UI Dashboard Website</title>
  <!-- Font Awesome -->
  
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.8.1-web/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  
</head>

<body>

    
<!-- The sidebar -->
<!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
   <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown link
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
    <a href="#about">About</a>
  </div>
  

  <!-- Start your project here-->
 <div class=" py-2 text-white" style="background-color: teal">
      <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-chart-bar"></i> Dashboard</h1>
    </div>
    <div class="bg-light p-2">  </div>
     
  <!-- navigation menu -->
   
    <nav class="navbar col-md-10 navbar-expand-sm navbar-dark bg-dark">
     
        <button class="navbar-toggler " data-toggle="collapse" data-target="#menu"> 
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-list-ul"></i> Posts</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="fas fa-network-wired"></i> Categories</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-users"></i> Users</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
           <li class="nav-item">
            <div class="dropdown">
              <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" >
                <i class="fas fa-id-badge"></i> Tech Info</a>
              <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Profile</a>
                <a href="#" class="dropdown-item">Settings</a>
                <a href="#" class="dropdown-item">Change Themes</a>
                <a href="#" class="dropdown-item">About us</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-sign-out-alt"></i> Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  <!-- navigation menu ends here -->
  <!-- creating heading of dashboard -->
   
    <div class="row">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <div class="col-md-3 col-md-offset-3">
         <a href="" class="btn btn-primary d-block font-weight-bold">
          <i class="fas fa-plus"></i> &nbsp;ADD POST</a>
       </div>
       <div class="col-md-3">
         <a href="" class="btn btn-success d-block font-weight-bold">
          <i class="fas fa-plus"></i> &nbsp; ADD CATEGORY</a>
       </div>
       <div class="col-md-3">
         <a href="" class="btn btn-warning d-block font-weight-bold">
          <i class="fas fa-plus"></i> &nbsp;ADD USER</a>
       </div>
    </div>

  <!-- dashboard heading ends -->
  <!-- dashboard content start -->
  <div class="container-fluid">
    
    <div class="row"> 
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-6">
        <h2 style="background-color: purple;" class="text-white p-2 ">Latest Items</h2>
        <div class="container">
        <!-- creating table -->
     <table class="table table-borderless table-striped table-hover mytable">
                    <thead class="table-dark">
                        <tr>
                            <td>ID</td>
                            <td>Country Name</td>
                            <td>Country Code</td>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                             <?php
                                $con=  mysqli_connect("localhost", "root", "", "countrydata");
                        
                                if(!$con)
                               {
                                   die('not connected');
                               }
                                $con=  mysqli_query($con, "select * from country");
                        
                               ?>
                                <div>
                                    
                                <?php

                                     while($row=  mysqli_fetch_array($con))
                        
                                     {
                                         ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['countrycode']; ?>
                                            
                                        
                                       
                                       
                                    </tr>
                                <?php
                                     }
                                ?>
                        </div>
                        </tbody>
        </table>
      </div>
    </div>
      <div class="col-md-4 mt-2">
          <div class="card">
            <div class=" bg-primary text-white p-4">
              <i class="fas fa-list-ul fa-6x"></i>
              <h2 class="float-right font-weight-bold" style="font-size: 50px; text-align: center;">Unsv<span class="d-block">Stores</span></h2>
            </div>
            <div class="card-footer text-primary">
              <h6 class="text-center"><a href=""> View Details
              <i class="fas fa-arrow-alt-circle-right"></i></h6></a>
            </div>
          </div>
          <div class="card mt-5">
            <div class=" bg-success text-white p-4 ">
              <i class="fas fa-list-ul fa-6x"></i>
              <h2 class="float-right font-weight-bold" style="font-size: 40px; text-align: center;">BER<span class="d-block">Stores</span></h2>
            </div>
            <div class="card-footer text-primary">
              <h6 class="text-center"><a href=""> View Details
              <i class="fas fa-arrow-alt-circle-right"></i></h6></a>
            </div>
          </div>
          <div class="card mt-5">
            <div class=" bg-warning text-white p-4 ">
              <i class="fas fa-list-ul fa-6x"></i>
              <h2 class="float-right font-weight-bold" style="font-size: 50px; text-align: center;">On Loan<span class="d-block">Stores</span></h2>
            </div>
            <div class="card-footer text-warning">
              <h6 class="text-center"><a href=""> View Details
              <i class="fas fa-arrow-alt-circle-right"></i></h6></a>
            </div>
          </div>
      </div> 
    </div>
  
  <!-- dashboard content ends -->
  <!-- footer start -->
        <footer class="bg-light text-dark p-3 mt-2">
          <h2 class="text-center">All Right Reserve &copy kaafir</h2>
        </footer>
  <!-- footer ends here -->
  <!-- /Start your project here-->
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
