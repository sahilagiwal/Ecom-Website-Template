
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




<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Shopping Cart</h2>
                    <div class="breadcrumb__option">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<?php if(!empty($_SESSION['cart'])){

?>
<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                        <tr>
                            <th class="shoping__product">Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(!empty($_SESSION['cart'])){
                            $total=0;
                            foreach ($_SESSION['cart'] as $key=>$values){


                        ?>
                        <tr>
                            <td class="shoping__cart__item">
                                <img height="200px" src="<?php echo $values['image']?>" alt="">
                                <h5><?php echo $values['name']?></h5>
                            </td>
                            <td class="shoping__cart__price">
                                $<?php echo $values['price']?>
                            </td>
                            <td class="shoping__cart__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <a href="functionuser/dquan.php?id=<?php echo $values['id']?>"><span class="dec qtybtn">-</span></a>
                                        <input type="text" value="<?php echo $values['quan']?>">
                                        <a href="functionuser/iquan.php?id=<?php echo $values['id']?>"><span class="inc qtybtn">+</span></a>
                                    </div>
                                </div>
                            </td>
                            <td class="shoping__cart__total">
                                $<?php echo $values['quan']*$values['price']?>
                            </td>
                            <td class="shoping__cart__item__close">
                                <a href="functionuser/deletefromcart.php?id=<?php echo $values['id']?>"><span class="icon_close"></span></a>
                            </td>
                        </tr>
                        <?php
                                $total=$total+$values['quan']*$values['price'];


                            }
                        }
                        else{
                            echo ("0 products");
                        }?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="shop.php?cat=all" class="primary-btn cart-btn">CONTINUE SHOPPING</a>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Discount Codes</h5>
                        <form action="functionuser/discount.php" method="post">
                            <input type="text" placeholder="Enter your coupon code" class="discountcu" name="cupon">

                            <button type="submit" class="site-btn discounbtn">APPLY COUPON</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Subtotal <span>$<?php echo $total;?></span></li>
                        <li>Delivery
                                <span>
                                    <?php
                                    if(isset($_SESSION['disctype'])){
                                        if($_SESSION['disctype']=="freedelivery"){
                                            $delivery=0;
                                            echo "<span style='padding-left: 2px'>$0</span>  <span style='text-decoration: line-through; text-decoration-color: black; text-decoration-thickness: 4px; '>$5</span>";
                                        }
                                        else{
                                            $delivery=5;
                                            echo "<span>$5</span>";
                                        }
                                    }
                                    else{
                                        $delivery=5;
                                        echo "<span>$5</span>";
                                    }

                                    ?>
                                </span>
                        </li>

                            <?php
                            if(isset($_SESSION['disctype'])){
                                if($_SESSION['disctype']=="amount"){

                                   echo "<li>Discount <span>-$".$_SESSION['discount']."</span></li>";
                                }
                                elseif ($_SESSION['disctype']=="percentage"){

                                    echo "<li>Discount <span>-".$_SESSION['discount']."%</span></li>";
                                }
                            }


                            ?>

                        <li>Total <span>$
                                <?php
                                if(isset($_SESSION['disctype'])){
                                    if($_SESSION['disctype']=="amount"){

                                        echo $total+$delivery-$_SESSION['discount'];
                                        $_SESSION['totalamount']=$total+$delivery-$_SESSION['discount'];
                                    }
                                    elseif ($_SESSION['disctype']=="percentage"){
                                            $dics=($total+$delivery)*($_SESSION['discount']/100);
                                        echo $total+$delivery-$dics;
                                        $_SESSION['totalamount']=($total+$delivery)-($total+$delivery)*$_SESSION['discount'];
                                    }
                                    else{

                                        echo $total+$delivery;
                                        $_SESSION['totalamount']=$total+$delivery;
                                    }
                                }
                                else{

                                    echo $total+$delivery;
                                    $_SESSION['totalamount']=$total+$delivery;
                                }

                                ?>
                            </span></li>
                    </ul>
                    <a href="orderpayment.php" class="primary-btn">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } else{
    echo"<h3 style='text-align: center;padding: 20%'>No products added to cart yet!</h3>";
} ?>
<!-- Shoping Cart Section End -->




<!-- Footer Section Begin -->
<?php include("components/footer.html")?>

</body>

</html>