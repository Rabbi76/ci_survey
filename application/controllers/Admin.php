<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
            $header_data['vendors']=$this->vendor_model->getAllVendors();
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
}