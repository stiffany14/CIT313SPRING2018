<?php
class User extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function __set($name, $value) {
        $this->$name = $value;
        return;
    }
    public function __get($name) {
        return $this->$name;
    }
    public function __destruct() {

    }
    public function getName($userID, $firstname, $lastname, $email, $role) {
        return array(
            'User ID:'=>$userID,
            'First Name:'=>$firstname,
            'Last Name:'=>$lastname,
            'Email:'=>$email,
            'Role:'=>$role
        );
    }
}
?>
