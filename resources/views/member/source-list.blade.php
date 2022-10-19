@extends('member.layouts.default')
@section('content')
<!-- BEGIN: Content-->

    <div class="content-wrapper">

        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Revenue, Hit Rate & Deals -->
            <div class="row my-3">
                <div class="col-md-8">
                    <h1>Welcome to your product sourcing overview</h1>
                    <h3>Check the status on your existing sourcing requests or submit a new request.</h3>
                    <div class="mt-3">
                        <a href="member-submit-request"><button class="make-request">Make New Request</button></a>
                    </div>
                </div>
                <div class="col-md-4 quick-link text-right">
                    <span class="mr-5"><a hrf="">Quick Link</a></span>
                    <div class="row justify-content-end my-2 mr-2">
                        <a href="" class="mx-1"><img src="{{ asset('app-assets/images/icons/Chat.svg') }}" alt=""></a>
                        <!-- <a href="" class="mx-1"><img src="app-assets/images/icons/File Invoice.svg" alt=""></a> -->
                        <a href="" class="mx-1"><img src="{{ asset('app-assets/images/icons/Gear.svg') }}" alt=""></a>
                    </div>

                </div>
            </div>
            <!--------------------souring hub--------->
            <div id="browse-soursing" class="mt-lg-5 mt-2">
                <div class="row">
                    <div class="col-lg-6 text-lg-left text-center">
                          <h1>Live Requests</h1>
                          </div>
                    <!-- Pills navs -->
                    <div class="col-lg-6 d-flex justify-lg-content-end justify-content-center">
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
                <div class="row w-100">
                    <div id="TabContent" class="tab-content my-2 w-100">
                        <div class="tab-pane fade active show" id="Fashion_1" role="tabpanel"
                            aria-labelledby="Fashion-tab">
                            <div class="text-center ml-2 add-table-border">
                                <table class="table  w-100 table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-left pl-4">PRODUCT NAME</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Brand</th>
                                            <th scope="col">Destination</th>
                                            <th scope="col">Due Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="d-flex"><span class="dot"></span>Hermes Mini Kelly 22
                                            </td>
                                            <td>N/A</td>
                                            <td>@Beg</td>
                                            <td>Hermes</td>
                                            <td>UAE</td>
                                            <td>31/09/22</td>
                                            <td class="green-color">Offer Received</td>
                                            <td><a href="client-sourcing-offer-received.html"><button class="">View
                                                        Order</button></a></td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex"><span class="dot"></span>Off-White Jordan 4&apos;s
                                            </td>
                                            <td>EU37</td>
                                            <td>Shoes</td>
                                            <td>Off-White</td>
                                            <td>Amina Muaddi</td>
                                            <td>31/09/22</td>
                                            <td class="green-color">3 Offers Received</td>
                                            <td><a href="client-multiple-order-received.html"><button class="">View Order</button></a></td>
                                        </tr>
                                        <tr style="border-bottom: 0px !important;">
                                            <td class="d-flex"><span class="dot"></span>Off-White Jordan 4&apos;s
                                            </td>
                                            <td>N/A</td>
                                            <td>Shoes</td>
                                            <td>Amina Muaddi</td>
                                            <td>USA</td>
                                            <td>31/09/22</td>
                                            <td class="orange-color">Pending</td>
                                          </tr>
                                    </tbody>
                                </table>
                            </div>
                           </div>
                    </div>
                </div>
                <!-----------------new table-------------->
                <div class="row mt-3">
                    <h1 class=" pl-1">Previous Requests</h1>
                </div>
                <div class="row w-100">
                    <div id="TabContent" class="tab-content my-2 w-100">
                        <div class="tab-pane fade active show" id="Fashion_1" role="tabpanel"
                            aria-labelledby="Fashion-tab">
                            <div class="text-center ml-2 add-table-border">
                                <table class="table  w-100 table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-left pl-4">PRODUCT NAME</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Brand</th>
                                            <th scope="col">Destination</th>
                                            <th scope="col">Due Date</th>
                                            <th scope="col">Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="d-flex"><span class="blue-dot"></span>Dior Monogram Hoodie
                                            </td>
                                            <td>N/A</td>
                                            <td>@Beg</td>
                                            <td>Hermes</td>
                                            <td>UAE</td>
                                            <td>31/09/22</td>
                                            <td class="blue-color">Fufilled</td>
                                            <td></td>
                                        </tr>
                                        <tr style="border-bottom: 0px !important;">
                                            <td class="d-flex"><span class="red-dot"></span>Nike Dunk Lows
                                            </td>
                                            <td>EU37</td>
                                            <td>Shoes</td>
                                            <td>Off-White</td>
                                            <td>Amina Muaddi</td>
                                            <td>31/09/22</td>
                                            <td class="red-color">Expired</td>
                                            <td></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--------------------end of souring Hub--------->
        </div>
    </div>
    @stop