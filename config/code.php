<?php
require 'function.php';


if(isset($_POST['register'])){
$firstname = ucfirst(strtolower(validate($_POST['firstname'])));
$lastname = ucfirst(strtolower(validate($_POST['lastname'])));
$email = validate($_POST['email']);
$password = validate($_POST['password']);
$repeatpassword = validate($_POST['repeatpassword']);
$name = ($firstname." ".$lastname);

$sql = "SELECT * FROM user where username = '$email'";
$result = $conn->query($sql) ;

if($result->num_rows <= 0 ){
    if ($password == $repeatpassword){

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $user = "INSERT INTO user (name,lastname,username,password)
    VALUES ('$firstname','$lastname','$email','$password')";
    $result = mysqli_query($conn, $user);


    $profile = "INSERT INTO profile (username,name)
    VALUES ('$email','$name')";
    $profileresult = mysqli_query($conn, $profile);


       if($result && $profileresult){
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


    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

if($result->num_rows > 0 ){
    $row = $result-> fetch_assoc();
    if(password_verify($password, $row['password'])){
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];

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


if(isset($_POST['profile'])){
    $username = validate($_POST['username']);
    $support = validate($_POST['support']);
    $tagline = validate($_POST['tagline']);
    $heading = validate($_POST['heading']);
    $bio = validate($_POST['bio']);
    $profile = validate($_POST['support']);
    $instagram = validate($_POST['instagram']);
    $linkin = validate($_POST['linkin']);
    $github = validate($_POST['github']);

    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        $file_name = $_FILES['image']['name'];
        $file_temp = $_FILES['image']['tmp_name'];
        $folder = __DIR__ . '/../Portfolio/assets/' . $file_name;

        if(move_uploaded_file($file_temp, $folder)){
            $profile = "UPDATE profile
            SET 
            tagline='$tagline',
            support='$support',
            heading='$heading',
            bio='$bio',
            profile='$file_name',
            ig_link='$instagram',
            in_link='$linkin',
            github='$github' 
            WHERE username = '$username'";
            $result = mysqli_query($conn, $profile);
            if($result){
                echo"<script>alert('Profile Successfully Updated'); window.location.href='../Portfolio_Dashboard/Profile.php';</script>";
                exit; 

            }else{
                echo "<script>alert('Someting went wrong'); window.location.href='../Portfolio_Dashboard/Profile.php';</script>";
                exit; 
            }
        }else{
            exit; 
        }
    }else{
            header('Location: ../Portfolio_Dashboard/profile.php');
    }

}


















?>