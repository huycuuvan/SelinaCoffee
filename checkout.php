<?php session_start() ?>
<?php include "./includes/header.php"; ?>
<?php include "./includes/db.php" ?>



<body>

    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar start -->
    <?php include "./includes/navbar.php"; ?>

    <!-- Navbar End -->


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Checkout</h1>

    </div>
    <!-- Single Page Header End -->


    <!-- Checkout Page Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="mb-4">Billing details</h1>
            <form action="" method="post">

                <div class="row g-5">
                    <div class="col-md-12 col-lg-6 col-xl-7">


                        <div class="form-item w-100">
                            <label class="form-label my-3">Họ và tên<sup>*</sup></label>
                            <input type="text" class="form-control" name="name">
                        </div>




                        <div class="form-item">
                            <label class="form-label my-3">Địa chỉ <sup>*</sup></label>
                            <input type="text" class="form-control" placeholder="địa chỉ nhận hàng" name="address">
                        </div>



                        <div class="form-item">
                            <label class="form-label my-3">Số điện thoại<sup>*</sup></label>
                            <input type="tel" class="form-control" name="tel">
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Email <sup>*</sup></label>
                            <input type="email" class="form-control" name="email">
                        </div>

                        <div class="form-item my-3">
                            <label for="foo">Phương thức thanh toán</label>
                            <select class="form-control selectpicker" id="foo" name="foo">

                                <option value="one">Transfer</option>
                                <option value="dos">Cash</option>

                            </select>
                        </div>


                        <div class="form-item">
                            <textarea name="text" class="form-control" spellcheck="false" cols="30" rows="11" placeholder="Oreder Notes (Optional)"></textarea>
                        </div>
                        <div class="row g-4 text-center align-items-center justify-content-center pt-4">
                            <input type="submit" class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary" name="order" value="Order">
                        </div>


                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-5">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Products</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                    // $query = "SELECT * FROM cart";
                                    // $get_all_cart = mysqli_query($conn, $query);
                                    // if (!$get_all_cart) {
                                    //     die("falied" . mysqli_error($conn));
                                    // }
                                    // $total_price = 0;
                                    // $price = ".000 đ";
                                    // while ($row = mysqli_fetch_assoc($get_all_cart)) {
                                    //     $cart_name = $row['name'];
                                    //     $cart_img = $row['img'];
                                    //     $cart_price = floatval($row['price']);
                                    //     $cart_id = $row['cart_id'];
                                    //     $cart_qua = $row['quantity'];

                                    //     if ($cart_price !== 0) {
                                    //         $cart_id = $row['cart_id'];
                                    //         $cart_qua = $row['quantity'];

                                    //         // Tính tổng giá bằng cách thêm giá của từng sản phẩm vào biến tổng giá
                                    //         $total_price += $cart_price * $cart_qua;

                                    //         // Hiển thị thông tin sản phẩm trong giỏ hàng

                                    //     } else {
                                    //         // Xử lý trường hợp giá trị không hợp lệ
                                    //         echo "Lỗi: Giá không hợp lệ.<br>";
                                    //     }
                                    // }
                                    $totalQuantity = 0;
                                    $tt = 0;
                                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {

                                        foreach ($_SESSION['cart'] as $item) {
                                            $drink_id = $item[0];
                                            $img = $item[1];
                                            $name = $item[2];
                                            $price = $item[3];
                                            $quantity = $item[4];

                                            $price = floatval(str_replace('đ', '', $price));

                                            $totalQuantity += $quantity;
                                    ?>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center mt-2">
                                                        <img src="img/<?php echo $img ?>" class="img-fluid rounded-circle" style="width: 90px; height: 90px;" alt="">
                                                    </div>
                                                </th>
                                                <td class="py-5"><?php echo $name ?></td>
                                                <td class="py-5"><?php echo $price . ".000 " ?></td>
                                                <td class="py-5"><?php echo $quantity ?></td>
                                                <td class="py-5"><?php echo $price * $quantity ?>.000</td>


                                            </tr>

                                    <?php
                                            $tt += $price * $quantity;
                                        }
                                    }
                                    ?>
                                    <?php
                                    // if (isset($_POST['checkout'])) {

                                    //     $query = "INSERT INTO `orders`( `user_id`, `total`, `status`) VALUES (1,$tt,'Đang xử lí')";
                                    //     $insert_order = mysqli_query($conn, $query);
                                    //     while ($row = mysqli_fetch_array($insert_order)) {
                                    //         $order_id = $row['order_id'];
                                    //     }
                                    // }
                                    if (isset($_POST['order'])) {
                                        $name = $_POST['name'];
                                        $address = $_POST['address'];
                                        $tel = $_POST['tel'];
                                        $email = $_POST['email'];
                                        $pttt = $_POST['pttt'];
                                        $mdh = "Mntks" . rand(0, 9999);
                                        $total = $tt;
                                        $date = date('Y-m-d H:m:s');

                                        // $query = "INSERT INTO `order_detail`(`id`, `order_id`, `user_id`, `name`, `address`, `phone`, `email`, `pttt`, `note`, `product_id`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')";
                                        $order_query = mysqli_query($conn, $query);
                                    }
                                    ?>
                                    <tr>
                                        <td class="py-5"></td>
                                        <td class="py-5"></td>
                                        <td class="py-5">
                                            <p class="mb-0 text-dark py-3">Total</p>
                                        </td>
                                        <td class="py-5">
                                            <div class="py-3 border-bottom border-top">
                                                <p class="mb-0 text-dark"><?php echo $tt   ?>.000</p>
                                            </div>
                                        </td>


                                    </tr>



                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Checkout Page End -->


    <!-- Footer Start -->
    <?php include "./includes/footer.php" ?>

    <!-- Footer End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>



</body>

</html>