<!DOCTYPE html>
<html lang="zxx">

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



    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
             <div class="section-title">
                        <h2>Brands We Offer</h2>
                    </div>
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="assets/brand/haldiram.png">
                            <h5><a href="#">Haldiram</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="assets/brand/bikano.png">
                            <h5><a href="#">Bikano</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="assets/brand/royal.png">
                            <h5><a href="#">Royal</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="assets/brand/swad.png">
                            <h5><a href="#">Swad</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="assets/brand/deep.png">
                            <h5><a href="#">Deep</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="assets/brand/amul.png">
                            <h5><a href="#">Amul</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="assets/brand/mdh.png">
                            <h5><a href="#">MDH</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="assets/brand/shan.png">
                            <h5><a href="#">Shan</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>

                </div>
            </div>
            <div class="col-lg-12 col-md-7">


                <div class="row">

                <?php
                include "admin/functions/dbcon.php";

                    $query="SELECT * from product limit 10";


                if ($result = $db->query($query)) {

                /* fetch associative array */
                while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="featured__item">
                        <input class="productid" value="<?php echo $row['id'];?>" type="hidden">
                        <input class="itemimage" value="<?php echo "admin/upload/".$row['image'];?>" type="hidden">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo "admin/upload/".$row['image'];?>" >
                            <ul class="featured__item__pic__hover">
                                <li><a class="addtocart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6 class="itemname"><a href="#"><?php echo $row['name'];?></a></h6>
                            <h5 class="itemcost">$<?php echo $row['sc'];?></h5>
                        </div>
                    </div>
                </div>
                <?php }}?>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
<!--    <div class="banner">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-6 col-md-6 col-sm-6">-->
<!--                    <div class="banner__pic">-->
<!--                        <img src="img/banner/banner-1.jpg" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-6 col-md-6 col-sm-6">-->
<!--                    <div class="banner__pic">-->
<!--                        <img src="img/banner/banner-2.jpg" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
<!--    <section class="latest-product spad">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-4 col-md-6">-->
<!--                    <div class="latest-product__text">-->
<!--                        <h4>Latest Products</h4>-->
<!--                        <div class="latest-product__slider owl-carousel">-->
<!--                            <div class="latest-prdouct__slider__item">-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-1.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-2.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-3.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <div class="latest-prdouct__slider__item">-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-1.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-2.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-3.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-md-6">-->
<!--                    <div class="latest-product__text">-->
<!--                        <h4>Top Rated Products</h4>-->
<!--                        <div class="latest-product__slider owl-carousel">-->
<!--                            <div class="latest-prdouct__slider__item">-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-1.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-2.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-3.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <div class="latest-prdouct__slider__item">-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-1.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-2.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-3.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-md-6">-->
<!--                    <div class="latest-product__text">-->
<!--                        <h4>Review Products</h4>-->
<!--                        <div class="latest-product__slider owl-carousel">-->
<!--                            <div class="latest-prdouct__slider__item">-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-1.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-2.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-3.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <div class="latest-prdouct__slider__item">-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-1.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-2.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                                <a href="#" class="latest-product__item">-->
<!--                                    <div class="latest-product__item__pic">-->
<!--                                        <img src="img/latest-product/lp-3.jpg" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="latest-product__item__text">-->
<!--                                        <h6>Crab Pool Security</h6>-->
<!--                                        <span>$30.00</span>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <!-- Latest Product Section End -->

   

    <!-- Footer Section Begin -->
   <?php include("components/footer.html")?>

</body>

</html>