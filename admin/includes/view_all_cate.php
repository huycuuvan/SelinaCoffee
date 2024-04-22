<div class="row">
    <div class="col-sm-12 col-md-12">
        <a class="btn btn-primary btn-sm mb-4 p-2" href="categories.php?source=add_categories"> Add To Category</a>


        <!-- <?php if ($state === 'success') : ?> -->
        <div class="my-3 text-success text-center">
            Action Successfully!
        </div>
        <!-- <?php endif; ?> -->
        <table class="table table-bordered table-striped ">
            <thead class="table-primary">
                <th>ID</th>

                <th>Name</th>

                <th colspan="2" class="text-center" width="10%">Action</th>
            </thead>
            <tbody>

                <tr>
                    <?php

                    $query = "SELECT * FROM categories ";
                    $get_all_cate = mysqli_query($conn, $query);


                    while ($row = mysqli_fetch_assoc($get_all_cate)) {

                        $cate_id = $row['cate_id'];

                        $drinks_tag = $row['cate_title'];

                        echo "<tr>";
                        echo "<td>$cate_id</td>";
                        echo "<td>$drinks_tag</td>";

                        echo "<td><a href='' class='btn btn-primary btn-sm'> Edit</a></td>";
                        echo "<td><a  href='categories.php?delete=$cate_id' class='btn btn-primary btn-sm'>Delete</a></td>";
                        echo "</tr>";
                    }

                    if (isset($_GET['delete'])) {
                        $drinks_id = $_GET['delete'];
                        $query = "DELETE FROM categories WHERE cate_id = $cate_id";
                        $delete_query = mysqli_query($conn, $query);
                    }
                    ?>


            </tbody>
        </table>
    </div>
</div>