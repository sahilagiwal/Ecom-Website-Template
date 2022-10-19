<?php
include ("adminuser.php");
$name=$_POST['name'];
$bc=$_POST['bc'];
$sc=$_POST['sc'];
$brand=$_POST['brand'];
$cat=$_POST['cat'];
$inv=$_POST['inv'];
$id=$_POST['id'];
$oldimage=$_POST['oldimage'];


if(basename($_FILES["image"]["name"])!=null){
    unlink("../upload/".$oldimage);
    include ("fileupload.php");
    $addp=new editproduct();
    $addp->brand=$brand;
    $addp->bc=$bc;
    $addp->id=$id;
    $addp->sc=$sc;
    $addp->cat=$cat;
    $addp->name=$name;
    $addp->inv=$inv;
    $addp->imageloc=$imagename;
    $return=$addp->updateProduct();
    if($return==1){
        header("location: ../products.php");
    }
    else{
       echo $return;
    }
}
else{
    $addp=new editproduct();
    $addp->brand=$brand;
    $addp->bc=$bc;
    $addp->sc=$sc;
    $addp->id=$id;
    $addp->cat=$cat;
    $addp->name=$name;
    $addp->inv=$inv;
    $addp->imageloc=$oldimage;
    $return=$addp->updateProduct();
    if($return==1){
        header("location: ../products.php");
    }
    else{
        echo $return;
    }
}




?>