<?php

/**
 * Created by PhpStorm.
 * User: hamiduzzaman
 * Date: 11/17/16
 * Time: 2:46 AM
 */
class rating_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->database();
    }
    function setRating($rate,$survey_id)
    {
        $insert_arr=array();
        $insert_arr['survey_id']=$survey_id;
        $insert_arr['rating_number']=$rate;
        $insert_arr['account_id']=$this->session->userdata('id');
        $this->db->insert('rating',$insert_arr);
    }

    function getAllRatings(){
        $FilteredRatings='';
        $query= "SELECT survey_id,CEILING(AVG(rating_number)) AS 'Rating' FROM rating GROUP BY survey_id";
        if($ratings=$this->db->query($query)->result()){
            foreach ($ratings as $rating){
                if($FilteredRatings != '') {
                    $FilteredRatings = $FilteredRatings . ',' . $rating->survey_id . "_" . $rating->Rating;
                }else{
                    $FilteredRatings = $rating->survey_id . "_" . $rating->Rating;
                }
            }
            /*$allRatings='';
            for($i=0;$i<sizeof($FilteredRatings);$i++) {
                $allRatings = $FilteredRatings[$i];
            }*/
            return $FilteredRatings;

        }else return false;

    }
	function getRatingsByUserId(){
		$this->load->library('session');
		$account_id=$this->session->userdata('id');
        $FilteredRatings='';
        $query= "SELECT survey_id,rating_number AS 'Rating' FROM rating where account_id=$account_id";
        if($ratings=$this->db->query($query)->result()){
            foreach ($ratings as $rating){
                if($FilteredRatings != '') {
                    $FilteredRatings = $FilteredRatings . ',' . $rating->survey_id . "_" . $rating->Rating;
                }else{
                    $FilteredRatings = $rating->survey_id . "_" . $rating->Rating;
                }
            }
            /*$allRatings='';
            for($i=0;$i<sizeof($FilteredRatings);$i++) {
                $allRatings = $FilteredRatings[$i];
            }*/
            return $FilteredRatings;

        }else return false;

    }

}