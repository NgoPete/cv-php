<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/global.css">
    <link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
    <title>Poco mart</title>
</head>

<body>

    <div id="wrapper">
        <div id="header">
            <div class="container py-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#"><img class="img-fluid" src="public/images/banner.png" alt="logo"></a>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group">
                                    <input type="text" class="outline-red border-end-0 form-control" placeholder="Tìm kiếm" aria-label="Tìm kiếm" aria-describedby="basic-addon2">
                                    <span class="outline-red border-start-0 input-group-text" id="basic-addon2"><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></span>
                                </div>

                            </div>
                            <div class="col-md-4 d-none d-md-block">
                                <div class="row">
                                    <div class="col">
                                        <div class="row g-0">
                                            <div class="col-lg-4 col-md-3 fs-1"><i class=" text-danger contact-icon fa fa-phone" aria-hidden="true"></i>
                                                </i>
                                            </div>
                                            <div class="col-lg-8 col-md-9 fs-sm fs-md">Tư vấn<br>
                                                <a href="#" class="fs-md fs-sm text-danger text-decoration-none text-danger fw-bold">1900 1001</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row g-0">
                                            <div class="col-lg-4 col-md-3 fs-1"><i class=" text-danger contact-icon fa fa-phone" aria-hidden="true"></i>
                                                </i>
                                            </div>
                                            <div class="col-lg-8 col-md-9 fs-sm fs-md">Bảo hành<br>
                                                <a href="#" class="fs-md fs-sm text-danger text-decoration-none text-danger fw-bold">1900 1004</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 position-relative d-none d-md-block">
                                <a type="button" class="position-absolute end-0 text-warning">
                                    <i class=" fs-4 fa fa-shopping-bag" aria-hidden="true"></i>

                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        0

                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="main-menu" class="bg-danger">
                <div class="container">
                    <div class="row">
                        <div id="root-menu" class="col-md-3 text-light py-3 fa-lg">
                            <div class="row">
                                <i class="icon-toggle fa fa-bars col-3" aria-hidden="true"></i>
                                <div class="menu-title float-end fw-bold col-9">Danh mục sản phẩm
                                    <ul id="sub-menu" class="bg-danger">
                                        <li><a href="?mod=product&act=main&cate_id=1">Smart phone</a></li>
                                        <li><a href="?mod=product&act=main&cate_id=2">Laptop</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <nav class="navbar navbar-expand-lg  bg-danger">
                                <div class="container-fluid border-right-warning">
                                    <a class="navbar-brand d-none" href="#">Navbar</a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                        <ul class="navbar-nav">

                                            <li class="nav-item">
                                                <a class="nav-link text-light fw-bold" href="?">Trang chủ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-light fw-bold" href="#">Giới thiệu</a>
                                            </li>
                                            <!-- <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle text-light fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Sản phẩm
                                                </a>
                                                <ul class="dropdown-menu bg-danger">
                                                    <li><a class="dropdown-item" href="#">Điện thoại</a></li>
                                                    <li><a class="dropdown-item" href="#">Laptop</a></li>

                                                </ul>
                                            </li> -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle text-light fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Tin tức
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-light fw-bold" href="#">FAQ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-light fw-bold" href="#">Tuyển dụng</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-light fw-bold" href="#">Liên hệ</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->