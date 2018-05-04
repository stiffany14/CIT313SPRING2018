<?php
class User extends Model{

    public $uID, $first_name, $last_name, $email;
    protected $user_type;

    //constructor
    public function __construct() {
        parent::__construct();

        if(isset($_SESSION['uID'])) {

            $userInfo = $this->getUserFromID($_SESSION['uID']);

            $this->uID = $userInfo['uID'];
            $this->first_name = $userInfo['first_name'];
            $this->last_name = $userInfo['last_name'];
            $this->email = $userInfo['email'];
            $this->user_type = $userInfo['user_type'];
        }
    }

    public function getUserName() {

        return $this->first_name . " " . $this->last_name;
    }

    public function getEmail() {

        return $this->email;
    }

    public function isRegistered() {

        if(isset($this->user_type)) {
            return true;
        } else {
            return false;
        }
    }

    public function isAdmin() {

        if($this->user_type == '1') {
            return true;
        } else {
            return false;
        }
    }

    function getUser($uID){

        $sql =  'SELECT * FROM users WHERE uID = ?';

        // perform query
        $results = $this->db->getrow($sql, array($uID));

        $user = $results;

        return $user;
    }

    public function getAllUsers($limit = 0){

        //if numposts isnt set, set it to ""
        if (!isset($numposts)) {
            $numposts = "";
        }

        if($limit > 0){

            $numposts = ' LIMIT '.$limit;
        }

        $sql =  'SELECT * FROM users'.$numposts;

        // perform query
        $results = $this->db->execute($sql);

        while ($row=$results->fetchrow()) {
            $users[] = $row;
        }

        return $users;
    }

    public function addUser($data){

        $sql='INSERT INTO users (first_name,last_name,email,password) VALUES (?,?,?,?)';
        $this->db->execute($sql,$data);
        $message = 'User added.';
        return $message;
    }

    public function updateUser($data) {
        $fname = $data['first_name'];
        $lname = $data['last_name'];
        $email = $data['email'];
        $password = $data['password'];
        $uID = $data['uID'];

        $sql = "update users set email='$email', password='$password', first_name='$fname', last_name='$lname' where uID = '$uID'";
        $this->db->execute($sql);
        $message = 'User updated.';
        return $message;
    }


    public function checkUser($email, $password) {

        $sql = "SELECT email, password FROM users WHERE email = ?";

        $results = $this->db->getrow($sql, array($email));

        $user = $results;

        $password_db = $user[1];

        if (password_verify($password, $password_db)) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserFromEmail($email) {

        $sql = "SELECT * FROM users where email = ?";

        $results = $this->db->getrow($sql, array($email));

        $user = $results;

        return $user;
    }

    public function getUserFromID($uID) {

        $sql = "SELECT * FROM users WHERE uID = ?";

        $results = $this->db->getrow($sql, array($uID));

        $user = $results;

        return $user;
    }

    public function isActive($uID) {

        $sql = "SELECT * FROM users WHERE uID = ?";

        $user = $this->db->getrow($sql, array($uID));

        if ($user['active'] == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function approveUser($uID) {

        $sql = "UPDATE users SET active = '1' WHERE uID = ?";

        $this->db->execute($sql, $uID);

        $message = 'User Approved';

        return $message;
    }

    public function deleteUser($uID) {

        $sql = "DELETE FROM users where uID = ?";

        $this->db->execute($sql, $uID);

        $message = 'User Deleted';

        return $message;
    }
}