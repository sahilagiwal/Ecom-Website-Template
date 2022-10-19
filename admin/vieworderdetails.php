<?php include("functions/dbcon.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("components/head.php")?>
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
                    <h1 class="h3 mb-0 text-gray-800">Order Number <?php echo $_GET['id']?></h1>
                    <h1 style="display: none" class="orderid"><?php echo $_GET['id']?></h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>

                <br>
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <!-- Simple Tables -->
                        <div class="card">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Product List Needed</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush producttable">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Image</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $orderi=$_GET['id'];
                                    $query = "SELECT * FROM productfororder where orderid='$orderi'";

                                    if ($result = $db->query($query)) {

                                        /* fetch associative array */
                                        while ($row = $result->fetch_assoc()) {
                                            $imgsrc="http://localhost/pennhalal/".$row['image'];
                                            ?>
                                            <tr>

                                                <td><?php echo $row['name']?></td>
                                                <td><?php echo $row['quantity']?></td>
                                                <td><img style="height: 100px" src="<?php echo $imgsrc?>"></td>




                                            </tr>
                                        <?php }}
                                    else{

                                    }?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                </div>
                <!--Row-->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addbrandname"
                        id="#modalCenter">Update Order Status</button>




                <!--Modal brand-->
                <div class="modal fade" id="addbrandname" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabelLogout">Order Status</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Type Of Discount</label>
                                    <select class="form-control status" id="exampleFormControlSelect1" name="status">

                                        <option>In Progress</option>
                                        <option>Confirmed</option>
                                        <option>Out For Delivery</option>
                                        <option>Delivered</option>

                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary update">Update</button>
                            </div>

                        </div>
                    </div>
                </div>





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
        <script src="js/orderstatus.js"></script>
        <!-- Footer -->
</body>

</html>
