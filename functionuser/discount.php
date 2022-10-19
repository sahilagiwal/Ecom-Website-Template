<?php
session_start();
include "../admin/functions/dbcon.php";
if(isset($_POST['cupon'])){
    $coupon =$_POST['cupon'];
    $sql="select * from discount where code='$coupon'";
    $result=$db->query($sql);
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
        if(isset($_SESSION['totalamount'])){
            if($row['type']=="amount"){
                $_SESSION['discount']=$row['amount'];
                $_SESSION['disctype']=$row['type'];
            }
            else if($row['type']=="freedelivery"){
                $_SESSION['discount']=$row['amount'];
                $_SESSION['disctype']=$row['type'];
            }
            else if($row['type']=="percentage"){
                $_SESSION['discount']=$row['amount'];
                $_SESSION['disctype']=$row['type'];
            }
        }
        else{
            echo "No Product added yet";
        }
    }
    else{
        echo "0";
    }
}
else{
    echo "error";
}
?>