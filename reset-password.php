<?php include './includes/guest-pages/header.php'; ?>

<main class="container my-5">
    <div class="row g-5">
        <div class="col-md-8">
            <h2 class="blog-post-title mb-3 border-bottom pb-4 mb-5 fst-italic"><strong>Reset Password</strong></h2>

            <form class="mt-5">
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email">
                    </div>
                </div>

                <button type="submit" class="btn btn-danger mt-3 float-end">Send Reset Password Link</button>
            </form>

        </div>

        <?php include './includes/guest-pages/aside.php' ?>
    </div>
</main>

<?php include './includes/guest-pages/footer.php'; ?>