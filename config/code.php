<?php
require 'function.php';


if(isset($_POST['register'])){

$firstname = validate($_POST['firstname']);
$lastname = validate($_POST['lastname']);
$email = validate($_POST['email']);
$password = validate($_POST['password']);
$repeatpassword = validate($_POST['repeatpassword']);

$sql = "SELECT * FROM user where username = '$email'";
$result = $conn->query($sql) ;

if($result->num_rows <= 0 ){
    if ($password == $repeatpassword){

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $user = "INSERT INTO user (name,lastname,username,password)
    VALUES ('$firstname','$lastname','$email','$password')";

    $result = mysqli_query($conn, $user);
       if($result){
        redirect('../Portfolio_Dashboard/login.php', 'Account Successfully Creted');
       }else{
                redirect('../Portfolio_Dashboard/register.php', 'Account failed to create');

        }
    }else
    redirect('../Portfolio_Dashboard/register.php', 'Password didn\'t match');
}else{
        redirect('../Portfolio_Dashboard/register.php', 'Username already Taken');
    }

}


if(isset($_POST['login'])){
$username = validate($_POST['username']);
$password = validate($_POST['password']);

$sql = "SELECT * FROM user where username = '$username'";
$result = $conn->query($sql) ;

if($result->num_rows > 0 ){
    $row = $result-> fetch_assoc();
    if(password_verify($password, $row['password'])){
        $_SESSION['username'] = $row['username'];
        $id = $row['id'];

        header('Location: ../Portfolio_Dashboard/index.php');
        exit();
    } else {
    echo "<script>alert('Incorrect password'); window.location.href='../Portfolio_Dashboard/login.php';</script>";
        exit();
    }
}else{
    echo "<script>alert('Incorrect ussername or password'); window.location.href='../Portfolio_Dashboard/login.php';</script>";
    exit();

    }
} 





















?>