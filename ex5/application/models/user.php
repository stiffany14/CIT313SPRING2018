<?php

class User extends Model {

    public $uID, $first_name, $last_name, $email;
    protected $user_type;

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
        return $this->first_name. ' ' .$this->last_name;
    }

    public function  getEmail() {
        return $this->email;
    }

    public function isRegistered() {
        if(isset($this->user_type)){
            return true;
        }else{
            return false;
        }
    }
    public function isAdmin() {
        if($this->user_type == '1') {
            return true;
        }else{
            return false;
        }
    }

    public function getUser($uID) {
        $sql = 'SELECT uID, email, first_name, last_name, email, password
                FROM users
                WHERE uID = ?';

        // perform query
        $results = $this->db->getrow($sql, array($uID));

        $user = $results;

        return $user;
    }

    public function getAllUsers($limit = 0) {

        if ($limit > 0) {

            $numposts = ' LIMIT ' . $limit;
        }

        $sql = 'SELECT uID, email, first_name, last_name, email, password
               FROM users' . $numposts;

        // perform query
        $results = $this->db->execute($sql);

        while ($row = $results->fetchrow()) {
            $users[] = $row;
        }

        return $users;
    }

    function add_user($data) {
        $sql = 'INSERT INTO users (email, password, first_name, last_name) VALUES (?,?,?,?)';
        $this->db->execute($sql, $data);
        $message = 'User added.';
        return $message;
    }

    public function check_user($email, $password) {
        $sql = "SELECT email, password FROM users WHERE email = ?";
        $results = $this->db->getrow($sql, array($email));

        $user = $results;

        $password_db = $user[1];

        if (password_verify($password, $password_db)) {
            return true;
        } else {
            return false;
        }

        return $user;
    }

    public function getUserFromEmail($email) {
        $sql = "SELECT * FROM users WHERE email = ?";

        $results = $this->db->getrow($sql, array($email));

        $user = $results;

        return $user;
    }

    public function getUserFromID($uID) {
        $sql = 'SELECT * FROM users Where uID = ?';

        $results = $this->db->getrow($sql, array($uID));

        $user = $results;

        return $user;
    }

}

?>
