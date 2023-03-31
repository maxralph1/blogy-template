<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous" defer></script>

    <style>
        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>

<body class="d-flex flex-column">
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-danger fs-2 text-decoration-none">
                    BLOGY
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ms-4">
                    <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Articles</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Hot Picks</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Topics</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">About Us</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                </form>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">Login</button>
                    <button type="button" class="btn btn-danger">Sign-up</button>
                </div>
            </div>
            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between">
                    <a class="p-2 link-secondary" href="#">World</a>
                    <a class="p-2 link-secondary" href="#">Software</a>
                    <a class="p-2 link-secondary" href="#">Science</a>
                    <a class="p-2 link-secondary" href="#">Technology</a>
                    <a class="p-2 link-secondary" href="#">Arts</a>
                    <a class="p-2 link-secondary" href="#">Design</a>
                    <a class="p-2 link-secondary" href="#">Culture</a>
                    <a class="p-2 link-secondary" href="#">Business</a>
                    <a class="p-2 link-secondary" href="#">Politics</a>
                    <a class="p-2 link-secondary" href="#">Opinion</a>
                    <a class="p-2 link-secondary" href="#">Health</a>
                    <a class="p-2 link-secondary" href="#">Style</a>
                    <a class="p-2 link-secondary" href="#">Travel</a>
                </nav>
            </div>
        </div>

    </header>