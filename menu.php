<?php include "./includes/header.php" ?>
<?php include "./includes/db.php" ?>



<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <?php
    if (include "./includes/navbar.php") {
    }


    ?>

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
        <h1 class="text-center text-white display-6">Shop</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Shop</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <h1 class="mb-4">Selina Coffee</h1>
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-xl-3">
                            <div class="input-group w-100 mx-auto d-flex">
                                <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                                <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                        <!-- <div class="col-6"></div>
                        <div class="col-xl-3">
                            <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                                <label for="fruits">Default Sorting:</label>
                                <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light me-3" form="fruitform">
                                    <option value="volvo">Nothing</option>
                                    <option value="saab">Popularity</option>
                                    <option value="opel">Organic</option>
                                    <option value="audi">Fantastic</option>
                                </select>
                            </div>
                        </div> -->
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4>Categories</h4>
                                        <ul class="list-unstyled fruite-categorie">
                                            <?php
                                            $query = "SELECT * FROM `categories`";
                                            $get_all_cate = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_assoc($get_all_cate)) {
                                                $cate_id = $row['cate_id'];
                                                $cate_title = $row['cate_title'];

                                                echo "<li> <a class='p-2' href='categories.php?cate_id=$cate_id'><i class='fas fa-apple-alt me-2'></i>{$cate_title}</a>  </li>";

                                            ?>

                                            <?php }

                                            ?>


                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4 class="mb-2">Price</h4>
                                        <input type="range" class="form-range w-100" id="rangeInput" name="rangeInput" min="0" max="500" value="0" oninput="amount.value=rangeInput.value">
                                        <output id="amount" name="amount" min-velue="0" max-value="500" for="rangeInput">0</output>
                                    </div>
                                </div> -->
                                <!-- <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4>Additional</h4>
                                        <div class="mb-2">
                                            <input type="radio" class="me-2" id="Categories-1" name="Categories-1" value="Beverages">
                                            <label for="Categories-1"> Organic</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="radio" class="me-2" id="Categories-2" name="Categories-1" value="Beverages">
                                            <label for="Categories-2"> Fresh</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="radio" class="me-2" id="Categories-3" name="Categories-1" value="Beverages">
                                            <label for="Categories-3"> Sales</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="radio" class="me-2" id="Categories-4" name="Categories-1" value="Beverages">
                                            <label for="Categories-4"> Discount</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="radio" class="me-2" id="Categories-5" name="Categories-1" value="Beverages">
                                            <label for="Categories-5"> Expired</label>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-lg-12">
                                    <h4 class="mb-3">Featured products</h4>
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rounded me-4" style="width: 100px; height: 100px;">
                                            <img src="img/featur-1.jpg" class="img-fluid rounded" alt="">
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Big Banana</h6>
                                            <div class="d-flex mb-2">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="d-flex mb-2">
                                                <h5 class="fw-bold me-2">2.99 $</h5>
                                                <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rounded me-4" style="width: 100px; height: 100px;">
                                            <img src="img/featur-2.jpg" class="img-fluid rounded" alt="">
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Big Banana</h6>
                                            <div class="d-flex mb-2">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="d-flex mb-2">
                                                <h5 class="fw-bold me-2">2.99 $</h5>
                                                <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rounded me-4" style="width: 100px; height: 100px;">
                                            <img src="img/featur-3.jpg" class="img-fluid rounded" alt="">
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Big Banana</h6>
                                            <div class="d-flex mb-2">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="d-flex mb-2">
                                                <h5 class="fw-bold me-2">2.99 $</h5>
                                                <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center my-4">
                                        <a href="#" class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">Vew More</a>
                                    </div>
                                </div> -->
                                <!-- <div class="col-lg-12">
                                    <div class="position-relative">
                                        <img src="img/banner-fruits.jpg" class="img-fluid w-100 rounded" alt="">
                                        <div class="position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">
                                            <h3 class="text-secondary fw-bold">Fresh <br> Fruits <br> Banner</h3>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row g-4 justify-content-center">
                                <?php
                                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                                $products_per_page = 8;

                                // Tính vị trí bắt đầu của sản phẩm trong cơ sở dữ liệu cho trang hiện tại
                                $start_from = ($current_page - 1) * $products_per_page;
                                $query = "SELECT m.*, c.cate_title FROM menu as m  INNER JOIN categories as c ON m.cate_id = c.cate_id  LIMIT $start_from, $products_per_page";
                                $get_all_menu = mysqli_query($conn, $query);
                                $total_pages_query = "SELECT COUNT(*) AS total FROM menu";
                                $total_pages_result = mysqli_query($conn, $total_pages_query);
                                $total_rows = mysqli_fetch_assoc($total_pages_result)['total'];
                                $total_pages = ceil($total_rows / $products_per_page);
                                while ($row = mysqli_fetch_assoc($get_all_menu)) {
                                    $drinks_id = $row['drinks_id'];
                                    $drinks_name = $row['drinks_name'];
                                    $drinks_tag = $row['cate_title'];
                                    $drinks_price = $row['drinks_price'];
                                    $drinks_img = $row['drinks_img'];

                                ?>

                                    <form class="col-md-6 col-lg-4 col-xl-3" action="shop-detail.php?id=<?php echo $drinks_id ?>&tag=<?php echo $drinks_tag ?>" method="post">

                                        <div class="rounded position-relative fruite-item border border-secondary">
                                            <div class="fruite-img">
                                                <input type="hidden" name="drinks_id" value="<?php echo $drinks_id ?>">
                                                <input type="hidden" name="img" id="" value="<?php echo $drinks_img ?>">
                                                <a href="shop-detail.php?id=<?php echo $drinks_id ?>&tag=<?php echo $drinks_tag ?>">

                                                    <img src="img/<?php echo $drinks_img ?>" class="img-fluid rounded-top " alt="">
                                                </a>
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;"><?php echo $drinks_tag ?></div>



                                            <div class="p-4  border-top-0 rounded-bottom">
                                                <input type="hidden" name="name" id="" value="<?php echo $drinks_name ?>">
                                                <p class="text-uppercase text-lg-left "><?php echo $drinks_name ?></p>

                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <input type="hidden" name="price" id="" value="<?php echo $drinks_price ?>">

                                                    <p class="text-dark fs-5 fw-bold mb-0"><?php echo $drinks_price ?></p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap align-items-center">
                                                        <input type="submit" class="btn border border-secondary rounded-pill px-3 text-primary" name="add" value="Add to cart">
                                                        <div class="mx-2 ">

                                                            <i class="fa fa-shopping-bag me-2 text-primary my-2"></i>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </form>

                                <?php   } ?>


                            </div>


                            <div class='col-12'>
                                <div class='pagination d-flex justify-content-center mt-5'>
                                    <a href='menu.php?page=<?php echo $current_page - 1 ?>' class='rounded'>&laquo;</a>
                                    <?php
                                    for ($i = 1; $i <= $total_pages; $i++) {
                                        echo " 
                                
                                    <a href='menu.php?page=$i' class='active rounded'>$i</a>
                                   
                                    
                                    
                                    ";
                                    }
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Fruits Shop End-->


    <!-- Footer Start -->
    <?php include "./includes/footer.php" ?>

    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>