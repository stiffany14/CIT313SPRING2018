<?php
class controller {
    public $load;
    public $model;

    function __construct() {
        $this->load = new Load();
        $this->user = new User();
        $this->home();
    }

    function home() {
        $data = $this->user->getName('stiffany', 'Shelby', 'Tiffany', 'shelbytiffany14@yahoo.com', 'Admin');
        $this->load->view('view.php',$data);
    }


}
?>
