<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title><?=$title?></title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../views/Frontend/assets/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="../views/Frontend/assets/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../views/Frontend/assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../views/Frontend/assets/css/responsive.css" rel="stylesheet" />
  <link href="../views/admin/assets/css/edit.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
            <div class="contact_nav">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +01 123455678990
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : demo@gmail.com
                </span>
              </a>
            </div>
            <from class="search_form">
              <input type="text" class="form-control" placeholder="Search here...">
              <button class="" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </from>
            <div class="user_option_box">
              <a href="./login" class="account-link">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                  <?Php 
                  if(!isset($_SESSION['user']['username'])){
                    echo 'Đăng nhập';
                  }else{
                    echo $_SESSION['user']['username'];
                    echo '<a href="./logout">Đăng xuất</a>';
                  }
                  ?>
                  
                </span>
              </a>
              <a href="./cart" class="cart-link">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span>
                  Giỏ hàng
                </span>
              </a>
            </div>
          </div>

        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="./index-front">
              <span>
                Minics
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="./index-front">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./product-front">Sản phẩm</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="">Why Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Testimonial</a> -->
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>