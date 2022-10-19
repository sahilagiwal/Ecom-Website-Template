
<!DOCTYPE html>
<html lang="zxx">
<?php
if(!isset($_GET['confirmation'])){
    header("location: shop.php");
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
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Order Confirmed!</h2>
                    <div class="breadcrumb__option">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->


    <h4 style='text-align: center;padding: 20%'>Thank you for the order! Your Confirmation number is <?php echo $_GET['confirmation'];

        unset($_SESSION['cart']);
        unset($_SESSION['discount']);
        unset($_SESSION['disctype']);
        unset($_SESSION['totalamount']);

        ?></h4>

<!-- Shoping Cart Section End -->




<!-- Footer Section Begin -->
<?php include("components/footer.html")?>

</body>

</html>