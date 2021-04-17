<?php
session_start();
//error_reporting (E_ALL ^ E_NOTICE); 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory_mgt_sys";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if(isset($_POST['savedata']));
{
    
    $id=$_POST['id'];
    $sno=$_POST['sno'];
    $name=$_POST['nomenclature'];
    $cl=$_POST['classification'];
    $au=$_POST['auth_unit'];
    $qty=$_POST['qty'];
    $grnt=$_POST['grnt'];
    $qlp=$_POST['qlpno'];
    $cost=$_POST['cost'];
    $supord=$_POST['suporder'];
    $supda=$_POST['sup_date'];
    $vdet=$_POST['vendor_details'];
    $vcont=$_POST['vendor_contact'];
    $qiv=$_POST['qivno'];
     $rv=$_POST['rv'];
    $coy=$_POST['coy'];
    $store=$_POST['store'];
    $loan=$_POST['loan'];
     $int_distr=$_POST['int_distr'];
    $wty=$_POST['warranty'];
    $amc=$_POST['amc'];
    $esl=$_POST['esl'];
    $sta=$_POST['status'];
    $rema=$_POST['remarks'];
    

$sql = "INSERT INTO all_stores (sno,nomenclature,classification,auth_unit,qty,grnt,qlpno,cost,suporder,sup_date,vendor_details,vendor_contact,qivno,rv,coy,store,loan,int_distr,warranty,amc,esl,status,remarks)
VALUES ('$sno', '$name','$cl','$au','$qty','$grnt','$qlp','$cost','$supord','$supda','$vdet','$vcont','$qiv','$rv','$coy','$store','$loan','$int_distr','$wty','$amc','$esl','$sta','$rema')";
$query=mysqli_query($conn,$sql) or die(mysqli_error($conn));

if($query==1){
    echo '<script> alert("Data inserted successfully");</script>';
                header('Location: all_stores.php');
  
}
    else{
         echo '<script> alert("Data not inserted");</script>';
                header('Location: all_stores.php');
    }

    
}
mysqli_close($conn);
?>


<!--//$connection=mysqli_connect("localhost","root","","countrydata");
$db=mysqli_select_db($connection,"countrydata");

if(isset($_POST['savedata']));
{
    
    $country_name=$_POST['name'];
    $country_code=$_POST['countrycode'];
    
    $query="INSERT INTO country ('name','countrycode') VALUES ('$country_name','$country_code')";
    $query_run=mysqli_query($connection,$query);
    
    if($query_run)
    {
        <!--echo '<script> alert("Data saved");</script>';
        header('Location: index2.php');
        
    }
    else
    {
      echo '<script> alert("Data not saved");</script>';  
    }
,classification,auth_unit,qty,grnt,qlpno,cost,suporder,sup_date,vendor_details,vendor_contact,qivno,coy,store,warranty,amc,esl,status,remarks)
,'$cl','$au','$qty','$grnt','$qlp','$cost','$supord','$supda','$vdet','$vcont','$qiv','$coy','$store','$wty','$amc','$esl','$sta','$rema'
}--!>
