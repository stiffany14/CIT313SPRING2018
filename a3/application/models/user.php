<?php

class User extends model {

    function getUser($uID) {
        $sql = 'SELECT uID, email, first_name, last_name
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

        $sql = 'SELECT uID, email, first_name, last_name
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
}
?>
