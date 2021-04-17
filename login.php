<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory_mgt_sys";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if(isset($_POST['submit']));
{
    
$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];

$sql = "SELECT * FROM accounts WHERE username='$username' AND password='$password' AND role='$role'";
$query=mysqli_query($conn, $sql);
$rows=mysqli_num_rows($query);


//session_regenerate_id();
    //$_SESSION['username']=$row['username'];
    //$_SESSION['role']=$row['role'];
//sesion_write_close();

    if ($rows==1 && $role=="storeman") {
        $_SESSION['username']=$_POST['username'];
        echo '<script> alert("Data saved successfully");</script>';
        header('Location: dashboard.php');
    } elseif($rows==1  && $role=="master"){
         $_SESSION['username']=$_POST['username'];
         header('Location: dashboard.php'); 
    }
        else {
           echo '<script> alert("Data not saved successfully");</script>'; 
            
    }
}
 

mysqli_close($conn);
?>

