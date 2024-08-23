<?php

include 'connect.php';

if(isset($_POST['signUP']))
$firstName=$_POST['firstname'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$password=$_POST['password'];
$password=md5($password);

$checkEmail="SELECT * FROM users WHERE email='$email'";
$result=$conn->query($checkEmail);
if($result->num_rows>0){
    echo "Email already exist" ;
} else {
    $insertQuery="INSERT INTO users(firstname,lastname,email,password)
    VALUES ('$firstName','$lastName','$email',$password)";
    if($conn->query($insertQuery) == TRUE) {
        header("Location: index.php");
    } else {
        echo "ERRor".$conn->error ;
    }
}
if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
}
?>