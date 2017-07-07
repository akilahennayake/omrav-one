@extends('main')
@section('title','Sign Up')
@section('content')
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Register</div>--}}
                {{--<div class="panel-body">--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<section class="section">
    <div class="container">
        <div id="login-overlay " class="modal-dialog">
            <div class="card">
                <div class="modal-header">

                    <h2 class="modal-title text-center" id="myModalLabel">  <i class="fa fa-user fa-fw"></i> Sign up </h2>
                </div>
                <div class="modal-body ">
                    <div class="row">
                        <div class="col-md-12 p-30">
                            <div class="well">
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md">Name</label>
                                    {{--control-label--}}
                                        <div class="col-md">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4">E-Mail Address</label>

                                    <div class="col-md">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4">Password</label>
                                    <div class="col-md">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                <label for="password-confirm" class="col-md">Confirm Password</label>

                                <div class="col-md">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                                </div>

                                <div class="form-group">
                                <div class="col-md-6 col-md-offset-6">
                                <button type="submit" class="btn btn-danger">
                                Register
                                </button>
                                </div>
                                </div>
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
{{--<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">--}}
    {{--{{ csrf_field() }}--}}

    {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
        {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

        {{--<div class="col-md-6">--}}
            {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

            {{--@if ($errors->has('name'))--}}
                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
        {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

        {{--<div class="col-md-6">--}}
            {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

            {{--@if ($errors->has('email'))--}}
                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
        {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

        {{--<div class="col-md-6">--}}
            {{--<input id="password" type="password" class="form-control" name="password" required>--}}

            {{--@if ($errors->has('password'))--}}
                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

        {{--<div class="col-md-6">--}}
            {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--<div class="col-md-6 col-md-offset-4">--}}
            {{--<button type="submit" class="btn btn-primary">--}}
                {{--Register--}}
            {{--</button>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</form>--}}