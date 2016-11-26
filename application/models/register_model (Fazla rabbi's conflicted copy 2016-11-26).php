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
	public function problem()
    {
		$name= $_POST['name'];
        $email= $_POST['email'];
		$company= $_POST['company'];
        $problem= $_POST['login_type'];
        $details= $_POST['description'];

        $registerArray= array();

        $registerArray['name'] = $name;
        $registerArray['email']= $email;
        $registerArray['company'] = $company;
        $registerArray['problem'] = $problem;
        $registerArray['details']= $details;
		$registerArray['active']= TRUE;
		$registerArray['date']= date('y-m-d');

		//echo 'fsdfsdf';
		if($this->db->insert('problem',$registerArray)){
			echo "<script type='text/javascript'>alert('submitted successfully! For reply check your email. Thanks')</script>";
        }else{
            echo "<script type='text/javascript'>alert('failed!')</script>";
        }
        $this->db->insert('problem',$registerArray);
        return 1;
        
    }
}
?>