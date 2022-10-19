<?php include("functions/dbcon.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("components/head.php");?>

</head>

<body id="page-top">
<div id="wrapper">
    <!-- Sidebar -->
    <?php include("components/sidebar.html")?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- TopBar -->
            <?php include("components/topbar.php") ?>
            <!-- Topbar -->

            <!-- Container Fluid-->
            <div class="container-fluid" id="container-wrapper">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Discount</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
                <form action="functions/adddiscount.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Form Basic -->
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Discount</h6>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Code</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                               placeholder="Enter Coupon Code" name="code">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Type Of Discount</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="type">

                                            <option>freedelivery</option>
                                            <option>amount</option>
                                            <option>percentage</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Amount</label>
                                        <input type="int" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                               placeholder="Enter amount(Ignore for Free Delivery)" name="amount">
                                    </div>


                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>


                <!-- Modal Logout -->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to logout?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                <a href="login.html" class="btn btn-primary">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!---Container Fluid-->
        </div>
        <!-- Footer -->
        <?php include("components/footer.html")?>
        <!-- Footer -->
</body>

</html>
