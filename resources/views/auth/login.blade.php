@extends('auth.master')

@section('css')
    <link href="{{ asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/pages/css/login-4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="logo">
    <!-- <a href="#">
        <img src="{{ asset('img/logo.png') }}" alt="logo-mina-indonesia" width="100"/> 
    </a> -->
</div>
<div class="content">
    <form class="login-form" method="POST" action="{{ route('login') }}">
    @csrf
        <h3 class="form-title">Login to your account</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Enter any username and password. </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" required autofocus/>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" required/> 
            </div>
        </div>
        <div class="form-group{{ $errors->has('CaptchaCode') ? ' has-error' : '' }}">
            <div class="input-icon">
                {!! captcha_image_html('LoginCaptcha') !!}
                <input type="text" class="form-control" name="CaptchaCode" id="CaptchaCode">

                @if ($errors->has('CaptchaCode'))
                    <span class="help-block">
                        <strong>{{ $errors->first('CaptchaCode') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn green pull-right"> Login </button>
        </div>
        <div class="forget-password">
            <a href="javascript:;" id="forget-password" style="color:#000000"><u><b> Lupa Password ? </b></u></a>
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="index.html" method="post">
        <h3>Forget Password ?</h3>
        <p> Enter your e-mail address below to reset your password. </p>
        <div class="form-group">
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
        </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn red btn-outline">Back </button>
            <button type="submit" class="btn green pull-right"> Submit </button>
        </div>
    </form>
</div>

@endsection

@section('myscript')

    <script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/pages/scripts/login-4.min.js') }}" type="text/javascript"></script>
@endsection