<body>




    <!-- Cart Page Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Products</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>



                        <?php




                        if (!isset($_SESSION['cart'])) {

                            $_SESSION['cart'] = [];
                        }



                        if (isset($_POST['add'])) {
                            $drinks_id = $_POST['drinks_id'];
                            $img = $_POST['img'];
                            $name = $_POST['name'];
                            $price = $_POST['price'];
                            if (isset($_POST['quantity']) && ($_POST['quantity'] > 0)) {
                                $quanlity = $_POST['quantity'];
                            } else {

                                $quanlity = 1;
                            }
                            $fg = 0;
                            $i = 0;


                            foreach ($_SESSION['cart'] as $item) {

                                if ($item[2] == $name) {
                                    $slnew = $quanlity + $item[4];
                                    $_SESSION['cart'][$i][4] = $slnew;
                                    $fg = 1;
                                    break;
                                }
                                $i++;
                            }
                            if ($fg == 0) {

                                $sp = [$drinks_id, $img, $name, $price, $quanlity];

                                $_SESSION['cart'][] = $sp;
                            }
                        }
                        ?>

                        <?php
                        $tt = 0;

                        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $item) {
                                $drink_id = $item[0];
                                $img = $item[1];
                                $name = $item[2];
                                $price = $item[3];
                                $quantity = $item[4];

                                $price = floatval(str_replace('đ', '', $price));
                                $product_total_price = $price * $quantity;
                        ?>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">
                                            <img src="img/<?php echo $img ?>" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                                        </div>
                                    </th>
                                    <td>
                                        <p class="mb-0 mt-4"><?php echo $name ?></p>
                                    </td>
                                    <td>
                                        <p class="mb-0 mt-4"><?php echo $price  ?>.000 đ</p>
                                    </td>
                                    <td>
                                        <div class="input-group quantity mt-4" style="width: 100px;">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-minus rounded-circle bg-light border ">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </div>

                                            <input type="text" class="form-control form-control-sm text-center border-0 quantityInput" value="<?php echo $quantity ?>" data-product-id="<?php echo $drinks_id ?>">

                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-plus rounded-circle bg-light border ">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 mt-4">
                                            <?php


                                            echo "{$product_total_price}.000 đ";
                                            ?>
                                        </p>
                                    </td>
                                    <td>
                                        <button class="btn btn-md rounded-circle bg-light border mt-4">
                                            <a href="cart.php?delete=<?php echo $drink_id ?>"><i class="fa fa-times text-danger"></i></a>

                                        </button>

                                    </td>

                                </tr>


                        <?php

                                $tt += $product_total_price;
                            }
                        }







                        if (isset($_GET['delete'])) {
                            $the_cart_id = $_GET['delete'];
                            foreach ($_SESSION['cart'] as $key => $product) {
                                if ($product[0] == $the_cart_id) { // Nếu tìm thấy sản phẩm có ID cần xóa
                                    // Xóa sản phẩm khỏi giỏ hàng
                                    echo "<pre>";

                                    var_dump($_SESSION['cart']);
                                    echo $product[0];
                                    var_dump($_SESSION['cart'][$key]);
                                    unset($_SESSION['cart'][$key]);
                                    // Dừng vòng lặp sau khi xóa sản phẩm
                                    break;
                                }
                            }
                        }
                        // header("Location: cart.php");


                        ?>


                        <tr>

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
            <form action="./checkout.php" method="post">

                <input type="hidden" name="quatity" id="" value="<?php echo $quantity ?>">
                <div class="mt-5">

                    <input class="btn border-secondary rounded-pill px-4 py-3 text-primary float-end" type="submit" value="Check Out" name="checkout">
                    <button class="btn border-secondary rounded-pill px-4 py-3 text-primary float-end" type="button"> <a href="deleteAll.php">Delete all </a> </button>
                </div>
            </form>
            <?php
            // if (isset($_POST['checkout']) && !isset($_SESSION['user_id'])) {
            //     echo "Vui lòng đăng nhập để tiếp tục <a href='login.php'>Login</a>";
            //     exit;
            // }



            ?>

        </div>
    </div>




    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>