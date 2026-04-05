<?php
session_start();
require 'db_connect.php';


function validate($inputData)
{
    global $conn;
    $validatedData = mysqli_real_escape_string($conn, $inputData);
    return trim($validatedData);
}


function redirect ($url, $status)
{  
   $_SESSION['status'] = $status;
   header('Location: '.$url);
   exit(0);
}

function alertMessage()
{ 
    if(isset($_SESSION['status']))
    {
        echo '<div class="alert alert-success">
        <h6>'.$_SESSION['status'].'</h6>
        </div>';
        unset($_SESSION['status']);
    }
}

function checkId($paramType){

    if(isset($_GET[$paramType]))
    {
        if($_GET[$paramType] != null){
            return $_GET[$paramType];
        }else{
            return 'Id Not Found';
        }
    }else{
        return 'No Id Given';
    }
}

function GetResume($table){
    global $conn;

    $sql = "SELECT * FROM $table "; 

    return mysqli_query($conn, $sql);


}
?>