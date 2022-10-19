<?php

include("dbcon.php");
if(isset($_POST['code'])){
    $code=$_POST['code'];
    $type=$_POST['type'];
    $amount=$_POST['amount'];

    if($type=="freedelivery"){
        $amount=5;
    }
    else{
        $amount=$_POST['amount'];
    }
    echo $code."<br>".$type."<br>".$amount;

    $sql="INSERT into discount (code ,type,amount) VALUES ('$code','$type','$amount')";

    $result=$db->query($sql);
    if($result){

        header("location: ../adddiscount.php");
    }
    else{
        echo $db->error;
    }
}
?>