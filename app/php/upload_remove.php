<?php
	error_reporting(E_ERROR | E_PARSE);
	if (isset($_POST['file'])) {
	    $file = '../../uploads/' . $_POST['file'];
		
	    if(file_exists($file)) {
			unlink($file);
    }
}