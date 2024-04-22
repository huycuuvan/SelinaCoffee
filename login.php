<?php include "./includes/header.php" ?>
<?php include "./includes/db.php" ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<?php
if (isset($_POST["signIn"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = "SELECT * FROM users";
    $get_all_user = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($get_all_user)) {
        $usernameDb = $row['users_name'];
        $emailDb = $row['email'];
        $passwordDb = $row['password'];
    }
    if ($email == $emailDb && $password == $passwordDb) {
        $_SESSION['username'] = $usernameDb;
        header("Location: index.php");
    }
}
?>
<div class="container-fluid bg-primary d-flex justify-content-center align-items-center vh-100">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Sign In</h5>
                    <form method="post">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example1">Email address </label>
                            <input type="email" id="form2Example1" class="form-control" name="email" />

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form2Example2" class="form-control" name="password" />
                            <label class="form-label" for="form2Example2">Password</label>
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-start">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                            </div>

                            <div class="col d-flex justify-content-end">
                                <!-- Simple link -->
                                <a href="#!" class="text-decoration-none">Forgot password?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <input type="submit" class="btn btn-primary btn-block mb-4" value="Sign in" name="signIn">

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a href="register.php">Register</a></p>
                            <p>or sign up with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>