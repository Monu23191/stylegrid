<div class="modal" id="sourceConfirmationPopUp" tabindex="-1" role="dialog" aria-labelledby="acceptLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content pt-1">
                    <div class="mr-2">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body py-2">
                        <h1>Are you sure you want to add this source?</h1>
                        <div class="row justify-content-center mt-2">
                            <div><a href="javascript:void(0)" id="add-source-confirm-button"><button class="accept-btn">YES
                                        </button></a></div>
                            <div><a href=""><button class="back-btn ml-2" type="button" class="close" data-dismiss="modal" aria-label="Close">No</button></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body><!-- BEGIN: Vendor JS-->
<script src="{{ asset('stylist/app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('stylist/app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
<script src="{{ asset('stylist/app-assets/js/core/app.js') }}" type="text/javascript"></script>
<!-- END: Theme JS-->
<!---->

<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    var constants = {
        base_url:"{{URL::to('/')}}",
        current_url:'{{str_replace(URL::to("/"),'',URL::current())}}',
        csrf_token: '{{ csrf_token() }}',
    };
    
  </script>
  <script src="{{asset('stylist/assets/js/common.js')}}"></script>

</html>


