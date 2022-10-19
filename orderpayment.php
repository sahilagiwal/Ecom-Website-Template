<!DOCTYPE html>

<html lang="zxx">

<head>

    <?php include("components/head.html") ?>
    <script src="https://js.stripe.com/v3/"></script>

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
                    <h2>Checkout</h2>
                    <div class="breadcrumb__option">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">

        <div class="checkout__form">
            <h4>Billing Details</h4>
            <form action="functionuser/create-checkout-session.php" method="post">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>First Name<span>*</span></p>
                                    <input type="text" required class="req" name="fname">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Last Name<span>*</span></p>
                                    <input type="text" required class="req"  name="lname">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input type="text" placeholder="Street Address" class="checkout__input__add req" required  name="amain">
                            <input type="text" placeholder="Apartment, suite, unite ect (optional)" class="a2"  name="asecond">
                        </div>
                        <div class="checkout__input">
                            <p>Town/City</p>
                            <input type="text" value="State College" readonly  name="state">
                        </div>
                        <div class="checkout__input">
                            <p>Country/State</p>
                            <input type="text" value="United states of America" readonly  name="country">
                        </div>
                        <div class="checkout__input">
                            <p>Postcode / ZIP<span>*</span></p>
                            <select  name="zip" required>

                                <option value="16801">16801</option>
                                <option value="16802">16802</option>
                                <option value="16803">16803</option>
                                <option value="16804">16804</option>
                                <option value="16805">16805</option>

                            </select>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="text" required class="req"  name="phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text" required class="req email"  name="email">
                                </div>
                            </div>
                        </div>

                        <div class="checkout__input">
                            <p>Order notes</p>
                            <input type="text"
                                   placeholder="Notes about your order, e.g. special notes for delivery." class="notes"  name="notes">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Your Order</h4>
                            <div class="checkout__order__products">Products <span>Total</span></div>
                            <ul>
                                <?php

                                foreach ($_SESSION['cart'] as $key=>$values){
                                ?>
                                <li><?php echo $values['name']?> x <?php echo $values['quan']?><span>$<?php echo $values['price']?></span></li>
                                <?php } ?>
                            </ul>
                            <p>The amount below includes all discounts, delivery charges</p>
                            <div class="checkout__order__total">Total <span>$<?php echo $_SESSION['totalamount'];?></span></div>
                            <script async
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="pk_test_51KSIrbJZQccgy517TQqBYY6Qlb4ah9KD7YLiSt0o9caGO2ylKsiuQn7GkHKcmkOZIefmnyrlJ70HEMuM7kocvsDG00nJ5JuYA1"
                                    data-amount='<?php echo $_SESSION['totalamount']*100?>'
                                    data-name="Penn Halal"
                                    data-currency="usd"

                            >
                            </script>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->


<!-- Footer Section Begin -->
<?php include("components/footer.html")?>

</body>
<script async>
    document.querySelector(".stripe-button-el").disabled = true;


const inputs=document.querySelectorAll(".req");
    for (const input of inputs) {
        input.addEventListener(`input`, () => {
            for (const input of inputs) {
                console.log(input.value);
                if (input.value=="") {
                    document.querySelector(".stripe-button-el").disabled = true;

                    break;
                } else {
                    document.querySelector(".stripe-button-el").disabled = false;
                }
            }
        });
    }
    let email=document.querySelector(".email");
    email.oninput=function (){
        document.querySelector(".stripe-button-el").setAttribute("data-email",email.value)
    }
</script>
</html>