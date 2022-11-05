
if(constants.current_url=='/stylist-registration'){
  var currentTab = 0;
  showTab(currentTab);
}

function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:

        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}


function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}


        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");
            if (n == 1 && !validateForm()) {
              return false;
            }
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
              addStylist();
              return false;
            }
            showTab(currentTab);
        }

        function validateForm() {
          $('#stylist-registration-form input').css('border', '1px solid #ccc');
          $('.error').html('');
          $('.message').html('');
          var x, y, i, valid = true;
          if(currentTab==0){
            valid = false
            return  setpOneValidation();
          }
          if(currentTab==1){
            valid = false
            return  setpTwoValidation();
          }
          if(currentTab==2){
            valid = false
            return  setpThreeValidation();
          }
          if(currentTab==3){
            valid = false
            return  setpFourValidation();
          }      
          if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; 
        }

function addStylist(){
  $.ajax({
    url : '/add-stylist',
    method : "POST",
    async: false,
    data : $('#stylist-registration-form').serialize(),
    success : function (ajaxresponse){
        response = JSON.parse(ajaxresponse);
        if(response['status']){
          $('#next-previous').remove();
          $('#steps-next-previous').remove();
          $('.success_tab').show();
         // $("#stylist-registration-success-url").prop("href", response['url']);
        }else{
          $('#fourth_step_message_box').html('<div class="alert alert-danger">'+response['message']+'</div>');
          currentTab = currentTab - 1;
          showTab(currentTab);
        }
    }
})
}
function setpOneValidation(){
  $('#stylist-registration-form input ').css('border', '1px solid #ccc');
  $('.error').html('');
  $('.message').html('');
  var full_name=makeTrim($('#full_name').val());
  var email=makeTrim($('#email').val());
  var phone=makeTrim($('#phone').val());

  var status=true;
  if(full_name==''){
    $('#full_name').css('border', '2px solid #cc0000');
    $('#full_name_error').html('Please enter name');
    status=false;
  }
  if(email==''){
    $('#email').css('border', '2px solid #cc0000');
    $('#email_error').html('Please enter Email');

    status=false;
  }else {
    if (!validEmail(email)) {
      $('#email').css('border', '2px solid #cc0000');
      $('#email_error').html('Please enter a valid Email ID');
      status = false;
    }else{
      $.ajax({
        url : '/check-stylist-existance',
        method : "POST",
        async: false,
        data : {
          'key':'email',
          'value':email,
          '_token': constants.csrf_token
        },
        success : function (ajaxresponse){
            response = JSON.parse(ajaxresponse);
            if (!response['status']) {
              $('#email').css('border', '2px solid #cc0000');
              $('#email_error').html('Email Address already exists!');
              status = false; 
            }
        }
    })
    }
  }
  if(phone==''){
    $('#phone').css('border', '2px solid #cc0000');
    $('#phone_error').html('Please enter Phone');
    status=false;
  }else{
    $.ajax({
      url : '/check-stylist-existance',
      method : "POST",
      async: false,
      data : {
        'key':'phone',
        'value':phone,
        '_token': constants.csrf_token
      },
      success : function (ajaxresponse){
          response = JSON.parse(ajaxresponse);
          if (!response['status']) {
            $('#phone').css('border', '2px solid #cc0000');
            $('#phone_error').html('Phone Number already exists!');
            status = false; 
          }
      }
  })
  }
  if(!status){
    $('#first_step_message_box').html('<div class="alert alert-danger">Please enter all the mandatory fields!</div>');
  }
  return status;
}

function setpFourValidation(){
  $('.message').html('');
  var status=true;
  if (!$('#shop').is(':checked') && !$('#style').is(':checked') && !$('#source').is(':checked')) {
    status=false;
  }
  if(!status){
    $('#fourth_step_message_box').html('<div class="alert alert-danger">Please select at least one!</div>');
  }
  return status;
}
function setpThreeValidation(){
  var status=true;
  var styling_experience=makeTrim($('#styling_experience').val());
  //var fashion_styling_brief=makeTrim($('#fashion_styling_brief').val());
  //var client_brief=makeTrim($('#client_brief').val());
  var fashion_beauty_brands=makeTrim($('#fashion_beauty_brands').val());
  var stronger_experience=makeTrim($('#stronger_experience').val());
  if(styling_experience==''){
    $('#styling_experience').css('border', '2px solid #cc0000');
    $('#styling_experience_error').html('This field is required');
    status=false;
  }
  if(fashion_beauty_brands==''){
    $('#fashion_beauty_brands').css('border', '2px solid #cc0000');
    $('#fashion_beauty_brands_error').html('This field is required');
    status=false;
  }
  if(stronger_experience==''){
    $('#stronger_experience').css('border', '2px solid #cc0000');
    $('#stronger_experience_error').html('This field is required');
    status=false;
  }
  if(!status){
    $('#third_step_message_box').html('<div class="alert alert-danger">Please enter all the mandatory fields!</div>');
  }
  return status;
}

function setpTwoValidation(){
  var status=true;
  if($("#country_id").val()==''){
    status=false;
    $('#second_step_message_box').html('<div class="alert alert-danger">Please select your country!</div>');
  }
  return status;
}

function setpFiveValidation(){
  var status=true;
  var total_selected_brand=$('.brand_list_check').filter(':checked').length;
  if(total_selected_brand==0){
    status=false;
    $('#fifth_step_message_box').html('<div class="alert alert-danger">Please select at least one brand!</div>');
  }
  return status;
}

function makeTrim(x) {
  if (x) {
      return x.replace(/^\s+|\s+$/gm, '');
  } else {
      return x;
  }
}
function validEmail(email) {
  var re = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  return re.test(email);
}