<?php

class LoginController extends Controller {

    protected $userObject;

    public function do_login() {
        $this->userObject = new User();

        if ($this->userObject->check_user($_POST['email'], $_POST['password'])) {
            
            $userInfo = $this->userObject->getUserFromEmail($_POST['email']);
            
            $_SESSION['uID'] = $userInfo['uID'];
            
            header("Location: ".BASE_URL);
        } else {
            $this->set('error', 'Wrong password/email combination');
        }
    }

}