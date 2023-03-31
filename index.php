<?php include './includes/guest-pages/header.php'; ?>

<main class="container my-5">
    <div class="p-4 p-md-5 rounded text-bg-dark">
        <div class="col-md-6 px-0">
            <span class="fst-italic">Featured post</span>
            <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
        </div>
    </div>


    <div class="row g-5 mt-2">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                Recent Articles
            </h3>

            <article class="blog-post row mb-2">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="height: 250px;">
                            <div class=" col-md-7 p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-success">Design</strong>
                                <h3 class="mb-0">Post title Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, molestias!</h3>
                                <!-- <div class="mb-1 text-body-secondary">Nov 11</div>
                                <p class="mb-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam molestiae...</p> -->
                                <a href="#" class="text-decoration-none text-secondary">by John Doe</a>
                                <a href="#" class="stretched-link text-danger">Continue reading</a>
                            </div>
                            <div class="col-md-5 d-none d-lg-block" style="height: 100%">
                                <img src="/images/boxed-water.jpg" alt="" width="100%" height="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="blog-post row mb-2">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="height: 250px;">
                            <div class="col-md-7 p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-success">Design</strong>
                                <h3 class="mb-0">Post title Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, molestias!</h3>
                                <!-- <div class="mb-1 text-body-secondary">Nov 11</div>
                                <p class="mb-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam molestiae...</p> -->
                                <a href="#" class="text-decoration-none text-secondary">by John Doe</a>
                                <a href="#" class="stretched-link text-danger">Continue reading</a>
                            </div>
                            <div class="col-md-5 d-none d-lg-block" style="height: 100%">
                                <img src="/images//elisa-jeanne.jpg" alt="" width="100%" height="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <nav class="blog-pagination" aria-label="Pagination">
                <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
                <a class="btn btn-outline-danger rounded-pill" href="#">Older</a>
            </nav>

        </div>

        <?php include './includes/guest-pages/aside.php' ?>
    </div>
</main>

<?php include './includes/guest-pages/footer.php'; ?>