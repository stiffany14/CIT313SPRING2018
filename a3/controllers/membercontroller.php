<?php
class MemberController extends Controller{

	public $userObject;

   	public function view($uID){
		$this->userObject = new User();
		$user = $this->userObject->getUser($uID);
	  	$this->set('user',$user);
   	}

	public function defaultTask(){

		$this->userObject = new User();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'Members');
		$this->set('users',$users);
	}
}
?>
