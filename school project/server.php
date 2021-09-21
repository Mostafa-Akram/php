<?php

session_start();

$username = "";
$email = "";
$errors =array();

//connect to DB

$db = mysqli_connect("localhost" , "root" , "" , "registration" );

// if the register btn clicked 

if(isset($_POST['register'])) 
{
    $username =   ($_POST['username']);
    $email    =  ($_POST['email']);
    $password_1 =  ($_POST['password_1']);
    $password_2 =  ($_POST['password_2']);

    if (empty($username)) {
        array_push($errors, "username is required");
    }

    if(empty($email))
    {
        array_push($errors,"user email is required");
    }

    if(empty($password_1))
    {
        array_push($errors,"user password is required");
    }

    if($password_1 != $password_2)
    {
        array_push($errors,"the 2 passwords do not match");
    }
    
    if (count($errors) == 0)
    {
        $password = md5($password_1);  // encrypt password before sting in DB (security)
        $sql = "INSERT INTO users (username, email, password)
                VALUES ('$username','$email','$password')";
                mysqli_query($db,$sql);
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "you are login";
                header('location: home.php');
    }


}
// login

if(isset($_POST['login']))
{

    $username =  ($_POST['username']);
    $password =  ($_POST['password']);

    if(empty($username))
    {
        array_push($errors,"username is required");
    }

    if(empty($password))
    {
        array_push($errors,"user password is required");
    }

    if(count($errors) == 0 )
    {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result =  mysqli_query($db,$query);
        
    if(mysqli_num_rows($result) == 1)
    {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "you are login";
        header('location: home.php');

    }else
    {
        array_push($errors, "wrong username or password");
    }
    }
    




}



?>