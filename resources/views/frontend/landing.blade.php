<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
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
    <!-- Site -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/app_1.min.css">
    <link rel="stylesheet" href="css/app_2.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
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
        <div class="card p-30 col-md-12">
            <form id="psearch" name="psearch" method="post" enctype="multipart/form-data">
                <div class="text-center">
                    <div class="col-lg-2 col-md-1 col-sm-6 col-xs-12 nopadding">
                        <label>Nationality</label>
                        <select class="select2" id="nationality">
                            <option value="0">Select Nationality</option>
                            <option value="gcc">GCC</option>
                            <option value="notgcc">Not GCC</option>
                        </select>
                    </div>
                    <div class=" col-lg-2 col-md-3 col-sm-6 col-xs-12">
                        <label>How many people will go?</label>
                        <div class="form-group">
                            <select class="select2" id="people" name="people">
                                <option value="0">Select Option</option>
                                <option>2 People</option>
                                <option>3 People</option>
                                <option>4 People</option>
                                <option>5 People</option>
                                <option>6 People</option>
                                <option>7 People</option>
                            </select>
                        </div>
                    </div>
                    <div class=" col-lg-2 col-md-3 col-sm-12 col-xs-12">
                        <label>No. of Children</label>
                        <div class="form-group">
                            <select class="select2">
                                <option>1 </option>
                                <option>2 </option>
                                <option>3 </option>
                                <option>4 </option>
                                <option>5 </option>
                                <option>6 </option>
                                <option>7 </option>
                            </select>
                        </div>
                    </div>
                    <div class="input-daterange">
                        <div class=" col-lg-2 col-md-2 col-sm-5 col-xs-12">
                            <label> &nbsp; </label>
                            <div class="form-group">
                                <input id="dpd1" type="text" class="form-control text-center" placeholder="Date From">
                            </div>
                        </div>
                        <div class=" col-lg-2 col-md-2 col-sm-5 col-xs-12">
                            <label> &nbsp;</label>
                            <div class="form-group">
                                <input id="dpd2" type="text" class="form-control text-center" placeholder="Date To">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-2 col-md-1 col-sm-2 col-xs-12">
                    <div class="text-center m-t-25"> <a href="results.html">
                            <button class="btn btn-danger"> Search</button>
                        </a> </div>
                </div>
            </form>
        </div>
        <header class="section__title m-t-30">
            <!--<h2>Dapibus facilisis egestas eget quam</h2>
            <small>Curabitur blandit tempus porttitor aenean ellentesque ornare sem lacinia quam venenatis vestibulum</small>-->
        </header>
        <div class="row" id="myGroup">
            <div class="col-sm-4">
                <div class="inner-title">
                    <h2>Best Deal <small>1 Day left for GCC and 14 Days for non GCC</small></h2>
                </div>
                <div class="card">
                    <div class="omra-package">
                        <header class="omra-package__header">
                            <h3>Standard Omra for 4 People</h3>
                            <div class="omra-package__attr"> <span>11 Days/10 Nights</span> <span class="pc">2800 Dhs</span> </div>
                        </header>
                        <div class="row omra-package__tour">
                            <div class="col-xs-3">
                                <div class="pull-left">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                            <div class="col-xs-3 nopadding">
                                <div class=" text-center  nopadding pull-left"> <img src="img/hlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3  nopadding">
                                <div class=" text-center nopadding pull-right"> <img src="img/hlogo2.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="pull-right">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                        </div>
                        <div class="omra-package__progress"> <span><i style="right: 20%;"></i></span> </div>
                        <div class="form-group  m-b-0">
                            <div class="pl "> <a data-toggle="collapse" data-target="#amt" data-parent="#myGroup"> <i class="fa fa-caret-down fa-2x mdc-text-red m-t-5" aria-hidden="true "> </i> </a> </div>
                        </div>
                        <div id="amt" class="collapse ">
                            <div class="tbl">
                                <table class="table table-bordered text-center">
                                    <thead>
                                    <tr>
                                        <th>Hotel Name</th>
                                        <th>Keys</th>
                                        <th>Hotel Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td><b>Bedroom</b></td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Yes</td>
                                        <td><b>parking</b></td>
                                        <td>No</td>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td><b>Garden</b></td>
                                        <td>Yes </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="omra-package">
                        <header class="omra-package__header">
                            <h3>Standard Omra for 4 People</h3>
                            <div class="omra-package__attr"> <span>11 Days/10 Nights</span> <span class="pc">2800 Dhs</span> </div>
                        </header>
                        <div class="row omra-package__tour">
                            <div class="col-xs-3">
                                <div class="pull-left">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                            <div class="col-xs-3 nopadding">
                                <div class=" text-center  nopadding pull-left"> <img src="img/hlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3  nopadding">
                                <div class=" text-center nopadding pull-right"> <img src="img/hlogo2.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="pull-right">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                        </div>
                        <div class="omra-package__progress"> <span><i style="right: 20%;"></i></span> </div>
                        <div class="form-group  m-b-0">
                            <div class="pl "> <a data-toggle="collapse" data-target="#amt1" data-parent="#myGroup"> <i class="fa fa-caret-down fa-2x mdc-text-red m-t-5" aria-hidden="true "> </i> </a> </div>
                        </div>
                        <div id="amt1" class="collapse ">
                            <div class="tbl">
                                <table class="table table-bordered text-center">
                                    <thead>
                                    <tr>
                                        <th>Hotel Name</th>
                                        <th>Keys</th>
                                        <th>Hotel Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td><b>Bedroom</b></td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Yes</td>
                                        <td><b>parking</b></td>
                                        <td>No</td>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td><b>Garden</b></td>
                                        <td>Yes </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="omra-package">
                        <header class="omra-package__header">
                            <h3>Standard Omra for 4 People</h3>
                            <div class="omra-package__attr"> <span>11 Days/10 Nights</span> <span class="pc">2800 Dhs</span> </div>
                        </header>
                        <div class="row omra-package__tour">
                            <div class="col-xs-3">
                                <div class="pull-left">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                            <div class="col-xs-3 nopadding">
                                <div class=" text-center  nopadding pull-left"> <img src="img/hlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3  nopadding">
                                <div class=" text-center nopadding pull-right"> <img src="img/hlogo2.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="pull-right">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                        </div>
                        <div class="omra-package__progress"> <span><i style="right: 20%;"></i></span> </div>
                        <div class="form-group  m-b-0">
                            <div class="pl "> <a data-toggle="collapse" data-target="#amt2" data-parent="#myGroup"> <i class="fa fa-caret-down fa-2x mdc-text-red m-t-5" aria-hidden="true "> </i> </a> </div>
                        </div>
                        <div id="amt2" class="collapse ">
                            <div class="tbl">
                                <table class="table table-bordered text-center">
                                    <thead>
                                    <tr>
                                        <th>Hotel Name</th>
                                        <th>Keys</th>
                                        <th>Hotel Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td><b>Bedroom</b></td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Yes</td>
                                        <td><b>parking</b></td>
                                        <td>No</td>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td><b>Garden</b></td>
                                        <td>Yes </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="inner-title">
                    <h2>Best Deal <small>1 Day left for GCC and 14 Days for non GCC</small></h2>
                </div>
                <div class="card">
                    <div class="omra-package">
                        <header class="omra-package__header">
                            <h3>Standard Omra for 4 People</h3>
                            <div class="omra-package__attr"> <span>11 Days/10 Nights</span> <span class="pc">2800 Dhs</span> </div>
                        </header>
                        <div class="row omra-package__tour">
                            <div class="col-xs-3">
                                <div class="pull-left">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                            <div class="col-xs-3 nopadding">
                                <div class=" text-center  nopadding pull-left"> <img src="img/hlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3  nopadding">
                                <div class=" text-center nopadding pull-right"> <img src="img/hlogo2.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="pull-right">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                        </div>
                        <div class="omra-package__progress"> <span><i style="right: 20%;"></i></span> </div>
                        <div class="form-group  m-b-0">
                            <div class="pl "> <a data-toggle="collapse" data-target="#amt3" data-parent="#myGroup"> <i class="fa fa-caret-down fa-2x mdc-text-red m-t-5" aria-hidden="true "> </i> </a> </div>
                        </div>
                        <div id="amt3" class="collapse ">
                            <div class="tbl">
                                <table class="table table-bordered text-center">
                                    <thead>
                                    <tr>
                                        <th>Hotel Name</th>
                                        <th>Keys</th>
                                        <th>Hotel Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td><b>Bedroom</b></td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Yes</td>
                                        <td><b>parking</b></td>
                                        <td>No</td>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td><b>Garden</b></td>
                                        <td>Yes </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="omra-package">
                        <header class="omra-package__header">
                            <h3>Standard Omra for 4 People</h3>
                            <div class="omra-package__attr"> <span>11 Days/10 Nights</span> <span class="pc">2800 Dhs</span> </div>
                        </header>
                        <div class="row omra-package__tour">
                            <div class="col-xs-3">
                                <div class="pull-left">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                            <div class="col-xs-3 nopadding">
                                <div class=" text-center  nopadding pull-left"> <img src="img/hlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3  nopadding">
                                <div class=" text-center nopadding pull-right"> <img src="img/hlogo2.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="pull-right">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                        </div>
                        <div class="omra-package__progress"> <span><i style="right: 20%;"></i></span> </div>
                        <div class="form-group  m-b-0">
                            <div class="pl "> <a data-toggle="collapse" data-target="#amt4" data-parent="#myGroup"> <i class="fa fa-caret-down fa-2x mdc-text-red m-t-5" aria-hidden="true "> </i> </a> </div>
                        </div>
                        <div id="amt4" class="collapse ">
                            <div class="tbl">
                                <table class="table table-bordered text-center">
                                    <thead>
                                    <tr>
                                        <th>Hotel Name</th>
                                        <th>Keys</th>
                                        <th>Hotel Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td><b>Bedroom</b></td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Yes</td>
                                        <td><b>parking</b></td>
                                        <td>No</td>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td><b>Garden</b></td>
                                        <td>Yes </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="omra-package">
                        <header class="omra-package__header">
                            <h3>Standard Omra for 4 People</h3>
                            <div class="omra-package__attr"> <span>11 Days/10 Nights</span> <span class="pc">2800 Dhs</span> </div>
                        </header>
                        <div class="row omra-package__tour">
                            <div class="col-xs-3">
                                <div class="pull-left">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                            <div class="col-xs-3 nopadding">
                                <div class=" text-center  nopadding pull-left"> <img src="img/hlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3  nopadding">
                                <div class=" text-center nopadding pull-right"> <img src="img/hlogo2.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="pull-right">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                        </div>
                        <div class="omra-package__progress"> <span><i style="right: 20%;"></i></span> </div>
                        <div class="form-group  m-b-0">
                            <div class="pl "> <a data-toggle="collapse" data-target="#amt5" data-parent="#myGroup"> <i class="fa fa-caret-down fa-2x mdc-text-red m-t-5" aria-hidden="true "> </i> </a> </div>
                        </div>
                        <div id="amt5" class="collapse ">
                            <div class="tbl">
                                <table class="table table-bordered text-center">
                                    <thead>
                                    <tr>
                                        <th>Hotel Name</th>
                                        <th>Keys</th>
                                        <th>Hotel Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td><b>Bedroom</b></td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Yes</td>
                                        <td><b>parking</b></td>
                                        <td>No</td>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td><b>Garden</b></td>
                                        <td>Yes </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="inner-title">
                    <h2>Best Deal <small>1 Day left for GCC and 14 Days for non GCC</small></h2>
                </div>
                <div class="card">
                    <div class="omra-package">
                        <header class="omra-package__header">
                            <h3>Standard Omra for 4 People</h3>
                            <div class="omra-package__attr"> <span>11 Days/10 Nights</span> <span class="pc">2800 Dhs</span> </div>
                        </header>
                        <div class="row omra-package__tour">
                            <div class="col-xs-3">
                                <div class="pull-left">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                            <div class="col-xs-3 nopadding">
                                <div class=" text-center  nopadding pull-left"> <img src="img/hlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3  nopadding">
                                <div class=" text-center nopadding pull-right"> <img src="img/hlogo2.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="pull-right">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                        </div>
                        <div class="omra-package__progress"> <span><i style="right: 20%;"></i></span> </div>
                        <div class="form-group  m-b-0">
                            <div class="pl "> <a data-toggle="collapse" data-target="#amt6" data-parent="#myGroup"> <i class="fa fa-caret-down fa-2x mdc-text-red m-t-5" aria-hidden="true "> </i> </a> </div>
                        </div>
                        <div id="amt6" class="collapse ">
                            <div class="tbl">
                                <table class="table table-bordered text-center">
                                    <thead>
                                    <tr>
                                        <th>Hotel Name</th>
                                        <th>Keys</th>
                                        <th>Hotel Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td><b>Bedroom</b></td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Yes</td>
                                        <td><b>parking</b></td>
                                        <td>No</td>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td><b>Garden</b></td>
                                        <td>Yes </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="omra-package">
                        <header class="omra-package__header">
                            <h3>Standard Omra for 4 People</h3>
                            <div class="omra-package__attr"> <span>11 Days/10 Nights</span> <span class="pc">2800 Dhs</span> </div>
                        </header>
                        <div class="row omra-package__tour">
                            <div class="col-xs-3">
                                <div class="pull-left">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                            <div class="col-xs-3 nopadding">
                                <div class=" text-center  nopadding pull-left"> <img src="img/hlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3  nopadding">
                                <div class=" text-center nopadding pull-right"> <img src="img/hlogo2.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="pull-right">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                        </div>
                        <div class="omra-package__progress"> <span><i style="right: 20%;"></i></span> </div>
                        <div class="form-group  m-b-0">
                            <div class="pl "> <a data-toggle="collapse" data-target="#amt7" data-parent="#myGroup"> <i class="fa fa-caret-down fa-2x mdc-text-red m-t-5" aria-hidden="true "> </i> </a> </div>
                        </div>
                        <div id="amt7" class="collapse ">
                            <div class="tbl">
                                <table class="table table-bordered text-center">
                                    <thead>
                                    <tr>
                                        <th>Hotel Name</th>
                                        <th>Keys</th>
                                        <th>Hotel Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td><b>Bedroom</b></td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Yes</td>
                                        <td><b>parking</b></td>
                                        <td>No</td>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td><b>Garden</b></td>
                                        <td>Yes </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="omra-package">
                        <header class="omra-package__header">
                            <h3>Standard Omra for 4 People</h3>
                            <div class="omra-package__attr"> <span>11 Days/10 Nights</span> <span class="pc">2800 Dhs</span> </div>
                        </header>
                        <div class="row omra-package__tour">
                            <div class="col-xs-3">
                                <div class="pull-left">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                            <div class="col-xs-3 nopadding">
                                <div class=" text-center  nopadding pull-left"> <img src="img/hlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3  nopadding">
                                <div class=" text-center nopadding pull-right"> <img src="img/hlogo2.png" alt=""> </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="pull-right">
                                    <h3>Madina</h3>
                                    <small>8 Nights</small> </div>
                            </div>
                        </div>
                        <div class="omra-package__progress"> <span><i style="right: 20%;"></i></span> </div>
                        <div class="form-group  m-b-0">
                            <div class="pl "> <a data-toggle="collapse" data-target="#amt8" data-parent="#myGroup"> <i class="fa fa-caret-down fa-2x mdc-text-red m-t-5" aria-hidden="true "> </i> </a> </div>
                        </div>
                        <div id="amt8" class="collapse ">
                            <div class="tbl">
                                <table class="table table-bordered text-center">
                                    <thead>
                                    <tr>
                                        <th>Hotel Name</th>
                                        <th>Keys</th>
                                        <th>Hotel Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td><b>Bedroom</b></td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Yes</td>
                                        <td><b>parking</b></td>
                                        <td>No</td>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td><b>Garden</b></td>
                                        <td>Yes </td>
                                    </tr>
                                    </tbody>
                                </table>
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
