@include("stylist.postloginview.partials.header.header")
@include("stylist.postloginview.partials.navigate.navigate")
<div class="app-content content bg-white">
    <div class="content-wrapper">

        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Revenue, Hit Rate & Deals -->
            <div class="row my-3">
                <div class="col-md-8">
                    <h1>A stylist can fufill your sourcing request</h1>
                    <h3>A stylist has submitted an offer to fufill your item. If you accept, you’ll be able to chat
                        with them and complete the order.</h3>
                </div>
                <div class="col-md-4 quick-link text-right">
                    <span class="mr-5"><a hrf="">Quick Link</a></span>
                    <div class="row justify-content-end mr-2 my-2">
                        <a href="" class="mx-1"><img src="{{asset('stylist/app-assets/images/icons/Chat.svg')}}" alt=""></a>
                        <a href="" class="mx-1"><img src="{{asset('stylist/app-assets/images/icons/File Invoice.svg')}}" alt=""></a>
                        <a href="" class="mx-1"><img src="{{asset('stylist/app-assets/images/icons/Gear.svg')}}" alt=""></a>
                    </div>

                </div>
            </div>
            <!-------------------- fulfil souring request--------->
            <div id="browse-soursing" class="mt-5">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row  text-aligns-center justify-lg-content-start justify-content-center">
                            <h1 class="col-8">Hermes Mini Kelly 20</h1>
                            <h2 class="px-2 mt-1 col-4">Hermes</h2>
                            <!-- <a href="" class=" col-4 text-right mt-2"><button class="request-btn px-3">Make
                                    Request</button></a> -->
                        </div>
                    </div>
                    <!-- Pills navs -->
                    <div class="col-lg-5 d-flex justify-lg-content-end justify-content-center">
                        <ul id="myTab_1" role="tablist" class="nav nav-tabs   flex-sm-row text-center  rounded-nav">
                            <li class="nav-item ">
                                <a id="home-tab" data-toggle="tab" href="#home_1" role="tab" aria-controls="home"
                                    aria-selected="true"
                                    class="nav-link border-0 cyan-blue  font-weight-bold">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a id="Fashion-tab" data-toggle="tab" href="#Fashion_1" role="tab"
                                    aria-controls="Fashion" aria-selected="false"
                                    class="nav-link border-0 cyan-blue font-weight-bold active ">Fashion</a>
                            </li>
                            <li class="nav-item ">
                                <a id="Beauty-tab" data-toggle="tab" href="#Beauty_1" role="tab"
                                    aria-controls="Beauty" aria-selected="false"
                                    class="nav-link border-0 cyan-blue font-weight-bold ">Beauty</a>
                            </li>
                            <li class="nav-item ">
                                <a id="Travel-tab" data-toggle="tab" href="#Travel_1" role="tab"
                                    aria-controls="Travel" aria-selected="false"
                                    class="nav-link border-0 cyan-blue font-weight-bold">Travel</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row" id="fulfill-request">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <div class="border-right1 my-3">
                                <img src="app-assets/images/gallery/fulfill-img.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 text-lg-left text-center">
                            <div class="p-3">
                              
                                <h1>Hermes Mini Kelly 20</h1>
                                <h6>Hermes</h6>
                                <h4 class="mt-3">Price offer: £24,000</h4>
                                <h4>Shipping date: Immediate</h4>
                                <h4>Condition: New</h4>

                                <div class="mt-3">
                                    <label for="">Please select if you are happy to accept or decline the quoted price.</label>
                                </div>
                                <div class="w-100">

                                    <div class="my-2 row justify-lg-content-start justify-content-center">
                                        <div class="ml-2">

                                            <button type="submit" class="accept-btn px-3" data-toggle="modal"
                                                data-target="#accept">Accept
                                                Offer</button>

                                        </div>

                                        <div class="ml-2 mt-md-0 mt-2">

                                            <button type="submit" class="decline-btn px-3" data-toggle="modal"
                                                data-target="#decline">Decline
                                                Offer</button>
                                        </div>
                                    </div>

                                    <p class="mt-2">Please note, if you decline the submitted stylist offer then your ticket will return to pending and be open for other stylists in our network to submit an offer. All offers expire after 48 hours.</p>
                                </div>

                            </div>

                        </div>


                    </div>

                    <!-- Left and right controls -->

                </div>
            </div>
        </div>
    </div>
    <!--  accept Modal -->
    <div class="modal fade" id="accept" tabindex="-1" role="dialog" aria-labelledby="acceptLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content pt-1">
                <div class="mr-2">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-2">
                    <h1>Are you sure you’d like to accept this offer?</h1>
                    <p class="px-3">Once you have accepted this offer you will be able to chat to the stylist who
                        submitted it.
                        They will be shown in your messenger tab and the order can be completed there.</p>
                    <h6>Accept offer?</h6>
                    <div class="row justify-content-center mt-2">
                        <div><a href="client-offer-accepted.html"><button class="accept-btn">Accept
                                    Offer</button></a></div>
                        <div><a href=""><button class="back-btn ml-2" type="button" class="close" data-dismiss="modal" aria-label="Close">Go Back</button></a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--  decline Modal -->
    <div class="modal fade" id="decline" tabindex="-1" role="dialog" aria-labelledby="declineLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content pt-1">
                <div class="mr-2">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-2">
                    <h1>Are you sure you’d like to decline this offer?</h1>
                    <p class="px-3">Once you have declined this offer, your request will return to our fufillment
                        database for
                        other stylists and shoppers to submit offers.</p>
                    <h6>Decline offer?</h6>
                    <div class="row justify-content-center mt-2">
                        <div><a href="client-decline-sourcing.html"><button class="decline-btn">Decline
                                    Offer</button></a></div>
                        <div><a href=""><button class="back-btn ml-2" type="button" class="close" data-dismiss="modal" aria-label="Close">Go Back</button></a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    @include("stylist.postloginview.partials.footer.footerjs")