<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', '12345');
define('DB_NAME', 'web');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['email'])){
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $password2 = $_POST['password_2'];
    if($password2 != $password) {
        echo("Password mismatch");
        exit();
    }

    $sql = "insert into final(`id`, `email`, `age`, `gender`, `password`) values (NULL, '".$email."', '".$age."', '".$gender."', '".$password."')";

    $result = mysqli_query($link, $sql);

    if($result){
        echo "Success!";
        header('Location: login.html');
        exit();
    }
    else{
        echo "Wrong!";
    }
}
?>