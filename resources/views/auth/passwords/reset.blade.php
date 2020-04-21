@extends('auth.master')

@section('css')
    <link href="{{ asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/pages/css/login-4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<style>
    .login .content .forget-password {margin-top: 10px;}
    div#LoginCaptcha_CaptchaDiv { 
        background: white;
        width: 100%!important;
        padding: 10px!important;
        height: auto!important;
    }
    div#ResetPasswordCaptcha_CaptchaDiv { 
        background: white;
        width: 100%!important;
        padding: 10px!important;
        height: auto!important;
    }
    .login-box-- {
        background: rgba(255, 255, 255, .7);
        border-radius: 10px!important;
        box-shadow: 0 0 10px rgba(51, 51, 51, 0.3);
    }
    .login-box-- .logo-default-login {
        margin:auto;
    }
    #CaptchaCode {
        padding-left: 10px;
    }
    @media (max-width:767px){
        .login .content {
            width:90%;
            margin-bottom: 60px;
        }
        .login .content h3 {
            font-size: 16px;
        }
    }
</style>
<div class="logo">
    <!-- <a href="#">
        <img src="{{ asset('assets/global/img/logo.png') }}" alt="logo-mina-indonesia" width="100"/> 
    </a> -->
</div>
<div class="content login-box--">
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="login-form" method="post" action="{{ url('forgot-password-send-email') }}" enctype="multipart/form-data">
    {{csrf_field()}}
        <h3>Lupa Password ?</h3>
        <p> Masukan alamat email anda dibawah ini untuk memperbarui kata sandi akun anda. </p>
        @if(session()->has('err_message'))
            <div class="alert alert-danger alert-dismissible" role="alert" auto-close="10000">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ session()->get('err_message') }}
            </div>
        @endif
        @if(session()->has('succ_message'))
            <div class="alert alert-success alert-dismissible" role="alert" auto-close="10000">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ session()->get('succ_message') }}
            </div>
        @endif
        <div class="form-group">
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="Email" name="email" required/> 
            </div>
        </div>
        <div class="form-group{{ $errors->has('CaptchaCode') ? ' has-error' : '' }}">
            <div class="input-icon">
                {!! captcha_image_html('ResetPasswordCaptcha') !!}
                <input type="text" class="form-control" name="CaptchaCode" id="CaptchaCode" required>

                @if ($errors->has('CaptchaCode'))
                    <span class="help-block">
                        <strong>{{ $errors->first('CaptchaCode') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-actions">
            <a href="{{ url('login') }}" type="button" class="btn red btn-outline">Back </a>
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