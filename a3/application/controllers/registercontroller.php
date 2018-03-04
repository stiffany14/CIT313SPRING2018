<?php
class RegisterController extends Controller {

    public $userObject;

    public function defaultTask() {

        $this->userObject = new User();
        $this->set('task', 'add');
    }

    public function add() {

        $this->userObject = new User();
        $data = array(

          'email' => $_POST['email'],

          'password' => $_POST['password'],

          'first_name' => $_POST['firstname'],

          'last_name' => $_POST['lastname']);
          
        $result = $this->userObject->add_user($data);
        $this->set('message', $result);
    }
}
