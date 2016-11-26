<?php
class user_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function getAllUser()
    {
        $user=$this->db->get('user')->result_array();
        return $user;
    }
    function getAllActiveSurveys()
    {
        $this->db->where('is_active','1');
		$this->db->order_by('id desc');
        $survey=$this->db->get('survey')->result_array();
        return $survey;
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
	function getUserSurveys($user_id)
    {
		//$this->db->join('answers','answers.user_id=user.id','left');
		$this->db->join('survey','survey.id=answers.survey_id','left');
        $this->db->where('user_id',$user_id);
        $venSer=$this->db->get('answers')->result_array();
        return $venSer;
    }
	function getUserDetalis()
    {
        $this->db->where('email',$this->session->userdata('email'));
        $user=$this->db->get('user')->result_array();
        return $user;
    }
	function givenSurvey()
    {
		//$this->db->join('question_answers','question_answers.answer_id=answers.answer_id','left');
		$this->db->join('answers','answers.user_id=user.id','left');
		$this->db->join('survey','survey.id=answers.survey_id','left');
        $this->db->where('email',$this->session->userdata('email'));
		$this->db->group_by('answers.survey_id');
		$this->db->order_by('survey.id desc');
        $result=$this->db->get('user')->result_array();
        return $result;
    }
	function givenAnswer($survey_id)
    {
		$this->db->where('email',$this->session->userdata('email'));
        $user=$this->db->get('user')->result_array();
        $user_id=$user[0]['id'];
		
		$this->db->join('question_answers','question_answers.answer_id=answers.answer_id','left');
		$this->db->where('answers.survey_id',$survey_id);
		$this->db->where('answers.user_id',$user_id);
		$result=$this->db->get('answers')->result_array();
        return $result;
    }
	function getMessage()
    {
		$this->db->where('email',$this->session->userdata('email'));
        $user=$this->db->get('user')->result_array();
        $user_id=$user[0]['id'];
		
		//$this->db->join('reply','reply.mess_id=message.id','left');
		$this->db->where('message.user_id',$user_id);
		$this->db->order_by('message.id desc');
		$result=$this->db->get('message')->result_array();
        return $result;
    }
	function getReply()
    {
		
		$result=$this->db->get('reply')->result_array();
        return $result;
    }
    function getAnswersSummeryByAnswersId($survey_id)
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
    function update_user()
    {

        $pass='';
        $name='';
        $id=$this->input->post('id');
        if(isset($_POST['pass'])){
            $pass = sha1($this->input->post('pass'));
        }
        $name=$this->input->post('name');


        $updateArr=array();
        if($pass != '') {
            $updateArr['password'] = $pass;
        }
        if($name != '') {
            $updateArr['name'] = $name;
        }

        $this->db->where('id',$id);
        if($this->db->update('user',$updateArr)){
            echo "Your Account Details Updated";
        }else{
            echo "Failed to Update";
        }
    }
	function message()
	{
		$this->db->where('email',$this->session->userdata('email'));
        $user=$this->db->get('user')->result_array();
		
		$user_name= $user[0]['name'];
        $user_id= $user[0]['id'];
		$user_type= 'User';
        $subject= $_POST['subject'];
        $message= $_POST['message'];

        $messageArray= array();

        $messageArray['user_name'] = $user_name;
        $messageArray['user_id']= $user_id;
        $messageArray['user_type'] = $user_type;
        $messageArray['subject'] = $subject;
        $messageArray['message']= $message;
		
		if($this->db->insert('message',$messageArray)){
			echo "<script type='text/javascript'>alert('Message successfully submitted to the admin! For reply check your messages. Thanks')</script>";
        }else{
            echo "<script type='text/javascript'>alert('failed!')</script>";
        }
	}
	function reply()
	{
		$this->db->where('email',$this->session->userdata('email'));
        $user=$this->db->get('user')->result_array();
		
		$mess_id=$_POST['mess_id'];
		$replyMess=$_POST['replyto'];
		$replyArray= array();

        $replyArray['mess_id'] = $mess_id;
		$replyArray['replyBy'] = $user[0]['name'];
		$replyArray['reply'] = $replyMess;
		
		if($this->db->insert('reply',$replyArray)){
			//echo "<script type='text/javascript'>alert('Message successfully submitted to the admin! For reply check your messages. Thanks')</script>";
        }else{
            echo "<script type='text/javascript'>alert('failed!')</script>";
        }
		
	}
}