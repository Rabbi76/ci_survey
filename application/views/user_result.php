

<div id="page-wrapper">

    <div class="container-fluid" style="min-height: 650px;">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Survey Result <small>(By User)</small>
                </h1>
				<ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'Survey_list';?>">List of Survey</a>
                    </li>
					<li >
						<i class="fa fa-arrow-circle-right"></i><a href="<?php echo base_url().'user_list_survey/us/'.$survey[0]['id'];?>">User List</a>
					</li>
                    <li class="active">
                        <i class="fa fa-arrow-circle-right"></i> View Answer
                    </li>
                </ol>
                
            </div>
        </div>
        <!-- /.row -->
		<?php
			//echo "<pre>";
            //var_dump($survey[0]['id']);
           // echo "</pre>";
		?>
		
        <div class="row">

            <div class="col-lg-8" style="background:#c9c9cf; margin: 10px 40px">

                <form id="survey_answer">
				
                    <input type="hidden" name="survey_id" value="<?php echo $survey[0]['survey_id'] ?>">
                    <?php
                    echo'<h2 style="margin: 20px">'.$survey[0]['title'].'</h2>';
                    echo '<div style="background:#c2c2d6; margin:20px;padding:1px">';
                    echo'<h5 style="margin: 20px">Description: '.$survey[0]['description'].'</h5>';
                    echo '</div>';
                    
                  //  var_dump($survey);
					$count=1;
                    foreach($survey as $surv)
                    {
						//echo $surv['question_id'];
						
                        echo '<div style="background:#E8E8E9; margin:20px;padding: 10px">';
						echo '<div class="row">';
                        echo '<div class="col-lg-10">';
						
                        echo  '<h4>'.$count.'. '.$surv['question_title'].'<small> ('.$surv['question_type'].') </small></h4>';
                        echo'</div>';
                        echo'</div>';
						
						foreach($answer as $as)
						{	
							echo '<div class="row" style="padding: .5px  40px">';
							if($surv['question_id']==$as['question_id'])
							{
								echo '<input class="form-control" type="text" value="'.$as['question_answer'].'">';
							}
							echo'</div>';
						}
						
                        
                        echo'</div>';
						$count++;
					}
						
                        

                    ?>
 

            </div>

        </div>
        <script type="text/javascript" src="<?php echo base_url().'js/jquery.rateyo.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'js/rating.js'; ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url().'css/jquery.rateyo.min.css'; ?>"/>
        <!-- /.row -->


