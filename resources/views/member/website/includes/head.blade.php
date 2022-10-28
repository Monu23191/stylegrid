<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('member/app-assets/vendors/css/vendors.min.css') }}">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('member/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('member/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('member/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('member/app-assets/css/components.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('member/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('member/app-assets/css/core/colors/palette-gradient.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('member/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('member/assets/css/jquery-ui.css') }}">
    <!-- END: Custom CSS-->
</head>

<img id="blah" alt="your image" width="100" height="100" />

<input type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">