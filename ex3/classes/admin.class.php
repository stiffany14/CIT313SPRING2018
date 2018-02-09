<?php
class Admin extends User {

    public function __construct($user_level, $user_id) {
        parent::__construct($user_level, $user_id);
        $this->user_id = $user_id;
        $this->user_type = "2";
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
        return;
    }

    public function __destruct() {
    }

    public static function evaluation($a, $b, $c){
        return ($a + $b)*$c;
    }
}
?>
