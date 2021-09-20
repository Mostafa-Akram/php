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
  
  <form>
    <h4 class="text-warning text-center pt-5">login Page</h4>

    <label>
      <input type="text" class="input" name="email" placeholder="ENTER EMAIL"/>
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

  
    <button type="submit">submit</button>
    
    <p>   
      Not yet a member? <a href="register.php"> sign up </a>
    </p>

</form>
</div>
 </body>
</html>