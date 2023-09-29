<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />    
    <title><?=$title?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="../views/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../views/admin/assets/css/edit.css" rel="stylesheet" />
    <link href="../views/admin/assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Hello guy
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="./">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Bảng điều khiển</p>
                        </a>
                    </li>
                    <!-- <li>
                        <a class="nav-link" href="./user-deltail">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Thông tin người dùng</p>
                        </a>
                    </li> -->
                    <li>
                        <a class="nav-link" href="./product">
                            <i class="nc-icon nc-notes"></i>
                            <p>Danh sách sản phẩm</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./categories">
                            <i class="nc-icon nc-notes"></i>
                            <p>Danh mục sản phẩm</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./bill">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Danh sách hóa đơn</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./user">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Danh sách user</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon"><?=$_SESSION['user']['username'] ?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./logout">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>