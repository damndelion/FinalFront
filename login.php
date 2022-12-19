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
    $password = $_POST['password'];

    $sql = "select * from final where email = '".$email."' AND password = '".$password."' limit 1";

    $result = mysqli_query($link, $sql);

    if(mysqli_num_rows($result) == 1){
        echo "Logged IN!";
        header('Location: index.html');
        echo "popup()"
        exit;
    }
    else{
        echo "Wrong data!";
    }
}
?>