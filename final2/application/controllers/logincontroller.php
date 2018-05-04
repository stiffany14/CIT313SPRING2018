<?php

class LoginController extends Controller{

	protected $userObject;

    public function index(){

        $this->userObject = new User();
        $this->set('task', 'do_login');

    }

   public function do_login() {

       $this->userObject = new User();

       $userInfo = $this->userObject->getUserFromEmail($_POST['email']);


       if ($this->userObject->isActive($userInfo['uID']) == false) {
           $this->set('error', 'Account needs to be approved by an admin.');
           return;
       }

       if ($this->userObject->checkUser($_POST['email'],$_POST['password'])) {

           $userInfo = $this->userObject->getUserFromEmail($_POST['email']);

           $_SESSION['uID'] = $userInfo['uID'];

           if(strlen($_SESSION['redirect']) > 0) {
               $view = $_SESSION['redirect'];
               unset($_SESSION['redirect']);

               header ('Location:' . BASE_URL . $view);
           } else {

               header('Location: ' . BASE_URL);

           }

       } else {

           $this->set('error', 'Wrong password or Email combination.');
       }
   }

   public function logout() {

       //unset session id
       unset($_SESSION['uID']);

       //close the session
       session_write_close();

       //send them back to the home page
       header('Location: ' . BASE_URL);
   }
	
	
}