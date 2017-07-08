@extends('mainhotel')
@section('adminhotelcontent')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="bdr">
                    <h2  class="page-header"><span class="mdc-text-red">Plan</span> your Hotel Rooms </h2>
                </div>
                <div class="text-center">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 p-t-20">
                        <label class="lin">Which Room ?</label>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 p-t-20">
                        <select class="select2">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                        </select>
                    </div>
                    <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12 p-t-20">
                        <label class="lin">How Many Rooms ?</label>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 p-t-20">
                        <div class="form-group">
                            <input type="text" class="form-control" id="usr" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-8">
                <div class="table-responsive p-10">
                    <tbody>
                    <table class="table  wh">
                        <thead>
                        <tr>
                            <th ><span class="mdc-text-red">Plan type ? - </span></th>
                            <th scope="row"><span class="mdc-text-red"> Plan A</span> </th>
                            <th><span class="mdc-text-red">When ?</span></th>
                            <th><span class="mdc-text-red">from</span> </th>
                            <th><span class="mdc-text-red">to</span> </th>
                            <th><span class="mdc-text-red">For who ?</span> </th>
                            <th><span class="mdc-text-red">.....</span> </th>
                            <th><span class="mdc-text-red">More than</span></th>
                            <th><span class="mdc-text-red">200</span></th>
                            <th scope="row">&nbsp; </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row"><span class="mdc-text-red">8 – 14 Days</span> </th>
                            <th scope="row"><span class="mdc-text-red">200</span> </th>
                            <th scope="row">&nbsp; </th>
                        </tr>
                        <tr>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row"><span class="mdc-text-red">3 – 7 Days</span> </th>
                            <th scope="row"><span class="mdc-text-red">250</span> </th>
                            <th scope="row">&nbsp; </th>
                        </tr>
                        <tr>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row"><span class="mdc-text-red">2 Days</span> </th>
                            <th scope="row"><span class="mdc-text-red">280</span> </th>
                            <th scope="row">&nbsp; </th>
                        </tr>
                        <tr>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row"><span class="mdc-text-red">1 Days</span> </th>
                            <th scope="row"><span class="mdc-text-red">300</span> </th>
                            <th scope="row"><button type="button" class="btn btn-success btn-xs">Save</button></th>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table  wh">
                        <thead>
                        <tr>
                            <th ><span class="blu">Plan type ? - </span></th>
                            <th scope="row"><span class="blu"> Plan A</span> </th>
                            <th><span class="blu">When ?</span></th>
                            <th><span class="blu">from</span> </th>
                            <th><span class="blu">to</span> </th>
                            <th><span class="blu">For who ?</span> </th>
                            <th><span class="blu">.....</span> </th>
                            <th><span class="blu">More than</span></th>
                            <th><span class="blu">200</span></th>
                            <th scope="row">&nbsp; </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row"><span class="blu">8 – 14 Days</span> </th>
                            <th scope="row"><span class="blu">200</span> </th>
                            <th scope="row">&nbsp; </th>
                        </tr>
                        <tr>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row"><span class="blu">3 – 7 Days</span> </th>
                            <th scope="row"><span class="blu">250</span> </th>
                            <th scope="row">&nbsp; </th>
                        </tr>
                        <tr>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row"><span class="blu">2 Days</span> </th>
                            <th scope="row"><span class="blu">280</span> </th>
                            <th scope="row">&nbsp; </th>
                        </tr>
                        <tr>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row"><span class="blu">1 Days</span> </th>
                            <th scope="row"><span class="blu">300</span> </th>
                            <th scope="row"><button type="button" class="btn btn-success btn-xs">Save</button></th>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table  wh">
                        <thead>
                        <tr>
                            <th ><span >Plan type ? - </span></th>
                            <th scope="row"> <span  > Plan A</span> </th>
                            <th><span  >When ?</span></th>
                            <th><span  >from</span> </th>
                            <th><span  >to</span> </th>
                            <th><span  >For who ?</span> </th>
                            <th><span  >.....</span> </th>
                            <th><span>More than</span></th>
                            <th><span>200</span></th>
                            <th scope="row">&nbsp; </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row"><span >8 – 14 Days</span> </th>
                            <th scope="row"><span >200</span> </th>
                            <th scope="row">&nbsp; </th>
                        </tr>
                        <tr>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row"><span >3 – 7 Days</span> </th>
                            <th scope="row"><span >250</span> </th>
                            <th scope="row">&nbsp; </th>
                        </tr>
                        <tr>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row"><span >2 Days</span> </th>
                            <th scope="row"><span >280</span> </th>
                            <th scope="row">&nbsp; </th>
                        </tr>
                        <tr>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row"><span >1 Days</span> </th>
                            <th scope="row"><span >300</span> </th>
                            <th scope="row"><button type="button" class="btn btn-success btn-xs">Save</button></th>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table  wh">
                        <thead>
                        <tr>
                            <th ><span>Min Stay ? </span></th>
                            <th><span>.....</span> </th>
                            <th><span >Meal ?</span></th>
                            <th><span>.....</span> </th>
                            <th><span>Not allowed?</span> </th>
                            <th><span>.....</span> </th>
                            <th><span>
                  <button type="button" class="btn btn-danger btn-xs">Save and Close</button>
                  </span> </th>
                            <th><span class="blu"> &nbsp;</span></th>
                            <th><span>
                  <button type="button" class="btn btn-danger btn-xs">Print your Plan</button>
                  </span> </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                            <th scope="row">&nbsp; </th>
                        </tr>
                        </tbody>
                    </table>
                    </tbody>
                </div>
            </div>
            <!-- /.col-lg-8 -->
            @include('partials._adminrightpanel')
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>

    <!-- /#page-wrapper -->
    {{-----------DO NOT REMOVE FOR CONTENT FROM BELOW----------------DO ANYTHING ABOVE-------------}}
</div>
</div>

<!-- /#wrapper -->

@endsection
