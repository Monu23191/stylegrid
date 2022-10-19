@include('member.includes.head') 
@include('member.includes.header')
@include('member.includes.left-nav')
<div class="app-content content bg-white">
    @yield('content')
</div>
@include('member.includes.footer')
