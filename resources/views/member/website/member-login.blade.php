@extends('member.website.layouts.default')
@section('content')
<div class="container-fluid">
    <div id="signup">
        <div class="row justify-content-center">
            <div class="col-md-6 dis-flex mt-5">
                <div class="signin mt-5">
                <h1>Sign in to your Member account</h1>
                <p class="text-center">Please enter your email and password to log in to your Member stylist
                    account.</p><br>


                <div class="dis-flex ">
                    <div id="message_box" class="message"></div>
                    <form id="member-login-form">
                        @csrf
                        <div class="inputbox">
                            <div class="form-group">
                                <input type="text" name="email" id="email">
                                <div id="email_error" class="error"></div>
                                <span>Email Address</span>
                            </div>
                        </div>
                        <div class="inputbox">
                            <div class="form-group">
                                <input type="password" name="password" id="password">
                                <div id="password_error" class="error"></div>
                                <span>Password</span>
                            </div>
                        </div>
                        <div><a href="" class="forgot-pass">
                            <h3>Forgot password?</h3>
                        </a></div>
                        <div class="text-center"><a href="javascript:void(0);"><button type="button" class="sign-in px-2" id="member-login-btn">Sign In</button></a>
                        </div>
                        <div class="mt-2"><h5>if you are a member,<a href="{{url('/member-registration')}}"> please click here to <br>sign in.</a></h5></div>
                    </form>
                </div>
            </div>
        </div>
            <div class="col-md-6 mt-2">
                <div>
                    <img src="{{ asset('member/website/assets/images/login2.png') }}" class="" alt="" style="width:100% ;">
                </div>
            </div>
        </div>

    </div>
</div>
@stop