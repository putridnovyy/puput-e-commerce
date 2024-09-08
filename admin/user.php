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
                    <a class="show-cat-btn" href="/"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
                <li>
                  <a class="show-cat-btn" href="##">
                    <span class="icon document" aria-hidden="true"></span>Products
                  </a>
                  <ul class="cat-sub-menu">
                  </ul>
                </li>
                <li>
                    <a class="active" href="##"><span class="icon folder" aria-hidden="true"></span>User</a>
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
                        </div>      <div class="nav-user-wrapper">
                            <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                                <span class="sr-only">My profile</span>
                                <span class="nav-user-img">
                                    <picture>
                                    <source srcset="../bootstrap/img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="../bootstrap/img/avatar/avatar-illustrated-01.png" alt="User name">
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
        <h2 class="main-title">Management User</h2>
        <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama User</th>
            <th>Email</th>
            <th>Total Pesanan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Jane Doe</td>
            <td>jane.doe@example.com</td>
            <td>15</td>
        </tr>
        <tr>
            <td>2</td>
            <td>John Smith</td>
            <td>john.smith@example.com</td>
            <td>10</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Alex Turner</td>
            <td>alex.turner@example.com</td>
            <td>7</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Mary Johnson</td>
            <td>mary.johnson@example.com</td>
            <td>12</td>
        </tr>
    </tbody>
</table>
      </div>
    </main>
    <!-- ! Footer -->
    <footer class="footer">
  <div class="container footer--flex">
    <div class="footer-start">
      <p>2024 © Puput Electronic - <a href="elegant-dashboard.com" target="_blank"
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
<script src="../bootstrap/plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="../bootstrap/plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="../bootstrap/js/script.js"></script>
</body>
</html>