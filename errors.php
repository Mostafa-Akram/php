
<?php

$data = $_POST;

if (empty($data['username']) ||
    empty($data['password_1']) ||
    empty($data['email']) ||
    empty($data['password_2'])) {
    
    die('Please fill all required fields!');
}

if ($data['password_1'] !== $data['password_2']) {
   die('Password and Confirm password should match!');   
}
?>