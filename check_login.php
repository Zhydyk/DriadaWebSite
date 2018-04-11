<?php
session_start(); 
$username = $_POST['username']; 
$password = $_POST['password']; 
$msg ='';

if(isset($username, $password)) {
    ob_start();
    include('config.php'); 
    $myusername = stripslashes($username);
    $mypassword = stripslashes($password);
    $result=$db->query("SELECT * FROM login WHERE username='$myusername' and password=md5('$mypassword')");
    
    $count=$result->num_rows;
    
    if($count==1){
        $_SESSION['name']= $myusername;
        header("location:admin.php");
    }
    else {
        $msg = "Wrong Username or Password. Please retry";
        header("location:login.php?msg=$msg");
    }
    ob_end_flush();
}
else {
    header("location:login.php?msg=Please enter some username and password");
}
?>