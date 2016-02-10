<?php
	if(isset($_POST) == true){
		$errors= array();
	    $file_name = $_FILES['doc']['name'];
	    $file_size =$_FILES['doc']['size'];
	    $file_tmp =$_FILES['doc']['tmp_name'];
	    $file_type=$_FILES['doc']['type'];   
	    $file_ext=strtolower(end(explode('.',$_FILES['doc']['name'])));
	    $extensions = array("doc","docx","odt"); 		
	    if(in_array($file_ext,$extensions )=== false){
	    	$errors[]="extension not allowed, please choose a JPEG or PNG file.";
	    }
	    if($file_size > 1048576){
	    	$errors[]='File size grater than 1 MB';
	    }				
	    if(empty($errors)==true){
	    	move_uploaded_file($file_tmp,"images/".$file_name);
	    }else{
	        $myfile = fopen("log.txt", "w") or die("Unable to open file!");
			$txt = implode("\n", $errors);
			fwrite($myfile, $txt);
			fclose($myfile);
	    }
	}
?>
