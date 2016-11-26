<?php
class Admin_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');

    }
    function new_vendor()
    {
        $formData=$_POST['formData'];
        $formVal=array();
        foreach($formData as $details)
        {
            $formVal[$details['name']]=$details['value'];

        }

        $vendorAddArr=array();
        $vendorAddArr['email']=$formVal['add_vendor_email'];
        $vendorAddArr['name']=$formVal['add_vendor_name'];
        $vendorAddArr['username']=$formVal['add_vendor_username'];
        $vendorAddArr['password']=md5($formVal['add_vendor_password']);
        $vendorAddArr['company']=$formVal['add_vendor_company'];
        $vendorAddArr['admin_id']=$this->session->userdata('id');
        $vendorAddArr['is_active']=1;
        $this->db->insert('vendor',$vendorAddArr);
        echo "<pre>";
        var_dump($vendorAddArr);
        echo "</pre>";
    }
}
?>