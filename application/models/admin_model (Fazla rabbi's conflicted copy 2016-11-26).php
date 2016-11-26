<?php
class Admin_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
      //  $this->load->library('session');

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
        $vendorAddArr['admin_id']=$this->session->userdata('admin_id');
        $vendorAddArr['is_active']=1;
        $this->db->insert('vendor',$vendorAddArr);
		
		
            echo "New Vendor Added. ";
       
       // echo "<pre>";
        //var_dump($vendorAddArr);
        //echo "</pre>";
    }
	
	function getUserDetalis()
    {
        $this->db->where('id',$this->session->userdata('admin_id'));
        $admi=$this->db->get('admin')->result_array();
        return $admi;
    }
	function getMessage()
    {
		
		$this->db->order_by('message.id desc');
		$result=$this->db->get('message')->result_array();
        return $result;
    }
	function getOneMessage($mes_id)
    {
		$this->db->where('message.id',$mes_id);
        $result=$this->db->get('message')->result_array();
        return $result;
		//$this->db->order_by('message.id desc');
		//$result=$this->db->get('message')->result_array();
        //return $result;
    }
	function getReply()
    {
		
		$result=$this->db->get('reply')->result_array();
        return $result;
    }
	function getProblem()
    {
		
		$result=$this->db->get('problem')->result_array();
        return $result;
    }
	function problem_slove()
	{
		$problem_id=$_POST['prob_id'];
		//echo $problem_id;
        $this->load->database();
        $updateArr['active']=FALSE;
        $this->db->where('id',$problem_id);
        if($this->db->update('problem',$updateArr)){
            echo "<script type='text/javascript'>alert('Problem Slove!!!')</script>";
        }else{
            echo "<script type='text/javascript'>alert('There is some problem try again!!!')</script>";
        }
		
	}
	function reply()
	{
		
		
		$mess_id=$_POST['mess_id'];
		$replyMess=$_POST['replyto'];
		$replyArray= array();

        $replyArray['mess_id'] = $mess_id;
		$replyArray['replyBy'] = "Admin";
		$replyArray['reply'] = $replyMess;
		
		if($this->db->insert('reply',$replyArray)){
			//echo "<script type='text/javascript'>alert('Message successfully submitted to the admin! For reply check your messages. Thanks')</script>";
        }else{
            echo "<script type='text/javascript'>alert('failed!')</script>";
        }
		
	}
}
?>