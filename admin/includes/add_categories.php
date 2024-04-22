<?php
if (isset($_POST['btnSave'])) {
    $name = $_POST['name'];

    $query = "INSERT INTO `categories`( `cate_title`) VALUES ('$name') ";
    $insert_cate = mysqli_query($conn, $query);
}

?>

<div class="row">
    <div class="col-sm-12 col-md-12">
        <a class="btn btn-primary" href="categories.php"> Back</a>
        <div class="card mt-3">
            <div class="card-header bg-primary">
                <h5 class="card-title text-white"> Add New Category</h5>
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
                            <button class="btn btn-primary" type="submit" name="btnSave">
                                Save
                            </button>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>