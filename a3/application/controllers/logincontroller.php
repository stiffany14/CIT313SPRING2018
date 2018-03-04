<?php
class LoginController extends Controller{

    public function defaultTask() {
        $this->userObject = new User();
        $this->set('task', 'do_login');
    }

   public function do_login(){


   }


}
