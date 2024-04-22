<div class="row">
    <div class="col-sm-12 col-md-12">
        <a class="btn btn-primary btn-sm mb-4 p-2" href="menu.php?source=add_menu"> Add To Menu</a>


        <!-- <?php if ($state === 'success') : ?> -->
        <div class="my-3 text-success text-center">
            Action Successfully!
        </div>
        <!-- <?php endif; ?> -->
        <table class="table table-bordered table-striped ">
            <thead class="table-primary">
                <th>ID</th>

                <th>Name</th>
                <th>Tag</th>
                <th>Price</th>
                <th>Image</th>
                <th colspan="2" class="text-center" width="10%">Action</th>
            </thead>
            <tbody>

                <tr>
                    <?php

                    $query = "SELECT m.*, c.cate_title FROM menu as m  INNER JOIN categories as c ON m.cate_id = c.cate_id  ";
                    $get_all_menu = mysqli_query($conn, $query);


                    while ($row = mysqli_fetch_assoc($get_all_menu)) {
                        $drinks_id = $row['drinks_id'];
                        $cate_id = $row['cate_id'];
                        $drinks_name = $row['drinks_name'];
                        $drinks_tag = $row['cate_title'];
                        $drinks_price = $row['drinks_price'];
                        $drinks_img = $row['drinks_img'];
                        echo "<tr>";
                        echo "<td>$drinks_id</td>";
                        echo "<td>$drinks_name</td>";
                        echo "<td>$drinks_tag</td>";
                        echo "<td>$drinks_price</td>";
                        echo "<td><img style='width: 100px; height: 150px;' class='img-fluid' alt=''
                            src='../img/$drinks_img' /></td>";
                        echo "<td><a href='menu.php?source=edit&id=$drinks_id' class='btn btn-primary btn-sm'> Edit</a></td>";
                        echo "<td><a  href='menu.php?delete=$drinks_id' class='btn btn-primary btn-sm'>Delete</a></td>";
                        echo "</tr>";
                    }

                    if (isset($_GET['delete'])) {
                        $drinks_id = $_GET['delete'];
                        $query = "DELETE FROM menu WHERE drinks_id = $drinks_id";
                        $delete_query = mysqli_query($conn, $query);
                    }
                    ?>


            </tbody>
        </table>
    </div>
</div>