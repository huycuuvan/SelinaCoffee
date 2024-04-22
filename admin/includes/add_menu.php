<div class="row">
    <div class="col-sm-12 col-md-12">
        <a class="btn btn-primary" href="menu.php"> Back</a>
        <div class="card mt-3">
            <div class="card-header bg-primary">
                <h5 class="card-title text-white"> Add New Product</h5>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" method="post" action="">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" />

                                <span class="text-danger"></span>

                            </div>
                            <div class="form-group mb-3">
                                <label>Price</label>
                                <input class="form-control" type="text" name="price" />

                                <span class="text-danger"></span>

                            </div>
                            <div class="form-group mb-3">
                                <label> Image </label>
                                <input type="file" class="form-control" name="image" />

                                <span class="text-danger"></span>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3">
                                <label>Category</label>
                                <select name="cate" id="" class="form-control">


                                    <?php
                                    $query = "SELECT * FROM categories";
                                    $get_all_cate = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_assoc($get_all_cate)) {
                                        $cate_id = $row['cate_id'];
                                        $cate_name = $row['cate_title'];
                                        echo "<option value = '$cate_id'>  $cate_name</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <button class="btn btn-primary" type="submit" name="btnSave">
                                Save
                            </button>

                            <?php
                            if (isset($_POST['btnSave'])) {
                                $name = $_POST['name'];
                                $price = $_POST['price'];
                                $image = $_FILES['image']['name'];
                                $image_temp = $_FILES['image']['tmp_name'];
                                $cate = $_POST['cate'];
                                move_uploaded_file($image_temp, "../img/$image");

                                $query = "INSERT INTO `menu`(`cate_id`, `drinks_name`,  `drinks_price`, `drinks_img`) VALUES ('$cate','$name','$price','$image')";
                                $insert_menu = mysqli_query($conn, $query);
                            }

                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>