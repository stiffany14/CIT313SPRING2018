<?php

class ManageUsersController extends Controller{

    public $userObject;

    public function index() {
        $this->userObject = new User();

        $users = $this->userObject->getAllUsers();

        $this->set('users', $users);
    }

    public function approve() {

        $uID = $_POST['uID'];

        $this->userObject = new User();

        $result = $this->userObject->approveUser($uID);

        $this->set('message', $result);
    }

    public function delete() {

        $uID = $_POST['uID'];

        $this->userObject = new User();

        $result = $this->userObject->deleteUser($uID);

        $this->set('message', $result);
    }

}
