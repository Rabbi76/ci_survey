<?php
class User extends CI_Controller {

     public function __construct()
    {
         parent::__construct();
        $this->load->helper('url');
        $this->load->model('login_model');
        $this->load->model('register_model');
		$this->load->model('vendor_model');
		$this->load->model('user_model');
        $this->load->library('session');
    }

/*    public function index()
    {
        //$this->load->helper('url');
        $header_data= array();
        //$account_name=$this->session->userdata('name');
        $header_data['baseUrl'] = base_url();
        //$header_data['account_name'] = $account_name;
        $output=$this->load->view('user/head',$header_data,True);
        $output .= $this->load->view('user/dashboard',$header_data,True);
        $output .= $this->load->view('user/footer',$header_data,True);
        $this->output->set_output($output);
    }  */
	
	 public function index()
    {
        

        if(isset($_POST['submit']))
        {
            $login=$this->login_model->user_login();
            if($login)
            {
                if($this->session->all_userdata('logged_in'))
                {
                    header('location:'.base_url().'User/dashboard');
                }
                else{
                    echo "Failed Login";
                }
            }
        }
        $header_data= array();
        $header_data['baseUrl'] = base_url();
        $output = $this->load->view('login/user_login',$header_data,True);
        $this->output->set_output($output);
    }
	 public function dashboard()
    {
        if($this->session->all_userdata('logged_in'))
        {
            $header_data=array();
			$header_data['message']=$this->user_model->getMessage();
			$header_data['survey']=$this->user_model->givenSurvey();
			$header_data['vendors']=$this->vendor_model->getAllVendors();
			$header_data['surve']=$this->vendor_model->getAllUserSurveys();
			$header_data['user']=$this->user_model->getUserDetalis();
            $output = $this->load->view('user/head',$header_data,True);
            $output .= $this->load->view('user/userHome',$header_data,True);
            $output .= $this->load->view('user/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	 public function userHome()
    {
        if($this->session->all_userdata('logged_in'))
        {
            $header_data=array();
			$header_data['message']=$this->user_model->getMessage();
			$header_data['survey']=$this->user_model->givenSurvey();
			$header_data['vendors']=$this->vendor_model->getAllVendors();
			$header_data['surve']=$this->vendor_model->getAllUserSurveys();
			$header_data['user']=$this->user_model->getUserDetalis();
            $output = $this->load->view('user/head',$header_data,True);
            $output .= $this->load->view('user/dashboard',$header_data,True);
            $output .= $this->load->view('user/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	 public function all_survey_list()
    {
        if($this->session->all_userdata('logged_in'))
        {
            $header_data=array();
			$this->load->model('rating_model');
			$header_data['ratings']=$this->rating_model->getAllRatings();
			$header_data['survey']=$this->user_model->givenSurvey();
			$header_data['surve']=$this->vendor_model->getAllUserSurveys();
			$header_data['user']=$this->user_model->getUserDetalis();
            $output = $this->load->view('user/head',$header_data,True);
            $output .= $this->load->view('user/all_survey_list',$header_data,True);
            $output .= $this->load->view('user/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	 public function view_vendor_survey($ven_id)
    {
        if($this->session->all_userdata('logged_in'))
        {
            $header_data=array();
			$this->load->model('rating_model');
			$header_data['ratings']=$this->rating_model->getAllRatings();
			$header_data['survey']=$this->user_model->givenSurvey();
			$header_data['venSer']=$this->vendor_model->getVendorSurveys($ven_id);
			$header_data['user']=$this->user_model->getUserDetalis();
            $output = $this->load->view('user/head',$header_data,True);
            $output .= $this->load->view('user/view_vendor_survey',$header_data,True);
            $output .= $this->load->view('user/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
    public function view_survey($survey_id)
    {
        if($this->session->all_userdata('logged_in'))
        {
            //if($survey_id==''){$survey_id=13;}
            $header_data=array();
            $header_data['survey']=$this->vendor_model->getSurveyWithSurveyId($survey_id);
			$header_data['user']=$this->user_model->getUserDetalis();
            $output = $this->load->view('user/head',$header_data,True);
            $output .= $this->load->view('user/survey_view',$header_data,True);
            $output .= $this->load->view('user/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	 public function survey_details($survey_id='')
    {
        if($this->session->all_userdata('logged_in'))
        {
            //if($survey_id==''){$survey_id=13;}
            $header_data=array();
            $header_data['survey']=$this->user_model->getSurveyWithSurveyId($survey_id);
			$header_data['answer']=$this->user_model->givenAnswer($survey_id);
			$header_data['user']=$this->user_model->getUserDetalis();
            $output = $this->load->view('user/head',$header_data,True);
            $output .= $this->load->view('user/survey_details',$header_data,True);
            $output .= $this->load->view('user/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	 public function given_survey_list()
    {
        if($this->session->all_userdata('logged_in'))
        {
            $header_data=array();
			$this->load->model('rating_model');
			$header_data['ratings']=$this->rating_model->getRatingsByUserId();
			$header_data['survey']=$this->user_model->givenSurvey();
			$header_data['user']=$this->user_model->getUserDetalis();
            $output = $this->load->view('user/head',$header_data,True);
            $output .= $this->load->view('user/given_survey_list',$header_data,True);
            $output .= $this->load->view('user/footer',$header_data,True);
            $this->output->set_output($output);
        }
        else
        {
            header('location:'.base_url());
        }
    }
	function vendors()
    {
        if($this->session->all_userdata('logged_in'))
        {
            $header_data=array();
            $header_data['vendors']=$this->vendor_model->getAllVendors();
			$header_data['user']=$this->user_model->getUserDetalis();
            $output = $this->load->view('user/head',$header_data,True);
            $output .= $this->load->view('user/vendors',$header_data,True);
            $output .= $this->load->view('user/footer',$header_data,True);
            $this->output->set_output($output);
        }else
        {
            header('location:'.base_url());
        }
    }
	function edit_profile()
    {
        if($this->session->all_userdata('logged_in'))
        {
            $header_data=array();
            $header_data['user']=$this->user_model->getUserDetalis();
            $output = $this->load->view('user/head',$header_data,True);
            $output .= $this->load->view('user/edit_profile',$header_data,True);
            $output .= $this->load->view('user/footer',$header_data,True);
            $this->output->set_output($output);
        }else
        {
            header('location:'.base_url());
        }
    }
	function message()
    {
        if($this->session->all_userdata('logged_in'))
        {
			 if(isset($_POST['submit']))
			 {
				 $this->user_model->message();
			 }
			 if(isset($_POST['reply']))
			 {
				 $this->user_model->reply();
			 }
            $header_data=array();
            $header_data['user']=$this->user_model->getUserDetalis();
			$header_data['message']=$this->user_model->getMessage();
			$header_data['reply']=$this->user_model->getReply();
            $output = $this->load->view('user/head',$header_data,True);
            $output .= $this->load->view('user/message',$header_data,True);
            $output .= $this->load->view('user/footer',$header_data,True);
            $this->output->set_output($output);
        }else
        {
            header('location:'.base_url());
        }
    }
}

?>