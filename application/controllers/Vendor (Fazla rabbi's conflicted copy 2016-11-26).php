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
			$header_data['message']=$this->vendor_model->getMessage();
			$header_data['vendo']=$this->vendor_model->getUserDetalis();
			$header_data['survey']=$this->vendor_model->getAllSurveys();
			$header_data['surve']=$this->vendor_model->getAllUserSurveys();
			$header_data['vendors']=$this->vendor_model->getAllVendors();
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
			$header_data['vendo']=$this->vendor_model->getUserDetalis();
            $header_data['categories']=$this->vendor_model->getAllCategory();
            $header_data['sub_categories']=$this->vendor_model->getAllSubCategory();
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
			$this->load->model('rating_model');
			$header_data['ratings']=$this->rating_model->getAllRatings();
			$header_data['vendo']=$this->vendor_model->getUserDetalis();
			$header_data['survey']=$this->vendor_model->getAllSurveys();
            $output = $this->load->view('vendor/head',$header_data,True);
            $output .= $this->load->view('vendor/survey_list',$header_data,True);
            $output .= $this->load->view('vendor/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	 public function all_survey_list ()
    {
        if($this->session->userdata('vendor'))
        {
            $header_data=array();
			$header_data['vendo']=$this->vendor_model->getUserDetalis();
			$header_data['surve']=$this->vendor_model->getAllUserSurveys();
            $output = $this->load->view('vendor/head',$header_data,True);
            $output .= $this->load->view('vendor/all_survey_list ',$header_data,True);
            $output .= $this->load->view('vendor/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
  /*  public function view_survey()
    {
        if($this->session->userdata('vendor'))
        {

            $header_data=array();
            $header_data['survey']=$this->vendor_model->getSurveyWithSurveyId();
            $output = $this->load->view('vendor/head',$header_data,True);
            $output .= $this->load->view('vendor/survey_view',$header_data,True);
            $output .= $this->load->view('vendor/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }*/
	public function view_survey($survey_id)
    {
        if($this->session->userdata('vendor'))
        {
            //if($survey_id==''){$survey_id=13;}
            $header_data=array();
			$header_data['vendo']=$this->vendor_model->getUserDetalis();
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
			$this->load->model('rating_model');
			$header_data['ratings']=$this->rating_model->getAllRatings();
			$header_data['vendo']=$this->vendor_model->getUserDetalis();
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
			$header_data['vendo']=$this->vendor_model->getUserDetalis();
            $header_data['survey_summery']=$this->vendor_model->getAnswersSummeryByAnswersId($survey_id);
			$header_data['survey']=$this->vendor_model->getSurveyNameWithSurveyId($survey_id);
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
	public function user_list_survey($survey_id='')
    {
        if($this->session->userdata('vendor'))
        {
            $header_data=array();
			$header_data['vendo']=$this->vendor_model->getUserDetalis();
            $header_data['user']=$this->vendor_model->getUserGivenSurvey($survey_id);
			$header_data['survey']=$this->vendor_model->getSurveyNameWithSurveyId($survey_id);
            $output = $this->load->view('vendor/head',$header_data,True);
            $output .= $this->load->view('vendor/user_list_survey',$header_data,True);
            $output .= $this->load->view('vendor/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	 public function survey_details($survey_id='')
    {
        if($this->session->userdata('vendor'))
        {
            //if($survey_id==''){$survey_id=13;}
            $header_data=array();
			$header_data['vendo']=$this->vendor_model->getUserDetalis();
            $header_data['survey']=$this->vendor_model->getSurveyWithSurveyId($survey_id);
			$header_data['answer']=$this->vendor_model->givenAnswer($survey_id);
            $output = $this->load->view('vendor/head',$header_data,True);
            $output .= $this->load->view('vendor/survey_details',$header_data,True);
            $output .= $this->load->view('vendor/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	 public function search_user($survey_id='')
    {
        if($this->session->userdata('vendor'))
        {
            $header_data=array();
           $header_data['vendo']=$this->vendor_model->getUserDetalis();

            $output = $this->load->view('vendor/head',$header_data,True);
            $output .= $this->load->view('vendor/search_user',$header_data,True);
            $output .= $this->load->view('vendor/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	 public function edit_profile()
    {
        if($this->session->userdata('vendor'))
        {
            $header_data=array();
           
			$header_data['vendo']=$this->vendor_model->getUserDetalis();
            $output = $this->load->view('vendor/head',$header_data,True);
            $output .= $this->load->view('vendor/edit_profile',$header_data,True);
            $output .= $this->load->view('vendor/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	public function message()
    {
        if($this->session->userdata('vendor'))
        {
			if(isset($_POST['submit']))
			{
				$this->vendor_model->message();
			}
			if(isset($_POST['reply']))
			{
				$this->vendor_model->reply();
			}
            $header_data=array();
           
			$header_data['vendo']=$this->vendor_model->getUserDetalis();
			$header_data['message']=$this->vendor_model->getMessage();
			$header_data['reply']=$this->vendor_model->getReply();
            $output = $this->load->view('vendor/head',$header_data,True);
            $output .= $this->load->view('vendor/message',$header_data,True);
            $output .= $this->load->view('vendor/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	function vendors()
    {
        if($this->session->userdata('vendor'))
        {
            $header_data=array();
			$header_data['vendo']=$this->vendor_model->getUserDetalis();
            $header_data['vendors']=$this->vendor_model->getAllVendors();
            $output = $this->load->view('vendor/head',$header_data,True);
            $output .= $this->load->view('vendor/vendors',$header_data,True);
            $output .= $this->load->view('vendor/footer',$header_data,True);
            $this->output->set_output($output);
        }else
        {
            header('location:'.base_url());
        }
    }
	public function view_vendor_survey($ven_id)
    {
        if($this->session->userdata('vendor'))
        {
            $header_data=array();
			$this->load->model('rating_model');
			$header_data['ratings']=$this->rating_model->getAllRatings();
			$header_data['vendo']=$this->vendor_model->getUserDetalis();
			$header_data['venSer']=$this->vendor_model->getVendorSurveys($ven_id);
            $output = $this->load->view('vendor/head',$header_data,True);
            $output .= $this->load->view('vendor/view_vendor_survey',$header_data,True);
            $output .= $this->load->view('vendor/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	public function details($survey_id)
    {
        if($this->session->userdata('vendor'))
        {
            //if($survey_id==''){$survey_id=13;}
            $header_data=array();
			$header_data['vendo']=$this->vendor_model->getUserDetalis();
            $header_data['survey']=$this->vendor_model->getSurveyWithSurveyId($survey_id);
            $output = $this->load->view('vendor/head',$header_data,True);
            $output .= $this->load->view('vendor/details',$header_data,True);
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