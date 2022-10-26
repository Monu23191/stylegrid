@extends('member.layouts.default')
@section('content')
<div id="create-grid-1" class="mt-2">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="client-grid-img1">
                <div class="layer-1">
                    <div class="row bottom-text">
                        <div class="col-lg-8">
                            <h1 class="px-2 py-2">Georgia&apos;s Ibiza Grid</h1>
                        </div>
                        <div class="col-lg-4 text-center">
                            <a href="{{ url('/member-grid-details') }}"><button class="go-to-grid-btn mt-lg-4 mb-lg-0 mb-2">Go to
                                    Grid</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-md-0 mt-2 col-12">
            <div class="grid-img2">
                <div class="layer-1">
                    <div class="row bottom-text">
                        <div class="col-lg-8">
                            <h1 class="px-2 py-2">Georgia&apos;s London Grid</h1>
                        </div>
                        <div class="col-lg-4 text-center">
                            <a href="{{ url('/member-grid-details') }}"><button class="go-to-grid-btn mt-lg-4 mb-lg-0 mb-2">Go to
                                    Grid</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-2 mt-lg-0 col-12">
            <div class="grid-img3">
                <div class="layer-1">
                    <div class="row bottom-text">
                        <div class="col-lg-8">
                            <h1 class="pl-2 py-2">Carla&apos;s Paris Grid</h1>
                        </div>
                        <div class="col-lg-4 text-center">
                            <a href="{{ url('/member-grid-details') }}"><button class="go-to-grid-btn mt-lg-4 mb-lg-0 mb-2">Go to Grid</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-2 col-12">
            <div class="client-grid-img2">
                <div class="layer-1">
                    <div class="row bottom-text">
                        <div class="col-lg-8">
                            <h1 class="pl-2 py-2">Georgia&apos;s Evening Grid</h1>
                        </div>
                        <div class="col-lg-4 text-center">
                            <a href="{{ url('/member-grid-details') }}"><button class="go-to-grid-btn mt-lg-4 mb-lg-0 mb-2">Go to Grid</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-2 col-12">
            <div class="client-grid-img3">
                <div class="layer-1">
                    <div class="row bottom-text">
                        <div class="col-lg-8">
                            <h1 class="pl-2 py-2">Georgia&apos;s Mykonos Grid</h1>
                        </div>
                        <div class="col-lg-4 text-center">
                            <a href="{{ url('/member-grid-details') }}"><button class="go-to-grid-btn mt-lg-4 mb-lg-0 mb-2">Go to Grid</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-2 col-12">
            <div class="client-grid-img4">
                <div class="layer-1">
                    <div class="row bottom-text">
                        <div class="col-lg-8">
                            <h1 class="pl-2 py-2">Georgia&apos;s Skiing Grid</h1>
                        </div>
                        <div class="col-lg-4 text-center">
                            <a href="{{ url('/member-grid-details') }}"><button class="go-to-grid-btn mt-lg-4 mb-lg-0 mb-2">Go to Grid</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop