<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory_mgt_sys";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if(isset($_POST['deletedata']));
{
    $id=$_POST['delete_id'];  
    //echo $id;
  

$sql = "DELETE FROM all_stores WHERE id='$id'";

$query=mysqli_query($conn,$sql) or die(mysqli_error($conn));

if($query==1){
    echo '<script> alert("Data deleted successfully");</script>';
                header('Location: all_stores.php');
  
}
    else{
         echo '<script> alert("Data not deleted");</script>';
                header('Location: all_stores.php');
    }
}
mysqli_close($conn);
?>
 