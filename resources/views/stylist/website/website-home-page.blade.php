@extends('stylist.website.layouts.default')
@section('content')
<div class="container-fluid">
</div>
<div class="container">
    <div id="step1">
        <h1>Sign up to StyleGrid</h1>
        <p class="mx-md-5 px-md-5">When you become a StyleGrid member, you’ll enjoy all the benefits of our
            platform
            from your very own
            personal stylist to shopping luxury product on-demand. Enjoy a 30 day free trial for a limited time
            only.</p>
    </div>
    <div class="row my-3 pt-3">
        <div class="col-lg-6 signup-bg-img">
            <div class="layer"></div>
            <div class="text-center mt-5 pt-5 px-4 position-absolute" >
                <h2>Enjoy a 30 day<br> free trial.</h2>
                <p>Create your account today and enjoy a 30 day free trial, with access <br>to a dedicated stylist
                    and exclusive luxury product.</p>
                <div class="mt-4"><a href="{{url('/member-registration')}}"> <button class="signup-btn-1 px-4 py-1">Sign
                            Up</button></a></div>
            </div>
        </div>
        <div class=" col-lg-6 signup-bg-img-1">
            <div class="layer"></div>
            <div class="text-center mt-5 pt-5 px-4 position-absolute w-100">
                <h2>Are you a stylist?<br> Sign up here.</h2>
                <!-- <p>Create your account today and enjoy a 30 day free trial, with access to a dedicated stylist
                    and exclusive luxury product.</p> -->
                <div class="mt-5 pt-4"><a href="{{url('/stylist-registration')}}"> <button class="signup-btn-1 px-4 py-1">Sign
                            Up</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop