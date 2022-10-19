<?php
session_start();
include("dbcon.php");
if(isset($_POST['email'])){

    $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);
    $sql="SELECT * FROM admin WHERE email='$email' AND password='$password'";
    
    $result=$db->query($sql);
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
       $_SESSION['loggedin']="x";
       $_SESSION['id']=$row["id"];
        echo json_encode(array("status"=>1));
    }
    else{
        echo json_encode(array("status"=>0));
    }
}
?>