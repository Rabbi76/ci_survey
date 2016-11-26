<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
		$this->load->model('vendor_model');
		$this->load->model('user_model');
    }

    public function index()
    {
        //$this->load->helper('url');
        $header_data= array();
        $account_name=$this->session->userdata('users_name');
        $account_id=$this->session->userdata('users_id');
        $header_data['baseUrl'] = base_url();
        $header_data['account_name'] = $account_name;
        $header_data['account_id'] = '';
        $header_data['account_id'] = $account_id;
		$header_data['survey']=$this->user_model->getAllActiveSurveys();

		
		$header_data['sub_category']=$this->vendor_model->getAllSubCategory();
		$header_data['category']=$this->vendor_model->getCategory();

        $output  = $this->load->view('head',$header_data,True);
        $output .= $this->load->view('main_view',$header_data,True);
        $output .= $this->load->view('footer',$header_data,True);
        $this->output->set_output($output);
    }
}