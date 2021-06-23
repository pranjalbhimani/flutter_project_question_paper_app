<?php
session_start();
?>

<!doctype html>
<html>

<!-- Mirrored from www.lab.westilian.com/westilo-admin/full-width-fluid-layout/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Nov 2019 05:21:56 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Admin Panel</title>
    <link type="text/css" rel="stylesheet" href="admin_asset/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" 
    href="admin_asset/css/material-design-iconic-font.css">
    <link type="text/css" rel="stylesheet" href="admin_asset/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="admin_asset/css/animate.css">
    <link type="text/css" rel="stylesheet" href="admin_asset/css/layout.css">
    <link type="text/css" rel="stylesheet" href="admin_asset/css/components.css">
    <link type="text/css" rel="stylesheet" href="admin_asset/css/widgets.css">
    <link type="text/css" rel="stylesheet" href="admin_asset/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="admin_asset/css/pages.css">
    <link type="text/css" rel="stylesheet" href="admin_asset/css/bootstrap-extend.css">
    <link type="text/css" rel="stylesheet" href="admin_asset/css/common.css">
    <link type="text/css" rel="stylesheet" href="admin_asset/css/responsive.css">
</head>
<body class="login-page">
<!--Page Container Start Here-->
<section class="login-container">
<div class="container">
<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
<div class="login-form-container">
    <form action="logincheck.php" method="POST" class="j-forms" novalidate>
        <div class="login-form-header">
            <div class="logo">
                <a href="index.html" title="Admin Template"><img src="admin_asset/images/gls.jpg" alt="logo" style="height: 80px;width: 180px;"></a>
            </div>
        </div>
        <div class="login-form-content">



            <!-- start login -->
            <div class="unit">
                <div class="input login-input">
                    <label class="icon-left" for="login">
                        <i class="zmdi zmdi-account"></i>
                    </label>
                    <input class="form-control login-frm-input"  type="text" id="login" name="username" placeholder="Enter Username">
                </div>
            </div>
            <!-- end login -->

            <!-- start password -->
            <div class="unit">
                <div class="input login-input">
                    <label class="icon-left" for="password">
                        <i class="zmdi zmdi-key"></i>
                    </label>
                    <input class="form-control login-frm-input"  type="password" id="password" name="password" placeholder=" Enter Password">
						<!-- <span class="hint">
							<a href="#" class="link">Forgot password?</a>
						</span> -->
                </div>
            </div>
            <!-- end password -->


            <!-- start keep logged -->
            <!-- <div class="unit">
                <label class="checkbox">
                    <input type="checkbox" name="logged" value="true" checked="">
                    <i></i>
                    Keep me logged in
                </label>
            </div> -->
            <!-- end keep logged -->

            <!-- start response from server -->
            <div class="response"></div>
           <!-- end response from server -->



        </div>
        <div class="login-form-footer">
            <button type="submit" class="btn-block btn btn-primary" name="signin">Sign in</button>
        </div>

         <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<center><span style='color:red;'>$error</span></center>";
                    }
                ?>  

    </form>
</div>
</div>
</div>
<!--Footer Start Here -->
<!-- <footer class="login-page-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                <div class="footer-content">
                    <span class="footer-meta">Crafted with&nbsp;<i class="fa fa-heart"></i>&nbsp;by&nbsp;<a href="http://themeforest.net/user/westilian">westilian</a></span>
                </div>
            </div>
        </div>
    </div>
</footer> -->
<!--Footer End Here -->
</section>
<!--Page Container End Here-->
<script src="admin_asset/js/lib/jquery.js"></script>
<script src="admin_asset/js/lib/jquery-migrate.js"></script>
<script src="admin_asset/js/lib/bootstrap.js"></script>
<script src="admin_asset/js/lib/jRespond.js"></script>
<script src="admin_asset/js/lib/hammerjs.js"></script>
<script src="admin_asset/js/lib/jquery.hammer.js"></script>
<script src="admin_asset/js/lib/smoothscroll.js"></script>
<script src="admin_asset/js/lib/smart-resize.js"></script>

<script src="admin_asset/js/lib/jquery.validate.js"></script>
<script src="admin_asset/js/lib/jquery.form.js"></script>
<script src="admin_asset/js/lib/j-forms.js"></script>
<script src="admin_asset/js/lib/login-validation.js"></script>
</body>

<!-- Mirrored from www.lab.westilian.com/westilo-admin/full-width-fluid-layout/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Nov 2019 05:21:57 GMT -->
</html>
<?php
    unset($_SESSION["error"]);
?>