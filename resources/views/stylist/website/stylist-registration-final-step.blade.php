@extends('stylist.website.layouts.default')
@section('content')
<div class="container-fluid">
</div>
<form id="stylist-registration-final-step-form" action="">
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
        <div class="container">
            <div id="signup">
                <div class="row justify-content-center">
                    <h1>Welcome to StyleGrid.</h1>
                    <p class="text-center">Congratulations on your successful application. You are now officially
                        part of our global stylist network. Fill in a few details so we can make your profile
                        informative for members. </p>
                </div>
                <div id="first_step_message_box" class="message"></div>
                <div>
                    <h6>Let’s get started.</h6>
                </div>
                <div class="dis-flex mt-5">
                     
                        <div class="inputbox">
                            <div class="form-group">
                                <input type="text" name="user_name" placeholder="Create username...">
                                <div id="user_name_error" class="error"></div>
                            </div>
                        </div>
                        <div class="inputbox">
                            <div class="form-group">
                                <input type="text" name="email_address" placeholder="Email Address...">
                                <div id="email_address_error" class="error"></div>
                            </div>
                        </div>
                        <div class="inputbox">
                            <div class="form-group">
                                <input type="text" name="phone_number" placeholder="Phone Number...">
                                <div id="phone_number_error" class="error"></div>
                            </div>
                        </div>
                        <div class="inputbox">
                            <div class="form-group">
                                <input type="text" id="password" name="password" placeholder="Create Password..." >
                                <div id="password_error" class="error"></div>
                            </div>
                        </div>

                        <div class="inputbox">
                            <div class="form-group">
                                <input type="text" id="confirm_password" name="confirm_password"  placeholder="Create confirm Password..." >
                                <div id="confirm_password_error" class="error"></div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab">
        <div class="container mt-4">
            <div id="signup">
                <div class="row justify-content-center">
                    <h1>Add some information about yourself.</h1>
                    <p class="text-center">Build your stylist profile by adding a profile picture, short bio and
                        some of your favourite brands. This will be visible to Stylegrid members and your clients.
                    </p>
                    <br>
                    <div id="second_step_message_box" class="message"></div>
                </div>
                <div class="row">
                    <div class="col-lg-6"> <div class="Neon Neon-theme-dragdropbox mt-5">
                        <input name="files[]" id="filer_input2" multiple="multiple" type="file">
                        <div class="Neon-input-dragDrop py-5 px-4">
                            <div class="Neon-input-inner py-4">
                                <div class="Neon-input-text ">
                                    <h3>Upload your profile picture here</h3>
                                </div><a class="Neon-input-choose-btn blue"><img
                                        src="{{asset('/app-assets/images/icons/plus.png')}}" alt=""></a>
                            </div>
                        </div>
                    </div></div>
                    <div class="col-lg-6">
                       
                            <div class="inputbox-1 mt-5">
                                <div class="form-group text-center">
                                  
                                    <div class="d-flex justify-content-center">
                                        <textarea name="" id="" class="form-control"
                                            placeholder="Type your short bio here"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="inputbox-1 mt-5">
                                <div class="form-group text-center">
                                    <div class="d-flex justify-content-center">
                                        <input type="text" name="" id="" class="form-control"
                                            placeholder="Add your favourite brands here">
                                    </div>
                                </div>
                            </div>
                            <div class="inputbox-1 mt-5">
                                <div class="form-group text-center">
                                    <div class="d-flex justify-content-center">
                                        <input type="text" name="" id="" class="form-control"
                                        placeholder="Add your preferred style type/s here">
                                    </div>
                                </div>
                            </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab">
        <div class="container my-lg-5 py-lg-5">
            <div id="signup-1">
                <div class="row justify-content-center">
                    <h1>Your account is now live!</h1>
                    <p class="text-center pt-3">Your account is now created and is now live. Jump straight in and
                        start
                        using the StyleGrid dashboard to grow your styling business and service your clients below.
                    </p>
                    <br>
                    <a href="{{url('stylist-login')}}" class="mt-5"><button class="back-to px-5 py-1">Log into your stylist
                            account</button></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div style="overflow:auto;" id="next-previous">
        <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrevStep(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrevStep(1)">Next</button>
        </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;" id="steps-next-previous">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>
</form>
@stop