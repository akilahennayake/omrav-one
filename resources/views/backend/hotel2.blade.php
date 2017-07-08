@extends('mainhotel')
@section('adminhotelcontent')

<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"><span class="mdc-text-red">Check</span> Your Reservations </h2>
                <div class="input-daterange">
                    <div class="col-md-3">
                        <input id="dpd1" type="text" class="form-control"  placeholder="from">
                    </div>
                    <div class=" col-md-3">
                        <input id="dpd2" type="text" class="form-control"  placeholder="to">
                    </div>
                </div>
                <div class="col-md-3 pull-left">
                    <button class="btn btn-danger">Search</button>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card p-10">
                    <div class="tablefilter m-t-10 m-b-10">
                        <button class="btn btn-primary" id="right-button">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>



                        </button>
                        <button class="btn btn-primary" id="left-button">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </button></div>
                    <h5> Today </h5>
                    <div class="table-responsive" id="table-move">

                        <tbody>
                        <table class="table table-striped wh">
                            <thead>
                            <tr class="h-b">
                                <th width="15%"><span class="mdc-text-red">Single </span><br>
                                    <span style="font-size:9px">View Your Plan</span></th>
                                <th><span class="mdc-text-red">Registered<br>
                    Rooms </span></th>
                                <th class="text-center"> Wed 03 May</th>
                                <th> Wed 04 May</th>
                                <th> Wed 05 May</th>
                                <th> Wed 06 May</th>
                                <th> Wed 07 May</th>
                                <th> Wed 08 May</th>
                                <th> Wed 09 May</th>
                                <th> Wed 10 May</th>
                                <th> Wed 11 May</th>
                                <th> Wed 12 May</th>
                                <th> Wed 13 May</th>
                                <th> Wed 14 May</th>
                                <th> Wed 08 May</th>
                                <th> Wed 09 May</th>
                                <th> Wed 10 May</th>
                                <th> Wed 11 May</th>
                                <th> Wed 12 May</th>
                                <th> Wed 13 May</th>
                                <th> Wed 14 May</th>


                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row"><span class="mdc-text-red">Plan A</span> edit
                                </td>
                                <td scope="row">6</span>
                                </td>
                                <td scope="row" class="green text-center"></td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="yellow">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>

                            </tr>
                            <tr>
                                <td scope="row"><span class="mdc-text-red">Plan B</span> edit
                                </td>
                                <td scope="row">8
                                </td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="yellow"></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="red text-center"> </td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>


                            </tr>
                            <tr>
                                <td scope="row"><span class="mdc-text-red">Plan C</span> edit
                                </td>
                                <td scope="row">7 </td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="yellow">&nbsp;</td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>

                                <td scope="row" class="red">&nbsp;</td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                            </tr>
                            </tbody>
                        </table>
                        </tbody>



                    </div>


                    <div class="table-responsive">
                        <tbody>
                        <table class="table table-striped wh">
                            <thead>
                            <tr class="h-b">
                                <th width="15%"><span class="mdc-text-red">Double </span><br>
                                    <span style="font-size:9px">View Your Plan</span></th>
                                <th><span class="mdc-text-red">Registered<br>
                    Rooms </span></th>
                                <th class="text-center"> Wed 03 May</th>
                                <th> Wed 04 May</th>
                                <th> Wed 05 May</th>
                                <th> Wed 06 May</th>
                                <th> Wed 07 May</th>
                                <th> Wed 08 May</th>
                                <th> Wed 09 May</th>
                                <th> Wed 10 May</th>
                                <th> Wed 11 May</th>
                                <th> Wed 12 May</th>
                                <th> Wed 13 May</th>
                                <th> Wed 14 May</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row"><span class="mdc-text-red">Plan A</span> edit
                                </td>
                                <td scope="row">6</span>
                                </td>
                                <td scope="row" class="green text-center"></td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="yellow">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                            </tr>
                            <tr>
                                <td scope="row"><span class="mdc-text-red">Plan B</span> edit
                                </td>
                                <td scope="row">8
                                </td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="yellow"></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="red text-center"> </td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>

                            </tr>
                            <tr>
                                <td scope="row"><span class="mdc-text-red">Plan C</span> edit
                                </td>
                                <td scope="row">7 </td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="yellow">&nbsp;</td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>

                                <td scope="row" class="red">&nbsp;</td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                            </tr>
                            </tbody>
                        </table>
                        </tbody>
                    </div>
                    <div class="table-responsive ">
                        <tbody>
                        <table class="table table-striped wh">
                            <thead>
                            <tr class="h-b">
                                <th width="15%"><span class="mdc-text-red">Queen </span><br>
                                    <span style="font-size:9px">View Your Plan</span></th>
                                <th><span class="mdc-text-red">Registered<br>
                    Rooms </span></th>
                                <th class="text-center"> Wed 03 May</th>
                                <th> Wed 04 May</th>
                                <th> Wed 05 May</th>
                                <th> Wed 06 May</th>
                                <th> Wed 07 May</th>
                                <th> Wed 08 May</th>
                                <th> Wed 09 May</th>
                                <th> Wed 10 May</th>
                                <th> Wed 11 May</th>
                                <th> Wed 12 May</th>
                                <th> Wed 13 May</th>
                                <th> Wed 14 May</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row"><span class="mdc-text-red">Plan A</span> edit
                                </td>
                                <td scope="row">6</span>
                                </td>
                                <td scope="row" class="green text-center"></td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="yellow">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                                <td scope="row" class="green">&nbsp;</td>
                            </tr>
                            <tr>
                                <td scope="row"><span class="mdc-text-red">Plan B</span> edit
                                </td>
                                <td scope="row">8
                                </td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="yellow"></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="red text-center"> </td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>

                            </tr>
                            <tr>
                                <td scope="row"><span class="mdc-text-red">Plan C</span> edit
                                </td>
                                <td scope="row">7 </td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="yellow">&nbsp;</td>
                                <td scope="row" class="green text-center"><span class="star">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>

                                <td scope="row" class="red">&nbsp;</td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                                <td scope="row" class="green text-center"><span class="star text-center">*</span></td>
                            </tr>
                            </tbody>
                        </table>
                        </tbody>
                    </div>
                    <div class="clh"> <span class="grn">Vacant</span> <span class="red">Occupied</span> <span class="ylw"> Not Available</span> </div>
                </div>
            </div>
            @include('partials._adminrightpanel')
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->




<!-- /#page-wrapper -->
    {{-----------DO NOT REMOVE FOR CONTENT FROM BELOW----------------DO ANYTHING ABOVE-------------}}
</div>
</div>

<!-- /#wrapper -->

@endsection
