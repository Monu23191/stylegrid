$(function(){
    $('#submit-request-btn').click(function(){
        var product_name=makeTrim($('#product_name').val());
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