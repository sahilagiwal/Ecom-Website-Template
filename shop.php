<!DOCTYPE html>
<html lang="zxx">
<?php
if(!isset($_GET['cat'])){
    header("location: index.php");
}

?>
<head>
    <?php include("components/head.html") ?>
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>



<!-- Header Section Begin -->
<?php include("components/nav.html")?>
<!-- Header Section End -->



<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/Penn.png"">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2><?php
                        $ct=$_GET['cat'];
                        if($ct=="all"){
                            echo "All Products";
                        }
                        else{
                            echo $ct;
                        }
                        ?></h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<!--Products -->
<section class="product spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-7">


                <div class="row">
                    <?php
                    include "admin/functions/dbcon.php";
                    $query="";
                    if($ct=="all"){
                        $query="SELECT * from product";
                    }
                    else{
                        $query="SELECT * from product where category='$ct'";
                    }
                    if ($result = $db->query($query)) {

                    /* fetch associative array */
                    while ($row = $result->fetch_assoc()) {
                    ?>


                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="product__item" id="<?php echo $row['id'];?>">
                            <input class="productid" value="<?php echo $row['id'];?>" type="hidden">
                            <input class="itemimage" value="<?php echo "admin/upload/".$row['image'];?>" type="hidden">
                            <div class="product__item__pic set-bg" data-setbg="<?php echo "admin/upload/".$row['image'];?>" >
                                <ul class="product__item__pic__hover">

                                    <li><a class="addtocart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6 class="itemname"><a href="#"><?php echo $row['name'];?></a></h6>
                                <h5 class="itemcost">$<?php echo $row['sc'];?></h5>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>





                </div>

            </div>
        </div>
    </div>
</section>
<!--Products End -->




<!-- Footer Section Begin -->
<?php include("components/footer.html")?>

</body>

</html>