<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Omra Booking - Admin Panel</title>

    <!-- Vendors -->
    <!-- Material design colors -->
    <!-- Bootstrap Core CSS -->
    <link href="vendors/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <!-- Custom CSS -->
    <link href="vendors/bower_components/bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="vendors/bower_components/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="vendors/bower_components/morrisjs/morris.css" rel="stylesheet">
    <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">


</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand p-0" href="index.html"> <img src="img/logos.jpg"></a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <li class="dropdown">

                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> Hello! Akila <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>

                    <li><a href="#"><i class="fa fa-home fa-fw"></i> My Office</a>
                    </li>
                    <li><a href="#"><i class="fa fa-question fa-fw"></i> Help</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar csidebar nopadding" role="navigation">
            <div class="scrollbar-inner">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu" >

                        <h2 class="page-header">
                            <i class="fa fa-bus fa-fw"></i>Omra Booking
                        </h2>
                        <li>
                            <a href="#"><i class="fa fa-bullhorn fa-fw"></i> <span class="mdc-text-red">Omra</span> Requests<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"> Waiting <span class="mdc-text-red pull-right">(6)</span></a>
                                </li>

                                <li>
                                    <a href="#">Pending <span class="mdc-text-red pull-right">(2)</span><span class="fa-stack pull-right" aria-hidden="true"> <i class="fa fa-circle-o fa-stack-2x "></i> <i class="fa fa-lock fa-stack-1x"></i> </span></a>
                                </li>
                                <li>
                                    <a href="#">Paid <span class="pull-right">(212)</span><span class="fa-stack pull-right" aria-hidden="true"> <i class="fa fa-circle-o fa-stack-2x "></i> <i class="fa fa-lock fa-stack-1x"></i> </span></a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-suitcase fa-fw"></i> <span class="mdc-text-red">Omra</span> Packages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level" id="side-menu">
                                <li>
                                    <div class="col-md-4 col-xs-6 m-b-10"><span class="mdc-text-red"><strong>Route</strong></span></div>
                                    <div class="col-md-8 col-xs-6 m-b-10">
                                        <div class="route-list"> <a class="dropdown-item" href="#">Maka Only</a> <a class="dropdown-item" href="#">Maka -&gt; Madina</a> <a class="dropdown-item" href="#">Madina -&gt; Maka</a> </div>
                                    </div>
                                </li>

                                <li>

                                    <div class="col-md-3  col-xs-3 col-sm-12">
                                        <div class="p-t-10"><span class="mdc-text-red"><strong>Price</strong></span></div>
                                    </div>
                                    <div class="col-md-9  col-xs-9 col-sm-12">
                                        <div class="col-md-6 nopadding col-xs-6">
                                            <div class="form-group ">
                                                <select class="select2">
                                                    <option>$10.00</option>
                                                    <option>$20.00</option>
                                                    <option>$40.00</option>
                                                    <option>$80.00</option>
                                                    <option>$100.00</option>
                                                    <option>$120.00</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 nopadding col-xs-6">
                                            <div class="form-group ">
                                                <select class="select2">
                                                    <option>$20.00</option>
                                                    <option>$40.00</option>
                                                    <option>$50.00</option>
                                                    <option>$90.00</option>
                                                    <option>$170.00</option>
                                                    <option>$200.00</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>

                                    <div class="col-md-3 m-b-15 col-xs-3 "><span class="mdc-text-red"><strong>Hotel</strong></span></div>
                                    <div class="col-md-9 m-b-15  col-xs-9">
                                        <div class="col-md-6 nopadding col-xs-6 text-left">Maka</div>
                                        <div class="col-md-6 nopadding col-xs-6 text-center">Modina</div>
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-3  col-xs-3 col-sm-12">
                                        <div class="p-t-10"><span class="mdc-text-red"><strong>Star</strong></span></div>
                                    </div>
                                    <div class="col-md-9  col-xs-9 col-sm-12">
                                        <div class="col-md-6 nopadding col-xs-6">
                                            <div class="form-group ">
                                                <select class="select2">
                                                    <option>2 star</option>
                                                    <option>3 star</option>
                                                    <option>5 star</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 nopadding col-xs-6">
                                            <div class="form-group ">
                                                <select class="select2">
                                                    <option>2 star</option>
                                                    <option>3 star</option>
                                                    <option>5 star</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-3  col-xs-3 col-sm-12">
                                        <div class="p-t-10"><span class="mdc-text-red"><strong>Distance</strong></span></div>
                                    </div>
                                    <div class="col-md-9  col-xs-9 col-sm-12">
                                        <div class="col-md-6 nopadding col-xs-6">
                                            <div class="form-group ">
                                                <select class="select2">
                                                    <option>10 km</option>
                                                    <option>20 km</option>
                                                    <option>23 km</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 nopadding col-xs-6">
                                            <div class="form-group ">
                                                <select class="select2">
                                                    <option>50 km</option>
                                                    <option>55 km</option>
                                                    <option>80 km</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-3  col-xs-3 col-sm-12">
                                        <div class="p-t-10"><span class="mdc-text-red"><strong>Gate</strong></span></div>
                                    </div>
                                    <div class="col-md-9  col-xs-9 col-sm-12">
                                        <div class="col-md-6 nopadding col-xs-6">
                                            <div class="form-group ">
                                                <select class="select2">
                                                    <option>10</option>
                                                    <option>20</option>
                                                    <option>23</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 nopadding col-xs-6">
                                            <div class="form-group ">
                                                <select class="select2">
                                                    <option>50</option>
                                                    <option>55</option>
                                                    <option>80</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-4 m-b-10  col-xs-6"><span class="mdc-text-red"><strong>Package</strong></span></div>
                                    <div class="col-md-8 m-b-10  col-xs-6">
                                        <div class="route-list"> <a class="dropdown-item" href="#">Standard</a> <a class="dropdown-item" href="#">Relax</a> <a class="dropdown-item" href="#">Luxury</a> <a class="dropdown-item" href="#">Royal</a> </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-5  col-xs-5 col-sm-12">
                                        <div class="p-t-10"><span class="mdc-text-red"><strong>Hotel Name</strong></span></div>
                                    </div>
                                    <div class="col-md-7  col-xs-7 col-sm-12">
                                        <div class="form-group ">
                                            <select class="select2">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 1 4</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-suitcase fa-fw"></i> <span class="mdc-text-red">Omra</span>  Packages + <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">


                                <li>
                                    <a href="#"><span class="mdc-text-red">Omra</span> Bus <span class="fa-stack pull-right" aria-hidden="true"> <i class="fa fa-circle-o fa-stack-2x "></i> <i class="fa fa-lock fa-stack-1x"></i> </span></a>
                                </li>
                                <li>
                                    <a href="#">Start Your Campaign  <span class="fa-stack pull-right" aria-hidden="true"> <i class="fa fa-circle-o fa-stack-2x "></i> <i class="fa fa-lock fa-stack-1x"></i>  </span></a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header">Screen Name
                </h2>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="card p-30">
            <div class="text-center">
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                    <label>Nationality</label>
                    <select class="select2">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                    </select>
                </div>
                <div class=" col-lg-2 col-md-6 col-sm-6 col-xs-12">
                    <label>No. of people to go?</label>
                    <div class="form-group">
                        <select class="select2">
                            <option>2 People</option>
                            <option>3 People</option>
                            <option>4 People</option>
                            <option>5 People</option>
                            <option>6 People</option>
                            <option>7 People</option>
                        </select>
                    </div>
                </div>
                <div class=" col-lg-2 col-md-4 col-sm-12 col-xs-12">
                    <label>No. of Children</label>
                    <div class="form-group">
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn">
                                <input type="radio" name="no-of-children">
                                0 </label>
                            <label class="btn">
                                <input type="radio" name="no-of-children">
                                1 </label>
                            <label class="btn active">
                                <input type="radio" name="no-of-children" checked>
                                2 </label>
                            <label class="btn">
                                <input type="radio" name="no-of-children">
                                3 </label>

                        </div>
                    </div>
                </div>
                <div class="input-daterange">
                    <div class="col-lg-2 col-md-3 col-sm-5 col-xs-12">
                        <label> &nbsp; </label>
                        <div class="form-group">
                            <input id="dpd1" type="text" class="form-control text-center" placeholder="Date From">
                        </div>
                    </div>
                    <div class=" col-lg-2 col-md-3 col-sm-5 col-xs-12">
                        <label> &nbsp;</label>
                        <div class="form-group">
                            <input id="dpd2" type="text" class="form-control text-center" placeholder="Date To">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="text-center m-t-25">
                    <button class="btn btn-danger">Search</button>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-suitcase fa-fw"></i> Packages <div class="rsort">
                            <bdo>
                                <input type="radio" name="no-of-children">
                                <span></span> <abbr>With out touring</abbr> </bdo>
                            <bdo>
                                <input type="radio" name="no-of-children">
                                <span></span> <abbr>Including Visa</abbr> </bdo>
                        </div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    Sort By
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu sright" role="menu">
                                    <li><a href="#">Price
                                        </a>
                                    </li>
                                    <li><a href="#">Distance</a>
                                    </li>
                                    <li><a href="#">Days in Maka
                                        </a>
                                    </li>
                                    <li><a href="#">Number of Rooms
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="card">

                            <div class="omra-package hand" data-toggle="collapse" data-target="#amt1" data-parent="#myGroup">
                                <header class="omra-package__header">
                                    <h3>Standard Omra for 4 People</h3>
                                    <div class="omra-package__attr"> <span>11 Days/10 Nights</span> <span class="pc">2800 Dhs</span> </div>
                                </header>
                                <div class="row omra-package__tour">
                                    <div class="col-xs-6">
                                        <div class="pull-left m-r-10">
                                            <h3>Madina</h3>
                                            <small>8 Nights</small> </div>
                                        <div class=" text-center  nopadding pull-left"> <img src="img/hlogo1.png" alt=""> </div>

                                    </div>


                                    <div class="col-xs-6">
                                        <div class="pull-right m-l-10">
                                            <h3>Madina</h3>
                                            <small>8 Nights</small> </div>
                                        <div class=" text-center nopadding pull-right "> <img src="img/hlogo2.png" alt=""> </div>

                                    </div>
                                </div>
                                <div class="omra-package__progress"> <span><i style="right: 20%;"></i></span> </div>
                                <div class="p-10"></div>
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
                                <div class="form-group  m-b-0">
                                    <div class="pl ">  <i class="fa fa-caret-down fa-2x mdc-text-red" aria-hidden="true "> </i> </div> </div>


                            </div>
                            <div class="text-center p-b-20">  <button type="button" class="btn btn-danger m-t-20">BOOK NOW</button>
                            </div>

                            <div class="omra-package hand" data-toggle="collapse" data-target="#amt2" data-parent="#myGroup">
                                <header class="omra-package__header">
                                    <h3>Standard Omra for 4 People</h3>
                                    <div class="omra-package__attr"> <span>11 Days/10 Nights</span> <span class="pc">2800 Dhs</span> </div>
                                </header>
                                <div class="row omra-package__tour">
                                    <div class="col-xs-6">
                                        <div class="pull-left m-r-10">
                                            <h3>Madina</h3>
                                            <small>8 Nights</small> </div>
                                        <div class=" text-center  nopadding pull-left"> <img src="img/hlogo1.png" alt=""> </div>

                                    </div>


                                    <div class="col-xs-6">
                                        <div class="pull-right m-l-10">
                                            <h3>Madina</h3>
                                            <small>8 Nights</small> </div>
                                        <div class=" text-center nopadding pull-right "> <img src="img/hlogo2.png" alt=""> </div>

                                    </div>
                                </div>
                                <div class="omra-package__progress"> <span><i style="right: 20%;"></i></span> </div>
                                <div class="p-10"></div>
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
                                <div class="form-group  m-b-0">
                                    <div class="pl ">  <i class="fa fa-caret-down fa-2x mdc-text-red m-t-5" aria-hidden="true "> </i> </div> </div>


                            </div>
                            <div class="text-center p-b-20">  <button type="button" class="btn btn-danger m-t-20">BOOK NOW</button>
                            </div>

                            <div class="omra-package hand" data-toggle="collapse" data-target="#amt3" data-parent="#myGroup">
                                <header class="omra-package__header">
                                    <h3>Standard Omra for 4 People</h3>
                                    <div class="omra-package__attr"> <span>11 Days/10 Nights</span> <span class="pc">2800 Dhs</span> </div>
                                </header>
                                <div class="row omra-package__tour">
                                    <div class="col-xs-6">
                                        <div class="pull-left m-r-10">
                                            <h3>Madina</h3>
                                            <small>8 Nights</small> </div>
                                        <div class=" text-center  nopadding pull-left"> <img src="img/hlogo1.png" alt=""> </div>

                                    </div>


                                    <div class="col-xs-6">
                                        <div class="pull-right m-l-10">
                                            <h3>Madina</h3>
                                            <small>8 Nights</small> </div>
                                        <div class=" text-center nopadding pull-right "> <img src="img/hlogo2.png" alt=""> </div>

                                    </div>
                                </div>
                                <div class="omra-package__progress"> <span><i style="right: 20%;"></i></span> </div>
                                <div class="p-10"></div>
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
                                <div class="form-group  m-b-0">
                                    <div class="pl ">  <i class="fa fa-caret-down fa-2x mdc-text-red m-t-5" aria-hidden="true "> </i> </div> </div>


                            </div>
                            <div class="text-center p-b-20">  <button type="button" class="btn btn-danger m-t-20">BOOK NOW</button>
                            </div>


                            <div class="omra-package hand" data-toggle="collapse" data-target="#amt4" data-parent="#myGroup">
                                <header class="omra-package__header">
                                    <h3>Standard Omra for 4 People</h3>
                                    <div class="omra-package__attr"> <span>11 Days/10 Nights</span> <span class="pc">2800 Dhs</span> </div>
                                </header>
                                <div class="row omra-package__tour">
                                    <div class="col-xs-6">
                                        <div class="pull-left m-r-10">
                                            <h3>Madina</h3>
                                            <small>8 Nights</small> </div>
                                        <div class=" text-center  nopadding pull-left"> <img src="img/hlogo1.png" alt=""> </div>

                                    </div>


                                    <div class="col-xs-6">
                                        <div class="pull-right m-l-10">
                                            <h3>Madina</h3>
                                            <small>8 Nights</small> </div>
                                        <div class=" text-center nopadding pull-right "> <img src="img/hlogo2.png" alt=""> </div>

                                    </div>
                                </div>
                                <div class="omra-package__progress"> <span><i style="right: 20%;"></i></span> </div>
                                <div class="p-10"></div>
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
                                <div class="form-group  m-b-0">
                                    <div class="pl ">  <i class="fa fa-caret-down fa-2x mdc-text-red m-t-5" aria-hidden="true "> </i> </div> </div>


                            </div>
                            <div class="text-center p-b-20">  <button type="button" class="btn btn-danger m-t-20">BOOK NOW</button>
                            </div>




                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.will go content here -->


            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bell fa-fw"></i>Instructions
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <p> Plan your sessions easily
                            You can always change</p>

                        <!-- /.list-group -->

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-sign-in fa-fw"></i> Coming Up, Please register

                    </div>
                    <div class="panel-body">
                        <p>  Add more rooms, we have more customers</p>

                    </div>
                    <!-- /.panel-body -->
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-search fa-fw"></i> Search

                    </div>
                    <div class="panel-body">
                        <div class="col-md-12  col-xs-12 col-sm-12">
                            <div class="form-group ">
                                <select class="select2">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 1 4</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-5 col-xs-6">

                            <div class="form-group">
                                <input  type="text" class="form-control text-center" placeholder="From">
                            </div>
                        </div>
                        <div class=" col-lg-6 col-md-6 col-sm-5 col-xs-6">

                            <div class="form-group">
                                <input type="text" class="form-control text-center" placeholder="To">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="text-center">
                                <button class="btn btn-danger">Search</button>
                            </div>
                        </div>

                    </div>
                    <!-- /.panel-body -->
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Omra book Graphs

                    </div>
                    <div class="panel-body">
                        <div id="placeholder" class="demo-placeholder"></div>

                    </div>
                    <!-- /.panel-body -->
                </div>

            </div>
            <!-- /.col-lg-4 -->


        </div>
        <!-- /.row -->

    </div>
    <!-- /#page-wrapper -->

</div>

<footer id="footer">
    <div class="footer__bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-md-offset-2 col-sm-offset-3">
                    <div class="copy p-l-20"> &copy; All rights reserved to <span class="mdc-text-red">Omra</span> Booking 2017</div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="bt">
                        <ul class="footernav">
                            <li> <a href="">Contact Us</a> </li>
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

<!-- /#wrapper -->
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
<script language="javascript" type="text/javascript" src="vendors/bower_components/Flot/jquery.flot.js"></script>
<script language="javascript" type="text/javascript" src="vendors/bower_components/Flot/jquery.flot.pie.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="vendors/bower_components/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="vendors/bower_components/raphael/raphael.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="vendors/bower_components/bootstrap/dist/js/sb-admin-2.js"></script>


<script type="application/javascript">
    $(document).ready(function () {

//Pie Chart Start
        var dataset = [
            {
                label: "1st Qtr",
                data: 20,
                color:'#ed7d31'
            },
            {
                label: "2nd Qtr",
                data: 25,
                color:'#ffc000'
            }
            ,
            {
                label: "3rd Qtr",
                data: 15,
                color:'#70ad47'
            }
            ,
            {
                label: "4th Qtr",
                data: 40,
                color:'#9e480e'
            }
        ];

        var placeholder = $("#placeholder");
        placeholder.unbind();
        $.plot('#placeholder', dataset, {
            series: {
                pie: {
                    show: true
                }
            },
            legend: {
                show: false
            }
        });
        window.onresize = function(event) {
            $.plot('#placeholder', dataset, {
                series: {
                    pie: {
                        show: true
                    }
                },
                legend: {
                    show: false
                }
            });
        }
//Pie Chart End

    });

</script>
<!-- IE9 Placeholder -->
<!--[if IE 9 ]>
<script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->
<!-- Site functions and actions -->
<script src="js/app.min.js"></script>
<script src="js/custom.js"></script>
<!-- Demo only -->
<script src="js/demo/demo.js"></script>
<script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

</body>

</html>
