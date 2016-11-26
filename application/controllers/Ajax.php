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
            $surveyInsertArr['category_id']=$finalArr['category'];
            $surveyInsertArr['title']=$finalArr['title'];
            $surveyInsertArr['description']=$finalArr['description'];
            $surveyInsertArr['time_added']=date('d-m-Y h:i:s A');
            $surveyInsertArr['is_active']=1;

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

    }
    function new_vendor()
    {
        $this->Admin_model->new_vendor();
    }
    function submit_answer()
    {

        $formData = $_POST['formData'];
        $answerInsertArr=array();
        $answerParentInsertArr=array();

        $answerArr = array();
        $counter = 0;
        foreach ($formData as $k => $v) {
            $answerArr[$v['name']] = $v['value'];
        }
        $answerParentInsertArr['user_id']=1;
        $answerParentInsertArr['survey_id']=$answerArr['survey_id'];
        $answerParentInsertArr['date']=date('d-m-Y');

        if($this->db->insert('answers',$answerParentInsertArr))
        {
            $answerId=$this->db->insert_id();
        }
        foreach ($answerArr as $id => $answer) {
            if(is_int($id)) {
                $answerInsertArr[$counter]['answer_id'] = $answerId;
                $answerInsertArr[$counter]['question_id'] = $id;
                $answerInsertArr[$counter]['question_answer'] = $answer;
                $this->db->insert('question_answers',$answerInsertArr[$counter]);
                $counter++;
            }

        }

        echo "<pre>";
        var_dump($answerInsertArr);
        echo "</pre>";
    }

}