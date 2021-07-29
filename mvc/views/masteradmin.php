<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link type="text/css" rel="stylesheet" href="<?php echo BASE_URL?>/public/css/styles.css"/>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <h2 style= "color:red">ADMIN</h2>
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Stock </div>
                            <a class="nav-link collapsed"  data-bs-toggle="collapse" data-bs-target="#layoutcate" aria-expanded="false" aria-controls="collapseLayouts">
                                Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="layoutcate" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=BASE_URL?>/AdminController/Category/">Add category</a>
                                    <a class="nav-link" href="<?=BASE_URL?>/AdminController/EditCategory/">Edit category</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed"  data-bs-toggle="collapse" data-bs-target="#layoutproduct" aria-expanded="false" aria-controls="collapseLayouts">
                                Product
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="layoutproduct" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=BASE_URL?>/AdminController/Product/">Add product</a>
                                    <a class="nav-link" href="<?=BASE_URL?>/AdminController/EditProduct/">Edit product</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Management </div>
                            <a class="nav-link" href="<?=BASE_URL?>/AdminController/ReceiptManage/">Receipt</a>
                            <div class="sb-sidenav-menu-heading">Options </div>
                            <a class="nav-link" href="<?=BASE_URL?>/AccountController/Logout">Logout</a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
              <?php require_once ("./mvc/views/admin/".$data["admin"].".php") ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        
    </body>
</html>
