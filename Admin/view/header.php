<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Sneakers Admin</title>
    <link rel="shortcut icon" href="./uploads/favicon.png" />
    <!-- lib -->
    <link rel="stylesheet" href="./vendors/mdi/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/custom.css">
    
  </head>
  <body>
    <div class="container-scroller">
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo " href="?">
            <img class="logo" src="./uploads/favicon.png" alt="logo" />
            <b>Star Sneakers</b>
          </a>
          <a class="navbar-brand brand-logo-mini" href="?">
            <img class="small-logo" src="./uploads/favicon.png" alt="logo" />
          </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
         
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="./uploads/admins/<?Php echo $_SESSION['imgAdmin']; ?>" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?Php echo $_SESSION['nameAdmin']; ?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="">
                  <i class="mdi mdi-cached mr-2 text-success"></i> Đổi mật khẩu </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./login.php">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Đăng Xuất </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="./uploads/admins/<?Php echo $_SESSION['imgAdmin']; ?>" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?Php echo $_SESSION['nameAdmin']; ?></span>
                  <span class="text-secondary text-small"><?Php echo $_SESSION['majorAdmin']; ?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item" id="home">
              <a class="nav-link" href="?">
                <span class="menu-title">Trang Chủ</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item" id="category">
              <a class="nav-link" href="?act=category">
                <span class="menu-title">Loại</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item" id="product">
              <a class="nav-link" href="?act=product">
                <span class="menu-title">Sản Phẩm</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item" id="home">
              <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">Giỏ Hàng</span>
                <i class="mdi mdi-cart menu-icon"></i>
              </a>
            </li>
            <li class="nav-item" id="home">
              <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">Bình Luận</span>
                <i class="mdi mdi-comment menu-icon"></i>
              </a>
            </li>
            <li class="nav-item" id="home">
              <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">Liên Hệ</span>
                <i class="mdi mdi-email menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
       
        
        