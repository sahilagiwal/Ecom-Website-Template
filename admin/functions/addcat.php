<?php

include("dbcon.php");
if(isset($_POST['catgeory'])){


    $cat=filter_var($_POST['catgeory'],FILTER_SANITIZE_STRING);
    $sql="INSERT into category(category) values ('$cat')";

    $result=$db->query($sql);
    if($result){

        echo json_encode(array("status"=>1));
    }
    else{
        echo json_encode(array("status"=>0));
    }
}
?>