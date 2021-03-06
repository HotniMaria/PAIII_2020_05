<!doctype html>
<html class="no-js" lang="en">
<?php 
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="CBT/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="CBT/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="CBT/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="CBT/assets/css/themify-icons.css">
    <link rel="stylesheet" href="CBT/assets/css/metisMenu.css">
    <link rel="stylesheet" href="CBT/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="CBT/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="CBT/assets/css/typography.css">
    <link rel="stylesheet" href="CBT/assets/css/default-css.css">
    <link rel="stylesheet" href="CBT/assets/css/styles.css">
    <link rel="stylesheet" href="CBT/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="CBT/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style type="text/css">
        #content{
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19)
        }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">
                <form action="autentikasi/login_process" id="content" method="post">
                    @csrf
                    <div class="login-form-head">
                        <h4>Sign In</h4>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" id="exampleInputEmail1" name="email">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="exampleInputPassword1" name="password">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="CBT/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="CBT/assets/js/popper.min.js"></script>
    <script src="CBT/assets/js/bootstrap.min.js"></script>
    <script src="CBT/assets/js/owl.carousel.min.js"></script>
    <script src="CBT/assets/js/metisMenu.min.js"></script>
    <script src="CBT/assets/js/jquery.slimscroll.min.js"></script>
    <script src="CBT/assets/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="CBT/assets/js/plugins.js"></script>
    <script src="CBT/assets/js/scripts.js"></script>
</body>

</html>