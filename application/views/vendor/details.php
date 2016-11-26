

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
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'vendor/dashboard';?>">Dashboard</a>
                            </li>
							<li ">
								<i class="fa fa-arrow-circle-right"></i> <a href="<?php echo base_url().'vendor/vendors';?>">Vendor</a>
							</li>
							<!-- <li >
								<i class="fa fa-arrow-circle-right"></i> <a href="<?php // echo base_url().'vendor/view_vendor_survey'.$vendor['id'];?>"> View Vendor Survey</a>
							</li>  -->
                            <li class="active">
                                <i class="fa fa-arrow-circle-right"></i> Survey
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">

                    <div class="col-lg-8" style="background:#c9c9cf; margin: 10px 40px">

                <form id="survey_answer">
				
                    <input type="hidden" name="survey_id" value="<?php echo $survey[0]['survey_id'] ?>">
                    <div style="background:#E8E8E9; margin:20px;padding: 1px 130px 10px 10px">
					<h2>Title</h2>
					<input value="<?php echo $survey[0]['title']; ?>" class="form-control" type="text">
					</div>
					
					<div style="background:#E8E8E9; margin:20px;padding: 1px 130px 10px 10px">
					<h2>Description</h2>
					<input value="<?php echo $survey[0]['description']; ?>" class="form-control" type="text">
                    </div>
                    
                    
					<?php
					$count=1;
					//var_dump($survey);
                    foreach($survey as $surv)
                    {
						
                        if($count%2==0)echo '<div style="background:#E8E8E9; margin:20px;padding: 10px">';
                        else echo '<div style="background:#E8E8E9; margin:20px;padding: 10px">';
                        echo '<div class="row" >';
                        echo '<div class="col-lg-10" >';
						echo '<h2>Question No: '.$count.'</h2>';?>
						<input value="<?php echo $surv['question_title']; ?>" class="form-control" type="text">
						<?php
                        //echo '<h4>'.$surv['question_title'].'</h4>';
                        echo'</div>';
                        echo'</div>';
                        echo '<div class="row" style="padding: .5px  40px">';
                        if($surv['question_type']== "Radio"){ ?>
                            <?php if($surv['question_options'] != '') {
                                $RadioOptions = array();
                                $RadioOptions = explode(",", $surv['question_options']);
                                foreach ($RadioOptions as $rOptions) {
                                    ?>
                                    <label class="form-check-inline mt5px"><input type="radio" name="<?php  echo $surv['id']; ?>" value="<?php echo $rOptions; ?>" rel="" class="question_type form-check-input" id="type_" required> <?php echo $rOptions; ?></label>
                                <?php }
                            }?>
                        <?php  }elseif($surv['question_type']== "Check Box"){ ?>
                            <?php if($surv['question_options'] != '') {
                                $RadioOptions = array();
                                $RadioOptions = explode(",", $surv['question_options']);
                                foreach ($RadioOptions as $rOptions) {
                                    ?>
                                    <label class="form-check-inline mt5px"><input name="<?php  echo $surv['id']; ?>" type="checkbox" name="questionType_" value="<?php echo $rOptions; ?>" rel="" class="question_type form-check-input" id="type_" > <?php echo $rOptions; ?></label>
                                <?php }
                            }?>
                        <?php  }
                        echo '</div>';
                        echo '</div>';
                        $count++;
                    }

                    ?>
                    <!--<div class="row">
                        <div class="col-md-4" style="margin: 0 auto; ">
                            <button style="margin: 10px;widows: 0 auto" id="submit_answer_btn" class="btn btn-default">Submit Answer</button>
                        </div>
                    </div>-->
                </form>

            </div>
                    </div>

                </div>
                <!-- /.row -->


