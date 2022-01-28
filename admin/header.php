<?php
session_start();

if (!isset($_SESSION['admin_name'])) {
    header('Location: login?err=1');
}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description"
        content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description"
        content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/fav-icon.png" type="image/x-icon" />
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index"></a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
            aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">

            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"
                    aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user">
            <!-- <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"> -->
            <div>
                <p class="app-sidebar__user-name" style="text-transform: uppercase;">Admin</p>
                <p class="app-sidebar__user-designation"></p>
            </div>
        </div>
        <ul class="app-menu">
            <li><a class="app-menu__item" href="home"><i class="app-menu__icon fa fa-dashboard"></i> <span class="app-menu__label">Dashboard</span></a></li>

            <li><a class="app-menu__item" href="list-register"><i class="app-menu__icon fa fa-pie-chart"> </i><span class="app-menu__label">Register Details</span></a></li>
            <li><a class="app-menu__item" href="Academy%20Member%20Requests%20list.php"><i class="app-menu__icon fa fa-reddit-square"> </i><span class="app-menu__label">Register Requests</span></a></li>

<!--            <li><a class="app-menu__item" href="list-subcategory"><i class="app-menu__icon fa fa-pie-chart"> </i><span class="app-menu__label">Sub Category</span></a></li>-->

<!--            <li><a class="app-menu__item" href="list-image"><i class="app-menu__icon fa fa-pie-chart"> </i><span class="app-menu__label">Gallery</span></a></li>-->
            
<!--            <li><a class="app-menu__item" href="Customer-add"><i class="app-menu__icon fa fa-sign-out" hidden> </i><span class="app-menu__label" hidden>Customer</span></a></li>-->
<!--            <li><a class="app-menu__item" href="list-order"><i class="app-menu__icon fa fa-first-order"> </i><span class="app-menu__label">Pending Order</span></a></li>-->

<!--            <li><a class="app-menu__item" href="list-complre-order"><i class="app-menu__icon fa fa-first-order"> </i><span class="app-menu__label">Complete Order</span></a></li>-->

<!--            <li><a class="app-menu__item" href="list-products"><i class="app-menu__icon fa fa-product-hunt"> </i><span class="app-menu__label">Product</span></a></li>-->

            <li><a class="app-menu__item" href="logout"><i class="app-menu__icon fa fa-sign-out"> </i><span class="app-menu__label">Logout</span></a></li>
        </ul>
        </li>
        </ul>
    </aside>
