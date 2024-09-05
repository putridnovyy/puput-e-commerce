<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="../bootstrap/css/style.min.css" rel="stylesheet">
    <script src="../bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
                    <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon document" aria-hidden="true"></span>Product
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="product/posts.php">All Posts</a>
                        </li>
                        <li>
                            <a href="new-post.html">Add new post</a>
                        </li>
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
                <picture><source srcset="../bootstrap/img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="../bootstrap/img/avatar/avatar-illustrated-01.png" alt="User name"></picture>
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
      <div class="lang-switcher-wrapper">
        <button class="lang-switcher transparent-btn" type="button">
          EN
          <i data-feather="chevron-down" aria-hidden="true"></i>
        </button>
        <ul class="lang-menu dropdown">
          <li><a href="##">English</a></li>
          <li><a href="##">French</a></li>
          <li><a href="##">Uzbek</a></li>
        </ul>
      </div>
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
                <span class="notification-dropdown__title">System just updated</span>
                <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon danger">
                <i data-feather="info" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">The cache is full!</span>
                <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
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
            <picture><source srcset="./img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-02.png" alt="User name"></picture>
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
        <h2 class="main-title">Dashboard</h2>
        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="datatable" class="table table-striped dt-responsive nowrap table-vertical" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Amount</th>
                                                <th>Order Date</th>
                                                <th>Payment</th>
                                                <th>Billing Name</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#98541201</a>
                                                    </td>
                                                    <td>$45</td>
                                                    <td>Jul 20, 2019</td>
                                                    <td><i class="fab fa-cc-visa text-muted font-size-20"></i> </td>
                                                    <td>Herbert C. Patton</td>
                                                    <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#85124562</a>
                                                    </td>
                                                    <td>$521</td>
                                                    <td>Jul 18, 2019</td>
                                                    <td><i class="fab fa-cc-mastercard text-muted font-size-20"></i> </td>
                                                    <td>Mathias N. Klausen</td>
                                                    <td><span class="badge bg-warning-subtle text-warning ">Refund</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#45123698</a>
                                                    </td>
                                                    <td>$241</td>
                                                    <td>July 14, 2019</td>
                                                    <td><i class="fab fa-cc-paypal text-muted font-size-20"></i> </td>
                                                    <td>Nikolaj S. Henriksen</td>
                                                    <td><span class="badge bg-warning-subtle text-warning ">Refund</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#85214796</a>
                                                    </td>
                                                    <td>$541.34</td>
                                                    <td>Jul 15, 2019</td>
                                                    <td><i class="fab fa-cc-paypal text-muted font-size-20"></i> </td>
                                                    <td>Kasper S. Jessen</td>
                                                    <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#23145216</a>
                                                    </td>
                                                    <td>$22</td>
                                                    <td>Jul 11, 2019</td>
                                                    <td><i class="fab fa-cc-amex text-muted font-size-20"></i> </td>
                                                    <td>Lasse C. Overgaard</td>
                                                    <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#12365474</a>
                                                    </td>
                                                    <td>$1,541</td>
                                                    <td>Jul 10, 2019</td>
                                                    <td><i class="fab fa-cc-mastercard text-muted font-size-20"></i> </td>
                                                    <td>Johan E. Knudsen</td>
                                                    <td><span class="badge bg-danger-subtle text-danger ">Chargeback</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#32569874</a>
                                                    </td>
                                                    <td>$54</td>
                                                    <td>Jul 09, 2019</td>
                                                    <td><i class="fab fa-cc-visa text-muted font-size-20"></i> </td>
                                                    <td>Herbert C. Patton</td>
                                                    <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#52147321</a>
                                                    </td>
                                                    <td>$845</td>
                                                    <td>Jul 08, 2019</td>
                                                    <td><i class="fab fa-cc-discover text-muted font-size-20"></i> </td>
                                                    <td>Mathias N. Klausen</td>
                                                    <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#84125369</a>
                                                    </td>
                                                    <td>$421</td>
                                                    <td>Jul 08, 2019</td>
                                                    <td><i class="fab fa-cc-paypal text-muted font-size-20"></i> </td>
                                                    <td>Nikolaj S. Henriksen</td>
                                                    <td><span class="badge bg-danger-subtle text-danger ">Chargeback</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#74512368</a>
                                                    </td>
                                                    <td>$652</td>
                                                    <td>Jul 02, 2019</td>
                                                    <td><i class="fab fa-cc-mastercard text-muted font-size-20"></i> </td>
                                                    <td>Lasse C. Overgaard</td>
                                                    <td><span class="badge bg-danger-subtle text-danger ">Chargeback</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#52140300</a>
                                                    </td>
                                                    <td>$45</td>
                                                    <td>Jul 20, 2019</td>
                                                    <td><i class="fab fa-cc-visa text-muted font-size-20"></i> </td>
                                                    <td>Herbert C. Patton</td>
                                                    <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#85214369</a>
                                                    </td>
                                                    <td>$521</td>
                                                    <td>Jul 18, 2019</td>
                                                    <td><i class="fab fa-cc-mastercard text-muted font-size-20"></i> </td>
                                                    <td>Mathias N. Klausen</td>
                                                    <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#87412456</a>
                                                    </td>
                                                    <td>$241</td>
                                                    <td>July 14, 2019</td>
                                                    <td><i class="fab fa-cc-paypal text-muted font-size-20"></i> </td>
                                                    <td>Nikolaj S. Henriksen</td>
                                                    <td><span class="badge bg-danger-subtle text-danger ">Chargeback</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#99541241</a>
                                                    </td>
                                                    <td>$541.34</td>
                                                    <td>Jul 15, 2019</td>
                                                    <td><i class="fab fa-cc-paypal text-muted font-size-20"></i> </td>
                                                    <td>Kasper S. Jessen</td>
                                                    <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#12354781</a>
                                                    </td>
                                                    <td>$22</td>
                                                    <td>Jul 11, 2019</td>
                                                    <td><i class="fab fa-cc-amex text-muted font-size-20"></i> </td>
                                                    <td>Lasse C. Overgaard</td>
                                                    <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#95412367</a>
                                                    </td>
                                                    <td>$1,541</td>
                                                    <td>Jul 10, 2019</td>
                                                    <td><i class="fab fa-cc-mastercard text-muted font-size-20"></i> </td>
                                                    <td>Johan E. Knudsen</td>
                                                    <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#96254137</a>
                                                    </td>
                                                    <td>$54</td>
                                                    <td>Jul 09, 2019</td>
                                                    <td><i class="fab fa-cc-visa text-muted font-size-20"></i> </td>
                                                    <td>Herbert C. Patton</td>
                                                    <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#50025441</a>
                                                    </td>
                                                    <td>$845</td>
                                                    <td>Jul 08, 2019</td>
                                                    <td><i class="fab fa-cc-discover text-muted font-size-20"></i> </td>
                                                    <td>Mathias N. Klausen</td>
                                                    <td><span class="badge bg-warning-subtle text-warning ">Refund</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#32147851</a>
                                                    </td>
                                                    <td>$421</td>
                                                    <td>Jul 08, 2019</td>
                                                    <td><i class="fab fa-cc-paypal text-muted font-size-20"></i> </td>
                                                    <td>Nikolaj S. Henriksen</td>
                                                    <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#52146321</a>
                                                    </td>
                                                    <td>$652</td>
                                                    <td>Jul 02, 2019</td>
                                                    <td><i class="fab fa-cc-mastercard text-muted font-size-20"></i> </td>
                                                    <td>Lasse C. Overgaard</td>
                                                    <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">#32147851</a>
                                                    </td>
                                                    <td>$421</td>
                                                    <td>Jul 08, 2019</td>
                                                    <td><i class="fab fa-cc-paypal text-muted font-size-20"></i> </td>
                                                    <td>Nikolaj S. Henriksen</td>
                                                    <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
                                                </tr>
        
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
      </div>
    </main>
    <!-- ! Footer -->
    <footer class="footer">
  <div class="container footer--flex">
    <div class="footer-start">
      <p>2021 © Elegant Dashboard - <a href="elegant-dashboard.com" target="_blank"
          rel="noopener noreferrer">elegant-dashboard.com</a></p>
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
<script src="../bootstrap/plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="../bootstrap/plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="../bootstrap/js/script.js"></script>
</body>
</html>