<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>UI Dashboard Website</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="datetimepicker/jquery.datetimepicker.css"/>
  <link rel="stylesheet" type="text/css" href="UI%20Dashbord/fontawesome-free-5.8.1-web/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="UI%20Dashbord/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="UI%20Dashbord/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="UI%20Dashbord/css/style.css" rel="stylesheet">

  
</head>

<body>

    
<!-- The sidebar -->
<!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="dashboard_storeman.php">Home</a>

   <a href="all_stores.php"><button class="btn info">View display</button></a>
  
   <div class="dropdown">
 
       <a href="#" class="dropdown-toggle" data-toggle="dropdown">Unit</a>
	  
 <div class="dropdown-menu">
    <a class="dropdown-item" href="adm_table.php">16 Cosr</a>
    <a class="dropdown-item" href="mc_table.php">72 Eng </a>
    <a class="dropdown-item" href="sc_table.php"> Asc </a>
	 <a class="dropdown-item" href="sc_table.php"> Asc </a>
	  <a class="dropdown-item" href="sc_table.php"> Asc </a>
	   <a class="dropdown-item" href="sc_table.php"> Asc </a>
  </div>

    </div>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.btn {
  border: none;
   
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #46a049;}

.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}

.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}

.danger {background-color: #f44336;} /* Red */ 
.danger:hover {background: #da190b;}

.default {background-color: #e7e7e7; color: black;} /* Gray */ 
.default:hover {background: #ddd;}
</style>
</head>
<body>

    <a href="admin/sup_order.php"><button class="btn success">Supply Order</button></a>
	 <a href="warranty.php"><button class="tn warning">Issuse Items</button></a>
	 <a href="bd.php"><button class="btn danger">Bd  Offr</button></a>
</body>	
</html>
  </div>
  

  <!-- Dashboard starts here-->
 <div class=" py-2 text-white" style="background-color: teal">
      <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-chart-bar"></i> Dashboard</h1>
    </div>
   <!-- <div class=" py-2 text-white" style="background-color: brown">
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="issue_loan.php"><i class="fas fa-sign-out-alt"></i>iTEMS ISSUED ON LOAN</a></h1>
    </div> -->
     
  <!-- navigation menu ----------------------------------------------------------------------------------->
   
    <nav class="navbari col-md-20 navbar-expand-md navbar-light bg-danger">
     
        <button class="navbar-toggler " data-toggle="collapse" data-target="#menu"> 
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav">
               
             <li class="nav-item">
            <a href="issue_loan.php" class="nav-link">
              
          </li>
             <li class="nav-item">
            <a href="rx_loan.php" class="nav-link">
             
          </li>
            
  <?php
    
    $con=mysqli_connect("localhost","root","","inventory_mgt_sys");
    
    $sql=mysqli_query($con,"select * from accounts where username='".$_SESSION["username"]."'");
    while($row=mysqli_fetch_array($sql)){
        $role=$row['role'];
    }
    if ($role=="storeman"){ ?> 
             <li class="nav-item">
            <a href="store_table.php" class="nav-link">
             
          </li>
            
            
            
        
    <?php } else{
        
    }?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <li class="nav-item">
		
            <a href="index.php" class="nav-link">
              <a href="index.php"><button class="btn success">Logout</button></a>
        <!--</ul>
			  
          </li>
           
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i> Logout</a>
          </li>
        </ul>-->
      </div>
    </nav>
  <!-- navigation menu ends here -->
  <!-- creating heading of dashboard -->

  <!-- dashboard content start -->
  <div class="container-fluid">
    
    <div class="row"> 
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-7">
        
        <div class="container">
        <!-- creating table -->
   
       <!-- dashboard content ends -->
  <!-- footer start -->

  <!-- footer ends here -->
  <!-- /Start your project here-->
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="UI%20Dashbord/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="UI%20Dashbord/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="UI%20Dashbord/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="UI%20Dashbord/js/mdb.min.js"></script>
</body>

</html>
