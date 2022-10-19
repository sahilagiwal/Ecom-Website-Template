<?php
if(isset($_GET['id'])){
    session_start();
    foreach ($_SESSION['cart']as $key=>$values){
        if($values['id']==$_GET['id']){
            unset($_SESSION['cart'][$key]);
            header("location: ../checkout.php");
        }
    }
}
?>