<?php
    error_reporting(E_ERROR | E_PARSE);
    include('../src/class.fileuploader.php');
	
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
	
	// export to js
	echo json_encode($data);
	exit;