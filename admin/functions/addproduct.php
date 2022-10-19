<?php
include ("adminuser.php");
$name=$_POST['name'];
$bc=$_POST['bc'];
$sc=$_POST['sc'];
$brand=$_POST['brand'];
$cat=$_POST['cat'];
$inv=$_POST['inv'];
include ("fileupload.php");
$addp=new addproducts();
$addp->brand=$brand;
$addp->bc=$bc;
$addp->sc=$sc;
$addp->cat=$cat;
$addp->name=$name;
$addp->inv=$inv;
$addp->imageloc=$imagename;
$return=$addp->addProduct();
if($return==1){
    header("location: ../addproduct.php");
}
else{
    echo $return;
}


?>