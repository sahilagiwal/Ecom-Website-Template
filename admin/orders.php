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
                    <h1 class="h3 mb-0 text-gray-800">Orders</h1>
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
                                <h6 class="m-0 font-weight-bold text-primary">Order List</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush producttable">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Order Id</th>
                                        <th>Customer Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Amount</th>
                                        <th>Order Time</th>
                                        <th>Status</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $query = "SELECT * FROM orders ";

                                    if ($result = $db->query($query)) {

                                        /* fetch associative array */
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr>

                                                <td><?php echo $row['orderid']?></td>
                                                <td><?php echo $row['customername']?></td>
                                                <td><?php echo $row['email']?></td>
                                                <td><?php echo $row['phone']?></td>
                                                <td>$<?php echo $row['amount']?></td>
                                                <td><?php echo $row['time']?></td>
                                                <td><?php echo $row['status']?></td>


                                                <td><a href="vieworderdetails.php?id=<?php echo $row['orderid'];?>" class="btn btn-sm btn-primary">View Details</a>  </td>

                                            </tr>
                                        <?php }}?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                </div>
                <!--Row-->





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
