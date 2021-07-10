<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Daily Report | <?= isset($title) ? $title : '' ?></title>
    <link rel="stylesheet" href="/vendors/feather/feather.css"/>
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css"/>
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css"/>
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css"/>
    <link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css"/>
    <link rel="stylesheet" href="/css/vertical-layout-light/style.css"/>
    <link rel="shortcut icon" href="/images/favicon.png"/>
    <?php if (!empty($css)) {
        foreach ($css as $c) {
            echo '<link rel="stylesheet" href="' . $c . '">';
        }
    } ?>
</head>
<body>
<div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="/<?= $role ?>"><img src="/images/logo.png" class="mr-2"
                                                                         alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="/<?= $role ?>"><img src="/images/logo.png" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav" style="margin-left: auto">
                <li class="nav-item d-none d-lg-block">
                    <h5>
                        <a href="/auth/logout">
                            <i class="ti-power-off text-danger menu-icon"></i>
                            <span class="menu-title">Keluar</span>
                        </a>
                    </h5>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>


    <div class="container-fluid page-body-wrapper">

        <?= $this->include('template/navbar') ?>

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col">
                        <?= $this->renderSection('content') ?>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> Copyright © 2021 All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                                class="ti-heart text-danger ml-1"></i></span>
                </div>
            </footer>
        </div>
    </div>
</div>
<script src="/vendors/js/vendor.bundle.base.js"></script>
<script src="/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="/js/off-canvas.js"></script>
<script src="/js/hoverable-collapse.js"></script>
<script src="/js/template.js"></script>
<?php if (!empty($js)) {
    foreach ($js as $j) {
        echo '<script src="' . $j . '"></script>';
    }
} ?>
</body>
</html>
