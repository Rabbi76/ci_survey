<?php
class login_model extends CI_Model
{


    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('session');
    }
    public function user_login()
    {

        $email= $_POST['email'];
        $pass= sha1($_POST['pass']);

        $this->db->select('id,name,email');
        $this->db->where('email',$email);
        $this->db->where('password',$pass);
        $result=$this->db->get('user')->row_array();

        $session_data=array();
        $session_data['logged_in']  = true;
        $session_data['id']         = $result['id'];
        $session_data['users_name']       = $result['name'];
        $session_data['email']      = $result['email'];

        $this->session->set_userdata($session_data);
        return $result;
    }
    public function test_login()
    {

        $email= "hpz321@gmail.com";
        $pass= "7c4a8d09ca3762af61e5";

        $this->db->select('id,name,email');
        $this->db->where('email',$email);
        $this->db->where('password',$pass);
        $result=$this->db->get('user')->row_array();

        $session_data=array();
        $session_data['logged_in']  = true;
        $session_data['id']         = $result['id'];
        $session_data['name']       = $result['name'];
        $session_data['email']      = $result['email'];
        $this->session->set_userdata($result);

        return $result;
    }
    function admin_login()
    {
        $username=$_POST['email'];
//        $username=$_POST['username'];
        $password=md5($_POST['pass']);
        $this->db->select('id,username,email');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        if($result=$this->db->get('admin')->row_array())
        {
            $session_data=array();
//            $session_data['logged_in']  = true;
            $session_data['admin']  = true;
            $session_data['admin_id']         = $result['id'];
            $session_data['username']       = $result['username'];
            $session_data['email']      = $result['email'];
            $this->session->set_userdata($session_data);
            return $result;
        }else return false;

    }
    function vendor_login()
        {


            $username=$_POST['email'];
            //$username=$_POST['username'];

            $password=md5($_POST['pass']);
            $this->db->select('id,username,email,name,company');
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            if($result=$this->db->get('vendor')->row_array())
            {
                $session_data=array();
//                $session_data['logged_in']  = true;
                $session_data['vendor_id']         = $result['id'];
                $session_data['vendor']       = $result['username'];
                $session_data['vendors_name']       = $result['name'];
                $session_data['company']       = $result['company'];
                $session_data['email']      = $result['email'];
                $this->session->set_userdata($session_data);
                return $result;
            }else return false;

        }

    }
	
?>