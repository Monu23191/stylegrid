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
                    <div class="col-8">
                        <h1>Let&apos;s get styling.</h1>
                        <h3>Create a new StyleGrid and send to your clients via PDF or weblink.</h3>
                    </div>
                    <div class="col-4 quick-link text-right">
                        <span class="mr-5"><a hrf="">Quick Link</a></span>
                        <div class="row justify-content-end my-2">
                            <a href="" class="mx-1"><img src="stylist/app-assets/images/icons/Chat.svg" alt=""></a>
                            <a href="" class="mx-1"><img src="stylist/app-assets/images/icons/File Invoice.svg" alt=""></a>
                            <a href="" class="mx-1"><img src="stylist/app-assets/images/icons/Gear.svg" alt=""></a>

                        </div>

                    </div>
                </div>
                <!-------------------- fulfil souring request--------->
                <div id="create-grid" class="mt-5">
                    <div class="row">

                        <div class="col-11">

                            <div class="grid-bg mx-4 mt-3 mb-2 p-4">
                                <a href="grid-design.html">
                                    <h1>STYLEGRID</h1>
                                </a>
                                <div class="row">
                                    <div class="col-lg-6 d-flex align-items-center">
                                        <input type="text" placeholder="Name your grid here..." class="w-100 name-grid">

                                    </div>
                                    <div class="col-lg-6">

                                        <div class="Neon Neon-theme-dragdropbox mt-5 mx-4">
                                            <input name="files[]" id="filer_input2" multiple="multiple" type="file">
                                            <div class="Neon-input-dragDrop py-5 px-4">
                                                <div class="Neon-input-inner py-4">
                                                    <div class="Neon-input-text">
                                                        <h3>Add your feature image here...</h3>
                                                    </div><a class="Neon-input-choose-btn blue"><img
                                                            src="stylist/app-assets/images/icons/plus.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-1 my-auto addcount">
                            <a href="">
                                <div class="blue-bg mt-2">1</div>
                            </a>
                          <!--  <a href="">
                                <div class="gradiant-bg text-center mt-1"><span>2</span></div>
                            </a>-->
                          
                            <a href="">
                                <div class="gradiant-bg text-center mt-1"><span><img
                                            src="stylist/app-assets/images/icons/green-logo.png" class="img-fluid" alt="" onclick="addgrid();">
                                </span></div></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-11">
                            <div class="grid-bg mx-4 px-4 py-2 mb-4">
                                <div class="row">
                                    <div class="col-8">
                                        <h1>STYLEGRID</h1>
                                    </div>
                                    <div class="col-4 text-right"><a href=""><img src="stylist/app-assets/images/icons/Empty-Trash.png"
                                            class="img-fluid" alt=""></a></div>
                                </div>
                                <div class="row add-item">
                                    <div class="col-lg-6 d-flex align-items-center">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="Neon Neon-theme-dragdropbox mt-5">
                                                    <input name="files[]" id="filer_input2" multiple="multiple"
                                                        type="file">
                                                    <div class="Neon-input-dragDrop ">
                                                        <div class="Neon-input-inner py-3">
                                                            <div class="Neon-input-text">
                                                                <h3>Add an item here</h3>
                                                            </div><a class="Neon-input-choose-btn blue"><img
                                                                    src="stylist/app-assets/images/icons/plus.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="Neon Neon-theme-dragdropbox mt-5">
                                                    <input name="files[]" id="filer_input2" multiple="multiple"
                                                        type="file">
                                                    <div class="Neon-input-dragDrop">
                                                        <div class="Neon-input-inner py-3">
                                                            <div class="Neon-input-text">
                                                                <h3>Add an item here</h3>
                                                            </div><a class="Neon-input-choose-btn blue"><img
                                                                    src="stylist/app-assets/images/icons/plus.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2 px-0">
                                                <div class="Neon Neon-theme-dragdropbox mt-2">
                                                    <input name="files[]" id="filer_input2" multiple="multiple"
                                                        type="file">
                                                    <div class="Neon-input-dragDrop no-border p-0">
                                                        <div class="Neon-input-inner ">
                                                            <div class="Neon-input-text d-flex">
                                                                <a class="Neon-input-choose-btn blue mt-1"><img
                                                                        src="stylist/app-assets/images/icons/plus.png"
                                                                        alt=""></a>
                                                                <h3 class="mt-2">Add another block</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 px-5">
                                        <div class="Neon Neon-theme-dragdropbox mt-5">
                                            <input name="files[]" id="filer_input2" multiple="multiple" type="file">
                                            <div class="Neon-input-dragDrop py-5 px-4 mx-3">
                                                <div class="Neon-input-inner py-2">
                                                    <div class="Neon-input-text">
                                                        <h3>Add your feature image here...</h3>
                                                    </div><a class="Neon-input-choose-btn blue"><img
                                                            src="stylist/app-assets/images/icons/plus.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>;
                        </div>
                        <div class="col-1">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------end of fulfil souring request--------->
	   @include("stylist.postloginview.partials.footer.footerjs")
  
<script>
function addgrid()
{
	// alert()
}
</script>
