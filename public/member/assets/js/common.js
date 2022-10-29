
var brandList=[];
function selectBrand(brand_id){
    $('#brand').val(brandList[brand_id]);
    $('#autsuggestion_section').html('');
}
$(function(){
    $('#brand').keyup(function(){
        $('#autsuggestion_section').html('');
        var brand_search=$(this).val();
        if(brand_search.length>0){
            $.ajax({
                url : '/get-brands',
                method : "POST",
                data : {
                    'brand_search':brand_search,
                    '_token': constants.csrf_token
                },
                success : function (ajaxresponse){
                    response = JSON.parse(ajaxresponse);
    
                    if (response['status']) {
                        if(response['data'].length>0){
                            brandList=[];
                            var html='';
                            html +='<ul>';
                            for(i=0;i<response['data'].length;i++){
                                html +='<li class="select_brand" onClick="selectBrand('+response['data'][i]['id']+')" id="'+response['data'][i]['id']+'" title'+response['data'][i]['id']+'="">'+response['data'][i]['name']+'</li>';
                                brandList[response['data'][i]['id']]=response['data'][i]['name']
                            }
                            html +='<ul>';
                            $('#autsuggestion_section').html(html);
                        }
                    }
                }
            })
        }
    })

    $('#image_preview_remove').click(function(){
        $("#filer_input2").val('');
        $('#image_preview_remove').hide();
        $("#divImageMediaPreview").html('');
    })
    $("#filer_input2").change(function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = $("#divImageMediaPreview");
            dvPreview.html("");            
           // $($(this)[0].files).each(function () {
                var file = $(this)[0].files;//$(this);                
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = $("<img />");
                        img.attr("style", "width: 150px; height:100px; padding: 10px");
                        img.attr("src", e.target.result);
                        dvPreview.append(img);
                    }
                    //$('#image_preview_remove').show();
                   reader.readAsDataURL(file[0]);                
           // });
        }
    });
    $("#deliver_date" ).datepicker({ minDate: 0});
    $('#submit-request-btn').click(function(){
        $('#submit-request-form input, select ').css('border', '1px solid #ccc');
        var product_name=makeTrim($('#product_name').val());
        var brand=makeTrim($('#brand').val());
        var product_type=makeTrim($('#product_type').val());
        var country=makeTrim($('#country').val());
        var deliver_date=makeTrim($('#deliver_date').val());
        
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
        if(deliver_date==''){
            $('#deliver_date').css('border', '2px solid #cc0000');
            status=false;
        }
        if(status){
            $('#sourceConfirmationPopUp').modal('show');
            return false;
        }else{
		    $('#message-box').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>Please enter the mandatory fields!</div>');
            $(window).scrollTop(0);
        }
        return false;
    })
    $('#add-source-confirm-button').click(function(){
        $.ajax({
            type: 'POST',
            url: '/member-submit-request-post',                
            data: new FormData($("#submit-request-form")[0]),
            async : false,
            cache : false,
            contentType : false,
            processData : false,
            success: function(ajaxresponse) {
                response = JSON.parse(ajaxresponse);
                if (response['status']) {
                    setTimeout(function(){
                        window.location = "/member-submit-request-complete";
                    }, 500);
                } else {
                    $('#message-box').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>' + response['message'] + '</div>');
                    return false;
                }
            }
        });
    })
    $('.accept-offer').click(function(){
        $('#selected_offer_id').val($(this).attr('data-id'));
        $('#acceptOffer').modal('show');
    })
    $('.decline-offer').click(function(){
        $('#decline_offer_id').val($(this).attr('data-id'));
        $('#declineOffer').modal('show');
    })
    
    $('#accept-offer-btn').click(function(){
        var selected_offer_id=$('#selected_offer_id').val();
        if(selected_offer_id>0){
            $.ajax({
                url : '/member-accept-offer',
                method : "POST",
                data : {
                    'selected_offer_id':selected_offer_id,
                    '_token': constants.csrf_token
                },
                success : function (ajaxresponse){
                    response = JSON.parse(ajaxresponse);
                    if (response['status']) {
                        setTimeout(function(){
                            window.location = "/member-offer-accepted";
                        }, 500);
                    }
                }
            })
        }
    })

    $('#decline-offer-btn').click(function(){
        var decline_offer_id=$('#decline_offer_id').val();
        if(decline_offer_id>0){
            $.ajax({
                url : '/member-decline-offer',
                method : "POST",
                data : {
                    'decline_offer_id':decline_offer_id,
                    '_token': constants.csrf_token
                },
                success : function (ajaxresponse){
                    response = JSON.parse(ajaxresponse);
                    if (response['status']) {
                        setTimeout(function(){
                            window.location = "/sourcing";
                        }, 500);
                    }
                }
            })
        }
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