<?php include "./includes/admin_header.php" ?>
<?php include "../includes/db.php" ?>

<body>

    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div id="wrapper">

        <!-- Navigation -->
        <?php include "./includes/admin_navbar.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to admin
                            <small>Author</small>
                        </h1>

                        <?php
                        if (isset($_GET['source'])) {

                            $source = $_GET['source'];
                        } else {
                            $source = '';
                        }


                        switch ($source) {

                            case 'add_categories':
                                include "includes/add_categories.php";
                                break;
                            case 'edit_categories':
                                include "includes/edit_categories.php";


                                break;

                            default:
                                include "includes/view_all_cate.php";
                        }
                        ?>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>

    <!-- <?php include "./includes/footer.php" ?> -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
</body>