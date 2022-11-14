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
    <nav class="navbar navbar-expand-lg navbar-dark d-flex">
   
     <div class="col-3 d-lg-flex   d-none justify-content-center">
        <div><img src="{{ asset('member/website/assets/images/user.png')}}" alt="" class="pr-4"></div>
        <div><img src="{{ asset('member/website/assets/images/flag.png')}}" alt="" class=""></div>
        <div><img src="{{ asset('member/website/assets/images/polygon.png')}}" alt="" class="px-2"></div>
            <select class="browser-default  d-lg-block d-none" >
            <option></option>
                <option selected>English</option>
                <option value="1">Spanish</option>
            </select>
        
        </div>
        <div class="col-6 text-center">
            <a class="navbar-brand " href="{{url('/')}}"><img src="{{ asset('member/website/assets/images/STYLEGRID-LOGO.png')}}" alt=""></a>
        </div>      
        <div class="d-lg-flex d-none col-3">
            <div class="form-group has-search col-6">
                <img src="{{ asset('member/website/assets/images/search.png')}}" alt="" class="px-2">
                <input type="text" class="form-control mt-2" placeholder="Search">
            </div>
            <div>
                <img src="{{ asset('member/website/assets/images/beg.png')}}" alt="" class="h-25 mx-2 mt-4">
            </div>
            <div>
                <img src="{{ asset('member/website/assets/images/star.png')}}" alt="" class="h-25 ml-4 mt-4">
            </div>
        </div>
        <a class="d-lg-none d-block collapsed" data-toggle="collapse" href="#navbarSupportedContent">
            <span class="if-collapsed"><span class="text-black">&#9776;</span></span>
            <span class="if-not-collapsed">
                <span class="text-black">&#9747;</span>
            </span>
        </a>
  </nav>

    <!--Second navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse mr-lg-5 pr-lg-5 justify-content-lg-end" id="navbarSupportedContent">
            <ul class="navbar-nav ">
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
                <li class="px-3 nav-item py-2"><a href="{{url('/member-login')}}" class="nav-link">SIGN IN</a></li>
                <li class="px-3 nav-item py-2"><a href="{{url('/sign-up')}}" class="nav-link"><button class="signup-btn py-1">Sign
                            Up</button></a></li>
            </ul>
        </div>
    </nav>