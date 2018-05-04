<?php

class RegisterController extends Controller{

    public $registerObject;

    public function index(){

        $this->registerObject = new User();
        $this->set('task', 'add');


    }

    public function add(){

        $this->registerObject = new User();

        //grab the password from the form
        $password = $_POST['password'];

        $passhash = password_hash($password, PASSWORD_DEFAULT);


        $data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'], 'password'=>$passhash);


        $result = $this->registerObject->addUser($data);

        $this->set('message', $result);


    }

}
