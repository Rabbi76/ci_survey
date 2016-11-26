<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class newVendor extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('login_model');
        $this->load->model('register_model');
		$this->load->model('vendor_model');
        $this->load->library('session');
    }
	public function vendor_register()
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

        $output = $this->load->view('login/new_vendor',$header_data,True);
        $this->output->set_output($output);
    }
	

 
}