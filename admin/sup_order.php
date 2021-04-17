<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
//if (strlen($_SESSION['sid']==0)) {
 // header('location:logout.php');
 // } else{









if(isset($_POST['submit']))
 {
    $uid=$_SESSION['sid'];
  $Entry_Id = mt_rand(100000000, 999999999);
    $tod=$_POST['tod'];
   $dt=$_POST['dt'];  
   $hcw_1st=$_POST['hcw_1st'];  
   $hcw_2nd=$_POST['hcw_2nd'];
   $flw_1st=$_POST['flw_1st'];
   $flw_2nd=$_POST['flw_2nd'];
   $echs=$_POST['echs'];
   $echs_60=$_POST['echs_60'];
   $echs_45w=$_POST['echs_45w'];
   $echs_45=$_POST['echs_45'];
   $depend=$_POST['depend'];
   $depend_60=$_POST['depend_60'];
   $depend_45w=$_POST['depend_45w'];
   $depend_45=$_POST['depend_45'];  
   $fmn=$_POST['fmn'];
   $vac_cent=$_POST['vac_cent'];
   $nodes=$_POST['nodes'];
   $dist=$_POST['dist'];
   $batch=$_POST['batch'];
   $fmncode= "1";
   
   $total_str=(($hcw_1st)+($hcw_2nd)+($flw_1st)+($flw_2nd)+($echs)+($depend)+($echs_60)+($echs_45w)+($echs_45)+($depend_60)+($depend_45w)+($depend_45));
   
   
$fmn_16=$_POST['fmn'];
  //$fmn_16="16 CORPS";
  $ret=mysqli_query($con, "select dt,fmn from covid_tbl_details where dt='$dt'&& fmn='$fmn_16' && vac_cent='$vac_cent'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
$msg="This Date already associated with Your database";
    }
    else{ 
     
     
     $query=mysqli_query($con,"insert into covid_tbl_details(hcw_1st,hcw_2nd,flw_1st, flw_2nd,echs,echs_60,echs_45w,echs_45,depend,depend_60,depend_45w,depend_45,fmn,dt,total_str,vac_cent,nodes,dist,tod,batch) value
   ('$hcw_1st','$hcw_2nd','$flw_1st','$flw_2nd','$echs','$echs_60','$echs_45w','$echs_45','$depend','$depend_60','$depend_45w','$depend_45' ,'$fmn','$dt','$total_str','$vac_cent','$nodes','$dist','$tod','$batch')");
   if ($query) {
    $msg="Data has been added successfully.";
  }
  header("location:update_16_4.php");
  //else
    //{
      $msg="Something Went Wrong. Please try again";
    //}

 


}
}





?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>MTA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
         <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="../assets/js/modernizr.min.js"></script>
        <link href="../assets/css/style_11.css" rel="stylesheet" type="text/css" />
        <script src="../assets/js/modern.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
        
       <script type="text/javascript">



 </script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

          <?php 
      include_once('includes/sidebar_3.php');
      ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                 

                <!-- Start Page content -->
                <div class="content">
                    <div class="wrapper">

                        <div class="row">
                            <div class="col-12">
                                  <div class="card-box">
                                     <p class="text" style="font-size: 29px; color: red"><b> MTA Supply Order Form</b>
                                      </p> 
                                                                        </div><!--  <nav aria-label="...">
  <ul class="pagination pagination-lg">
    <li class="page-item " >
      <span  class="page-item " ><a class="page-link" href="entry_16_g.php">Doses</a>
        Doses
        </a>
      </span>
    </li>
    <li class="page-item active " > <span  ><a class="page-link" href="entry_16c.php" >Vaccinated</a></li>
    </span>
  </ul>
</nav> -->
                                    <div class="card-box">
                                    <div class="form-group-row">
                                        <div class="col-12">
                                            <div class="p-20">
                                               <div class="p-20">
                                               
                         <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                                  
                         
                                                <form class="form-horizontal" role="form" method="post" name="submit">
                        
                          
                        
                        
                          
                                                    <div class="form-group row"></div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label" for="example-email"><b>Supply Order No. </b></label>
                                                       
                                                        <div class="col-2">
                                                            <input type="text" id="suporder" name="suporder" class="form-control" Placeholder="0" >
                                                        </div>
                                  
                                                    
                            <label class=" col-1 col-form-label" for="example-email"><b>Job No. </b></label>
                                                        <div class="col-2">
                                                            <input type="text" id="job_ad" name="job_ad" class="form-control" Placeholder="0" >
</div> </div><div class="form-group row"></div>
                                                       
                                                        <div class="COL-1 form-group row">
                                                          <label class=" col-1 col-form-label" for="example-email">Center </label>
                                                        <div class="col-1"> 
                                                        <select name="fmn" id="fmn" required>
                                                        <option value="">------SELECT------</option>
                                                        <option value="166 MH">166 MH</option>
                                                        <option value="TMC">TMC NAGROTA</option>
                                                        <option value="170 MH">170 MH (Akhnoor)</option>
                                                        <option value="26 INF DIV">26 INF DIV</option>
                                                        <option value="23 WG AF">23 Wg AF</option>
                                                        <option value="325 FH">325 FH</option>
                                                       <option value="NODAL 166 MH">166 MH</option>
                                                        <option value="150 GH">150 GH</option>
                                                         <option value="169 MH">169 MH</option>
                                                       <option value="425 FH">425 FH</option>
                                                    <option value="310 FH">310 FH</option>
                                                        <option value="MH DODA">MH DODA</option>
                                                        <option value="4016 FH">4016 FH</option>
                                                        <option value="KISHTWAR MI ROOM">KISHTWAR MI ROOM</option>
                                                      

                                                         </select>
                            
                            </div>&nbsp&nbsp&nbsp&nbsp<div class="col-1 form-group row"></div>
                                                        <label class=" col-1 col-form-label" for="example-email">District </label>
                                                        <div class="col-1"> 
                                                        <select name="dist" id="dist" required>
                                                        <option value="">--SELECT--</option>
                                                        <option value="JAMMU">JAMMU</option>
                                                        <option value="RAJOURI">RAJOURI</option>
                                                        <option value="POONCH">POONCH</option>
                                                        <option value="REASI">REASI</option>
                                                        <option value="DODA">DODA</option>
                                                        <option value="RAMBAN">RAMBAN</option>
                                                        <option value="KISHTWAR">KISHTWAR</option>
                                                         </select>
                                                        
                                                        </div>                  
                                                            <div class="col-1 form-group row"></div>
                                                        <label class=" col-1 col-form-label" for="example-email">Nodal Center </label>
                                                            <div class="col-1"> 
                                                        <select name="nodes" id="nodes" required>
                                                        <option value="">----SELECT----</option>
                                                        <option value="NODAL 166 MH">166 MH</option>
                                                        <option value="NODAL 150 GH">150 GH</option>
                                                        <option value="NODAL 425 FH">425 FH</option>
                                                        <option value="NODAL 310 FH">310 FH</option>
                                                        <option value="NODAL MH DODA">MH DODA</option>
                                                        <option value="NODAL 4016 FH">4016 FH</option>

                                                         </select>
                            
                            </div>&nbsp&nbsp&nbsp&nbsp
                                                    
                          <div class="col-1 form-group row"></div>
                                                        <label class=" col-1 col-form-label" for="example-email">Formation </label>
                                                        <div class="col-1"> 
                                                        <select name="vac_cent" required>
                                                        <option value="">--SELECT--</option>
                                                        <option value="16 CORPS">HQ 16 Corps</option>
                                                        <option value="10 INF DIV">10 Inf Div</option>
                                                        <option value="25 INF DIV">25 Inf Div</option>
                                                        <option value="U FORCE">'U' Force</option>
                                                        <option value="D FORCE">'D' Force</option>
                                                        <option value="R FORCE">'R' Force</option>
                                                        <option value="26 DIV">26 Div</option>
                                                        <option value="23 WG AF">23 Wg AF</option> 
                                                         </select>      </div>    </div>                                            
                                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                       <div class="form-group row">

                                                        <label class="col-form-label">&nbsp&nbsp&nbsp&nbspCurrent Date</label>
                                                        <div class="col-2">
                                                            <input type="date" name="dt" id="Data" class="form-control" required >
                                                        </div>
                                                    </div>
                                            
                                                     <div class="form-group row"></div><div class="form-group row"></div>
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                           <p style="text-align: center;">  <button type="submit" name="submit" class="btn btn-info btn-min-width mr-1 mb-1"><b>Submit</b></button></p>
                                                        </div>
                                                    </div>
                                                  </form>
 
                                                
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


        



                        <!-- end row -->





                    </div> <!-- container -->

                </div> <!-- content -->

             <?php include_once('includes/footer.php');?>
            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
