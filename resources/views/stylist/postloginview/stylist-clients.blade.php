@include("stylist.postloginview.partials.header.header")
@include("stylist.postloginview.partials.navigate.navigate")
<div class="app-content content bg-white">
    <div class="content-wrapper">

        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Revenue, Hit Rate & Deals -->
            <div class="row client-margin-top">
                <div class="col-8">
                    <h1>Browse your client base.</h1>
                    <h3>See all your clients at a glance and their purchase data.</h3>
                </div>
                <div class="col-4 quick-link text-right">
                    <span class="mr-5"><a hrf="">Quick Link</a></span>
                    <div class="row justify-content-end my-2">
                        <a href="" class="mx-1"><img src="{{asset('stylist/app-assets/images/icons/Chat.svg')}}" alt=""></a>
                        <a href="" class="mx-1"><img src="{{asset('stylist/app-assets/images/icons/File Invoice.svg')}}" alt=""></a>
                        <a href="" class="mx-1"><img src="{{asset('stylist/app-assets/images/icons/Gear.svg')}}" alt=""></a>

                    </div>

                </div>
            </div>
            <div class="row client-margin-top">
                <div class="col-8">
                    <h1>Current Clients</h1>
                </div>
                <div class="col-4 text-right">
                    <a href=""><button class="add-new-client-btn">Add New Client</button></a>
                </div>
            </div>
            <!-------------------- client-page--------->
            <div id="client-page" class="mt-2">
                <div class="client-border">
                    <div class=" border-bottom-client">
                        <div class="row px-3 py-2">
                            <h6 class="mt-1 col-2">46 Clients</h6>
                            <div class="img-bg col-lg-1 col-2"><img src="{{asset('stylist/app-assets/images/icons/client1.png')}}" class="img-fluid"
                                    alt="">
                                <img src="{{asset('stylist/app-assets/images/icons/client2.png')}}" class="img-fluid ml-1" alt="">
                            </div>
                            <div class="col-lg-3 col-3">
                                <div class="search-container ml-1">
                                <form action="/action_page.php">
                                    <button type="submit"><img src="{{asset('stylist/app-assets/images/icons/gray-search-icon.png')}}"
                                            class="img-fluid ml-1" alt=""></button>
                                    <input type="text" placeholder="Search anything" name="search "
                                        class="roboto-font-family search-anyting">

                                </form>
                            </div>
                            </div>
                            <div class="margin-left-sort col-lg-6 col-5">
                                <span>Sort by:</span>
                                <span class="active">Name</span>
                                <span>Location</span>
                                <span>Interest</span>
                                <span>Spend</span>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <table class="table  borderless table-responsive">
                            <thead>
                              <tr>
                                <th scope="col" class="pl-3">Logo</th>
                                <th scope="col">Name Company</th>
                                <th scope="col">Location</th>
                                <th scope="col">Interest</th>
                                <th scope="col"  class="text-left pl-2">Services</th>
                                <th scope="col"  class="text-center">Open Grids</th>
                                <th scope="col" class="text-center">Controls</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row"><img src="{{asset('stylist/app-assets/images/gallery/client-img-1.png')}}" class="img-fluid" alt=""></th>
                                <td>Carrie Alexander<br><span>Account Manager</span></td>
                                <td>UK</td>
                                <td>Fashion</td>
                                <td  class="">Shop | Style</td>
                                <td  class="text-center">10</td>
                                <td  class="text-center"><img src="{{asset('stylist/app-assets/images/gallery/control1.png')}}" class="margin-left-img" alt="">
                                    <img src="{{asset('stylist/app-assets/images/gallery/control2.png')}}" class="margin-left-img" alt="">
                                    <img src="{{asset('stylist/app-assets/images/gallery/control3.png')}}"class="margin-left-img" alt=""></td>
                              </tr>
                              <tr>
                                <th scope="row"><img src="{{asset('stylist/app-assets/images/gallery/client-img-2.png')}}" class="img-fluid" alt=""></th>
                                <td>Gabriel Hart<br><span>Account Manager</span></td>
                                <td>UAE</td>
                                <td>Fashion</td>
                                <td  class="">Shop | Style | Source</td>
                                <td  class="text-center">10</td>
                                <td  class="text-center"><img src="{{asset('stylist/app-assets/images/gallery/control1.png')}}" class="margin-left-img" alt="">
                                    <img src="{{asset('stylist/app-assets/images/gallery/control2.png')}}" class="margin-left-img" alt="">
                                    <img src="{{asset('stylist/app-assets/images/gallery/control3.png')}}"class="margin-left-img" alt=""></td>
                              </tr>
                              <tr>
                                <th scope="row"><img src="{{asset('stylist/app-assets/images/gallery/client-img-3.png')}}" class="img-fluid" alt=""></th>
                                <td>Virginia Roberson<br><span>Account Manager</span></td>
                                <td>UKSA</td>
                                <td>Fashion | Home</td>
                                <td  class="">Style</td>
                                <td  class="text-center">10</td>
                                <td  class="text-center"><img src="{{asset('stylist/app-assets/images/gallery/control1.png')}}" class="margin-left-img" alt="">
                                    <img src="{{asset('stylist/app-assets/images/gallery/control2.png')}}" class="margin-left-img" alt="">
                                    <img src="{{asset('stylist/app-assets/images/gallery/control3.png')}}"class="margin-left-img" alt=""></td>
                              </tr>
                              <tr>
                                <th scope="row"><img src="app-assets/images/gallery/client-img-4.png" class="img-fluid" alt=""></th>
                                <td>Sallie Chandler<br><span>Account Manager</span></td>
                                <td>Spain</td>
                                <td>Home</td>
                                <td  class="">Source</td>
                                <td  class="text-center">10</td>
                                <td  class="text-center"><img src="{{asset('stylist/app-assets/images/gallery/control1.png')}}" class="margin-left-img" alt="">
                                    <img src="{{asset('stylist/app-assets/images/gallery/control2.png')}}" class="margin-left-img" alt="">
                                    <img src="{{asset('stylist/app-assets/images/gallery/control3.png')}}"class="margin-left-img" alt=""></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include("stylist.postloginview.partials.footer.footerjs")