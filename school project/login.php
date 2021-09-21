<?php include('server.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login Form With Html & Css</title>
  <link rel="stylesheet" href="./style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div>
  
  <form method="post" action="login.php">
          <!--display validation -->
          <?php include('errors.php');?>

    <h4 class="text-warning text-center pt-5">login Page</h4>

    <label>
      <input type="text" class="input" name="username" placeholder="ENTER username"/>
        <div class="line-box">
          <div class="line"></div>
        </div>
    </label>


    <label>
        <input type="password" class="input" name="password" placeholder="ENTER PASSWORD"/>
        <div class="line-box">
          <div class="line"></div>
        </div>
    </label>

  
    <button type="submit" name="login" class="btn">submit</button>
    
    <p>   
      Not yet a member? <a href="register.php"> sign up </a>
    </p>

</form>
</div>
 </body>
</html>