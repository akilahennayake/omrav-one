@extends('main')
@section('title','Search Results')
    @section('content')
    <section class="section">
        <div class="container">
            @include('partials._search')
            <div class="row">
                @include('partials._sidebarsearch')
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9">
                    @include('partials._sort')
                    <div class="card">

                        <div class="omra-package bn hand" data-toggle="collapse" data-target="#amt1" data-parent="#myGroup">
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
                                <div class="pl">  <i class="fa fa-caret-down fa-2x mdc-text-red" aria-hidden="true "> </i> </div>
                            </div>
                        </div>
                        <div class="text-center p-b-20">  <button type="button" class="btn btn-danger btn-sm m-t-20">BOOK NOW</button>
                        </div>

                        <div class="omra-package hand" data-toggle="collapse" data-target="#amt2">
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
                        <div class="text-center p-b-20">  <button type="button" class="btn btn-danger btn-sm m-t-20">BOOK NOW</button>
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
                        <div class="text-center p-b-20">  <button type="button" class="btn btn-danger btn-sm m-t-20">BOOK NOW</button>
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
                        <div class="text-center p-b-20">  <button type="button" class="btn btn-danger btn-sm m-t-20">BOOK NOW</button>
                        </div>

                        <div class="omra-package hand" data-toggle="collapse" data-target="#amt5" data-parent="#myGroup">
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
                            <div class="form-group  m-b-0">
                                <div class="pl ">  <i class="fa fa-caret-down fa-2x mdc-text-red m-t-5" aria-hidden="true "> </i> </div> </div>
                        </div>
                        <div class="text-center p-b-20">  <button type="button" class="btn btn-danger btn-sm m-t-20">BOOK NOW</button>
                        </div>

                        <div class="omra-package hand" data-toggle="collapse" data-target="#amt6" data-parent="#myGroup">
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
                            <div class="form-group  m-b-0">
                                <div class="pl ">  <i class="fa fa-caret-down fa-2x mdc-text-red m-t-5" aria-hidden="true "> </i> </div> </div>
                        </div>
                        <div class="text-center p-b-20">  <button type="button" class="btn btn-danger btn-sm m-t-20">BOOK NOW</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection