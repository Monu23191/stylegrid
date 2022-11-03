<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" >
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('member/website/assets/css/bootstrap.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('member/website/assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" href="{{ asset('member/website/assets/css/style.css') }}">
</head>
<body>
<nav class="navbar navbar-bg">
        <ul class="nav navbar-nav navbar-left" id="language">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Country <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
        </ul>
        <div class="search-nav">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><img src="{{ asset('member/website/assets/images/search.png') }}" alt="">
                        <input type="text" placeholder="Search" class="search-input"></a></li>
                <li><a href=""> <img src="{{ asset('member/website/assets/images/star.png') }}" alt=""></a></li>
                <li><a href=""> <img src="{{ asset('member/website/assets/images/beg.png') }}" alt=""></a></li>
            </ul>
        </div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <!-- <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> -->

            </button>
            <div class="mobile-search"><img src="{{ asset('member/website/assets/images/search.png') }}" alt=""></div>
            <div class="brand-mobile">

                <a href="#"><img src="{{ asset('member/website/assets/images/STYLEGRID-LOGO.png') }}" alt=""></a>

            </div>

        </div>
        <div class="brand">
            <a href="#"><img src="{{ asset('member/website/assets/images/STYLEGRID-LOGO.png') }}" alt=""></a>

        </div>

    </nav>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">About <span class="sr-only">(current)</span></a></li>
            <li><a href="#">NEW IN</a></li>
            <li><a href="#">EDITS</a></li>
            <li><a href="#">SHOP</a></li>
            <li><a href="#">STYLE</a></li>
            <li><a href="#">SOURCE</a></li>
            <li><a href="#">MEMBERSHIP</a></li>
            <li><a href="#">BRANDS</a></li>
            <li><a href="#">EDITORIAL</a></li>
            <li><a href="#">SIGN IN</a></li>
            <li><a href="#"><button class="signup-btn">Sign Up</button></a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
