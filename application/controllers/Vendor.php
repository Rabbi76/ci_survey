<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('login_model');
        $this->load->model('vendor_model');
        $this->load->library('session');
    }

    public function index()
    {
        if($this->session->userdata('vendor'))
        {
            header('location:'.base_url().'Vendor/dashboard');
        }
        elseif($this->session->userdata('username'))
        {
            header('location:'.base_url().'Admin/dashboard');
        }
        elseif($this->session->userdata('email'))
        {
            header('location:'.base_url().'User/dashboard');
        }

        if(isset($_POST['submit']))
        {
            $login=$this->login_model->vendor_login();
            if($login)
            {
                if($this->session->userdata('vendor'))
                {
                    header('location:'.base_url().'Vendor/dashboard');
                }
                else{
                    echo "Failed Login";
                }
            }
        }
        $header_data= array();
        $header_data['baseUrl'] = base_url();
        $output = $this->load->view('login/vendor_login',$header_data,True);
        $this->output->set_output($output);
    }
    public function dashboard()
    {
        if($this->session->userdata('vendor'))
        {
            $header_data=array();
            $output = $this->load->view('vendor/head',$header_data,True);
            $output .= $this->load->view('vendor/dashboard',$header_data,True);
            $output .= $this->load->view('vendor/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
    public function add_survey()
    {
        if($this->session->userdata('vendor'))
        {
            $header_data=array();
            $header_data['categories']=$this->vendor_model->getAllCategory();
            $output = $this->load->view('vendor/head',$header_data,True);
            $output .= $this->load->view('vendor/add_survey',$header_data,True);
            $output .= $this->load->view('vendor/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
    public function survey_list()
    {
        if($this->session->userdata('vendor'))
        {
            $header_data=array();
            $header_data['survey']=$this->vendor_model->getAllSurveys();
            $output = $this->load->view('vendor/head',$header_data,True);
            $output .= $this->load->view('vendor/view_answer_survey',$header_data,True);
            $output .= $this->load->view('vendor/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
    public function view_survey($survey_id='')
    {
        if($this->session->userdata('vendor'))
        {
            if($survey_id==''){$survey_id=13;}
            $header_data=array();
            $header_data['survey']=$this->vendor_model->getSurveyWithSurveyId($survey_id);
            $output = $this->load->view('vendor/head',$header_data,True);
            $output .= $this->load->view('vendor/survey_view',$header_data,True);
            $output .= $this->load->view('vendor/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
    public function survey_result()
    {
        if($this->session->userdata('vendor'))
        {
            $header_data=array();
            $header_data['survey']=$this->vendor_model->getAllSurveys();
            $output = $this->load->view('vendor/head',$header_data,True);
            $output .= $this->load->view('vendor/survey_result',$header_data,True);
            $output .= $this->load->view('vendor/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }

    public function survey_summery($survey_id='')
    {
        if($this->session->userdata('vendor'))
        {
            $header_data=array();
            $header_data['survey_summery']=$this->vendor_model->getAnswersSummeryByAnswersId($survey_id);
            $header_data['survey_detils']=$this->vendor_model->surveyDetailsById($survey_id);
            $output = $this->load->view('vendor/head',$header_data,True);
            $output .= $this->load->view('vendor/survey_summery',$header_data,True);
            $output .= $this->load->view('vendor/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
    public function logout()
    {
        if($this->session->userdata('vendor'))
        {
            $this->session->sess_destroy();
            header('location:'.base_url());

        }
        else
        {
            header('location:'.base_url());
        }

    }
}