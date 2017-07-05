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