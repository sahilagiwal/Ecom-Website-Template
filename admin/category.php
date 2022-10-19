
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
                    <h1 class="h3 mb-0 text-gray-800">Category</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addbrandname"
                        id="#modalCenter">Add Category name</button>




                <!--Modal Category-->
                <div class="modal fade" id="addbrandname" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabelLogout">Category Name</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category Name</label>
                                        <input type="text" class="form-control bname" id="exampleInputEmail1" aria-describedby="emailHelp"
                                               placeholder="Enter Category name" name="name">
                                    </div>
                                    <button type="button" class="btn btn-primary btnbrandadd" data-toggle="modal" data-target="#exampleModalCenter"
                                            id="#modalCenter">Add</button>
                                </form>
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
        <script src="js/cat.js"></script>
        <!-- Footer -->

</body>

</html>
