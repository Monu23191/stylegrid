@extends('stylist.website.layouts.default')
@section('content')
<div class="container-fluid">
</div>
<!-- Navbar -->
  
<div class="container-fluid">
    <div id="signup">
        <div class="row justify-content-center">
            <div class="col-md-6 dis-flex mt-5">
                <div class="signin mt-5">
                <h1>Sign in to your Stylist account</h1>
                <p class="text-center">Please enter your email and password to log in to your StyleGrid stylist
                    account.</p><br>
                <div class="dis-flex ">
                    <div id="message_box" class="message"></div>
                    <form id="stylist-login-form">
                        @csrf
                        <div class="inputbox">
                            <div class="form-group">
                                <input type="text" id="email" name="email">
                                <div id="email_error" class="error"></div>
                                <span>Email Address</span>
                            </div>
                        </div>
                        <div class="inputbox">
                            <div class="form-group">
                                <input type="password" name="password" id="password">
                                <div id="password_error" class="error"></div>
                                <span>Create Password</span>
                            </div>
                        </div>
                        <div><a href="/stylist-forgot-password" class="forgot-pass">
                            <h3>Forgot password?</h3>
                        </a></div>
                        <div class="text-center"><a href="javascript:void(0)"><button class="sign-in px-2" type="button" id="stylist-login-btn">Sign In</button></a>
                        </div>
                        <div class="mt-2"><h5>if you are a client,<a> please click here to <br>sign in.</a></h5></div>
                    </form>
                </div>
            </div>
        </div>
            <div class="col-md-6 mt-2">
                <div>
                    <img src="{{asset('stylist/website/assets/images/login1.png')}}" class="" alt="" style="width:100% ;">
                </div>
            </div>
        </div>

    </div>
</div>
@stop