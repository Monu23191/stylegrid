@include("stylist.postloginview.partials.header.header")
@include("stylist.postloginview.partials.navigate.navigate")
<meta name="csrf-token" content="{{ csrf_token() }}">
 <!-- BEGIN: Content-->

     <!-- BEGIN: Content-->
    <div class="app-content content bg-white">
        <div class="content-wrapper">

            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Revenue, Hit Rate & Deals -->
                <div class=" mt-lg-3 row">
                    <div class="col-8">
                        <h1>Browse your recent StyleGrid’s.</h1>
                        <h3>Look through all your grids in one place.</h3>
                        <a href=""><button class="grid-btn">Create Grid</button></a>
                    </div>
                    <div class="col-4 quick-link text-right">
                        <span class="mr-lg-5"><a hrf="">Quick Link</a></span>
                        <div class="d-flex justify-content-end my-2">
                            <a href="" class="mx-lg-1"><img src="app-assets/images/icons/Chat.svg" alt=""></a>
                            <a href="" class="mx-1"><img src="app-assets/images/icons/File Invoice.svg" alt=""></a>
                            <a href="" class="mx-lg-1"><img src="app-assets/images/icons/Gear.svg" alt=""></a>

                        </div>

                    </div>
                </div>
                <!-------------------- fulfil souring request--------->
                <div id="create-grid-1" class="mt-2">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="grid-img1">
                                <div class="layer-1">
                                    <div class="row bottom-text my-2 w-100">
                                        <div class="col-8">
                                            <h1 class="ml-2 mt-3">Pablo’s Ibiza Grid</h1>
                                        </div>
                                        <div class="col-4 text-lg-center text-right">
                                            <a href="{{url('loadgridview')}}"><button class="go-to-grid-btn mt-4">Go to
                                                    Grid</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  mt-lg-0 mt-2 col-12">
                            <div class="grid-img2">
                                <div class="layer-1">
                                    <div class="row bottom-text my-2 w-100">
                                        <div class="col-8">
                                            <h1 class="ml-2 mt-3">Georgia&apos;s London Grid</h1>
                                        </div>
                                        <div class="col-4 text-lg-center text-right">
                                            <a href="grid-design-1.html"><button class="go-to-grid-btn mt-4">Go to
                                                    Grid</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  mt-2 mt-lg-0 col-12">
                            <div class="grid-img3">
                                <div class="layer-1">
                                    <div class="row bottom-text my-2 w-100">
                                        <div class="col-8">
                                            <h1 class="ml-2 mt-3">Carla&apos;s Paris Grid</h1>
                                        </div>
                                        <div class="col-4 text-lg-center text-right">
                                            <a href=""><button class="go-to-grid-btn mt-4">Go to Grid</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  mt-2 col-12">
                            <div class="grid-img4">
                                <div class="layer-1">
                                    <div class="row bottom-text my-2 w-100">
                                        <div class="col-9">
                                            <h1 class="ml-2 mt-3">Harry&apos;s Mykonos Grid</h1>
                                        </div>
                                        <div class="col-3 pl-0 text-lg-center text-right">
                                            <a href=""><button class="go-to-grid-btn mt-4">Go to Grid</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  mt-2 col-12">
                            <div class="grid-img5">
                                <div class="layer-1">
                                    <div class="row bottom-text my-2 w-100">
                                        <div class="col-8">
                                            <h1 class="ml-2 mt-3">Max&apos;s Tulum Grid</h1>
                                        </div>
                                        <div class="col-4 text-lg-center text-right">
                                            <a href=""><button class="go-to-grid-btn mt-4">Go to Grid</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  mt-2 col-12">
                            <div class="grid-img6">
                                <div class="layer-1">
                                    <div class="row bottom-text w-100 my-2">
                                        <div class="col-8 ">
                                            <h1 class="ml-2 mt-3">Johan&apos;s Tuscany Grid</h1>
                                        </div>
                                        <div class="col-4 pl-0 text-lg-center text-right ">
                                            <a href=""><button class="go-to-grid-btn mt-4">Go to Grid</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------end of fulfil souring request--------->
	
	
	
    <!--------------------end of fulfil souring request--------->
    <!--  Modal -->
    
	   @include("stylist.postloginview.partials.footer.footerjs")
 