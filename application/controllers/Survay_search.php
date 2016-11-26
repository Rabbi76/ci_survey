<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survay_search extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
		$this->load->model('vendor_model');
    }

    public function index()
    {
        //$this->load->helper('url');
        $header_data= array();
		$header_data['surve']=$this->vendor_model->getAllUserSurveys();

		$header_data['sub_category']=$this->vendor_model->getAllSubCategory();
		$header_data['category']=$this->vendor_model->getCategory();

        $header_data['baseUrl'] = base_url();
        $output=$this->load->view('head',$header_data,True);
        $output .= $this->load->view('category_survey_list',$header_data,True);
        $output .= $this->load->view('footer',$header_data,True);
        $this->output->set_output($output);
    } 
	
	public function selectCategory()
    {
        //$this->load->helper('url');
        $header_data= array();
		//$header_data['surve']=$this->vendor_model->getAllUserSurveys();

		$header_data['sub_category']=$this->vendor_model->getAllSubCategory();
		$header_data['category']=$this->vendor_model->getCategory();

        $header_data['baseUrl'] = base_url();
        $output=$this->load->view('head',$header_data,True);
        $output .= $this->load->view('category_list',$header_data,True);
        $output .= $this->load->view('footer',$header_data,True);
        $this->output->set_output($output);
    }
}