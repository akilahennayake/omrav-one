@extends('main')
@section('title','login')
@section('content')
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

    @endsection
