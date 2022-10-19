
<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include("components/head.html") ?>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');


    .container {
        margin-top: 50px;
        margin-bottom: 50px
    }

    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 0.10rem
    }

    .card-header:first-child {
        border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
    }

    .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: #fff;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1)
    }

    .track {
        position: relative;
        background-color: #ddd;
        height: 7px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 60px;
        margin-top: 50px
    }

    .track .step {
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        width: 25%;
        margin-top: -18px;
        text-align: center;
        position: relative
    }

    .track .step.active:before {
        background: #7fad39
    }

    .track .step::before {
        height: 7px;
        position: absolute;
        content: "";
        width: 100%;
        left: 0;
        top: 18px
    }

    .track .step.active .icon {
        background: #7fad39;
        color: #fff
    }

    .track .icon {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        position: relative;
        border-radius: 100%;
        background: #ddd
    }

    .track .step.active .text {
        font-weight: 400;
        color: #000
    }

    .track .text {
        display: block;
        margin-top: 7px
    }

    .itemside {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%
    }

    .itemside .aside {
        position: relative;
        -ms-flex-negative: 0;
        flex-shrink: 0
    }

    .img-sm {
        width: 80px;
        height: 80px;
        padding: 7px
    }

    ul.row,
    ul.row-sm {
        list-style: none;
        padding: 0
    }

    .itemside .info {
        padding-left: 15px;
        padding-right: 7px
    }

    .itemside .title {
        display: block;
        margin-bottom: 5px;
        color: #212529
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem
    }

    .btn-warning {
        color: #ffffff;
        background-color: #7fad39;
        border-color: #7fad39;
        border-radius: 1px
    }

    .btn-warning:hover {
        color: #ffffff;
        background-color: #7fad39;
        border-color: #7fad39;
        border-radius: 1px
    }
</style>
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
                    <h2>Track My Order</h2>
                    <div class="breadcrumb__option">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div  style="margin: 4rem;" id="areaft">
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="emailft" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Order Number</label>
            <input type="email" class="form-control" id="oft">
        </div>

        <button type="submit" class="site-btn" id="trackbtn">Submit</button>
    </form>

</div>




<!-- Footer Section Begin -->
<?php include("components/footer.html")?>
<script src="js/track.js"></script>
</body>

</html>