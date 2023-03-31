<?php include './includes/guest-pages/header.php'; ?>

<main class="container my-5">
    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                Posts on topic: &nbsp; <a class="btn btn-secondary rounded-pill py-2 px-3 fw-bold fs-4">Software</a>
            </h3>

            <article class="blog-post row mb-2">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class=" col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-success">Design</strong>
                                <h3 class="mb-2">Post title Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus dolore perferendis doloremque harum aliquam eius corporis quae voluptatum doloribus dolorem?</h3>
                                <div class="mb-2 text-body-secondary">Nov 11</div>
                                <p class="mb-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt in cupiditate maiores vitae obcaecati? A dolorum magni rem sapiente nostrum odio iste provident necessitatibus reiciendis magnam pariatur quaerat, dolore accusantium adipisci nisi perferendis eius quibusdam error vitae! Sed repellendus reprehenderit excepturi harum dolorum velit ipsa? Esse alias repellat enim earum?...</p>
                                <a href="#" class="text-decoration-none text-secondary mb-2">by John Doe</a>
                                <a href="#" class="stretched-link text-danger">Continue reading</a>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <img src="/images/boxed-water.jpg" alt="" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="blog-post row mb-2">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-success">Design</strong>
                                <h3 class="mb-2">Post title Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sequi dolore ex? Minima ea eligendi eos pariatur dicta alias veniam.</h3>
                                <div class="mb-2 text-body-secondary">Nov 11</div>
                                <p class="mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, fugiat! Placeat est quod debitis expedita! Perferendis officia possimus enim delectus, corporis animi, distinctio porro aspernatur nobis nemo sint nisi esse necessitatibus? Laborum odit ad a reiciendis alias, quis nihil ullam temporibus dolor, nam delectus ducimus perspiciatis possimus? Ratione, consequuntur voluptatem?...</p>
                                <a href="#" class="text-decoration-none text-secondary mb-2">by John Doe</a>
                                <a href="#" class="stretched-link text-danger">Continue reading</a>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <img src="/images/elisa-jeanne.jpg" alt="" width="100%">
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