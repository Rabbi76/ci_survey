<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey_list extends CI_Controller {

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
		
		$header_data['sub_category']=$this->vendor_model->getAllSubCategory();
		$header_data['category']=$this->vendor_model->getCategory();
		
        $header_data['baseUrl'] = base_url();
		
		$header_data['surve']=$this->vendor_model->getAllUserSurveys();
		$this->load->model('rating_model');
		$header_data['ratings']=$this->rating_model->getAllRatings();
        $output=$this->load->view('head',$header_data,True);
        $output .= $this->load->view('all_survey_list',$header_data,True);
        $output .= $this->load->view('footer',$header_data,True);
        $this->output->set_output($output);
    }
    public function surveylist()
    {
        //$this->load->helper('url');
        $header_data= array();
		
		$header_data['sub_category']=$this->vendor_model->getAllSubCategory();
		$header_data['category']=$this->vendor_model->getCategory();
        $header_data['baseUrl'] = base_url();
        $output=$this->load->view('head',$header_data,True);
        $output .= $this->load->view('survey_list',$header_data,True);
        $output .= $this->load->view('footer',$header_data,True);
        $n=10;
        $this->output->cache($n);
        $this->output->set_output($output);
    }

    public function survey()
    {
        //$this->load->helper('url');
        $header_data= array();
        $header_data['baseUrl'] = base_url();
		
		$header_data['sub_category']=$this->vendor_model->getAllSubCategory();
		$header_data['category']=$this->vendor_model->getCategory();
        $output=$this->load->view('head',$header_data,True);
        $output .= $this->load->view('survey',$header_data,True);
        $output .= $this->load->view('footer',$header_data,True);
        $this->output->set_output($output);
    }
	public function view_survey($survey_id)
    {
        
        $header_data=array();
        $header_data['survey']=$this->vendor_model->getSurveyWithSurveyId($survey_id);
		
		$header_data['sub_category']=$this->vendor_model->getAllSubCategory();
		$header_data['category']=$this->vendor_model->getCategory();
        $header_data['baseUrl'] = base_url();
		
        $output=$this->load->view('head',$header_data,True);
        $output .= $this->load->view('survey',$header_data,True);
        $output .= $this->load->view('footer',$header_data,True);
        $this->output->set_output($output);
        
    }
}