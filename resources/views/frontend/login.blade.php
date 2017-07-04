<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>omrabooking.com</title>
    <!-- Vendors -->
    <!-- Material design colors -->
    <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <!-- CSS animations -->
    <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
    <!-- Select2 - Custom Selects -->
    <link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="vendors/bower_components/slick-carousel/slick/slick.css">
    <!-- NoUiSlider - Input Slider -->
    <link rel="stylesheet" href="vendors/bower_components/nouislider/distribute/nouislider.min.css">
    <!-- Ion Range Slider - Input Slider -->
    <link rel="stylesheet" href="vendors/bower_components/ionrangeslider/ion.rangeSlider.css" />
    <link rel="stylesheet" href="vendors/bower_components/ionrangeslider/ion.rangeSlider.skinNice.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Site -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/app_1.min.css">
    <link rel="stylesheet" href="css/app_2.min.css">
</head>
<body>
<header id="header">
    <div class="header__main">
        <div class="container">
            <ul class="sign">
                <li> <a href="login.html"><img src="img/icons/login.png" alt=""> SIGN IN</a> </li>
            </ul>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12"><a class="logo" href="index.html">
                        <div class="logo__text"> <img src="img/logo.jpg" alt=""> </div>
                    </a></div>
                <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                    <!--<div class="htext m-t-30"> The International <span class="mdc-text-red">Omra</span> Agency</div>-->
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <ul class="navigation">
                        <li class="visible-xs visible-sm"><a class="navigation__close" data-rmd-action="navigation-close" href=""><i class="zmdi zmdi-long-arrow-right"></i></a></li>
                        <li class="active"> <a href="index.html">Home</a> </li>
                        <li> <a href="hotel-list.html">Hotel</a> </li>
                        <li> <a href="agent-list.html">Travel Agency</a> </li>
                    </ul>
                    <div class="navigation-trigger visible-xs visible-sm" data-rmd-action="block-open" data-rmd-target=".navigation"> <i class="zmdi zmdi-menu"></i> </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="section">
    <div class="container">


        <div id="login-overlay " class="modal-dialog">
            <div class="card">
                <div class="modal-header">

                    <h2 class="modal-title text-center" id="myModalLabel">  <i class="fa fa-user fa-fw"></i> Login </h2>
                </div>
                <div class="modal-body ">
                    <div class="row">
                        <div class="col-12-12 p-30">
                            <div class="well">
                                <form id="loginForm" method="POST" novalidate="novalidate">
                                    <div class="form-group">
                                        <label for="username" class="control-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="control-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password" placeholder="********">
                                        <span class="help-block"></span>
                                    </div>
                                    <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>

                                    <button type="submit" class="btn btn-danger btn-block">Login</button>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>






    </div>
</section>

<footer id="footer">
    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6" text-left>
                    <div class="copy"> &copy; All rights reserved to <span class="mdc-text-red">Omra</span> Booking 2017</div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="bt">
                        <ul class="footernav">
                            <li> <a href="contact.html">Contact Us</a> </li>
                            <li> <a href="">About</a> </li>
                            <li> <a href="">Language</a> </li>
                            <li> <a href="">Privacy Policy</a> </li>
                            <li> <a href="">Refund Policy</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="ie-warning__inner">
        <ul class="ie-warning__download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="img/browsers/chrome.png" alt="">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="img/browsers/firefox.png" alt="">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="img/browsers/opera.png" alt="">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="img/browsers/safari.png" alt="">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="img/browsers/ie.png" alt="">
                    <div>IE (New)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Javascript -->
<!-- jQuery -->
<!-- jQuery -->
<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<!-- Bootstrap -->
<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Waves button ripple effects -->
<script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
<!-- Select 2 - Custom Selects -->
<script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Slick Carousel - Custom Alerts -->
<script src="vendors/bower_components/slick-carousel/slick/slick.min.js"></script>
<!-- NoUiSlider -->
<script src="vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>
<!-- Ion Range Slider -->
<script src="vendors/bower_components/ionrangeslider/ion.rangeSlider.js"></script>
<!-- IE9 Placeholder -->
<!--[if IE 9 ]>
<script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->
<!-- Site functions and actions -->
<script src="js/app.min.js"></script>
<script src="js/custom.js"></script>
<!-- Demo only -->
<script src="js/demo/demo.js"></script>
</body>
</html>
