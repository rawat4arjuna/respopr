<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory_mgt_sys";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

 $sql=mysqli_query($conn,"select * from accounts where username='".$_SESSION["username"]."'");
    while($row=mysqli_fetch_array($sql)){
        $role=$row['role'];
    }
    if ($role=="master"){
// Check connection

if(isset($_POST['updatedata']));
{
    $id=$_POST['update_id'];
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
    
    
    $ins = "UPDATE all_stores SET sno='$sno', nomenclature='$name',classification='$cl',auth_unit='$au',qty='$qty',grnt='$grnt',qlpno='$qlp',cost='$cost',suporder='$supord',sup_date='$supda',vendor_details='$vdet',vendor_contact='$vcont',qivno='$qiv', rv='$rv',coy='$coy',store='$store',loan='$loan',int_distr='$int_distr',warranty='$wty',amc='$amc',esl='$esl',status='$sta',remarks='$rema' WHERE id='$id'";
    $query=mysqli_query($conn,$ins) or die(mysqli_error($conn));
     if($query==1){
                echo '<script> alert("Data saved successfully");</script>';
                header('Location: all_stores.php');
 
}
    else{
        echo '<script> alert("Data saved successfully");</script>';
                header('Location: all_stores.php');
 
    }
}
    }
elseif($role=="storeman"){
if(isset($_POST['updatedata']));
{
    $id=$_POST['update_id'];
   $int_distr=$_POST['int_distr'];
  $sta=$_POST['status'];
    $rema=$_POST['remarks'];
    
    
    $ins = "UPDATE all_stores SET int_distr='$int_distr',status='$sta',remarks='$rema' WHERE id='$id'";
    $query=mysqli_query($conn,$ins) or die(mysqli_error($conn));
     if($query==1){
                echo '<script> alert("Data saved successfully");</script>';
                header('Location: store_table.php');
 
}
    else{
        echo '<script> alert("Data saved successfully");</script>';
                header('Location: all_stores.php');
 
    }
}
    }



mysqli_close($conn);
?>

    



 