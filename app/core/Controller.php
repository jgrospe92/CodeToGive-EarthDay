<?php
namespace app\core;

class Controller {
    protected function view($path,$data = []) {
        include('app/views/'.$path.'.php');
    }

    // THIS IS FOR SAVING IMAGES, CAN CHANGE FOR ANY OTHER TYPE OF FILE
    protected function saveFile($file){
		$check = getimagesize($file['tmp_name']);
		$allowed_types = ['image/png'=>'png','image/jpeg'=>'jpg'];
		if(in_array($check['mime'],array_keys($allowed_types))){
			$ext = $allowed_types[$check['mime']];
			$filename = uniqid() . "." . $ext;
			move_uploaded_file($file['tmp_name'],'images/'.$filename); // THIS IS THE PATH WHERE THE SAVED FILE WILL GO
		}
		return $filename;
	}
	protected function validate_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
}