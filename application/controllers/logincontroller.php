<?php

class LoginController extends Controller {

    protected $userObject;

    public function do_login() {
        $this->userObject = new User();
        if ($_POST['location'] != '') {
            $location = $_POST['location'];
        } else {
            $location = BASE_URL;
        }

        if ($this->userObject->check_user($_POST['email'], $_POST['password'])) {

            $userInfo = $this->userObject->getUserFromEmail($_POST['email']);

            $_SESSION['uID'] = $userInfo['uID'];

            if (isset($_SESSION['redirect'])) {
                $view = $_SESSION['redirect'];
                unset($_SESSION['redirect']);
                header('Location: ' . BASE_URL . $view);
            } else {

                header("Location: " . $location);
            }
        } else {
            $this->set('error', 'Wrong password/email combination');
        }
    }

    public function logout() {
        //unset the session id
        unset($_SESSION['uID']);

        //close the session
        session_write_close();

        //send to homepage with message
        $message = urlencode("You have logged out.");
        header('Location: ' . BASE_URL . '?Message=' . $message);
    }

}
