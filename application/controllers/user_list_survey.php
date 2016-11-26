<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_list_survey extends CI_Controller {

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
        $output = $this->load->view('user_list_survey/us',$header_data,True);
        $this->output->set_output($output);
    }
	public function us($survey_id='')
    {
		$header_data=array();
		
		$header_data['sub_category']=$this->vendor_model->getAllSubCategory();
		$header_data['category']=$this->vendor_model->getCategory();
		
		$header_data['user']=$this->vendor_model->getUserGivenSurvey($survey_id);
		$header_data['survey']=$this->vendor_model->getSurveyNameWithSurveyId($survey_id);
        //$header_data['survey']=$this->vendor_model->getSurveyWithSurveyId($survey_id);
        $header_data['baseUrl'] = base_url();
        $output=$this->load->view('head',$header_data,True);
        $output .= $this->load->view('user_list_survey',$header_data,True);
        $output .= $this->load->view('footer',$header_data,True);
        $this->output->set_output($output);
        /*$header_data=array();
        $header_data['user']=$this->vendor_model->getUserGivenSurvey($survey_id);
		$header_data['survey']=$this->vendor_model->getSurveyNameWithSurveyId($survey_id);
        $output=$this->load->view('head',$header_data,True);
        $output .= $this->load->view('user_list_survey',$header_data,True);
        $output .= $this->load->view('footer',$header_data,True);
        $this->output->set_output($output);*/
    }
}