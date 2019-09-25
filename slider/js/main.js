jQuery.validator.addMethod("emailCheck", function(value, element) 
{
    if(value == '') 
        return true;
    var temp1;
    temp1 = true;
    var ind = value.indexOf('@');
    var str2=value.substr(ind+1);
    var str3=str2.substr(0,str2.indexOf('.'));
    if(str3.lastIndexOf('-')==(str3.length-1)||(str3.indexOf('-')!=str3.lastIndexOf('-')))
        return false;
    var str1=value.substr(0,ind);
    if((str1.lastIndexOf('_')==(str1.length-1))||(str1.lastIndexOf('.')==(str1.length-1))||(str1.lastIndexOf('-')==(str1.length-1)))
        return false;
    //str = /(^[a-zA-Z0-9]+[\._-]{0,1})+([a-zA-Z0-9]+[_]{0,1})*@([a-zA-Z0-9]+[-]{0,1})+(\.[a-zA-Z0-9]+)*(\.[a-zA-Z]{2,3})$/;
    str = /(^[a-zA-Z0-9]+[\._-]{0,1})+([a-zA-Z0-9]+[\._]{0,1})*@([a-zA-Z0-9]+[-]{0,1})+(\.[a-zA-Z0-9]+)*(\.[a-zA-Z]{2,3})$/;
    temp1 = str.test(value);
    return temp1;
}, "Please enter a valid email.");

$.validator.addMethod("phoneCheck", function(phonenumber, element) {
    phonenumber = phonenumber.replace(/_/g, "");
    phonenumber = phonenumber.replace(/-/g, "");
    return this.optional(element) || phonenumber.match(/^\d{10}$/);
}, "Please enter valid phone number");

$.validator.addMethod("fnameCheck", function(value, element) {
    return this.optional(element) || /^[a-zA-Z!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+$/i.test(value);
}, "First Name must contain only letters and characters");

$.validator.addMethod("lnameCheck", function(value, element) {
    return this.optional(element) || /^[a-zA-Z!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+$/i.test(value);
}, "Last Name must contain only letters and characters");
    
    
function setFormValidation(){
    $("#ckm_form").validate({
        rules:{
            state:"required",
            first_name :{
                required:true,
                fnameCheck:true  
            },
            last_name :{
                required:true,
                lnameCheck:true  
            },
            email_address :{
                required:true,
                email:true,
                emailCheck: true
            },
            primary_phone: {
                required:true,
                phoneCheck: true
            },
            opt_in:"required",
            opt_special_offers:"required",
            TCPA_checkbox:"required",
            "current_situation[]": {
            			required: true
        	},
            zip_code: {
                required: true,
                digits: true,
                maxlength: 5,
                minlength: 5
            },
        },
        messages: {
            TCPA_checkbox: "Please accept the terms.",
              "current_situation[]": "Please select at least one option",
            zip_code: {
                digits: "Please enter valid zipcode",
                maxlength: "Please enter valid zipcode",
                minlength: "Please enter valid zipcode"
            }
        },
        submitHandler: function(form) {
            $("#loading-div-background").show();
            form.submit();
        },
        ignore: ':hidden:not(:checkbox)'
    });
};

$('.prevent').click(function(e){
//    alert();
    e.preventDefault();
});

function isStepFormComplete(currentBtn){
   
    var isComplete = true;
      isComplete = $("#ckm_form").valid();
    
    if(window.stepId && window.stepId != "lf4-step2"){
        if(window.stepId && window.stepId != "lf4-step3"){
            isComplete = $("#ckm_form").valid();
        }
    }


    console.log(isComplete);
    return isComplete;
}

function changeFormWizardStep(currentBtn){
        
    var nextId = $(currentBtn).parents('.tab-pane').next().attr("id");
    $('[href=#'+nextId+']').tab('show');

    var HJ_Step = "";
    var HJ_Step2 = '';
    switch(nextId){
        case "lf4-step2":
            HJ_Step = "/tdn2/fth/amount";
            HJ_Step2 = 'amount';
            break;
        case "lf4-step3":
            HJ_Step = "/tdn2/fth/enrollment_program";
            HJ_Step2 = 'enrollment_program';
            break;
        case "lf4-step4":
            HJ_Step = "/tdn2/fth/state_selection";
            HJ_Step2 = 'state_selection';
            break;
        case "lf4-step5":
            HJ_Step = "/tdn2/fth/name";
            HJ_Step2 = 'name';
            break;
        case "lf4-step6":
            HJ_Step = "/tdn2/fth/email";
            HJ_Step2 = 'email';
            break;
        case "lf4-step7":
            HJ_Step = "/tdn2/fth/phone";
            HJ_Step2 = 'phone';
            break;
        default:    
            HJ_Step = "/tdn2/fth/situation";
            HJ_Step2 = 'situation';
            break;    
    }
    
    hj('vpv', HJ_Step);
    hj('trigger', HJ_Step2);
  
    window.stepId = nextId ;
    
    if (nextId == 'lf4-step2' || nextId == 'lf4-step3') {
        $(".progress").removeClass('hidden');
    }   
}

function onNextClick(){
   var currentBtn = this;
   var stepFormStatus =  isStepFormComplete(currentBtn);
   
   if (stepFormStatus){
       changeFormWizardStep(currentBtn);
   }
}

function onSelectChange(){
        var nextId = $(this).parents('.tab-pane').next().attr("id");
        $('[href=#'+nextId+']').tab('show');
        window.stepId = nextId ;
}

function updateProgressBar(e) {
	
	var step = $(e.target).data('step');
	var percent = (parseInt(step) / 5) * 100;
	
	$('.progress-bar').css({width: percent + '%'});
	$('.progress-bar').text("Step " + step + " of 5");
	
}

function setFormListeners(){
    
    $('select.change').change(onSelectChange);
    $('a[data-toggle="tab"]').on('shown.bs.tab',updateProgressBar);
    $('.next').click(onNextClick);
   
}

function initForm(){
   
   setFormValidation();
   setFormListeners();
};

$(function(){   
  initForm();
});

