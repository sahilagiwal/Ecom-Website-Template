<?php

include("dbcon.php");
if(isset($_POST['brand'])){


    $brand=filter_var($_POST['brand'],FILTER_SANITIZE_STRING);
    $sql="INSERT into brand(brand) values ('$brand')";

    $result=$db->query($sql);
    if($result){

        echo json_encode(array("status"=>1));
    }
    else{
        echo json_encode(array("status"=>0));
    }
}
?>