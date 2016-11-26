<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survay_user_result extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
		$this->load->model('vendor_model');
    }

    public function index()
    {
		// header('location:'.base_url().'Survay_details/sd');
		$header_data= array();
        $header_data['baseUrl'] = base_url();
        $output = $this->load->view('Survay_user_result/sd',$header_data,True);
        $this->output->set_output($output);
    }
	public function sd($survey_id)
    {
		//echo $survey_id;
		//$survey_id=16;
        $header_data=array();
		
		$header_data['sub_category']=$this->vendor_model->getAllSubCategory();
		$header_data['category']=$this->vendor_model->getCategory();
		
		$header_data['survey']=$this->vendor_model->getSurveyWithSurveyId($survey_id);
		$header_data['answer']=$this->vendor_model->givenAnswer($survey_id);
        //$header_data['survey']=$this->vendor_model->getSurveyWithSurveyId($survey_id);
        $header_data['baseUrl'] = base_url();
        $output=$this->load->view('head',$header_data,True);
        $output .= $this->load->view('user_result',$header_data,True);
        $output .= $this->load->view('footer',$header_data,True);
        $this->output->set_output($output);
		
    }
	
}