<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey_list extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        //$this->load->helper('url');
        $header_data= array();
        $header_data['baseUrl'] = base_url();
        $output=$this->load->view('head',$header_data,True);
        $output .= $this->load->view('survey_category',$header_data,True);
        $output .= $this->load->view('footer',$header_data,True);
        $this->output->set_output($output);
    }
    public function surveylist()
    {
        //$this->load->helper('url');
        $header_data= array();
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
        $output=$this->load->view('head',$header_data,True);
        $output .= $this->load->view('survey',$header_data,True);
        $output .= $this->load->view('footer',$header_data,True);
        $this->output->set_output($output);
    }
}