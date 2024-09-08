<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="./style/style.css">
    <link href="../../bootstrap/css/style.min.css" rel="stylesheet">
    <script src="../../bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
        <!-- ! Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-start">
                <div class="sidebar-head">
                    <a href="/" class="logo-wrapper" title="Home">
                        <span class="sr-only">Home</span>
                        <span class="icon logo" aria-hidden="true"></span>
                        <div class="logo-text">
                            <span class="logo-title">Puput</span>
                            <span class="logo-subtitle">Electronic</span>
                        </div>
                    </a>
                    <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                        <span class="sr-only">Toggle menu</span>
                        <span class="icon menu-toggle" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="sidebar-body">
                    <ul class="sidebar-body-menu">
                        <li>
                            <a class="show-cat-btn" href="../dashboard.php"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                        </li>
                        <li>
                            <a class="active" href="##">
                            <span class="icon document" aria-hidden="true"></span>Products
                            </a>
                            <ul class="cat-sub-menu">
                            </ul>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="##"><span class="icon folder" aria-hidden="true"></span>User</a>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon image" aria-hidden="true"></span>Pesanan
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-footer">
                <a href="##" class="sidebar-user">
                    <span class="sidebar-user-img">
                        <picture>
                            <source srcset="../../bootstrap/img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="../../bootstrap/img/avatar/avatar-illustrated-01.png" alt="User name">
                        </picture>
                    </span>
                    <div class="sidebar-user-info">
                        <span class="sidebar-user__title">Sabrina</span>
                        <span class="sidebar-user__subtitle">Admin Manager</span>
                    </div>
                </a>
            </div>
        </aside>
        <div class="main-wrapper">
            <!-- ! Main nav -->
            <nav class="main-nav--bg">
                <div class="container main-nav">
                    <div class="main-nav-start">
                        <div class="search-wrapper">
                            <i data-feather="search" aria-hidden="true"></i>
                            <input type="text" placeholder="Enter keywords ..." required>
                        </div>
                    </div>
                    <div class="main-nav-end">
                        <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                            <span class="sr-only">Toggle menu</span>
                            <span class="icon menu-toggle--gray" aria-hidden="true"></span>
                        </button>
                        <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                            <span class="sr-only">Switch theme</span>
                            <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                            <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
                        </button>
                        <div class="notification-wrapper">
                            <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
                                <span class="sr-only">To messages</span>
                                <span class="icon notification active" aria-hidden="true"></span>
                            </button>
                            <ul class="users-item-dropdown notification-dropdown dropdown">
                                <li>
                                    <a href="##">
                                        <div class="notification-dropdown-icon info">
                                            <i data-feather="check"></i>
                                        </div>
                                        <div class="notification-dropdown-text">
                                            <span class="notification-dropdown__title">New Order</span>
                                            <span class="notification-dropdown__subtitle">Some product have been sold.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <div class="notification-dropdown-icon info">
                                            <i data-feather="check" aria-hidden="true"></i>
                                        </div>
                                        <div class="notification-dropdown-text">
                                            <span class="notification-dropdown__title">New Subscriber here!</span>
                                            <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="link-to-page" href="##">Go to Notifications page</a>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-user-wrapper">
                            <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                                <span class="sr-only">My profile</span>
                                <span class="nav-user-img">
                                    <picture>
                                    <source srcset="../../bootstrap/img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="../../bootstrap/img/avatar/avatar-illustrated-01.png" alt="User name">
                                    </picture>
                                </span>
                            </button>
                            <ul class="users-item-dropdown nav-user-dropdown dropdown">
                                <li><a href="##">
                                        <i data-feather="user" aria-hidden="true"></i>
                                        <span>Profile</span>
                                    </a></li>
                                <li><a href="##">
                                        <i data-feather="settings" aria-hidden="true"></i>
                                        <span>Account settings</span>
                                    </a></li>
                                <li><a class="danger" href="##">
                                        <i data-feather="log-out" aria-hidden="true"></i>
                                        <span>Log out</span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- ! Main -->
            <main class="main users chart-page" id="skip-target">
                <div class="container">
                    <h2 class="main-title">Products</h2>
                        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                            <div class="col hp">
                                <div class="card h-100 shadow-sm">
                                    <a href="#">
                                        <img src="https://m.media-amazon.com/images/I/81gK08T6tYL._AC_SL1500_.jpg" class="card-img-top" alt="product.title" />
                                    </a>
                                    <div class="label-top shadow-sm">
                                        <a class="text-white" href="#">asus</a>
                                    </div>
                                    <div class="card-body">
                                    <div class="clearfix mb-3">
                                            <span class="float-start badge rounded-pill bg-success">Rp 15.399.000</span>
                                            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
                                        </div>
                                        <h5 class="card-title">
                                            <a target="_blank" href="#">ASUS TUF FX505DT Gaming Laptop- 15.6", 120Hz Full HD, AMD Ryzen 5 R5-3550H</a>
                                        </h5>
                                        <div class="d-grid gap-2 my-4">
                                            <a href="#" class="btn btn-warning bold-btn">add to cart</a>
                                        </div>
                                        <div class="clearfix mb-1">
                                            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
                                            <span class="float-end">
                                                <i class="far fa-heart" style="cursor: pointer"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="col hp">
                            <div class="card h-100 shadow-sm">
                                <a href="#">
                                    <img src="https://m.media-amazon.com/images/I/71wF7YDIQkL._AC_SL1500_.jpg" class="card-img-top" alt="product.title" />
                                </a>
                                <div class="label-top shadow-sm">
                                    <a class="text-white" href="#">razer</a>
                                </div>
                                <div class="card-body">
                                    <div class="clearfix mb-3">
                                        <span class="float-start badge rounded-pill bg-success">Rp 14.259.999</span>
                                        <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
                                    </div>
                                    <h5 class="card-title">
                                        <a target="_blank" href="#">Razer Blade 15 Base Gaming Laptop 2020: Intel Core i7-10750H 6-Core</a>
                                    </h5>
                                    <div class="d-grid gap-2 my-4">
                                        <a href="#" class="btn btn-warning bold-btn">add to cart</a>
                                    </div>
                                    <div class="clearfix mb-1">
                                        <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
                                        <span class="float-end">
                                            <i class="far fa-heart" style="cursor: pointer"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col hp">
                            <div class="card h-100 shadow-sm">
                                <a href="#">
                                    <img src="https://m.media-amazon.com/images/I/81w+3k4U8PL._AC_SL1500_.jpg" class="card-img-top" alt="product.title" />
                                </a>

                                <div class="label-top shadow-sm">
                                    <a class="text-white" href="#">lenovo</a>
                                </div>
                                <div class="card-body">
                                    <div class="clearfix mb-3">
                                        <span class="float-start badge rounded-pill bg-success">Rp 10.544.999</span>

                                        <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
                                    </div>
                                    <h5 class="card-title">
                                        <a target="_blank" href="#">Lenovo Legion 5 Gaming Laptop, 15.6" FHD (1920x1080) IPS Screen, AMD Ryzen 7</a>
                                    </h5>

                                    <div class="d-grid gap-2 my-4">
                                        <a href="#" class="btn btn-warning bold-btn">add to cart</a>
                                    </div>
                                    <div class="clearfix mb-1">
                                        <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

                                        <span class="float-end">
                                            <i class="far fa-heart" style="cursor: pointer"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col hp">
                            <div class="card h-100 shadow-sm">
                                <a href="#">
                                    <img src="https://m.media-amazon.com/images/I/61Ze2wc9nyS._AC_SL1500_.jpg" class="card-img-top" alt="product.title" />
                                </a>
                                <!-- <div class="label-top shadow-sm">Asus Rog</div>  -->
                                <div class="label-top shadow-sm">
                                    <a class="text-white" href="#">msi</a>
                                </div>
                                <div class="card-body">
                                    <div class="clearfix mb-3">
                                        <span class="float-start badge rounded-pill bg-success">14.770.000$</span>
                                        <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
                                    </div>
                                    <h5 class="card-title">
                                        <a target="_blank" href="#">MSI GL66 Gaming Laptop: 15.6" 144Hz FHD 1080p Display, Intel Core i7-11800H</a>
                                    </h5>
                                    <div class="d-grid gap-2 my-4">
                                        <a href="#" class="btn btn-warning bold-btn">add to cart</a>
                                    </div>
                                    <div class="clearfix mb-1">
                                        <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
                                        <span class="float-end">
                                            <i class="far fa-heart" style="cursor: pointer"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- ! Footer -->
            <footer class="footer">
                <div class="container footer--flex">
                    <div class="footer-start">
                        <p>2024 © Puput Electronic - <a href="##" target="_blank"
                                rel="noopener noreferrer">izzy.com</a></p>
                    </div>
                    <ul class="footer-end">
                        <li><a href="##">About</a></li>
                        <li><a href="##">Support</a></li>
                        <li><a href="##">Puchase</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
    <!-- Chart library -->
    <script src="../../bootstrap/plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="../../bootstrap/plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="../../bootstrap/js/script.js"></script>
</body>

</html>