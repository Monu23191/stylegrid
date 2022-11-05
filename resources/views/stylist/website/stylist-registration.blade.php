@extends('stylist.website.layouts.default')
@section('content')
<div class="container-fluid">
</div>
<!-- Navbar -->
<form id="stylist-registration-form" action="">
    @csrf

    <!-- One "tab" for each step in the form: -->
    
    <div class="tab">
        <div class="container">
            <div id="signup">
                <div class="row justify-content-center">
                    <h1>Join our stylist network.</h1>
                    <p class="text-center">When you join our platform as a stylist, you’ll join our network of
                        hundreds of other stylists around the world building their fashion, home and beauty
                        businesses using StyleGrid. Get access to our industry-leading platform allowing you to
                        service your current clients while also receiving new clients through our platform every
                        month.

                    </p>
                    <p>All applications will be subject to a vetting process to ensure a secure platform for our
                        members.</p><br>

                </div>
                <div id="first_step_message_box" class="message"></div>
                <div>
                    <h6>Let’s get started.</h6>
                </div>
                <div class="dis-flex mt-4">
                     
                    <div class="inputbox">
                        <div class="form-group">
                            <input type="text" name="full_name" id="full_name">
                            <span>Full Name</span>
                        </div>
                        <div id="full_name_error" class="error"></div>
                    </div>
                    <div class="inputbox">
                        <div class="form-group">
                            
                            <input type="text" name="email" id="email">
                            <div id="email_error" class="error"></div>
                            <span>Email Address</span>
                        </div>
                    </div>
                    <div class="inputbox">
                        <div class="form-group">
                            <input type="text" id="phone" name="phone">
                            <div id="phone_error" class="error"></div>
                            <span>Phone Number</span>
                        </div>
                    </div>

                     

                </div>


            </div>
        </div>
    </div>
    <div class="tab">
        <div class="container">
            <div id="signup">
                <div class="row justify-content-center">
                    <h1>Where are you based?</h1>
                    <p class="text-center">Understanding where you are predominantly based helps us build your
                        business with clients in your region, while also tailoring your StyleGrid experience.
                    </p>
                    <br>

                </div>
                <div>
                    <div id="second_step_message_box" class="message"></div>
                    <div class="form-group input-city mt-2">
                        <select id="country_id" name="country_id" class="form-control icon">
                            <option value="">Select Country</option>
                            <?php
                            foreach($country_list as $country){
                                ?>
                                <option value="<?php echo $country->id;?>"><?php echo $country->country_name;?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="tab">
        <div class="container">
            <div id="signup">
                <div class="row justify-content-center">
                    <h1>Tell us about you.</h1>
                    <p class="text-center">Please give us some detailed information on your styling experience
                        and
                        passions, so we can ensure the right members are ssigned to you.
                </div>
                <div id="third_step_message_box" class="message"></div>
                <div class="dis-flex mt-4">
                        <div class="inputbox-1">
                            <div class="form-group text-center">
                                <label for="">Tell us about your styling experience.</label>
                                <div class="d-flex justify-content-center">
                                <textarea name="styling_experience" id="styling_experience" class="form-control"
                                    placeholder="Type your answer here..."></textarea>
                                    <div class="error" id="styling_experience_error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="inputbox-1">
                            <div class="form-group text-center">
                                <label>Have you worked for a fashion or styling company previously?</label>
                                <div class="d-flex justify-content-center">
                                <textarea name="fashion_styling_brief" id="fashion_styling_brief" class="form-control"
                                    placeholder="Type your answer here..."></textarea>
                                    <div class="error" id="fashion_styling_brief_error"></div>
                            </div>
                            </div>
                        </div>
                        <div class="inputbox-1">
                            <div class="form-group text-center">
                                <label>How many clients, if any, will you service using StyleGrid?</label>
                                <div class="d-flex justify-content-center">
                                <textarea name="client_brief" id="client_brief" class="form-control"
                                    placeholder="Type your answer here..."></textarea>
                                    <div class="error" id="client_brief_error"></div>
                                    </div>
                            </div>
                        </div>
                        <div class="inputbox-1">
                            <div class="form-group text-center">
                                <label for="">Please list some of your fashion and beauty favourite brands
                                    below.</label>
                                    <div class="d-flex justify-content-center">
                                <textarea name="fashion_beauty_brands" id="fashion_beauty_brands" class="form-control"
                                    placeholder="Type your answer here..."></textarea>
                                    <div class="error" id="fashion_beauty_brands_error"></div>
                                    </div>
                            </div>
                        </div>

                        <div class="inputbox-1">
                            <div class="form-group text-center">
                                <label for="">Is your experience in stronger in fashion, home or beauty? List
                                    all if
                                    applicable.</label>
                                    <div class="d-flex justify-content-center">
                                <textarea name="stronger_experience" id="stronger_experience" class="form-control"
                                    placeholder="Type your answer here..."></textarea>
                                    <div class="error" id="stronger_experience_error"></div>
                                    </div>
                            </div>
                        </div>

                     

                </div>


            </div>
        </div>
    </div>
    <div class="tab">
        <div class="container">
            <div id="signup">
                <div class="row justify-content-center">
                    <h1>Which elements of our platform would you use?</h1>
                    <p class="text-center">It’s time to get styling. For us to be able to match you with our
                        members, we will need to find out a little more information about your tastes and style
                        preferences.</p><br>
                </div>
                <div id="fourth_step_message_box" class="message"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-right">
                            <input type="checkbox" name="shop" id="shop" value="shop" checked="true">
                            <label for="shop"></label>
                        </div>
                        <label for="shop">
                            <div class="text-center"><img src="{{asset('stylist/website/assets/images/shop.png')}}" class="img-fluid" alt="">
                                <h2 class="mt-2">Shop</h2>
                                <h5>Sell luxury product that you can to StyleGrid members around the world, including your own clients,
                                </h5>
                                <button class="select-btn mt-2 " type="button">Select</button>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <div class="text-right">
                            <input type="checkbox" name="style" id="style" value="style">
                            <label for="style"></label>
                        </div>
                        <label for="style">
                            <div class="text-center"><img src="{{asset('stylist/website/assets/images/style.png')}}" class="img-fluid" alt="">
                                <h2 class="mt-2">Style</h2>
                                <h5>Deliver personalised luxury fashion, beauty and homeware style advice all in one place.
                                </h5>
                                <button class="select-btn mt-2 " type="button">Select</button>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <div class="text-right">
                            <input type="checkbox" name="source" id="source" value="source">
                            <label for="source"></label>
                        </div>
                        <label for="source">
                            <div class="text-center"><img src="{{asset('stylist/website/assets/images/source.png')}}" class="img-fluid" alt="">
                                <h2 class="mt-2">Source</h2>
                                <h5>Source any item from around the globe using our expansive shopper network.</h5>
                                <button class="select-btn mt-2 " type="button">Select</button>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="success_tab" style="display:none;">
        <div class="container">
            <div id="signup-1">
                <div class="row justify-content-center">
                    <h1>Thank you. Your application is now in review.</h1>
                    <p class="text-center">Our team will be in touch within 24 hours to confirm your application
                        and
                        give you access to the StyleGrid platform, where you’ll be able to service and grow your
                        styling business all in one place.</p>
                    <br>
                    <a href="{{url('/stylist-registration')}}" class="mt-5"><button class="back-to px-5">Return to Home</button></a>
                </div>

            </div>

        </div>
    </div>
    </div>
    <div style="overflow:auto;"  id="next-previous">
        <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;" id="steps-next-previous">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        
    </div>
</form>
@stop