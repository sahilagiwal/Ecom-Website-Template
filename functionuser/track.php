<?php
include "../admin/functions/dbcon.php";
if(isset($_POST['email'])){
$email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
$ordernum=filter_var($_POST['onum'],FILTER_SANITIZE_STRING);
$sql="SELECT * FROM orders WHERE email='$email' AND orderid='$ordernum'";

$result=$db->query($sql);
if($result->num_rows>0) {
    $row = $result->fetch_assoc();
    $stat = $row['status'];
    $od="";
    if($stat=="In Progress"){
        $od="<div class='step active'> <span class='icon'> <i class='fa fa-check'></i> </span> <span class='text'>In Progress</span> </div>
                <div class='step'> <span class='icon'> <i class='fa fa-check'></i> </span> <span class='text'>Confirmed</span> </div>
                <div class='step'> <span class='icon'> <i class='fa fa-user'></i> </span> <span class='text'>Out for Delivery</span> </div>
                <div class='step'> <span class='icon'> <i class='fa fa-truck'></i> </span> <span class='text'>Delivered</span> </div>";
    }
    else if($stat=="Confirmed"){
        $od="<div class='step active'> <span class='icon'> <i class='fa fa-check'></i> </span> <span class='text'>In Progress</span> </div>
                <div class='step active'> <span class='icon'> <i class='fa fa-check'></i> </span> <span class='text'>Confirmed</span> </div>
                <div class='step'> <span class='icon'> <i class='fa fa-user'></i> </span> <span class='text'>Out for Delivery</span> </div>
                <div class='step'> <span class='icon'> <i class='fa fa-truck'></i> </span> <span class='text'>Delivered</span> </div>";
    }
    else if($stat=="Out For Delivery"){
        $od="<div class='step active'> <span class='icon'> <i class='fa fa-check'></i> </span> <span class='text'>In Progress</span> </div>
                <div class='step active'> <span class='icon'> <i class='fa fa-check'></i> </span> <span class='text'>Confirmed</span> </div>
                <div class='step active'> <span class='icon'> <i class='fa fa-user'></i> </span> <span class='text'>Out for Delivery</span> </div>
                <div class='step'> <span class='icon'> <i class='fa fa-truck'></i> </span> <span class='text'>Delivered</span> </div>";
    }
    else{
        $od="<div class='step active'> <span class='icon'> <i class='fa fa-check'></i> </span> <span class='text'>In Progress</span> </div>
                <div class='step active'> <span class='icon'> <i class='fa fa-check'></i> </span> <span class='text'>Confirmed</span> </div>
                <div class='step active'> <span class='icon'> <i class='fa fa-user'></i> </span> <span class='text'>Out for Delivery</span> </div>
                <div class='step active'> <span class='icon'> <i class='fa fa-truck'></i> </span> <span class='text'>Delivered</span> </div>";
    }
    echo "<div class='container'>
    <article class='card'>
        <header class='card-header'> My Orders / Tracking </header>
        <div class='card-body'>
            <h6>Order ID: $ordernum</h6>
            <article class='card'>
                <div class='card-body row'>
                    
                    
                    <div class='col'> <strong>Status:</strong> <br> $stat</div>
                  
                </div>
            </article>
            <div class='track'>".$od."
            
                
            </div>
            <hr>
            
            <hr> <a href=''#' class='btn btn-warning' data-abc='true'> <i class='fa fa-chevron-left'></i> Back to orders</a>
        </div>
    </article>
</div>";
    }
else{
    echo "<h3>No Order Found</h3>";
}

}
?>


