@include("stylist.postloginview.partials.header.header")
@include("stylist.postloginview.partials.navigate.navigate")
 <!-- BEGIN: Content-->
 <div class="app-content content bg-white">
    <div class="content-wrapper">

        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Revenue, Hit Rate & Deals -->
            <div class="row my-3">
                <div class="col-md-8">
                    <h1>Welcome to your product sourcing hub.</h1>
                    <h3>Submit sourcing requests or fufill sourcing tickets from the live feed.</h3>
                </div>
                <div class="col-md-4 quick-link text-right">
                    <span class="mr-5"><a hrf="">Quick Link</a></span>
                    <div class="row justify-content-end my-2">
                        <a href="" class="mx-1"><img src="{{asset('stylist/app-assets/images/icons/Chat.svg')}}" alt=""></a>
                        <a href="" class="mx-1"><img src="{{asset('stylist/app-assets/images/icons/File Invoice.svg')}}" alt=""></a>
                        <a href="" class="mx-1"><img src="{{asset('stylist/app-assets/images/icons/Gear.svg')}}" alt=""></a>

                    </div>

                </div>
            </div>
            <!--------------------souring hub--------->
            <div id="browse-soursing" class="mt-5">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row  text-aligns-center">
                            <h1 class="col-4">Live Tickets</h1>
                            <h2 class="px-2 mt-1 col-5">1,092 requests this week</h2>
                            <a href="{{url('/stylist-create-source-request')}}" class=" col-3 mt-2"><button class="request-btn px-2">Make Request</button></a>
                        </div>
                    </div>
                    <!-- Pills navs -->
                    <div class="col-lg-4 d-flex justify-content-end mt-lg-0 mt-2">
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
                                        <?php
                                        if(count($source_list)){
                                            foreach($source_list as $source){
                                                ?>
                                                <tr>
                                                    <td class="d-flex"><span class="dot"></span><?php echo $source->p_name;?></td>
                                                    <td><?php echo $source->p_size;?></td>
                                                    <td><?php echo $source->p_type;?></td>
                                                    <td><?php echo $source->name;?></td>
                                                    <td><?php echo $source->country_name;?></td>
                                                    <td><?php echo $source->p_deliver_date;?></td>
                                                    <?php
                                                    if($source->p_status=='Pending'){
                                                        ?>
                                                        <td class="green-color">Open</td>
                                                        <?php
                                                    }else{
                                                        ?>
                                                        <td>
                                                            <?php echo $source->p_status;?>    
                                                        </td>
                                                        <?php
                                                    }
                                                    ?>
                                                    
                                                    <td>
                                                        <?php
                                                        if($source->p_status=='Fulfilled'){
                                                            ?>
                                                            <button class=" ticket-btn">Ticket Closed </button>
                                                            <?php
                                                        }else{
                                                            ?>
                                                            <a href="{{url('stylist-fulfill-source-request/'.$source->p_slug)}}"><button class="px-2">Fufill</button></a>
                                                            <?php
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }else{
                                            ?>
                                            <tr>
                                                <td colspan="5">No Record Found</td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        
                                        <!--
                                        <tr>
                                            <td class="d-flex"><span class="dot"></span>Off-White Jordan 4&apos;s
                                            </td>
                                            <td>EU37</td>
                                            <td>Shoes</td>
                                            <td>Off-White</td>
                                            <td>Amina Muaddi</td>
                                            <td>31/09/22</td>
                                            <td class="green-color">Open</td>
                                            <td><button class="px-2">Fufill</button></td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex"><span class="dot"></span>Off-White Jordan 4&apos;s
                                            </td>
                                            <td>N/A</td>
                                            <td>Shoes</td>
                                            <td>Amina Muaddi</td>
                                            <td>USA</td>
                                            <td>31/09/22</td>
                                            <td class="green-color">Open</td>
                                            <td><button class="px-2">Fufill</button></td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex"><span class="dot"></span>Hermes Mini Kelly 22
                                            </td>
                                            <td>N/A</td>
                                            <td>@Beg</td>
                                            <td>Hermes</td>
                                            <td>UAE</td>
                                            <td>31/09/22</td>
                                            <td class="blue-color">Fufilled</td>
                                            <td><button class=" ticket-btn">Ticket Closed </button></td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex"><span class="blue-dot"></span>Hermes Mini Kelly 22
                                            </td>
                                            <td>N/A</td>
                                            <td>@Beg</td>
                                            <td>Hermes</td>
                                            <td>UAE</td>
                                            <td>31/09/22</td>
                                            <td class="blue-color">Fufilled</td>
                                            <td><button class=" ticket-btn">Ticket Closed </button></td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex"><span class="blue-dot"></span>Hermes Mini Kelly 22
                                            </td>
                                            <td>N/A</td>
                                            <td>@Beg</td>
                                            <td>Hermes</td>
                                            <td>UAE</td>
                                            <td>31/09/22</td>
                                            <td class="blue-color">Fufilled</td>
                                            <td><button class=" ticket-btn">Ticket Closed </button></td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex"><span class="dot"></span>Off-White Jordan 4&apos;s
                                            </td>
                                            <td>EU37</td>
                                            <td>Shoes</td>
                                            <td>Off-White</td>
                                            <td>Amina Muaddi</td>
                                            <td>31/09/22</td>
                                            <td class="green-color">Open</td>
                                            <td><button class="px-2">Fufill</button></td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex"><span class="dot"></span>Off-White Jordan 4&apos;s
                                            </td>
                                            <td>N/A</td>
                                            <td>Shoes</td>
                                            <td>Amina Muaddi</td>
                                            <td>USA</td>
                                            <td>31/09/22</td>
                                            <td class="green-color">Open</td>
                                            <td><button class="px-2">Fufill</button></td>
                                        </tr>
                                        <tr style="border-bottom: 0px !important;">
                                            <td class="d-flex"><span class="dot"></span>Off-White Jordan 4&apos;s
                                            </td>
                                            <td>EU37</td>
                                            <td>Shoes</td>
                                            <td>Off-White</td>
                                            <td>Amina Muaddi</td>
                                            <td>31/09/22</td>
                                            <td class="green-color">Open</td>
                                            <td><button class="px-2">Fufill</button></td>
                                        </tr>
                                        -->
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
</div>
@include("stylist.postloginview.partials.footer.footerjs")