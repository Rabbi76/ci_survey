<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Vendor_model');
        $this->load->model('Admin_model');
        $this->load->model('user_model');
    }

    public function index()
    {
        //$this->load->helper('url');
        $header_data= array();
        $account_name=$this->session->userdata('name');
        $header_data['baseUrl'] = base_url();
        $header_data['account_name'] = $account_name;
        $output  =$this->load->view('head',$header_data,True);
        $output .= $this->load->view('main_view',$header_data,True);
        $output .= $this->load->view('footer',$header_data,True);
        $this->output->set_output($output);
    }
    public function new_survey()
    {
        if(isset($_POST['formData'])) {
            $formData = $_POST['formData'];
            $surveyArr = array();
            $finalArr = array();
            $questionsArr = array();
            $counter = '';
            foreach ($formData as $k => $v) {
                $surveyArr[$k] = $v;
            }
            foreach ($formData as $k => $v) {
                if (strstr($v['name'], "v_")) {
                    $finalArr[$v['name']][] = $v['value'];
                } else $finalArr[$v['name']] = $v['value'];
            }
            $surveyInsertArr=array();
            $surveyInsertArr['vendor_id']=$this->session->userdata('vendor_id');
			
			$category_subCategory = explode("_", $finalArr['category']);
			
			$surveyInsertArr['category_id']=$category_subCategory[1];
            $surveyInsertArr['sub_category_id']=$category_subCategory[0];
            $surveyInsertArr['title']=$finalArr['title'];
            $surveyInsertArr['description']=$finalArr['description'];
            $surveyInsertArr['time_added']=date('d-m-Y h:i:s A');
            $surveyInsertArr['is_active']=1;
			/*
			echo "<pre>";
            var_dump($surveyInsertArr);
            echo "</pre>";
			*/
            if($this->db->insert('survey',$surveyInsertArr))
            {
                $survey_id=$this->db->insert_id();
            }else return false;

            $i=0;
            foreach ($finalArr as $k => $v) {

                if (strstr($k, "q_")) {
                    $i++;
                    $questionsArr[$i]['survey_id'] = $survey_id;
                    $questionsArr[$i]['question_title'] = $v;
                    $questionsArr[$i]['is_active'] = 1;
                    $questions = explode("_", $k);
                    $counter = $questions[1];
                } elseif ($k == "questionType_" . $counter) {
                    $questionsArr[$i]['question_type'] = $v;
                }elseif ($k == "v_".$counter) {
                    $questionsArr[$i]['question_options']='';
                    foreach($v as $vV) {
                        if($questionsArr[$i]['question_options'] == ''){
                            $questionsArr[$i]['question_options'] = $vV;
                        }else {
                            $questionsArr[$i]['question_options'] = $questionsArr[$i]['question_options'] . "," . $vV;
                        }
                    }
                }

            }
            foreach($questionsArr as $questionArr)
            {
                 $this->db->insert('questions',$questionArr);
            }
        }
		echo "\nSurvey Submit";

    }
    function new_vendor()
    {
        $this->Admin_model->new_vendor();
    }
    function submit_answer()
    {
		$this->db->where('email',$this->session->userdata('email'));
        $user=$this->db->get('user')->result_array();
		
       // var_dump($_POST['formData']);
        $formData = $_POST['formData'];
        $answerInsertArr=array();
        $answerParentInsertArr=array();

        $answerArr = array();
        $counter = 0;
        foreach ($formData as $k => $v) {
            $answerArr[$v['name']] = $v['value'];
        }
        $answerParentInsertArr['user_id']=$user[0]['id'];
        $answerParentInsertArr['survey_id']=$answerArr['survey_id'];
        $answerParentInsertArr['date']=date('d-m-Y');

        if($this->db->insert('answers',$answerParentInsertArr))
        {
            $answerId=$this->db->insert_id();
            echo $answerId;
        }
        foreach ($answerArr as $question_id => $answer) {
            if(is_int($question_id)) {
                $answerInsertArr[$counter]['answer_id'] = $answerId;
                $answerInsertArr[$counter]['question_id'] = $question_id;
                $answerInsertArr[$counter]['question_answer'] = $answer;
                $this->db->insert('question_answers',$answerInsertArr[$counter]);
                echo $this->db->insert_id();
                $counter++;
            }

        }
		//echo '<script language="javascript">';
		echo "\nSurvey Result Submit";
		//base_url().'user/given_survey_list';
		//echo '</script>';

        // echo "<pre>";
        // var_dump($answerInsertArr);
        // echo "</pre>";
    }
    function add_category()
    {
        $formData=$this->input->post('formData');
        $filteredInput=array();
        foreach ($formData as $inputs){
            $filteredInput[$inputs['name']]=$inputs['value'];
        }
        $this->load->database();

        if($this->db->insert('category',$filteredInput)){
            echo "Added Category ".$filteredInput['category_name'];
        }else{
            echo "Failed to add";
        }

    }
	function add_sub_category()
    {
        $formData=$this->input->post('formData');
        $filteredInput=array();
		
        foreach ($formData as $inputs){
            $filteredInput[$inputs['name']]=$inputs['value'];
        }
		/*echo "<pre>";
        var_dump($filteredInput);
        echo "</pre>";  */
        $this->load->database();
		
        if($this->db->insert('sub_categories',$filteredInput)){
            echo "Added Sub Category ".$filteredInput['sub_category_name'];
        }else{
            echo "Failed to add";
        }
		
    }
	function turn_off()
    {
        $formData=$this->input->post('formData');
        $surveyOnOff=array();
		
        foreach ($formData as $inputs){
            $surveyOnOff[$inputs['name']]=$inputs['value'];
        }
		if($surveyOnOff['is_active']=="1")
		{
			
			$surveyOnOff['is_active']="0";
			$this->db->where('id',$surveyOnOff['id']);
			if($this->db->update('survey',$surveyOnOff)){
				echo "Survey Turn Off";
			}else{
				echo "Failed To Survey Turn Off";
			}
		}
		else 
		{
			
			$surveyOnOff['is_active']="1";
			$this->db->where('id',$surveyOnOff['id']);
			if($this->db->update('survey',$surveyOnOff)){
				echo "Survey Turn On";
			}else{
				echo "Failed To Survey Turn On";
			}
		}	
		
			/*
		echo "<pre>";
        var_dump($surveyOnOff['is_active']);
        echo "</pre>";  /*
		$this->load->database();
		
		echo 'Check';
		if($surveyOnOff[$inputs['is_active']]=="1")
		{
			echo "Survey Turn Off";
			$surveyOnOff['is_active']=FALSE;
			$this->db->where('id',$surveyOnOff['id']);
			if($this->db->update('survey',$updateArr)){
				echo "Survey Turn Off";
			}else{
				echo "Failed To Survey Turn Off";
			}
			
		}
		else
		{
			echo "Survey Turn on";
			$surveyOnOff['is_active']=TRUE;
			$this->db->where('id',$surveyOnOff['id']);
			if($this->db->update('survey',$updateArr)){
				echo "Survey Turn On";
			}else{
				echo "Failed To Survey Turn On";
			}
		}
		
        */
		
    }
    function change_admin_pass()
    {
        $pass=md5($this->input->post('pass'));
        $id=$this->input->post('id');
        $this->load->database();
        $updateArr['password']=$pass;
        $this->db->where('id',$id);
        if($this->db->update('admin',$updateArr)){
            echo "Password Changed";
        }else{
            echo "Failed to change";
        }

    }
    function update_vendor()
    {
        $this->Vendor_model->update_vendor();


    }
    function survey_turn_on_off()
    {
        //$this->Vendor_model->update_vendor();


    }
    function update_user()
    {
        $this->user_model->update_user();


    }
    function testbed(){
        $data=$this->session->userdata('admin_id');
        echo $data;
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }
    function getCatNSurveyWithCatID()
    {

		$co=1;

        $cat_id=$_POST['cat_id'];
        $surveys=$this->Vendor_model->getSurveyWithCatId($cat_id);
        $return_json=array();
        $survey_list='';

        $baseUrl=base_url().'user_list_survey/us/';
        if($surveys){
            foreach ($surveys as $survey) {
                $survey_list .=$co.". <a href='$baseUrl$survey->id'>$survey->title</a><br><br>";
				$co++;

            }
            $return_json['survey_list']=$survey_list;
        }
        $sub_categories=$this->Vendor_model->getSubCategoryByCat_id($cat_id);
        if($sub_categories){

            $options="<option value='0'>All</option>";
            foreach ($sub_categories as $sub_category){
                $options .=$co.". <option value='$sub_category->sub_category_id'>$sub_category->sub_category_name</option>";
				$co++;

            }
            $return_json['options']=$options;

        }
		
        echo json_encode($return_json);
    }
    function getSubCatNSurveyWithSubCatID()
    {

        $co=1;

        $sub_cat_id=$_POST['sub_cat_id'];
        $surveys=$this->Vendor_model->getSurveyWithSubCatId($sub_cat_id);
        $return_json=array();
        $survey_list='';

        $baseUrl=base_url().'user_list_survey/us/';
        if($surveys){
            foreach ($surveys as $survey) {
                $survey_list .=$co.". <a href='$baseUrl$survey->id'>$survey->title</a><br><br>";
                $co++;

            }
            $return_json['survey_list']=$survey_list;
        }

        echo json_encode($return_json);
    }
	function getSubCatNSurveyWithCatID()
    {

		$co=1;

        $cat_id=$_POST['cat_id'];
        $surveys=$this->Vendor_model->getSurveyWithCatId($cat_id);
        $return_json=array();
       /* $survey_list='';

        $baseUrl=base_url().'user_list_survey/us/';
        if($surveys){
            foreach ($surveys as $survey) {
                $survey_list .=$co.". <a href='$baseUrl$survey->id'>$survey->title</a><br><br>";
				$co++;

            }
            $return_json['survey_list']=$survey_list;
        }
        $sub_categories=$this->Vendor_model->getSubCategoryByCat_id($cat_id);
        if($sub_categories){

            $options="<option value='0'>All</option>";
            foreach ($sub_categories as $sub_category){
                $options .=$co.". <option value='$sub_category->sub_category_id'>$sub_category->sub_category_name</option>";
				$co++;

            }
            $return_json['options']=$options;

        }
        echo json_encode($return_json);*/
		echo json_encode($return_json);
    }
    function search_survey()
    {

		$cou=1;
        $search_with='';
        $baseUrl=base_url().'user_list_survey/us/';

        $formData = $_POST['formData'];
        foreach ($formData as $k => $v) {
            $search_arr[$v['name']] = $v['value'];
        }

        $search_with=$search_arr['search'];
        $surveys=$this->Vendor_model->survey_search($search_with);
        $survey_list='';
        if($surveys){
            foreach ($surveys as $survey) {
                $survey_list .= $cou.".  <a href='$baseUrl$survey->id'>$survey->title</a><br><br>";
				$cou++;

            }
            echo $survey_list;
        }

    }
    function setRating()
    {
        $rating = $_POST['rating'];
        $survey_id = $_POST['survey_id'];

        $this->load->model('rating_model');
        $this->rating_model->setRating($rating,$survey_id);
    }

}