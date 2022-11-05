<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('member/website/assets/css/bootstrap.css') }}"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('member/website/assets/css/bootstrap-extended.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('member/website/assets/css/style.css') }}">
</head>
<body>
<!-- Navbar -->
    <!--First navbar-->
    <nav class="navbar navbar-expand-lg
     navbar-dark" style="display:flex ; justify-content:space-between">
        <select class="browser-default custom-select d-lg-block d-none col-1">
            <option selected>English</option>
            <option value="1">Spanish</option>
            <!-- <option value="2">Two</option>
        <option value="3">Three</option> -->
        </select>
        <a class="navbar-brand " href="#"><img src="{{ asset('member/website/assets/images/STYLEGRID-LOGO.png')}}" alt=""></a>
        <div class="d-lg-flex d-none">
            <div class="form-group has-search">
                <img src="{{ asset('member/website/assets/images/search.png')}}" alt="" class="px-2">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <div>
                <img src="{{ asset('member/website/assets/images/beg.png')}}" alt="" class="h-25 mx-2">
            </div>
            <div>
                <img src="{{ asset('member/website/assets/images/star.png')}}" alt="" class="h-25 mx-2">
            </div>
        </div>
        <a class="d-lg-none d-block collapsed" data-toggle="collapse" href="#navbarSupportedContent">
            <!--You can put any valid html inside these!-->
            <span class="if-collapsed"><span>&#9776;</span></span>
            <span class="if-not-collapsed">
                <span>&#9747;</span>
            </span>
        </a>

    </nav>

    <!--Second navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="active nav-item px-3 py-2"><a href="#" class="nav-link">About <span
                            class="sr-only">(current)</span></a></li>
                <li class="px-3 nav-item py-2"><a href="#" class="nav-link">NEW IN</a></li>
                <li class="px-3 nav-item py-2"><a href="#" class="nav-link">EDITS</a></li>
                <li class="px-3 nav-item py-2"><a href="#" class="nav-link">SHOP</a></li>
                <li class="px-3 nav-item py-2"><a href="#" class="nav-link">STYLE</a></li>
                <li class="px-3 nav-item py-2"><a href="#" class="nav-link">SOURCE</a></li>
                <li class="px-3 nav-item py-2"><a href="#" class="nav-link">MEMBERSHIP</a></li>
                <li class="px-3 nav-item py-2"><a href="#" class="nav-link">BRANDS</a></li>
                <li class="px-3 nav-item py-2"><a href="#" class="nav-link">EDITORIAL</a></li>
                <li class="px-3 nav-item py-2"><a href="#" class="nav-link">SIGN IN</a></li>
                <li class="px-3 nav-item py-2"><a href="#" class="nav-link"><button class="signup-btn">Sign
                            Up</button></a></li>
            </ul>
        </div>
    </nav>