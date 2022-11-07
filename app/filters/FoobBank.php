<?php
namespace app\filters;

#[\Attribute]
class Admin extends \app\core\AccessFilter{
	public function execute(){
		if($_SESSION['foodbank_id']){
			header('location:/Login/foodBankLogin?error=You may not access the administration features.');
			return true;
		}
		return false;
	}
}
?>