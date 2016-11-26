

<div id="page-wrapper">

    <div class="container-fluid" style="min-height: 650px;">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Survey
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'user/dashboard';?>">Home</a>
                    </li>
					<li>
                        <i class="fa fa-arrow-circle-right"></i>  <a href="<?php echo base_url().'user/given_survey_list';?>">Given Survey List</a>
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
            //var_dump($answer);
           // echo "</pre>";
		?>
		
        <div class="row">

            <div class="col-lg-8" style="background:#c9c9cf; margin: 10px 40px">

                <form id="survey_answer">
				
                    <input type="hidden" name="survey_id" value="<?php echo $survey[0]['survey_id'] ?>">
                    <?php
                    echo'<h2 style="margin: 20px">'.$survey[0]['title'].'</h2>';
                    echo '<div style="background:#c3c2d6; margin:20px;padding:1px">';
                    echo'<h5 style="margin: 20px"><b>Description:</b> '.$survey[0]['description'].'</h5>';
                    echo '</div>';
                    $count=0;
                  //  var_dump($survey);
					$co=1;
                    foreach($survey as $surv)
                    {
						//echo $surv['question_id'];

                        echo '<div style="background:#91ABC9; margin:20px;padding: 10px">';
						echo '<div class="row">';
                        echo '<div class="col-lg-10">';
                        echo '<h4>'.$co.'. '.$surv['question_title'].'</h4>';
                        echo'</div>';
                        echo'</div>';
						echo '<div class="row" style="padding: .5px  40px">';
						foreach($answer as $as)
						{	
							if($surv['question_id']==$as['question_id'])
							{
								echo '<input class="form-control" type="text" value="'.$as['question_answer'].'" disabled>';
							}
						}
						
                        echo'</div>';
                        echo'</div>';
						$co++;
					}
						
                        

                    ?>
 

            </div>

        </div>
        <script type="text/javascript" src="<?php echo base_url().'js/jquery.rateyo.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'js/rating.js'; ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url().'css/jquery.rateyo.min.css'; ?>"/>
        <!-- /.row -->


