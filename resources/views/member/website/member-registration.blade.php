@extends('member.website.layouts.default')
@section('content')

<div class="container-fluid">
    <div class="container">
        <div id="signup">
            <div class="row justify-content-center">
                <h1>Sign up to StyleGrid</h1>
                <p class="text-center">Create your account today and enjoy a 30 day free trial, with access to a dedicated stylist and
                    exclusive luxury product.</p><br>

            </div>
            <div>
                <h6>Let’s get started.</h6>
            </div>
            <div class="dis-flex mt-2">
                <form>
                    <div class="inputbox">
                        <div class="form-group">
                            <input type="text" required="required">
                            <span>Full Name</span>
                        </div>
                    </div>
                    <div class="inputbox">
                        <div class="form-group">
                            <input type="text" required="required">
                            <span>Email Address</span>
                        </div>
                    </div>
                    <div class="inputbox">
                        <div class="form-group">
                            <input type="text" required="required">
                            <span>Phone Number</span>
                        </div>
                    </div>
                    <div class="inputbox">
                        <div class="form-group">
                            <input type="text" required="required">
                            <div>
                                <span>Create Password</span>
                            </div>
                        </div>
                    </div>

</form>
            </div>

            
        </div>
    </div>

</div>
<div class="text-right mr-5 ">
    <a href="signup-1.html"><button type="submit" class="next-btn">Next</button></a>
</div>
@stop