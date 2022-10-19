<?php

include("dbcon.php");
if(isset($_POST['status'])){


    $status=filter_var($_POST['status'],FILTER_SANITIZE_STRING);
    $orderid=filter_var($_POST['orderid'],FILTER_SANITIZE_STRING);
    $sql="UPDATE orders SET status ='$status' where orderid='$orderid'";

    $result=$db->query($sql);
    if($result){

        echo json_encode(array("status"=>1));
    }
    else{
        echo json_encode(array("status"=>0));
    }
}
?>