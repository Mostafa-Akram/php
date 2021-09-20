<?php include('server.php');?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form With Html & Css</title>
  <link rel="stylesheet" href="./style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div>
  
  <form method="post" action="register.php">
    
    <?php include('errors.php'); ?>

    <h4 class="text-warning text-center pt-5">Registration Page</h4>

   
    <label>
        <input type="text" class="input" name="username" placeholder="ENTER USERNAME"/>
        <div class="line-box">
          <div class="line"></div>
        </div>
    </label>

    <label>
      <input type="text" class="input" name="email" placeholder="ENTER EMAIL"/>
        <div class="line-box">
          <div class="line"></div>
        </div>
    </label>

    <label>
        <input type="password" class="input" name="password_1" placeholder="ENTER PASSWORD"/>
        <div class="line-box">
          <div class="line"></div>
        </div>
    </label>

    <label>
      <input type="password" class="input" name="password_2" placeholder="CONFIRM PASSWORD"/>
      <div class="line-box">
        <div class="line"></div>
      </div>
    </label>

    <button type="submit" name="register" class="btn">submit</button>

    <p>   
      Already member? <a href="login.php"> sign in </a>
    </p>

  </form>
</div>
 </body>
</html>