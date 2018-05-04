<?php

class MembersController extends Controller{

    public $membersObject;

    public function users($uID){

        $this->membersObject = new User();
        $user = $this->membersObject->getUser($uID);
        $this->set('user',$user);

    }

    public function index(){

        $this->membersObject = new User();
        $users = $this->membersObject->getAllUsers();
        $this->set('title', 'The Members View');
        $this->set('users',$users);

    }

    public function profile() {

        $this->membersObject = new User();

        $user = $this->membersObject->getUserFromID($_SESSION['uID']);

        $this->set('user', $user);

    }

    public function update() {

        $this->membersObject = new User();

        $user = $this->membersObject->getUserFromID($_SESSION['uID']);

        if ($_POST['password'] == "") {
            $newpass = $user['password'];
        } else {
            $password = $_POST['password'];
            $passhash = password_hash($password, PASSWORD_DEFAULT);
            $newpass = $passhash;
        }



        $data = array('first_name'=>$_POST['first_name'], 'last_name'=>$_POST['last_name'], 'email'=>$_POST['email'], 'password'=>$newpass, 'uID'=>$_POST['uID']);

        $result = $this->membersObject->updateUser($data);

        $this->set('message', $result);
    }

}
