<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">

        <title>CAFELOKA</title>
    </head>
    <body>

    <!-- NAVBAR -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home">Cafeloka</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/logout">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- <main class="container">

            <div class="starter-template text-center py-5 px-3">
                <h1>Hai !
                    <?= session()->get('name'); ?></h1>
                <p class="lead">Selamat Datang di Warung Belajar, Kita sudah belajar membuat
                    Authentikasi dengan Codeigniter 4</p>
            </div>
        </main> -->

        <!-- Showcase -->
        <section
            class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between mt-5">
                    <div>
                        <h1>Welcome to
                            <span class="text-warning">
                                CAFELOKA
                            </span>
                        </h1>
                        <p class="lead my-4">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis cupiditate aperiam placeat voluptate enim recusandae temporibus, tempora debitis, minus et dicta accusantium nihil maiores doloremque necessitatibus nam impedit, architecto sunt!
                        </p>
                        <button
                            class="btn btn-primary btn-lg mb-4"
                            data-bs-toggle="modal"
                            data-bs-target="#enroll">
                            Hmm...
                        </button>
                    </div>
                    <img class="img-fluid w-50 d-none d-sm-block" src="img/showcase.svg" alt=""/>
                </div>
            </div>
        </section>

        <!-- Newsletter -->
        <section class="bg-primary text-light p-5">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center">
                    <h3 class="mb-3 mb-md-0">Search Your Cafe</h3>

                    <div class="input-group news-input">
                        <input type="text" class="form-control" placeholder="Nama Kafe"/>
                        <button class="btn btn-dark btn-lg" type="button">Cari</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Boxes -->
        <section class="p-5">
            <div class="container">
                <div class="row text-center g-4">
                    <div class="col-md">
                        <div class="card bg-dark text-light">
                            <div class="card-body text-center">
                                <div class="h1 mb-3">
                                    <i class="bi bi-laptop"></i>
                                </div>
                                <h3 class="card-title mb-3">Cafe Lampung</h3>
                                <p class="card-text">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, quas quidem
                                    possimus dolorum esse eligendi?
                                </p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card bg-secondary text-light">
                            <div class="card-body text-center">
                                <div class="h1 mb-3">
                                    <i class="bi bi-person-square"></i>
                                </div>
                                <h3 class="card-title mb-3">Cafe Setia</h3>
                                <p class="card-text">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, quas quidem
                                    possimus dolorum esse eligendi?
                                </p>
                                <a href="#" class="btn btn-dark">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card bg-dark text-light">
                            <div class="card-body text-center">
                                <div class="h1 mb-3">
                                    <i class="bi bi-people"></i>
                                </div>
                                <h3 class="card-title mb-3">Janji Jiwa</h3>
                                <p class="card-text">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, quas quidem
                                    possimus dolorum esse eligendi?
                                </p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Learn Sections
        <section id="learn" class="p-5">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md">
                        <img src="img/fundamentals.svg" class="img-fluid" alt=""/>
                    </div>
                    <div class="col-md p-5">
                        <h2>Learn The Fundamentals</h2>
                        <p class="lead">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique deleniti
                            possimus magnam corporis ratione facere!
                        </p>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque reiciendis eius
                            autem eveniet mollitia, at asperiores suscipit quae similique laboriosam iste
                            minus placeat odit velit quos, nulla architecto amet voluptates?
                        </p>
                        <a href="#" class="btn btn-light mt-3">
                            <i class="bi bi-chevron-right"></i>
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </section> -->

        <script
            src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>

    </body>
</html>