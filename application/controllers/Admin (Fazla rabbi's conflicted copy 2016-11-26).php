<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('login_model');
        $this->load->model('vendor_model');
		$this->load->model('user_model');
		$this->load->model('admin_model');
        $this->load->library('session');
    }

    public function index()
    {
        if($this->session->userdata('username'))
        {
            header('location:'.base_url().'Admin/dashboard');
        }
        if(isset($_POST['submit']))
        {
            $login=$this->login_model->admin_login();
            if($login)
            {
                if($this->session->userdata('username'))
                {
                    header('location:'.base_url().'Admin/dashboard');
                }
            }
        }


        $header_data= array();
        $header_data['baseUrl'] = base_url();
        $output = $this->load->view('login/admin_login',$header_data,True);
        $this->output->set_output($output);
    }
    public function dashboard()
    {
        if($this->session->userdata('username'))
        {
            $header_data=array();
			$header_data['mess']=$this->admin_model->getMessage();
			$header_data['message']=$this->admin_model->getProblem();
			$header_data['admi']=$this->admin_model->getUserDetalis();
            $header_data['vendors']=$this->vendor_model->getAllVendors();
			$header_data['user']=$this->vendor_model->getAllUser();
			$header_data['surve']=$this->vendor_model->getAllUserSurveys();
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/dashboard',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }else
        {
            header('location:'.base_url());
        }
    }
    public function logout()
    {
        if($this->session->userdata('username'))
        {
            $this->session->sess_destroy();
            header('location:'.base_url());

        }
        else
        {
            header('location:'.base_url());
        }

    }
    function vendors()
    {
        if($this->session->userdata('username'))
        {
            $header_data=array();
			$header_data['admi']=$this->admin_model->getUserDetalis();
            $header_data['vendors']=$this->vendor_model->getAllVendors();
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/vendors',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }else
        {
            header('location:'.base_url());
        }
    }
	function user()
    {
        if($this->session->userdata('username'))
        {
            $header_data=array();
			$header_data['admi']=$this->admin_model->getUserDetalis();
            $header_data['user']=$this->vendor_model->getAllUser();
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/user',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }else
        {
            header('location:'.base_url());
        }
    }
	 function survey_result()
    {
        if($this->session->userdata('username'))
        {
            $header_data=array();
			$this->load->model('rating_model');
			$header_data['ratings']=$this->rating_model->getAllRatings();
			$header_data['admi']=$this->admin_model->getUserDetalis();
            $header_data['surve']=$this->vendor_model->getAllUserSurveys();
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/survey_result',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }else
        {
            header('location:'.base_url());
        }
    }
	public function user_list_survey($survey_id='')
    {
        if($this->session->userdata('username'))
        {
            $header_data=array();
			$header_data['admi']=$this->admin_model->getUserDetalis();
            $header_data['user']=$this->vendor_model->getUserGivenSurvey($survey_id);
			$header_data['survey']=$this->vendor_model->getSurveyNameWithSurveyId($survey_id);
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/user_list_survey',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	public function survey_details($survey_id='')
    {
        if($this->session->userdata('username'))
        {
            //if($survey_id==''){$survey_id=13;}
            $header_data=array();
			$header_data['admi']=$this->admin_model->getUserDetalis();
            $header_data['survey']=$this->vendor_model->getSurveyWithSurveyId($survey_id);
			$header_data['answer']=$this->vendor_model->givenAnswer($survey_id);
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/survey_details',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	 public function user_survey_details($survey_id='')
    {
        if($this->session->userdata('username'))
        {
            //if($survey_id==''){$survey_id=13;}
            $header_data=array();
			$header_data['admi']=$this->admin_model->getUserDetalis();
            $header_data['survey']=$this->vendor_model->getSurveyWithSurveyId($survey_id);
			$header_data['answer']=$this->vendor_model->givenAnswer($survey_id);
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/user_survey_details',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	 public function survey_summery($survey_id='')
    {
       if($this->session->userdata('username'))
        {
            $header_data=array();
			$header_data['admi']=$this->admin_model->getUserDetalis();
            $header_data['survey_summery']=$this->vendor_model->getAnswersSummeryByAnswersId($survey_id);
			$header_data['survey']=$this->vendor_model->getSurveyNameWithSurveyId($survey_id);
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/survey_summery',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	public function view_vendor_survey($ven_id)
    {
        if($this->session->userdata('username'))
        {
            $header_data=array();
			$header_data['admi']=$this->admin_model->getUserDetalis();
			$header_data['venSer']=$this->vendor_model->getVendorSurveys($ven_id);
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/view_vendor_survey',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	public function view_user_survey($user_id)
    {
        if($this->session->userdata('username'))
        {
            $header_data=array();
			$this->load->model('rating_model');
			$header_data['ratings']=$this->rating_model->getAllRatings();
			$header_data['admi']=$this->admin_model->getUserDetalis();
			$header_data['userSur']=$this->user_model->getUserSurveys($user_id);
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/view_user_survey',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	function search_user()
    {
        if($this->session->userdata('username'))
        {
            $header_data=array();
			$header_data['admi']=$this->admin_model->getUserDetalis();
            //$header_data['vendors']=$this->vendor_model->getAllVendors();
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/search_user',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }else
        {
            header('location:'.base_url());
        }
    }
	 public function all_survey_list()
    {
        if($this->session->userdata('username'))
        {
            $header_data=array();
			$this->load->model('rating_model');
			$header_data['ratings']=$this->rating_model->getAllRatings();
			$header_data['admi']=$this->admin_model->getUserDetalis();
			$header_data['surve']=$this->vendor_model->getAllUserSurveys();
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/all_survey_list',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
     public function view_survey($survey_id)
    {
        if($this->session->userdata('username'))
        {
            //if($survey_id==''){$survey_id=13;}
            $header_data=array();
			$header_data['admi']=$this->admin_model->getUserDetalis();
            $header_data['survey']=$this->vendor_model->getSurveyWithSurveyId($survey_id);
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/survey_view',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	public function add_category()
    {
        if($this->session->userdata('username'))
        {
            $header_data=array();
			$header_data['admi']=$this->admin_model->getUserDetalis();
            $header_data['SubCategory']=$this->vendor_model->getSubCategory();
            $header_data['category']=$this->vendor_model->getCategory();
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/add_category',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }else
        {
            header('location:'.base_url());
        }
    }
	function edit_profile()
    {
        if($this->session->userdata('username'))
        {
            $header_data=array();
            $header_data['admi']=$this->admin_model->getUserDetalis();
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/edit_profile',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }else
        {
            header('location:'.base_url());
        }
    }
	function message()
    {
        if($this->session->userdata('username'))
        {
			if(isset($_POST['reply']))
			{
				$this->admin_model->reply();
			}
            $header_data=array();
			$header_data['message']=$this->admin_model->getMessage();
			$header_data['reply']=$this->admin_model->getReply();
            $header_data['admi']=$this->admin_model->getUserDetalis();
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/all-message',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }else
        {
            header('location:'.base_url());
        }
    }
	function conversation($mess_id)
    {
        if($this->session->userdata('username'))
        {
			if(isset($_POST['reply']))
			{
				$this->admin_model->reply();
			}
            $header_data=array();
			$header_data['message']=$this->admin_model->getOneMessage($mess_id);
			$header_data['reply']=$this->admin_model->getReply();
            $header_data['admi']=$this->admin_model->getUserDetalis();
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/message',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }else
        {
            header('location:'.base_url());
        }
    }
	
	function problem()
    {
        if($this->session->userdata('username'))
        {
			 if(isset($_POST['submit']))
			 {
				 $this->admin_model->problem_slove();
			 }
            $header_data=array();
			$header_data['problem']=$this->admin_model->getProblem();
            $header_data['admi']=$this->admin_model->getUserDetalis();
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/problem',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }else
        {
            header('location:'.base_url());
        }
    }
	function all_problem()
    {
        if($this->session->userdata('username'))
        {
			
            $header_data=array();
			$header_data['problem']=$this->admin_model->getProblem();
            $header_data['admi']=$this->admin_model->getUserDetalis();
            $output = $this->load->view('admin/head',$header_data,True);
            $output .= $this->load->view('admin/all_problem',$header_data,True);
            $output .= $this->load->view('admin/footer',$header_data,True);
            $this->output->set_output($output);
        }else
        {
            header('location:'.base_url());
        }
    }
}