<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>{{ $page_title }} | Desain Komunikasi Visual ITTP</title>
    <link rel="icon" href="../../../images/logo/favicon.png" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bolo is creative one page website template">
    <meta name="author" content="">

    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="../../../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../../css/animate.css" type="text/css">
    <link rel="stylesheet" href="../../../css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="../../../css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="../../../css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="../../../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../../../css/jquery.countdown.css" type="text/css">
    <link rel="stylesheet" href="../../../css/style.css" type="text/css">
    <link rel="stylesheet" href="../../../css/colors/red.css" type="text/css">
    <link rel="stylesheet" href="../../../css/custom-style.css" type="text/css">

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    

</head>

<body>

    <div id="wrapper">

        <div class="page-overlay">
            <div class="preloader-wrap">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>

        <!-- header begin -->
        <header>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                            <div id="logo" >
                                <a href="index.html" >
                                    <!--
                                        class="bg-light p-3" style="height:170px;border-radius:0px 0px 25px 25px"
                                    -->                                 
                                    <img class="logo bg-light p-3" src="../../../images/logo/logo_black_outline.png" alt="" style="top:0;margin-top:-20px;border-radius:0px 0px 25px 25px" height="100px">
                                    <img class="logo-2" src="../../../images/logo/logo_black.png" alt="" height="50px">
                                </a>
                            </div>
                        
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        @include('layout.navigation')
						<!-- mainmenu close -->

                    </div>

                </div>
            </div>
        </header>
        <!-- header close -->
         <!-- Whatsapp Chat-->
         <?php
            $whatsapp_message = "Hello DKV!";
        ?>
         <div class="whatsapp-baloon d-flex align-items-center justify-content-center">
            <a href="https://wa.me/6285727237386?text={{ $whatsapp_message }}!" target="_blank" class="d-flex align-items-center justify-content-center">
                <i class="fa fa-whatsapp"></i>
            </a>
        </div>
        <!-- Whatsapp Chat End -->

        @yield('section')
        @include('layout.footer')


        </div>
        <!-- content close -->

       

        <!-- footer begin -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 sm-mb10">
                        <div class="mt10">&copy; Copyright 2023 - Desain Komunikasi Visual ITTP </div>
                    </div>

                    <div class="col-md-6">
                        <div class="social-icons float-lg-end">
                            <a href="#"><i class="fa fa-envelope fa-lg"></i></a>
                            <a href="https://www.instagram.com/dkv_ittelkom/"><i class="fa fa-instagram fa-lg bg-danger"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- footer close -->
        
        <!-- Javascript Files
    ================================================== -->
        <script src="../../../js/jquery.min.js"></script>
        <script src="../../../js/bootstrap.min.js"></script>
        <script src="../../../js/jquery.isotope.min.js"></script>
        <script src="../../../js/easing.js"></script>
        <script src="../../../js/owl.carousel.js"></script>
        <script src="../../../js/jquery.countTo.js"></script>
        <script src="../../../js/wow.min.js"></script>
        <script src="../../../js/jquery.magnific-popup.min.js"></script>
        <script src="../../../js/enquire.min.js"></script>
        <script src="../../../js/jquery.plugin.js"></script>		
		<script src="../../../js/jquery.easeScroll.js"></script>
		<script src="../../../js/jarallax.js"></script>
        <script src="../../../js/designesia.js"></script>
        <script src="../../../js/validation.js"></script>
        <script src="../../../js/custom.js"></script>
        <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
 <!-- Initialize DataTables -->
 <script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
</body>

</html>