<?php
namespace app\filters;

#[\Attribute]
class Admin extends \app\core\AccessFilter{
	public function execute(){
		if($_SESSION['gleaner_id']){
			header('location:/Login/gleanerLogin?error=You may not access the administration features.');
			return true;
		}
		return false;
	}
}
?>