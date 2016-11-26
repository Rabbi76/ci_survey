<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Read_reviews extends CI_Controller {

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
        $output .= $this->load->view('on_going',$header_data,True);
        $output .= $this->load->view('footer',$header_data,True);
        $this->output->set_output($output);
    }
}