<?php

/**
 * Created by PhpStorm.
 * User: hamiduzzaman
 * Date: 10/28/16
 * Time: 7:58 PM
 */
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }
    function index($survey_id='')
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

        if(isset($_POST['submit']) && $_POST['login_type'] == 'user')
        {
            $login=$this->login_model->user_login();
            if($login)
            {
                if($this->session->all_userdata('logged_in'))
                {
                    if($survey_id != ''){
                        header('location:'.base_url().'User/view_survey/'.$survey_id);
                    }else {
                        header('location:' . base_url() . 'User/dashboard');
                    }
                }
                else{
                    echo "Failed Login";
                }
            }
        }
        if(isset($_POST['submit']) && $_POST['login_type'] == 'vendor')
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
        if(isset($_POST['submit']) && $_POST['login_type'] == 'admin')
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
        $output = $this->load->view('login/all_login',$header_data,True);
        $this->output->set_output($output);
    }


}