<!DOCTYPE html>
<html lang="en">


<?php

use Classes\CategoryView;

include "../vendor/autoload.php";

if(isset($_POST["add_episode"])) {


}

$categoriesObj = new CategoryView();

$allCategories = $categoriesObj->getCategories();


?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> Upload Video | Central Play Adminstration </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/apps/invoice-add.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/dropify/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
    <link href="plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
    <link href="plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <link href="plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />

    <!--  END CUSTOM STYLE FILE  -->
    
</head>
<body>
    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">

            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="index.php">
                        <img src="assets/img/logo.svg" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="index.php" class="nav-link"> Central Play </a>
                </li>
            </ul>

            <ul class="navbar-item flex-row ml-md-0 ml-auto">
                <li class="nav-item align-self-center search-animated">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                        </div>
                    </form>
                </li>
            </ul>

            <ul class="navbar-item flex-row ml-md-auto">

                <li class="nav-item dropdown language-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="assets/img/ca.png" class="flag-width" alt="flag">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="assets/img/de.png" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;German</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="assets/img/jp.png" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Japanese</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="assets/img/fr.png" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;French</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="assets/img/ca.png" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;English</span></a>
                    </div>
                </li>

                <li class="nav-item dropdown message-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="messageDropdown">
                        <div class="">
                            <a class="dropdown-item">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">KY</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Kara Young</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="">
                                    <div class="media">
                                        <div class="user-img">
                                            <img src="assets/img/profile-15.jpg" class="img-fluid mr-2" alt="avatar">
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Daisy Anderson</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">OG</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Oscar Garner</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">

                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Server Rebooted</h6>
                                            <p class="">45 min ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Licence Expiring Soon</h6>
                                            <p class="">8 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Kelly Portfolio.pdf</h6>
                                            <p class="">670 kb</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown user-profile-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <img src="assets/img/profile-16.jpg" alt="avatar">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="">
                            <div class="dropdown-item">
                                <a class="" href="user_profile.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="apps_mailbox.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> Inbox</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="auth_lockscreen.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> Lock Screen</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="auth_login.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Sign Out</a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Invoice Add</span></li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>
            <ul class="navbar-nav flex-row ml-auto ">
                <li class="nav-item more-dropdown">
                    <div class="dropdown  custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Settings</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                            <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">Settings</a>
                            <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a>
                            <a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>
                            <a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a>
                            <a class="dropdown-item" data-value="Share" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <form action="" method="post" enctype="multipart/form-data" >
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            
            <nav id="sidebar">
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="#dashboard" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
                            <li>
                                <a href="index.php"> Sales </a>
                            </li>
                            <li>
                                <a href="index2.php"> Analytics </a>
                            </li>
                            <li class="active">
                                <a href="video-upload.php"> Upload Video </a>
                            </li>
                            <li >
                                <a href="createSeries.php"> Create Series </a>
                            </li>
                        </ul>
                    </li>
<!---->
<!--                    <li class="menu">-->
<!--                        <a href="#app" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">-->
<!--                            <div class="">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>-->
<!--                                <span>Apps</span>-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        <ul class="collapse submenu list-unstyled show" id="app" data-parent="#accordionExample">-->
<!--                            <li>-->
<!--                                <a href="apps_chat.html"> Chat </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="apps_mailbox.html"> Mailbox  </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="apps_todoList.html">
Todo List </a>-->
<!--                            </li>                            -->
<!--                            <li>-->
<!--                                <a href="apps_notes.html"> Notes </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="apps_scrumboard.html">Scrumboard</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="apps_contacts.html"> Contacts </a>-->
<!--                            </li>-->
<!--                            <li class="active">-->
<!--                                <a href="#appInvoice" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> Invoice <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>-->
<!--                                <ul class="collapse list-unstyled sub-submenu show" id="appInvoice" data-parent="#app"> -->
<!--                                    <li>-->
<!--                                        <a href="apps_invoice-list.html"> List </a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="apps_invoice-preview.html"> Preview </a>-->
<!--                                    </li>-->
<!--                                    <li class="active">-->
<!--                                        <a href="apps_invoice-add.html"> Add </a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="apps_invoice-edit.html"> Edit </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="apps_calendar.html"> Calendar </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!---->
<!--                    <li class="menu">-->
<!--                        <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">-->
<!--                            <div class="">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>-->
<!--                                <span>Components</span>-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">-->
<!--                            <li>-->
<!--                                <a href="component_tabs.html"> Tabs </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="component_accordion.html"> Accordions  </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="component_modal.html"> Modals </a>-->
<!--                            </li>                            -->
<!--                            <li>-->
<!--                                <a href="component_cards.html"> Cards </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="component_bootstrap_carousel.html">Carousel</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="component_blockui.html"> Block UI </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="component_countdown.html"> Countdown </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="component_counter.html"> Counter </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="component_sweetalert.html"> Sweet Alerts </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="component_timeline.html"> Timeline </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="component_snackbar.html"> Notifications </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="component_session_timeout.html"> Session Timeout </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="component_media_object.html"> Media Object </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="component_list_group.html"> List Group </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="component_pricing_table.html"> Pricing Tables </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="component_lightbox.html"> Lightbox </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!---->
<!--                    <li class="menu">-->
<!--                        <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">-->
<!--                            <div class="">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>-->
<!--                                <span>Elements</span>-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">-->
<!--                            <li>-->
<!--                                <a href="element_alerts.html"> Alerts </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="element_avatar.html"> Avatar </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="element_badges.html"> Badges </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="element_breadcrumbs.html"> Breadcrumbs </a>-->
<!--                            </li>                            -->
<!--                            <li>-->
<!--                                <a href="element_buttons.html"> Buttons </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="element_buttons_group.html"> Button Groups </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="element_color_library.html"> Color Library </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="element_dropdown.html"> Dropdown </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="element_infobox.html"> Infobox </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="element_jumbotron.html"> Jumbotron </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="element_loader.html"> Loader </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="element_pagination.html"> Pagination </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="element_popovers.html"> Popovers </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="element_progress_bar.html"> Progress Bar </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="element_search.html"> Search </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="element_tooltips.html"> Tooltips </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="element_treeview.html"> Treeview </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="element_typography.html"> Typography </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!---->
<!--                    <li class="menu">-->
<!--                        <a href="fonticons.html" aria-expanded="false" class="dropdown-toggle">-->
<!--                            <div class="">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>-->
<!--                                <span>Font Icons</span>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </li>-->
<!---->
<!--                    <li class="menu">-->
<!--                        <a href="widgets.html" aria-expanded="false" class="dropdown-toggle">-->
<!--                            <div class="">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>-->
<!--                                <span>Widgets</span>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </li>-->
<!---->
<!--                    <li class="menu">-->
<!--                        <a href="table_basic.html" aria-expanded="false" class="dropdown-toggle">-->
<!--                            <div class="">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>-->
<!--                                <span>Tables</span>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </li>-->
<!---->
<!--                    <li class="menu">-->
<!--                        <a href="#datatables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">-->
<!--                            <div class="">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>-->
<!--                                <span>DataTables</span>-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        <ul class="collapse submenu list-unstyled" id="datatables" data-parent="#accordionExample">-->
<!--                            <li>-->
<!--                                <a href="table_dt_basic.html"> Basic </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="table_dt_striped_table.html"> Striped Table </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="table_dt_ordering_sorting.html"> Order Sorting </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="table_dt_multiple_tables.html"> Multiple Tables</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="table_dt_alternative_pagination.html"> Alt. Pagination</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="table_dt_custom.html"> Custom </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="table_dt_range_search.html"> Range Search </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="table_dt_html5.html"> HTML5 Export </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="table_dt_miscellaneous.html"> Miscellaneous </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!---->
<!--                    <li class="menu">-->
<!--                        <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">-->
<!--                            <div class="">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>-->
<!--                                <span>Forms</span>-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        <ul class="collapse submenu list-unstyled" id="forms" data-parent="#accordionExample">-->
<!--                            <li>-->
<!--                                <a href="form_bootstrap_basic.html"> Basic </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="form_input_group_basic.html"> Input Group </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="form_layouts.html"> Layouts </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="form_validation.html"> Validation </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="form_input_mask.html"> Input Mask </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="form_bootstrap_select.html"> Bootstrap Select </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="form_select2.html"> Select2 </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="form_bootstrap_touchspin.html"> TouchSpin </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="form_maxlength.html"> Maxlength </a>-->
<!--                            </li>                          -->
<!--                            <li>-->
<!--                                <a href="form_checkbox_radio.html"> Checkbox &amp; Radio </a>-->
<!--                            </li>                            -->
<!--                            <li>-->
<!--                                <a href="form_switches.html"> Switches </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="form_wizard.html"> Wizards </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="form_fileupload.html"> File Upload </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="form_quill.html"> Quill Editor </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="form_markdown.html"> Markdown Editor </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="form_date_range_picker.html"> Date &amp; Range Picker </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="form_clipboard.html"> Clipboard </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="form_typeahead.html"> Typeahead </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    -->
<!--                    <li class="menu">-->
<!--                        <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">-->
<!--                            <div class="">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>-->
<!--                                <span>Users</span>-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">-->
<!--                            <li>-->
<!--                                <a href="user_profile.html"> Profile </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="user_account_setting.html"> Account Settings </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!---->
<!--                    <li class="menu">-->
<!--                        <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">-->
<!--                            <div class="">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>-->
<!--                                <span>Pages</span>-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample">-->
<!--                            <li>-->
<!--                                <a href="pages_helpdesk.html"> Helpdesk </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="pages_contact_us.html"> Contact Form </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="pages_faq.html"> FAQ </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="pages_faq2.html"> FAQ 2 </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="pages_privacy.html"> Privacy Policy </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="pages_coming_soon.html" target="_blank"> Coming Soon </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Error <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>-->
<!--                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#pages"> -->
<!--                                    <li>-->
<!--                                        <a href="pages_error404.html" target="_blank"> 404 </a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="pages_error500.html" target="_blank"> 500 </a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="pages_error503.html" target="_blank"> 503 </a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="pages_maintenence.html" target="_blank"> Maintanence </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!---->
<!--                    <li class="menu">-->
<!--                        <a href="#authentication" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">-->
<!--                            <div class="">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>-->
<!--                                <span>Authentication</span>-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        <ul class="collapse submenu list-unstyled" id="authentication" data-parent="#accordionExample">-->
<!--                            <li>-->
<!--                                <a href="auth_login_boxed.html" target="_blank"> Login Boxed </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="auth_register_boxed.html" target="_blank"> Register Boxed </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="auth_lockscreen_boxed.html" target="_blank"> Unlock Boxed </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="auth_pass_recovery_boxed.html" target="_blank"> Recover ID Boxed </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="auth_login.html" target="_blank"> Login Cover </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="auth_register.html" target="_blank"> Register Cover </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="auth_lockscreen.html" target="_blank"> Unlock Cover </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="auth_pass_recovery.html" target="_blank"> Recover ID Cover </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!---->
<!--                    <li class="menu">-->
<!--                        <a href="dragndrop_dragula.html" aria-expanded="false" class="dropdown-toggle">-->
<!--                            <div class="">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-move"><polyline points="5 9 2 12 5 15"></polyline><polyline points="9 5 12 2 15 5"></polyline><polyline points="15 19 12 22 9 19"></polyline><polyline points="19 9 22 12 19 15"></polyline><line x1="2" y1="12" x2="22" y2="12"></line><line x1="12" y1="2" x2="12" y2="22"></line></svg>-->
<!--                                <span>Drag and Drop</span>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </li>-->
<!---->
<!--                    <li class="menu">-->
<!--                        <a href="map_jvector.html" aria-expanded="false" class="dropdown-toggle">-->
<!--                            <div class="">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>-->
<!--                                <span>Maps</span>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </li>-->
<!---->
<!--                    <li class="menu">-->
<!--                        <a href="charts_apex.html" aria-expanded="false" class="dropdown-toggle">-->
<!--                            <div class="">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>-->
<!--                                <span>Charts</span>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </li>-->
<!---->
<!--                    <li class="menu">-->
<!--                        <a href="#starter-kit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">-->
<!--                            <div class="">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>-->
<!--                                <span>Starter Kit</span>-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        <ul class="collapse submenu list-unstyled" id="starter-kit" data-parent="#accordionExample">-->
<!--                            <li>-->
<!--                                <a href="starter_kit_blank_page.html"> Blank Page </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="starter_kit_breadcrumbs.html"> Breadcrumbs </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="starter_kit_boxed.html"> Boxed </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="starter_kit_alt_menu.html"> Alternate Menu </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!---->
<!--                    <li class="menu">-->
<!--                        <a target="_blank" href="https://designreset.com/cork/documentation/index.html" aria-expanded="false" class="dropdown-toggle">-->
<!--                            <div class="">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>-->
<!--                                <span>Documentation</span>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    -->
                </ul>
                
            </nav>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row invoice layout-top-spacing layout-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                        <div class="doc-container">

                            <div class="row">
                                <div class="col-xl-9">

                                    <div class="invoice-content">

                                        <div class="invoice-detail-body">

                                            <div class="invoice-detail-title">

                                                <div class="invoice-logo">
                                                    <div class="upload">
                                                        <input type="file" name="episode_video" accept="video/*" id="input-file-max-fs" class="dropify"/>
                                                    </div>
                                                </div>
                                                
                                                <div class="invoice-title">
                                                    <input type="text" class="form-control" name="episode_name" placeholder="Episode Name" >
                                                </div>

                                            </div>

                                            <div class="invoice-detail-header">

                                                <div class="row justify-content-between">
                                                    <div class="col-xl-12 invoice-address-company">

                                                        <div class="invoice-address-company-fields">

                                                            <div class="form-group row">
                                                                <label for="episode_number" class="col-sm-3 col-form-label col-form-label-sm">Episode Number In Series</label>
                                                                <div class="col-sm-9">
                                                                    <input type="number" min="1" class="form-control form-control-sm" name="episode_number" id="episode_number" placeholder="Episode No">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="episode_duration" class="col-sm-3 col-form-label col-form-label-sm">Episode Duration In Minutes </label>
                                                                <div class="col-sm-9">
                                                                    <input type="number" min="1" class="form-control form-control-sm" name="episode_duration" id="episode_duration" placeholder="90 mins">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="initial_rating" class="col-sm-3 col-form-label col-form-label-sm">Episode Initial Rating </label>
                                                                <div class="col-sm-9">
                                                                    <input type="number" min="0" max="5" class="form-control form-control-sm" name="episode_rating" id="initial_rating" placeholder="0 - 5 stars max">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="premiered_country" class="col-sm-3 col-form-label col-form-label-sm">Episode Premiered Country</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control form-control-sm" id="premiered_country" placeholder="Zimbabwe">
                                                                </div>
                                                            </div>                                                                
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                </div>

                                                <div class="row justify-content-between">

                                                    <div class="col-xl-5 invoice-address-client">

                                                        <div class="invoice-address-client-fields">
                                                            <div class="form-group row">
                                                            </div>
                                                            <div class="form-group row">
                                                            </div>


                                                            <div class="form-group row">
                                                                <div class="custom-file-container" data-upload-id="mySecondImage">
                                                                    <label for="episode_actors_images">Upload Actors Images <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                                    <label  class="custom-file-container__custom-file" >
                                                                        <input type="file" id="episode_actors_images" name="episode_actors_images[]" class="custom-file-container__custom-file__custom-file-input" multiple>
                                                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                                    </label>
                                                                    <div class="custom-file-container__image-preview"></div>
                                                                </div>
<!--                                                                <label for="episode_actors_images" class="col-sm-3 col-form-label col-form-label-sm">Actors Images </label>-->
<!--                                                                <div class="invoice-logo">-->
<!--                                                                    <div class="upload">-->
<!--                                                                        <input type="file" name="episode_actors_images[]" accept="image/*" multiple id="episode_actors_images" class="dropify"/>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-xl-5 invoice-address-client">
                                                        <div class="invoice-address-client-fields">

                                                            <div class="form-group row">
                                                                <label for="episode_large_art_cover" class="col-sm-3 col-form-label col-form-label-sm">Episode Large Art Cover</label>
                                                                <div class="invoice-logo">
                                                                    <div class="upload">
                                                                        <input type="file" name="episode_large_art_cover" typeof="image/*" multiple id="episode_large_art_cover" class="dropify"/>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="invoice-address-client-fields">

                                                            <div class="form-group row">
                                                                <label for="episode_large_art_cover" class="col-sm-3 col-form-label col-form-label-sm">Episode Small Art Cover</label>
                                                                <div class="invoice-logo">
                                                                    <div class="upload">
                                                                        <input type="file" name="episode_small_art_cover" typeof="image/*" multiple id="episode_small_art_cover" class="dropify"/>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="invoice-detail-terms">
                                                <div class="row justify-content-between">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-4">
                                                            <label for="date">Episode Premiered Date</label>
                                                            <input type="text" class="form-control form-control-sm" id="date" name="episode_premiered_date" placeholder="Add date picker">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>


<!--                                            <div class="invoice-detail-items">-->
<!---->
<!--                                                <div class="table-responsive">-->
<!--                                                    <table class="table table-bordered item-table">-->
<!--                                                        <thead>-->
<!--                                                            <tr>-->
<!--                                                                <th class=""></th>-->
<!--                                                                <th>Description</th>-->
<!--                                                                <th class="">Rate</th>-->
<!--                                                                <th class="">Qty</th>-->
<!--                                                                <th class="text-right">Amount</th>-->
<!--                                                                <th class="text-center">Tax</th>-->
<!--                                                            </tr>-->
<!--                                                        </thead>-->
<!--                                                        <tbody>-->
<!--                                                            <tr>-->
<!--                                                                <td class="delete-item-row">-->
<!--                                                                    <ul class="table-controls">-->
<!--                                                                        <li><a href="javascript:void(0);" class="delete-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></li>-->
<!--                                                                    </ul>-->
<!--                                                                </td>-->
<!--                                                                <td class="description"><input type="text" class="form-control form-control-sm" placeholder="Item Description"> <textarea class="form-control" placeholder="Additional Details"></textarea></td>-->
<!--                                                                <td class="rate">-->
<!--                                                                    <input type="text" class="form-control form-control-sm" placeholder="Price">-->
<!--                                                                </td>-->
<!--                                                                <td class="text-right qty"><input type="text" class="form-control form-control-sm" placeholder="Quantity"></td>-->
<!--                                                                <td class="text-right amount"><span class="editable-amount"><span class="currency">$</span> <span class="amount">100.00</span></td>-->
<!--                                                                <td class="text-center tax">-->
<!--                                                                    <div class="n-chk">-->
<!--                                                                        <label class="new-control new-checkbox new-checkbox-text checkbox-primary" style="height: 18px; margin: 0 auto;">-->
<!--                                                                            <input type="checkbox" class="new-control-input">-->
<!--                                                                            <span class="new-control-indicator"></span><span class="new-chk-content">Tax</span>-->
<!--                                                                        </label>-->
<!--                                                                    </div>-->
<!--                                                                </td>-->
<!--                                                            </tr>-->
<!--                                                        </tbody>-->
<!--                                                    </table>-->
<!--                                                </div>-->
<!---->
<!--                                                <button class="btn btn-secondary additem btn-sm">Add Item</button>-->
<!---->
<!--                                            </div>-->
<!--                                            <div class="invoice-detail-total">-->
<!---->
<!--                                                <div class="row">-->
<!---->
<!--                                                    <div class="col-md-6">-->
<!---->
<!--                                                        <div class="form-group row invoice-created-by">-->
<!--                                                            <label for="payment-method-account" class="col-sm-3 col-form-label col-form-label-sm">Account #:</label>-->
<!--                                                            <div class="col-sm-9">-->
<!--                                                                <input type="text" class="form-control form-control-sm" id="payment-method-account" placeholder="Bank Account Number">-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!---->
<!--                                                        <div class="form-group row invoice-created-by">-->
<!--                                                            <label for="payment-method-bank-name" class="col-sm-3 col-form-label col-form-label-sm">Bank Name:</label>-->
<!--                                                            <div class="col-sm-9">-->
<!--                                                                <input type="text" class="form-control form-control-sm" id="payment-method-bank-name" placeholder="Insert Bank Name">-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!---->
<!--                                                        <div class="form-group row invoice-created-by">-->
<!--                                                            <label for="payment-method-code" class="col-sm-3 col-form-label col-form-label-sm">SWIFT code:</label>-->
<!--                                                            <div class="col-sm-9">-->
<!--                                                                <input type="text" class="form-control form-control-sm" id="payment-method-code" placeholder="Insert Code">-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!---->
<!--                                                        -->
<!---->
<!--                                                    </div>-->
<!---->
<!--                                                    <div class="col-md-6">-->
<!--                                                        <div class="totals-row">-->
<!--                                                            <div class="invoice-totals-row invoice-summary-subtotal">-->
<!---->
<!--                                                                <div class="invoice-summary-label">Subtotal</div>-->
<!---->
<!--                                                                <div class="invoice-summary-value">-->
<!--                                                                    <div class="subtotal-amount">-->
<!--                                                                        <span class="currency">$</span><span class="amount">100</span>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!---->
<!--                                                            </div>-->
<!---->
<!---->
<!---->
<!--                                                            <div class="invoice-totals-row invoice-summary-total">-->
<!---->
<!--                                                                <div class="invoice-summary-label">Discount</div>-->
<!---->
<!--                                                                <div class="invoice-summary-value">-->
<!--                                                                    <div class="total-amount">-->
<!--                                                                        <span class="currency">$</span><span>10</span>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!---->
<!--                                                            </div>-->
<!---->
<!--                                                            <div class="invoice-totals-row invoice-summary-tax">-->
<!---->
<!--                                                                <div class="invoice-summary-label">Tax</div>-->
<!---->
<!--                                                                <div class="invoice-summary-value">-->
<!--                                                                    <div class="tax-amount">-->
<!--                                                                        <span>0%</span>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!---->
<!--                                                            </div>-->
<!---->
<!--                                                            <div class="invoice-totals-row invoice-summary-balance-due">-->
<!---->
<!--                                                                <div class="invoice-summary-label">Total</div>-->
<!---->
<!--                                                                <div class="invoice-summary-value">-->
<!--                                                                    <div class="balance-due-amount">-->
<!--                                                                        <span class="currency">$</span><span>90</span>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!---->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!---->
<!--                                                </div>-->
<!---->
<!--                                            </div>-->

                                            <div class="invoice-detail-note">

                                                <div class="row">
                                                    <div class="col-md-12 align-self-center">
                                                        <div class="form-group row invoice-note">
                                                            <label for="episode_description" class="col-sm-12 col-form-label col-form-label-sm">Episode Description :</label>
                                                            <div class="col-sm-12">
                                                                <textarea class="form-control" name="episode_description" id="episode_description" placeholder='Episode Storyline "' style="height: 88px;"></textarea>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">
                                                
                                                    <div class="col-md-12 align-self-center">

                                                        <div class="form-group row invoice-note">
                                                            <label for="episode_storyline" class="col-sm-12 col-form-label col-form-label-sm">Episode Storyline :</label>
                                                            <div class="col-sm-12">
                                                                <textarea class="form-control" name="episode_storyline" id="episode_storyline" placeholder='Episode Storyline "' style="height: 88px;"></textarea>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                </div>

                                            </div>
                                            
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <div class="col-xl-3">
                                    <div class="invoice-actions-btn">
                                        <div class="invoice-action-btn">

                                            <div class="row">
                                                <div class="col-xl-12 col-md-4">
                                                    <button role="button" type="submit" name="add_episode" class="btn btn-primary btn-send">Add Episode</button>
                                                </div>
<!--                                                <div class="col-xl-12 col-md-4">-->
<!--                                                    <a href="apps_invoice-preview.html" class="btn btn-dark btn-preview">Preview</a>-->
<!--                                                </div>-->
<!--                                                <div class="col-xl-12 col-md-4">-->
<!--                                                    <a href="javascript:void(0);" class="btn btn-success btn-download">Save</a>-->
<!--                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright  © 2021 <a target="_blank" href="javascript:void(0);">Pixels And CyberSelp</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    </form>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script src="plugins/dropify/dropify.min.js"></script>
    <script src="plugins/flatpickr/flatpickr.js"></script>
    <script src="plugins/file-upload/file-upload-with-preview.min.js"></script>
    <script>
        //First upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
    <script src="assets/js/apps/invoice-add.js"></script>
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/apps_invoice-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jun 2021 08:57:17 GMT -->
</html>