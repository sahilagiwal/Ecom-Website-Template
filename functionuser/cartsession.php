<?php

session_start();

if(isset($_POST['id'])){
    if(isset($_SESSION['cart']))
    {
    $productid=array_column($_SESSION['cart'],'id');
    if(!in_array($_POST['id'],$productid)){
        $count=count($_SESSION['cart']);
        $items=array(
            'id'=>$_POST['id'],
            'name'=>$_POST['name'],
            'price'=>$_POST['price'],
            'quan'=>1,
            'image'=>$_POST['image'],
        );
        $_SESSION['cart'][$count]=$items;
    }
    else{

        for($i=0;$i<count($_SESSION['cart']);$i++){
            if($_SESSION['cart'][$i]['id']==$_POST['id']){
                $quantity=$_SESSION['cart'][$i]['quan'];
                $_SESSION['cart'][$i]['quan']=$quantity+1;
            }
        }

    }
    }

    else{
        $items=array(
            'id'=>$_POST['id'],
            'name'=>$_POST['name'],
            'price'=>$_POST['price'],
            'quan'=>1,
            'image'=>$_POST['image'],
        );
        $_SESSION['cart'][0]=$items;
    }
    print_r( $_SESSION['cart']);
}
?>