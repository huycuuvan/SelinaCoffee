<?php
if (isset($_GET['id'])) {
    $drinks_id = $_GET['id'];
    $query = "SELECT m.*, c.cate_title,c.cate_id FROM menu as m  INNER JOIN categories as c ON m.cate_id = c.cate_id WHERE drinks_id =$drinks_id";
    $get_all_menu = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($get_all_menu)) {
        $drinks_id = $row['drinks_id'];
        $drinks_name = $row['drinks_name'];
        $cate_title = $row['cate_title'];
        $drinks_price = $row['drinks_price'];
        $drinks_img = $row['drinks_img'];
        $cate_id = $row['cate_id'];
    }
}
?>

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
                                <input class="form-control" type="text" name="name" value="<?php echo $drinks_name  ?>" />

                                <span class="text-danger"></span>

                            </div>
                            <div class="form-group mb-3">
                                <label>Price</label>
                                <input class="form-control" type="text" name="price" value="<?php echo $drinks_price  ?>" />

                                <span class="text-danger"></span>

                            </div>
                            <div class="form-group mb-3">
                                <label> Image </label>
                                <input type="file" class="form-control" name="image" />

                                <span class="text-danger"></span>
                                <img width="100px " height="100px" class="img-fluid" alt="" src="../img/<?php echo $drinks_img  ?>" />
                            </div>
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

                            $query = "UPDATE `menu` SET `cate_id`='$cate',`drinks_name`='$name',`drinks_price`='$price',`drinks_img`='$image' WHERE drinks_id = $drinks_id";
                            $update_menu = mysqli_query($conn, $query);
                        }

                        ?>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>