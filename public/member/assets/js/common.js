$(function(){
    $('#submit-request-btn').click(function(){
        $('#submit-request input, select ')
        var product_name=makeTrim($('#product_name').val());
        var status=true;
        if(product_name==''){
            $('#product_name').css('border', '2px solid #cc0000');
            status=false;
        }
        if(status){
            alert('success');
        }else{
            alert('hello');
		    $('#message-box').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>Please enter the mandatory fields!</div>');
        }
        return false;
        message_box
        return false;
        var brand=makeTrim($('#brand').val());
        var product_type=makeTrim($('#product_type').val());
        var country=makeTrim($('#country').val());
        var target_date=makeTrim($('#target_date').val());
        console.log($('#submit-request').serialize());
        
    })
})
function makeTrim(x) {
    if (x) {
        return x.replace(/^\s+|\s+$/gm, '');
    } else {
        return x;
    }
}