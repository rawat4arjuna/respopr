<?php ?>

<!DOCTYPE html5>
<html lang="en">
   
   <head>
       <meta charset = "UTF-8">
      <title>Login Page</title>
    
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" type="text/css" href="style1.css">

      
   </head>
   
   <body>
<div class="login-box">
    <h2>Login</h2>
    <form action = "login.php" method = "post">
      <div class="user-box">
        <input type="text" name = "username" required>
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name = "password" required>
        <label>Password</label>
      </div>
        <div class="user-box">
         <input type="radio" name="role" value="master" >
            <label>Admin</label>
        </div>
          <div class="user-box">
        <input type="radio" name="role" value="storeman" >
            <label>User</label>
        </div>
   
    <a href="login.php" input type="submit" name="submit" value="submit">
        <span></span>
        <span></span>
        
        <button>Submit</button>
      </a>

      
    </form>
  </div> 
       
   

   </body>

</html>
