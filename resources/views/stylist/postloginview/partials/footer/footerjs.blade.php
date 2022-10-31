</body><!-- BEGIN: Vendor JS-->
<script src="stylist/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="stylist/app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="stylist/app-assets/js/core/app.js" type="text/javascript"></script>
<!-- END: Theme JS-->
<!---->

<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    var constants = {
        current_url:'{{str_replace(URL::to("/"),'',URL::current())}}',
        csrf_token: '{{ csrf_token() }}',
    };
    
  </script>
</html>


