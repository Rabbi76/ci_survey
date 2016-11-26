<?php
class register_model extends CI_Model
{


    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }
    public function user_register()
    {
        $name= $_POST['name'];
        $email= $_POST['email'];
        $pass= sha1($_POST['pass']);

        $registerArray= array();

        $registerArray['name'] = $name;
        $registerArray['email']= $email;
        $registerArray['password'] = $pass;
        $registerArray['dateJoined'] = date('d/m/y');


        $this->db->insert('user',$registerArray);
        return 1;
    }
}
?>