$(function(){
    $('#submit-request-btn').click(function(){
        $('#submit-request input, select ')
        var product_name=makeTrim($('#product_name').val());
        var brand=makeTrim($('#brand').val());
        var product_type=makeTrim($('#product_type').val());
        var country=makeTrim($('#country').val());
        var target_date=makeTrim($('#target_date').val());
        
        var status=true;
        if(product_name==''){
            $('#product_name').css('border', '2px solid #cc0000');
            status=false;
        }
        if(brand==''){
            $('#brand').css('border', '2px solid #cc0000');
            status=false;
        }
        if(product_type==''){
            $('#product_type').css('border', '2px solid #cc0000');
            status=false;
        }
        if(country==''){
            $('#country').css('border', '2px solid #cc0000');
            status=false;
        }
        if(target_date==''){
            $('#target_date').css('border', '2px solid #cc0000');
            status=false;
        }
        if(status){
            $.ajax({
				type: 'POST',
				url: '/member-submit-request-post',
				data: $('#submit-request-form').serialize(),
				cache: true,
				success: function(ajaxresponse) {
					response = JSON.parse(ajaxresponse);
                    console.log(response);
					if (response['status']) {
                        $('#message-box').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>' + response['message'] + '</div>');
                        closePopup('message-box');
						setTimeout(function(){
                            window.location = "/";
						}, 5000);
					} else {
                        $('#message-box').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>' + response['message'] + '</div>');
                        return false;
                    }
				}
			});
        }else{
            alert('hello');
		    $('#message-box').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>Please enter the mandatory fields!</div>');
            $(window).scrollTop(0);
        }
        return false;
    })
})
function makeTrim(x) {
    if (x) {
        return x.replace(/^\s+|\s+$/gm, '');
    } else {
        return x;
    }
}
function closePopup(id) {
    $("#" + id).fadeTo(5000, 500).slideUp(500, function() {
        $("#" + id).slideUp(5000);
    });
}