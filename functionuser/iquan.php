<?php
if(isset($_GET['id'])){
    session_start();
    for($i=0;$i<count($_SESSION['cart']);$i++){
        if($_SESSION['cart'][$i]['id']==$_GET['id']){
            $quantity=$_SESSION['cart'][$i]['quan'];
            $_SESSION['cart'][$i]['quan']=$quantity+1;
            header("location: ../checkout.php");
        }
    }
}
?>