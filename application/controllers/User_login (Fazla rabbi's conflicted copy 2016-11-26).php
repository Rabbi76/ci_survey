<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('login_model');
        $this->load->model('register_model');
		 $this->load->model('vendor_model');
        $this->load->library('session');
    }

    public function index()
    {
        //$this->load->helper('url');
        $header_data= array();
        $baseUrl = base_url();

        $header_data['baseUrl'] =$baseUrl;
        if(isset($_POST['submit'])){
            $register= $this->login_model->user_login();
            if($register){
                if($this->session->all_userdata('logged_in') == true){
                    //$header_data['register'] = $this->session->userdata();
                     redirect(base_url()."user");
                }

            }
        }


        $output = $this->load->view('login/user_login',$header_data,True);
        $this->output->set_output($output);
    }
    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('__ci_last_regenerate');
        $this->session->sess_destroy();
        $baseUrl = base_url();
        redirect($baseUrl);
    }
    public function register()
    {
        $header_data= array();
        if(isset($_POST['submit'])){
            $register= $this->register_model->user_register();
            if($register == 1){
                $header_data['set'] = 1;
            }else{
                $header_data['set'] = 0;
            }
        }

        $header_data['baseUrl'] = base_url();

        $output = $this->load->view('register/user_register',$header_data,True);
        $this->output->set_output($output);
    }
	public function forget_pass()
    {
        $header_data= array();
        if(isset($_POST['submit'])){
			//echo 'hello23';
            $register= $this->register_model->problem();
            if($register == 1){
                $header_data['set'] = 1;
				//echo 'hello';
            }else{
                $header_data['set'] = 0;
            }
        }

        $header_data['baseUrl'] = base_url();

        $output = $this->load->view('login/forget_pass',$header_data,True);
        $this->output->set_output($output);
    }
	
    public function test_login()
    {
        //$result = $this->login_model->test_login();
        //var_dump($result);
        echo "<hr>";
        var_dump($this->session->all_userdata());

        $this->session->sess_destroy();
        //$this->session->unset_userdata('logged_in');
        //$this->session->unset_userdata('id');
        //$this->session->unset_userdata('name');
        //$this->session->unset_userdata('email');
        //$this->session->unset_userdata("__ci_last_regenerate");


        /*if($this->session->userdata('logged_in'))
        {
            var_dump($this->session->all_userdata());
        }*/

    }
}