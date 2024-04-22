<?php
$query = "SELECT * FROM `categories`";
$get_all_cate = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($get_all_cate)) {
    $cate_name = $row['cate_title'];
}


$query = "SELECT * FROM menu";
$get_all_menu = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($get_all_menu)) {
    $drinks_id = $row['drinks_id'];
    $drinks_name = $row['drinks_name'];

    $drinks_price = $row['drinks_price'];
    $drinks_img = $row['drinks_img'];
}


?>

<div class="container-fluid py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-md-12 col-lg-7">
                <h4 class="mb-3 text-secondary">Coffee</h4>
                <h1 class="mb-5 display-3 text-primary">Coffee and Tea</h1>
                <div class="position-relative mx-auto">
                    <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="number" placeholder="Search">
                    <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100" style="top: 0; right: 25%;">Submit Now</button>
                </div>
            </div>
            <div class="col-md-12 col-lg-5">
                <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active rounded">
                            <img src="img/tira.jpg" class="bg-secondary rounded w-100" alt="First slide">
                            <a href="#" class="btn px-4 py-2 text-white rounded"><?php echo $cate_name ?></a>
                        </div>
                        <div class="carousel-item rounded">
                            <img src="img/crois.jpg" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                            <a href="#" class="btn px-4 py-2 text-white rounded"><?php echo $cate_name ?></a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <?php

                ?>
            </div>
        </div>
    </div>
</div>