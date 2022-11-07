<?php
namespace app\filters;

#[\Attribute]
class Admin extends \app\core\AccessFilter{
	public function execute(){
		if($_SESSION['farmer_id']){
			header('location:/Login/farmerLogin?error=You may not access the administration features.');
			return true;
		}
		return false;
	}
}
?>