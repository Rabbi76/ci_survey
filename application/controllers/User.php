<?php
class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        //$this->load->helper('url');
        $header_data= array();
        //$account_name=$this->session->userdata('name');
        $header_data['baseUrl'] = base_url();
        //$header_data['account_name'] = $account_name;
        $output=$this->load->view('user/head',$header_data,True);
        $output .= $this->load->view('user/dashboard',$header_data,True);
        $output .= $this->load->view('user/footer',$header_data,True);
        $this->output->set_output($output);
    }
}

?>