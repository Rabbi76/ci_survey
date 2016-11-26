<?php
class Vendor_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function getAllVendors()
    {
        $vendors=$this->db->get('vendor')->result_array();
        return $vendors;
    }
    function getAllSurveys()
    {
        $this->db->where('vendor_id',$this->session->userdata('vendor_id'));
        $survey=$this->db->get('survey')->result_array();
        return $survey;
    }
    function getSurveyWithSurveyId($survey_id)
    {

        $this->db->join('questions','questions.survey_id = survey.id','left');
        $this->db->where('survey.id',$survey_id);
        $result=$this->db->get('survey')->result_array();
        return $result;
    }
    function surveyDetailsById($survey_id)
    {

        $this->db->where('survey.id',$survey_id);
        $result=$this->db->get('survey')->row_array();
        return $result;
    }
    function getAnswersSummeryByAnswersId($survey_id='')
    {
        if($survey_id == '')
        {
            $survey_id=13;
        }
        $this->db->select('survey.title,questions.id AS question_id,questions.question_title,questions.question_type,questions.question_options,question_answers.question_answer');
        $this->db->join('question_answers','questions.id=question_answers.question_id','left');
        $this->db->join('answers','answers.answer_id=question_answers.answer_id','left');
        $this->db->join('survey','survey.id=questions.survey_id','left');
        $this->db->where('questions.survey_id',$survey_id);
        $this->db->where("(questions.question_type = 'Radio' OR questions.question_type = 'Check Box')");
        $this->db->order_by('questions.question_type');
        //$this->db->where('answers.answer_id',2);
        $result=$this->db->get("questions")->result_array();

        $filtered=array();
        for($i=0;$i<sizeof($result);$i++)
        {
            if(!empty($filtered)) {
                if(!array_key_exists($result[$i]['question_id'],$filtered)){
                    $filtered[$result[$i]['question_id']]['question_title'] = $result[$i]['question_title'];
                    $filtered[$result[$i]['question_id']]['question_type'] = $result[$i]['question_type'];
                    $filtered[$result[$i]['question_id']]['question_options'] = $result[$i]['question_options'];
                    $filtered[$result[$i]['question_id']]['answers'][] = $result[$i]['question_answer'];
                }else{
                    $filtered[$result[$i]['question_id']]['answers'][] = $result[$i]['question_answer'];
                }
            }else{
                $filtered[$result[$i]['question_id']]['question_title'] = $result[$i]['question_title'];
                $filtered[$result[$i]['question_id']]['question_type'] = $result[$i]['question_type'];
                $filtered[$result[$i]['question_id']]['question_options'] = $result[$i]['question_options'];
                $filtered[$result[$i]['question_id']]['answers'][] = $result[$i]['question_answer'];
            }
        }


        $all_options=array();
        foreach($filtered as $k=>$v)
        {
            $options=explode(",",$v["question_options"]);

            for($i=0;$i<sizeof($options);$i++){

                $all_options[$k][$options[$i]] = 0;

            }


            foreach($v['answers']as $v)
            {
                foreach($all_options[$k] as $kk=>$vv)
                {
                    if($kk == $v)
                    {
                        $all_options[$k][$kk]=$vv+1;
                    }
                }

            }


        }
        foreach($filtered as $k=>$v)
        {
            foreach($all_options as $kk => $vv)
            {
                if($k == $kk)
                {
                    $filtered[$k]['result']=$all_options[$kk];
                }
            }
        }
        return $filtered;


    }
    function getAllCategory()
    {
        if($categories=$this->db->get('category')->result_array())
        {
            return $categories;
        }else return false;
    }
}