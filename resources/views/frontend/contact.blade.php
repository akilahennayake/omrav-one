@extends('main')
@section('title','Contact Us')
@section('content')
<section class="section">
    <div class="container">
        <div class="card p-30 col-md-12">
            <h2><span class="mdc-text-red">Our</span>  Address </h2>
            <div class="contact">

                <div class="col-md-6 col-sm-6">
                    <div class="contact__info p-0">
                        <ul class="rmd-contact-list">
                            <li class="rmd-contact-list__title"><i class="zmdi zmdi-home"></i>New  Office</li>
                            <li><i class="zmdi zmdi-pin"></i> Severna Park, <br>
                                MD 21146</li>
                            <li><i class="zmdi zmdi-phone"></i>308-314-8938</li>
                            <li><i class="zmdi zmdi-email"></i>Omrah</li>
                        </ul>
                        <ul class="rmd-contact-list">
                            <li class="rmd-contact-list__title"><i class="zmdi zmdi-home"></i>My Office</li>
                            <li><i class="zmdi zmdi-pin"></i>Leeton Ridge Mountain <br>
                                CA 94043</li>
                            <li><i class="zmdi zmdi-phone"></i>702-209-6015</li>
                            <li><i class="zmdi zmdi-email"></i>san-jose@Omrah</li>
                        </ul>
                        <div class="contact__social"> <a href="#" class="zmdi zmdi-facebook mdc-bg-indigo-300"></a> <a href="#" class="zmdi zmdi-twitter mdc-bg-cyan-300"></a> <a href="#" class="zmdi zmdi-google mdc-bg-red-300"></a> <a href="#" class="zmdi zmdi-instagram mdc-bg-blue-grey-400"></a> </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <form class="contact__form cnt">
                        <div class="form-group form-group--light form-group--float">
                            <input type="text" class="form-control">
                            <label>Name</label>
                            <i class="form-group__bar"></i> </div>
                        <div class="form-group form-group--light form-group--float">
                            <input type="text" class="form-control">
                            <label>Email Address</label>
                            <i class="form-group__bar"></i> </div>
                        <div class="form-group form-group--light form-group--float">
                            <input type="text" class="form-control">
                            <label>Contact Number</label>
                            <i class="form-group__bar"></i> </div>
                        <div class="form-group form-group--light form-group--float">
                            <textarea class="form-control textarea-autoheight" style="overflow: hidden; word-wrap: break-word; height: 53px;"></textarea>
                            <label>Message</label>
                            <i class="form-group__bar"></i> </div>
                        <small class="mdc-text-white-darker">By sending us your information</small>
                        <div class="m-t-30">
                            <button type="submit" class="btn brn-sm btn-default btn-danger">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection