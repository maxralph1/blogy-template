<?php include './includes/guest-pages/header.php'; ?>

<main class="container my-5">
    <div class="row g-5">
        <div class="col-md-8">
            <h2 class="blog-post-title mb-3 border-bottom pb-4 mb-5 fst-italic"><strong>Register</strong></h2>

            <form class="mt-5">
                <div class="row mb-3">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="first_name" class="col-sm-2 col-form-label">First name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="first_name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="last_name" class="col-sm-2 col-form-label">Last name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="last_name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password">
                    </div>
                </div>

                <button type="submit" class="btn btn-danger mt-3 float-end">Sign Up</button>
            </form>

            <div class="row mb-3 mt-5">
                <div class="col-sm-10 offset-sm-2">
                    <p>Have an account? <a href="#" class="text-danger">Login</a></p>
                </div>
            </div>

        </div>

        <?php include './includes/guest-pages/aside.php' ?>
    </div>
</main>

<?php include './includes/guest-pages/footer.php'; ?>