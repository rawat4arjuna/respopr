<?php ?>

<!DOCTYPE html5>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Page</title>

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

</head>

<body>





  <div class="container d-flex align-items-center justify-content-center" style="align-items:center; justify-content:center;display:flex">
    <div class="card align-self-center" style="margin:200px">
      <div class="row gy-5 p-3 border bg-light">
        <form action="login.php" method="post">
          <div class="col-12 p-1">
            <div class="user-box">
              <input type="text" class="form-control form-control-lg" name="username" placeholder="Username" required>
            </div>
          </div>
          <div class="col-12 p-1">
            <div class="user-box">
              <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
            </div>
          </div>
          <div class="col-12 p-1">
            <div class="user-box">
              <input type="radio" name="role" value="master">
              <label>Admin</label>
            </div>
            <div class="user-box">
              <input type="radio" name="role" value="storeman">
              <label>User</label>
            </div>
          </div>
          <div class="col-12 p-1">
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- <div class="login-box">
    <h2>Login</h2>
    <form action="login.php" method="post">
      <div class="user-box">
        <input type="text" name="username" required>
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required>
        <label>Password</label>
      </div>
      <div class="user-box">
        <input type="radio" name="role" value="master">
        <label>Admin</label>
      </div>
      <div class="user-box">
        <input type="radio" name="role" value="storeman">
        <label>User</label>
      </div>

      <a href="login.php" input type="submit" name="submit" value="submit">
        <span></span>
        <span></span>

        <button>Submit</button>
      </a>


    </form>
  </div> -->



</body>

</html>